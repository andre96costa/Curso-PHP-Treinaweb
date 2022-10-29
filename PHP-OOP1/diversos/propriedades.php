<?php

require_once "src/classes/Produto.php";

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja pilsen";
$prod1->preco = 2.50;
$prod1->desconto = 0.1;

$prod1->defineCodigoDeBarras('000012');

echo '<pre>';
var_dump($prod1);
echo '</pre>';