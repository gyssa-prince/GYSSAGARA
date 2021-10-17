<?php
include_once "connections.php";

$to_email = $email;
$subject = "AWESOME TASKFORCE 4.0";
$body = "Hi, You have joined us";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    header('location:php/Edetails.php');
} else {
    header('location:php/Edetails.php');
	}
	?>