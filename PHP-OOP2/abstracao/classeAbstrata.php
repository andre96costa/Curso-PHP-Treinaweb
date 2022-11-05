<?php

use App\Classes\novo\Cliente;

require_once "../autoload/autoload-psr4.php";

$cliente = new Cliente;
$cliente->setId(1);
$cliente->setNome("andre");
$cliente->setIdade(26);
$cliente->setTelefone("33333333");
$cliente->setEndereco("Rua XYZ");

echo "<pre>";
var_dump($cliente);
echo "</pre>";