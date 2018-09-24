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
$workflow_sid = getenv("TWILIO_ACME_WORKFLOW_SID");

echo 'printing tokens';
echo $account_sid;
echo $auth_token;
echo $workflow_sid;

$client = new Client($sid, $token);

$participant = $client->conferences($_REQUEST['conference'])
                      ->participants($_REQUEST['participant'])
                      ->update(array(
                                   "hold" => True
                               )

                      );

 $task = $twilio->taskrouter->v1->workspaces($workspace_sid)
                               ->tasks
                               ->create(array(
                                            'attributes' => "{\"selected_product\":\"manager\",\"conference\":\"".$_REQUEST['conference']."\",\"customer\":\"".$_REQUEST['participant']."\", \"customer_taskSid\":\"".$_REQUEST['taskSid']."\"}",
                                            'workflowSid' => $workflow_sid
                                        )
                               );

                                             
$response = new  Twiml();

echo $response;
?>
