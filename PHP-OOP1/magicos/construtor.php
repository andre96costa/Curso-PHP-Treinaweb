<?php

use App\Classes\Cliente;

require_once "../autoload/autoload-psr4.php";

$cli = new Cliente('Andre', '9888888888', '26');
$cli->cpf = '7777777';
$cli->nome = 'ASDASDASD';
echo $cli->nome;

$cli->alterar('nome');
$cli(true);

$cliSerializado = serialize($cli);
echo '<pre>';
echo $cliSerializado;
echo '</pre>';
$cliDesSerializado = unserialize($cliSerializado);
echo '<pre>';
var_dump($cliDesSerializado);
echo '</pre>';


echo $cli;

echo '<pre>';
var_dump($cli);
echo '</pre>';