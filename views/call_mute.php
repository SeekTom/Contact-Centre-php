<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require 'vendor/autoload.php';

use Twilio\Twiml;
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/console
$account_sid = getenv("TWILIO_ACME_ACCOUNT_SID");
$auth_token = getenv('TWILIO_ACME_AUTH_TOKEN');

$workspace_sid = getenv("TWILIO_ACME_WORKSPACE_SID");
$workflow_sid = getenv("TWILIO_ACME_MANAGER_WORKFLOW_SID");


$client = new Client($account_sid, $auth_token);

$participant = $client->conferences($_REQUEST['conference'])
                      ->participants($_REQUEST['participant'])
                      ->update(array(
                                   "hold" => False
                               )

                      );

$response = new  Twiml();

echo $response;
?>