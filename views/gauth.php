<?php

if(file_exists(GAPI_TOKEN_LOCATION)) {
    echo 'Already authenticated';
    exit;
}

$client = new Google_Client();

$client->setClientId(GAPI_CLIENT_ID);
$client->setClientSecret(GAPI_CLIENT_SECRET);
$client->setRedirectUri(GAPI_AUTH_REDIRECT_URL);
$client->setAccessType('offline');
$client->setApprovalPrompt('auto');

$client->setScopes(array('https://spreadsheets.google.com/feeds'));

if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);

    file_put_contents(GAPI_TOKEN_LOCATION,"<?php define('gapi_token','".
        $client->getAccessToken()."');");

    echo 'Setup done !';

    exit;
}

print '<a href="' . $client->createAuthUrl() . '">Authenticate</a>';