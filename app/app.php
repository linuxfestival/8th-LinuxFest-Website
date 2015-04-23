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
//Register form controller
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
    $form_data = getInputsWithKey('name|email|tel|inst|aut|std|day1|day2');

    if (isset($form_data['aut']))
        $form_data['aut'] = strlen($form_data['aut']) > 0 ? 'X' : '';
    if (isset($form_data['std']))
        $form_data['std'] = strlen($form_data['std']) > 0 ? 'X' : '';
    $form_data['tel'] = intval($form_data['tel']);

    $form_data['price'] = 40000;//TODO

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

}
