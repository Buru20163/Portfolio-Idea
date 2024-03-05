<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "alexburuiana21212@gmail.com";

$email_subjec = "New Form Submission";

$email_body = "User Name: $name.\n"<div class="">.
              "User Email: $visitor_email.\n".
              "User Message: $message.\n"; 

$to = "alexburuiana21@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $visitor_email r\n";

mail($to,$email_subjec,$email_body,$headers);

header("Location: contact.html")

