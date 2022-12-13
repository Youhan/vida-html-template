<?php
error_reporting(E_ERROR | E_PARSE); // hide all basic notices from PHP

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$comments = trim($_POST['message']);



$emailTo = 'owwwlab@gmail.com';
$subject = 'Submitted message from '.$name;
$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments: $comments";
$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

$mailed = mail($emailTo, $subject, $body, $headers);

if($mailed==true){
   echo json_encode(array('status' => 'ok')); 
}else{
   echo json_encode(array('status' => 'error')); 
}


?>
