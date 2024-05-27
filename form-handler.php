<?php
$name =  $_POST['name'];
$visitor_email =  $_POST['email'];
$subject =  $_POST['subject'];
$message =  $_POST['Message'];

$email_from = 'ohapby@gmail.com';

$email_subject = 'New Form Submisssion';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'yhlascary04@gmail.com' ;

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>