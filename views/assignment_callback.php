<?php

$callerID= "";// a verified phone number from your twilio account
$activity=""; //activity to set the worker to

$assignment_instruction = [
  'instruction' => 'dequeue',
  'post_work_activity_sid' => ''.$activity.'', 
  'from' => ''.$callerID.''  
];

header('Content-Type: application/json');
echo json_encode($assignment_instruction);

?>