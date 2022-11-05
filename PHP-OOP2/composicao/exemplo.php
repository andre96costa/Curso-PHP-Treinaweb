<?php

use App\Classes\novo\Cliente;
use App\Classes\Pedido;
use App\Classes\Produto;

require_once "../autoload/autoload-psr4.php";

$cliente = new Cliente;
$cliente->setNome("Andre");
$cliente->setId(1);
$cliente->setIdade(26);
$cliente->setEndereco("Rua XYZ");
$cliente->setTelefone("333333333333333");

$produto = new Produto("Cerveja");
$produto->defineCodigoDeBarras("0001119");
$produto->definirPreco(3.74);

$pedido = new Pedido($cliente, $produto);

$pedido->getProduto()->detalhes();

echo "<pre>";
var_dump($pedido);
echo "</pre>";