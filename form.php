<?php
$name = $_POST['name'];
$guestemail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@7tin.com';
$email_subject = 'New form Submission';
$email_body = "User Name: $name./n".
                "User email: $guestemail./n".
                "Subject: $subject./n".
                "User Message: $message";  
$to = 'craftske@gmail.com';
$header = "From: $email_from /r/n";

$header .="Reply-To: $guestemail /r/n";

mail($to, $email_subject,$email_body,$headers);
header("Location: contact.html");



?>