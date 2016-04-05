<?php
namespace app;

use Exception;
use SoapClient;

class SMS_API
{

    /**
     * @param $to
     * @param $textMessage
     * @return int
     */
    static function send($to, $textMessage)
    {

        try {
            ini_set("soap.wsdl_cache_enabled", "0");
        } catch (Exception $ex) {

        }

        try {

            $client = new SoapClient(SMS_URL);
            $encoding = "UTF-8";//CP1256, CP1252
            $textMessage = iconv($encoding, 'UTF-8//TRANSLIT', $textMessage);

            $sendsms_parameters = array(
                'username' => SMS_username,
                'password' => SMS_password,
                'from' => SMS_from,
                'to' => array($to),
                'text' => $textMessage,
                'isflash' => false,
                'udh' => '',
                'recId' => array(0),
                'status' => 0
            );

            $status = $client->SendSms($sendsms_parameters)->SendSmsResult;

            return $status;

        } catch (SoapFault $ex) {
            return -1;
        }

    }

}