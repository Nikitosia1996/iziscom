<?php

require_once 'vendor/autoload.php';
use Twilio\Rest\Client;

$phone = $_POST['phone'];

$sid    = "";
$token  = "";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create($phone, // to
        array(
            "from" => "+16562235400",
            "body" => "Ваш код подтверждения личности"
        )
    );

print($message->sid);