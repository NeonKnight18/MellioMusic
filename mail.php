<?php
//this is form the contact me form to send an email

//data from html form

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "melliomusic@outlook.com";
$subject = "Website Work Request";
$txt = "Name = " . $name . "/r/n Email = " . $email . "/r/n Message =" . $message;
$header = "From: melliomusic@outlook.com" . "/r/n";

if($email!=NULL){
    mail($to,$subject,$txt,$header);

}
//redirect

header("Location: thankyou.html");

?>