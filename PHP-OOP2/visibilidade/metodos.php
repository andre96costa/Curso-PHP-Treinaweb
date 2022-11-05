<?php

use App\Classes\Eletrodomestico;
use App\Classes\Produto;

require_once "../autoload/autoload-psr4.php";

$produto = new Produto("Produto");
$produto->defineCodigoDeBarras('00111');
$produto->detalhes();