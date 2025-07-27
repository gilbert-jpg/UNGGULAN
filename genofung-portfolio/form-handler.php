<?php
$nama = $_POST['nama'];
$visitor_email = $_POST['email'];
$komen = $_POST['komen'];
$message = $_POST['message'];

$email_from = 'info@GENOFUNG.com';

$email_subject = ' New Form Submission';


$email_body = " User Name: $name.\n".
               " User Email: $visitor_email.\n".
               " Subject: $subject.\n".
                " User Message: $message.\n";

$to = 'unggulansmansasi@gmail.com';
$headers = "From: $email_from" \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("location: contact.html");

?>