<?php

require_once "../src/email/Adaptadores/Mailgun/Adaptador.php";

$mailgun = new App\Email\Adaptadores\Mailgun\Adaptador();

var_dump($mailgun);