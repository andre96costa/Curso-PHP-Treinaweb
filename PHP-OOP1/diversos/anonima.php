<?php

require_once "src/classes/Fornecedor.php";


class Usuario
{
    public $nome = "joao";
    public $senha = '1234';
}

$joao = new Usuario();

$fornecedor = new Fornecedor();

$fornecedor->autorizar(new Class {
    public $nome = "joao";
    public $senha = '1234';
});