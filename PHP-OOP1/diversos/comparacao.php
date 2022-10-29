<?php

require_once "src/classes/Produto.php";

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja pilsen";
$prod1->preco = 2.50;

$prod2 = new Produto();
$prod2->titulo = "Skol";
$prod2->descricao = "Cerveja pilsen";
$prod2->preco = 2.50;

$prod3 = new Produto();
$prod3->titulo = "Skol Litrão";
$prod3->descricao = "Cerveja pilsen";
$prod3->preco = 2.50;

$prod4 = $prod1;


echo '<pre>';
var_dump($prod1 == $prod2); // == != Tipos e propriedades
var_dump($prod1 === $prod2); // === !== Referência
var_dump($prod1 == $prod3);
var_dump($prod1 == $prod4);
var_dump($prod1 === $prod4);
echo '</pre>';


