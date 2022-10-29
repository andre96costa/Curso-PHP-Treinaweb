<?php

require_once '../autoload/autoload-psr4.php';

// require_once "../src/classes/Cliente.php";
// require_once "../src/email/Envio.php";
// require_once "../src/email/Transporte.php";
// require_once "../src/email/Adaptadores/Mailgun/Adaptador.php";


$email = new App\Email\Envio();
$email->enviar();


var_dump($email);