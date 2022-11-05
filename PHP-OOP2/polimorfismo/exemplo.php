<?php

use App\Email\AdaptadoresNovos\Mailgun\Adaptador;
use App\Email\AdaptadoresNovos\SES\Adaptador as SESAdaptador;
use App\Email\EnviarEmail;

require_once "../autoload/autoload-psr4.php";


$mailgun = new Adaptador;
$ses = new SESAdaptador;


$email = new EnviarEmail;
$email->enviar($mailgun);
echo "<br>";
$email->enviar($ses);