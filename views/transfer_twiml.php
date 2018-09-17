<?php>

header('Content-type: application/xml');

require 'vendor/autoload.php';
use Twilio\Twiml;

$response = new  Twiml();
$dial = $response->dial();

$conference = $_REQUEST['conference'];

$dial->conference($conference);

echo $response;