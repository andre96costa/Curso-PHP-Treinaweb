<?php

use App\Classes\Microondas;

require_once "../autoload/autoload-psr4.php";

$obj = new Microondas;
$obj->titulo    = 'geladeira';
$obj->preco     = 900.00;
$obj->defineCodigoDeBarras('0011');

$obj->definirVoltagem(220);
$obj->definirPotencia(620);
$obj->mostrar();

echo '<pre>';
var_dump($obj);
echo '</pre>';