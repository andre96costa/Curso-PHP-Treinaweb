<?php

use App\Classes\Eletrodomestico;
use App\Classes\Microondas;
use App\Classes\Produto;

require_once "../autoload/autoload-psr4.php";

$prod = new Produto('Cerveja');
$prod->preco     = 3.00;
$prod->defineCodigoDeBarras('0011');

$prod->detalhes();

echo '<pre>';
var_dump($prod);
echo '</pre>';

$prod = new Eletrodomestico("Geladeira", 220);
// $prod->titulo    = 'Geladeira';
// $prod->preco     = 3000.00;
// $prod->defineCodigoDeBarras('0022');
// $prod->definirVoltagem(110);

$prod->detalhes();

echo '<pre>';
var_dump($prod);
echo '</pre>';

$prod = new Microondas("Microoandas", 110, 610);
$prod->preco     = 600.00;
$prod->defineCodigoDeBarras('0033');

$prod->detalhes();

echo '<pre>';
var_dump($prod);
echo '</pre>';

