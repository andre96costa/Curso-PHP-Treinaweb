<?php

use App\Classes\Eletrodomestico;
use App\Classes\Microondas;
use App\Classes\Produto;

require_once "../autoload/autoload-psr4.php";

$mic = new Microondas("MicroondasXYZ", 220, 600);
$mic->definirPreco(854.90);
$mic->defineCodigoDeBarras("9900123");
$mic->detalhes();