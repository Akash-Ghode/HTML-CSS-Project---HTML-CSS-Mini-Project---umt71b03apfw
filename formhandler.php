<?php

$name = $-POST['name'];

$visitor_email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$email_from='anmolgratis@gmail.com';

$email_subject='New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Email: $subject.\n".
                "User Email: $message.\n";
                
$to = 'akashghode9876@gmail.com';

$header = "From $email_from \r\n";

$header = "Reply-To $visitor_email \r\n";

email($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
