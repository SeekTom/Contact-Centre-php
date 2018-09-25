<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require 'views/index.html';
        break;
    // About page
    case '/incoming_call':
        require 'views/incoming_call.php';
        break;
    case '/enqueue_call':
        require 'views/enqueue_call.php';
        break;
    case '/callTransfer':
        require 'views/call_transfer.php';
        break;
    case '/transferTwiml':
        require 'views/transfer_twiml.php';
        break;
    case '/callmute':
        require 'views/call_mute.php';
        break;
    case '/callmute':
        require 'views/call_mute.php';
        break;
    case '/agents':
        require 'views/agent_desktop.php';
        break;
    case '/agent_list':
        require 'views/agent_list.php';
        break;
    case '/assignment_callback':
        require '../views/assigment_callback.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/404.php';
        break;
}