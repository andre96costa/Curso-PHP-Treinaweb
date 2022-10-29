<?php

require_once "src/classes/Cliente.php";

$cliente1 = new Cliente();
$cliente1->nome = "Andre";
$cliente1->idade = 26;
$cliente1->endereo = "Rua xyz";
$cliente1->telefone = "99999999";
$cliente1->comprar();


$cliente2 = new Cliente();
$cliente2->nome = "Maria";
$cliente2->idade = 26;
$cliente2->endereo = "Rua xyz";
$cliente2->telefone = "99999999";
$cliente2->comprar();

$cliente2->definirNome('Ana');


echo '<pre>';
var_dump($cliente1);
var_dump($cliente2);
echo '</pre>';