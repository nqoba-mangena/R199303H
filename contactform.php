<?php

if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}


$name = $_POST['userName'];
$visitor_email = $_POST['userEmail'];
$message = $_POST['content'];

							//Validate first

if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'nqobangena@gmail.com'; 
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "email address: $visitor_email\n".
    "Here is the message:\n $message".
    
$to = "nqobangena@gmail.com"; 
$headers = "From: $email_from \r\n";

					//Send the email!

mail($to,$email_subject,$email_body,$headers);

				//done. redirect to thank-you page.

header('Location: index.html');
  
?> 
