<?php
 $email = $_POST['email'];
$content = nl2br($_POST['content']);
$name = $_POST['name'];
$sender = $_POST['sender'];
$subject = $_POST['subject'];
$headers = "From: $name "."<".$sender.">\r\n";
//add boundary string and mime type specification
//$headers .= 'MIME-Version: 1.0' . "\r\n";
 //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//send the email
mail($email, $subject, $content, $headers );
 ?>
<html>
<head>
<meta http-equiv="refresh" content="3; url=/index.html" />
</head>
<center>
<h1>Message sent! Redirecting you back to the form now!</h1>
