<?php>

header('Content-type: application/xml');

require 'vendor/autoload.php';
use Twilio\Twiml;
$WorkflowSid ="";

$department = [
1 => "sales",
2 => "support",
3 => "marketing"
];

$response = new  Twiml();

$choice = $_REQUEST['Digits'];

$enqueue = $response->enqueue([workflowSid=>$WorkflowSid]);
	$enqueue->task('{"selected_product":"'.$department[$choice].'"}');

echo $response;
