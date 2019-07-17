<?php
// the message
// Report all errors
error_reporting(E_ALL);

$email_id  = $_REQUEST['email'];
$msg = $email_id;
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "ayushmpanara@gmail.com");

$message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = ayushmpanara@address.com";

$headers = "From: ayushmpanara@gmail.com";

mail("help.betamurungai@gmail.com", "Testing", $message, $headers);
echo "Check your email now....&lt;BR/>";

?>