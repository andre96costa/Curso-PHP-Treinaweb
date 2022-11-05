<?php

use App\Classes\novo\Representante;
use App\Classes\novo\Vendedor;

require_once "../autoload/autoload-psr4.php";


$v = new Vendedor;

echo $v::calculoComissao(true, 100_000);

echo '<br>';

echo Vendedor::calculoComissao(true, 100_000);
echo '<br>';
echo Representante::calculoComissao(true, 100_000);

echo '<br>';

$joao = new Vendedor;
$joao->addVenda(1300_000);
echo $joao->minhaComissao();

