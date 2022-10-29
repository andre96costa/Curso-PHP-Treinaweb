<?php
declare(strict_types=1);

require_once "src/classes/Fornecedor.php";

$fornecedor = new Fornecedor();
$fornecedor->cnpj = "12312312312312";
$fornecedor->razaoSocial = "true";
$fornecedor->nomeFantasia = "Meu armazen LTDA";

$fornecedor->autorizar(new Class {
    public $nome = "Andre";
    public $senha = "123456";
});

var_dump($fornecedor);