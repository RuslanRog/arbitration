<?php

// For beautiful dump();
// require __DIR__.'/vendor/autoload.php'; 


// Getting data from a form.
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

// Getting the real IP of the user.
$ip = $_SERVER['REMOTE_ADDR'];

// Getting the domain from which the request was made.
$landingUrl = $_SERVER['HTTP_HOST'];


// There we will sentd data to API server.
require_once 'lead_sender.php';

// Go to main
header("Location: http://arbitration.loc", true, 301);


?>