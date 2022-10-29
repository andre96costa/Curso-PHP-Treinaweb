<?php

require_once "src/classes/Produto.php";
require_once "src/classes/Cliente.php";

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja pilsen";
$prod1->preco = 2.50;

$prod2 = new Produto();
$prod2->titulo = "Itaipava";
$prod2->preco = 1.90;

$cliente1 = new Cliente();
$cliente1->nome = "Andre";
$cliente1->idade = 26;
$cliente1->endereo = "Rua xyz";
$cliente1->telefone = "99999999";
$cliente1->comprar();

$nomeClasse = "Produto";
$instancia = new $nomeClasse;

$cliente2 = new $cliente1; //Permite criar um novo objeto através de um existente. Não copia os dados do primeiro objeto.

echo '<pre>';
var_dump($prod1);
var_dump($prod2);
var_dump($instancia);
var_dump($cliente1);
var_dump($cliente2);
echo '</pre>';