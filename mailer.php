<?php
// the message
// Report all errors
error_reporting(E_ALL);

$email_id  = $_REQUEST['email'];
$msg = $email_id;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,700);

// send email
if(mail("help.betamurungai@gmail.com","New Subscription mail ",$msg))
	header( 'Location: /index.html' ) ;
else
	echo "Arre";
?>