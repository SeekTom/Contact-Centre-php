
<?php

//header('Content-type: application/xml');

require 'vendor/autoload.php';

use Twilio\Rest\Client;
use Twilio\Twiml;
use Twilio\Jwt\TaskRouter\WorkerCapability;
use Twilio\Jwt\ClientToken;

 $account_sid = getenv("TWILIO_ACME_ACCOUNT_SID");
 $auth_token = getenv('TWILIO_ACME_AUTH_TOKEN');

 $client = new Client($account_sid, $auth_token);


$workspace_sid = getenv("TWILIO_ACME_WORKSPACE_SID");

$voice_workers = $client->taskrouter->v1->workspaces($workspace_sid)
                                  ->workers
                                  ->read(array(
                                             'targetWorkersExpression' => "worker.channel.voice.configured_capacity > 0"
                                         )
                                  );

$activities = $client->taskrouter->v1->workspaces($workspace_sid)
                                     ->activities
                                     ->read();
$activity = [];

 foreach ($activities as $record) {

     $activity[$record->friendlyName] = $record->sid;
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
   <link type="text/css"  rel="stylesheet" href="//media.twiliocdn.com/taskrouter/quickstart/agent.css"/>

</head>
<body>
<div id="workers">
    <h2>A selection of voice workers</h2>
    <?php
    foreach ($voice_workers as $voice_worker)
    {
      echo "<a href=\"agents?WorkerSid=" .$voice_worker->sid . "\">" .$voice_worker->friendlyName . "</a> -" .$voice_worker->activityName ."<br />";
     
    }
   ?>
</div>
<div style="padding-top:1.5em">
    <a href="/">Back to Main Page</a>
</div>
</body>
</html>
