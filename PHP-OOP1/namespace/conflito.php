<?php

require_once "../src/email/Envio.php";
require_once "../src/sms/Envio.php";

$email = new App\Email\Envio;

echo App\Email\VERSAO;

App\Email\validar("andre@andre.com");


$sms = new App\SMS\Envio();
