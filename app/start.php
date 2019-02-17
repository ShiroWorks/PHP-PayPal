<?php


require 'vendor/autoload.php';

define('SITE_URL','http://localhost:8888');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'insert your client id','insert your secret'
    )
    );