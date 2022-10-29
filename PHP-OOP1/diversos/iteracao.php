<?php

require_once "src/classes/Produto.php";

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja pilsen";
$prod1->preco = 2.50;

foreach ($prod1 as $nome => $valor) {
    echo "$nome: $valor";
    echo '<br>';
}