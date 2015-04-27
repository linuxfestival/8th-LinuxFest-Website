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
//Data sources
//--------------------------------------------------

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
    $valid_inputs = 'name|email|tel|inst|aut|std|day1|day2';

    foreach (get_presentations() as $key => $data)
        $valid_inputs .= "|p_$key";

    $form_data = getInputsWithKey($valid_inputs);

    //Presentations
    foreach ($form_data as $key => &$val)
        if (strpos($key, '_p') === 0)
            $val = 'X';

    //----Pricing

    //Count days
    $days = 0;
    for ($i = 1; $i <= 2; $i++)
        if ($form_data["day$i"] != 'no')
            $days++;
    $price = $days * 35000;
    if ($days > 1)
        $price -= 10;

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

    $form_data['price'] = $price;


    $form_data['tel'] = intval($form_data['tel']);

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
        با تشکر ثبت نام آنلاین شما با موفقیت ثبت شد و مورد بررسی قرار خواهد گرفت.
        <br>
        لطفا در اسرع وقت با مراجعه به دفتر انجمن علمی دانشکده هزینه ی مربوط به دوره هایی که در آنها شرکت می کنید تا پرداخت نمایید

        <br>
هزینه ی شرکت در دوره :
<b>$price</b>
هزار تومان
<br>
    ";

    return $msg;

}
