<?php
header('Content-type: application/xml');

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;
use Twilio\Twiml;


$response = new  Twiml();

$gather = $response->gather([numDigits=>'1', action=>'enqueue_call.php']);
	$gather->say('Please select from the following departments');
	$gather->say('For sales press one, for support press two, for marketing press three');

echo $response;

// $account_sid = .$_ENV["TWILIO_ACME_ACCOUNT_SID"];
// $auth_token = 'TWILIO_ACME_AUTH_TOKEN';

// $client = Client($account_sid, $auth_token);

// $client.


switch ($request_uri[0]) {
    // Home page
    case '/':
        require '../views/home.php';
        break;
    // About page
    case '/incoming_call':
        require '../views/about.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/404.php';
        break;
}

?>