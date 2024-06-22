<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "New Sign Up | Hooray!";
$password = $_POST['password'];
$repassword = $_POST['repassword'];


$message = "Name: " . $name . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Password: " . $password . "\n";
$message .= "Re-entered Password: " . $repassword . "\n";



$mailheader = "From:".$name."<".$email.">\r\n";


$recipient = "heliaatarod@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo "Thank You! Your message has been sent. We will get back to you shortly.";

header("Location: /php/SignUpMail.php");
exit();
