<?php

require_once "src/classes/Produto.php";

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja pilsen";
$prod1->preco = 2.50;

$prod2 = $prod1; //Prod2 recebe uma cópia da referencia de memória de prod1 
$prod2->titulo = "Itaipava";

$prod2 = 10;


$prod3 = &$prod1; //Prod3 está apontando para a mesma referencia de memória que prod1;
$prod3 = 'a';

echo '<pre>';
var_dump($prod1);
var_dump($prod2);
var_dump($prod3);
echo '</pre>';


