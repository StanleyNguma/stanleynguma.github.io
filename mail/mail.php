<?php

$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];

$to      = 'stanley.nguma@riverbank.co.ke';
$subject = 'Email from Stan.co.ke';
$message = 'hello';
$headers = 'From: '.$email . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

var_dump(mail($to, $subject, $message, $headers));
