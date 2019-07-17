<?php
// the message
$email_id  = $REQUEST['email'];
$msg = $email_id;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("help.betamurungai@gmail.com","New Subscription mail ",$msg);
?>