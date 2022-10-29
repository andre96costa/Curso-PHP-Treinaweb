<?php

require_once "src/classes/Produto.php";

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja pilsen";
$prod1->preco = 2.50;

$prod2 = clone $prod1;
$prod2->titulo = "Itaipava";


echo '<pre>';
var_dump($prod1);
var_dump($prod2);
echo '</pre>';


