<?php

//--------------------------------------------------
//Data sources
//--------------------------------------------------

function get_reg_data()
{
    require_once 'db/register_form.php';
    global $register_form;
    return $register_form;
}

function get_presenters()
{
    echo "HIIIII";
    require_once 'db/presenters.php';
    global $presenters;
    return $presenters;
}


function get_session($name)
{
    require_once 'db/sessions.php';
    global $workshops, $presentations;
    if (isset($workshops[$name]))
        return $workshops[$name];
    else if (isset($presentations[$name]))
        return $presentations[$name];
    else
        return null;

}

function get_presentations()
{
    require_once 'db/sessions.php';
    global $presentations;
    return $presentations;
}

function get_workshops()
{
    require_once 'db/sessions.php';
    global $workshops;
    return $workshops;
}

//--------------------------------------------------
//
//--------------------------------------------------

use app\SMS_API;
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use ReCaptcha\ReCaptcha;


function submit_reg_form()
{

    //ReCaptcha
    $recaptcha = new ReCaptcha(RECAPTCHA_SECRET);
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    if (!$resp->isSuccess()) {
        throw new Exception('Invalid captcha!');
    }


    //Get & Process form data
    $valid_inputs = 'name|email|tel|inst|std|day1|day2';

    foreach (get_presentations() as $key => $data)
        $valid_inputs .= "|$key";

    $form_data = getInputsWithKey($valid_inputs);

    //----Pricing

    //Count days
    $days = 0;
    for ($i = 1; $i <= 2; $i++)
        if ($form_data["day$i"] != 'no')
            $days++;
    $price = $days * 35;
//    if ($days > 1)
//        $price -= 10;

    //Discount
    $discount_rate = 0;
    if (isset($form_data['std']))
        switch ($form_data['std']) {
            case 'aut':
                $discount_rate = 0.6;
                break;
            case 'std':
                $discount_rate = 0.25;
                break;
        }
    $price *= (1.0 - $discount_rate);

    $price = round($price);

    $form_data['price'] = $price;

    //Tel

    $form_data['tel'] = intval($form_data['tel']);

    //Generate tracking code
    $hashids = new Hashids\Hashids(HASHID_SALT);
    $tracking_code = $hashids->encode(time().rand(0,100));
    $form_data['code']=$tracking_code;

    //Check Google Client Expired
    $token = json_decode(gapi_token, true);
    $client = new Google_Client();
    $client->setClientId(GAPI_CLIENT_ID);
    $client->setClientSecret(GAPI_CLIENT_SECRET);
    $client->setAccessToken(gapi_token);
    if ($client->isAccessTokenExpired()) {
        //Refresh on expire
        $client->refreshToken($client->getRefreshToken());
        foreach (json_decode($client->getAccessToken(), true) as $k => $v) {
            $token[$k] = $v;
        }
        file_put_contents(GAPI_TOKEN_LOCATION, "<?php define('gapi_token','" .
            json_encode($token) . "');");
    }


    //Get Registration sheet
    $serviceRequest = new DefaultServiceRequest($token['access_token']);
    ServiceRequestFactory::setInstance($serviceRequest);
    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
    $sheet = $spreadsheetService
        ->getSpreadsheets()
        ->getByTitle('linuxfest_2015')
        ->getWorksheets()
        ->getByTitle('List');

    //Insert Submitted data
    $sheet->getListFeed()->insert($form_data);

    //Message
    $msg = "
<div dir='rtl'>

       با تشکر، ثبت نام آنلاین شما با موفقیت انجام شد و مورد بررسی قرار خواهد گرفت.
        <br>
        هزینه ی ثبت نام شما : <b>$price</b> هزار تومان
                <br>
        کد رهگیری شما : <b>$tracking_code</b>
        (این کد را برای مراحل بعدی حتما نگهدارید)<br>
        <br>
                لطفا در اسرع وقت با مراجعه‌ی حضوری به دفتر انجمن علمی دانشکده هزینه‌ی دوره‌هایی را که در آن‌ها ثبت نام کرده‌اید پرداخت نمایید. در صورتی که مراجعه‌ی حضوری برایتان مقدور نیست هزینه‌ی ثبت نام را به کارت 5022291100266525 (بانک پاسارگاد به نام آرمین باشی‌زاده) واریز نمایید و کد رهگیری و شماره کارت خود را به آدرس hello@linuxfest.ir ارسال کنید. به دلیل محدود بودن ظرفیت کارگاه‌ها، اولویت با کسانی است که زودتر ثبت نام خود را نهایی کنند.
<br>
تهران، چهارراه ولی عصر، روبه‌روی خیابان بزرگمهر، دانشگاه صنعتی امیرکبیر ، دانشکده مهندسی کامپیوتر و فناوری اطلاعات ، دفتر انجمن علمی
	<br>
     در صورت تمایل به ایجاد هرگونه تغییر در وضعیت ثبت نام خود از ثبت نام مجدد <b> جدا خودداری فرمایید</b>. در غیر این صورت ثبت نام شما تایید نخواهد شد.<br>
      می‌توانید این تغییرات را از دو طریق ایمیل جشنواره hello@linuxfest.ir یا مراجعه‌ی حضوری اعلام فرمایید.

</div>
    ";

    $msg_2 = "جشنواره لینوکس امیرکبیر
    هزینه ی ثبت نام : $price هزار تومان
    کد رهگیری شما : $tracking_code
    جهت ثبت نام نهایی در اسرع وقت به دفتر انجمن علمی دانشکده مراجعه فرمایید
    ";

    //Email
    if (isset($form_data['email']))
        sendmail($form_data['email'], $msg);


    //SMS

    if (isset($form_data['tel']))
        sendsms($form_data['tel'], $msg_2);

    return $msg;

}

function sendmail($to, $body)
{

    try {
        mail($to, 'هفتمین جشنواره‌ی لینوکس امیرکبیر', $body,
            'From: hello@linuxfest.ir' . "\r\n" .
            'Reply-To: hello@linuxfest.ir' . "\r\n" .
            'X-Mailer: PHP/' . phpversion() .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=UTF-8' . "\r\n"
        );
    } catch (Exception $e) {

    }
}

function sendsms($to, $body)
{
    return SMS_API::send($to,$body);
}
