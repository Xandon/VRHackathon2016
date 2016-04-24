<?php
require_once('Services/Twilio.php');

$sid = ""; // Your Account SID from www.twilio.com/user/account
$token = ""; // Your Auth Token from www.twilio.com/user/account

$from 	= '+12061230000';
$to	= '+14251230000';

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create($from, $to, 'https://vr.snorting.co.ke/mom_response.php');
$message = $client->account->messages->sendMessage($from, $to, 'Carmen needs to poop!  Come down with the portable toilet!');

print $message->sid;
?>
