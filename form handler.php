<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@yourwebsite.com';

$email_subjeect = 'Contact Form';

$email_body = "User Name: $name.\n"
              "User Email: $visitor_email.\n"
              "Subject: $subject.\n"
              "User Messagge: $message.\n";

$to = 'ashiqmuhd0786@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$email_headerd);

header("Location: contact.html");

?>