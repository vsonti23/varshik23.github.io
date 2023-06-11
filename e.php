<?php
$to = 'varshiksonti@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email sent from PHP.';
$headers = 'From: varshiksonti@gmail.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Error sending email.';
}
?>