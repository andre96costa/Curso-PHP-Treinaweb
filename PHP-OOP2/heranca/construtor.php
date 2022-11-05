<?php

use App\Classes\Eletrodomestico;
use App\Classes\Produto;

require_once "../autoload/autoload-psr4.php";

$prod = new Produto('Cerveja');
$prod->preco     = 3.00;
$prod->defineCodigoDeBarras('0011');

$prod->detalhes();

echo '<pre>';
var_dump($prod);
echo '</pre>';


$prod = new Eletrodomestico;
$prod->titulo    = 'Geladeira';
$prod->preco     = 3000.00;
$prod->defineCodigoDeBarras('0022');
$prod->definirVoltagem(110);

$prod->detalhes();

echo '<pre>';
var_dump($prod);


