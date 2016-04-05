<?php
define('MYSQL_DBNAME','');
define('MYSQL_USERNAME','');
define('MYSQL_PASSWORD','');

define('GAPI_TOKEN_LOCATION',APP_DIR . DS . 'gapi_token.php');
define('GAPI_CLIENT_ID','');
define('GAPI_CLIENT_SECRET','');
define('GAPI_AUTH_REDIRECT_URL','http://linuxfest.ir/gauth/');

define('SMS_URL','');
define('SMS_from','');
define('SMS_username','');
define('SMS_password','');
define('HASHID_SALT','');



if(file_exists(GAPI_TOKEN_LOCATION))
    require_once(GAPI_TOKEN_LOCATION);

define('RECAPTCHA_SECRET','');


define('BASE_URI','/');//MUST END with a trailing SLASH