<?php

namespace App\Fornecedor;

class Fornecedor
{
    public const PAIS = "Brasil"; 
    public string $razaoSocial;
    public string $nomeFantasia;
    public string $cnpj;
   
    public function autorizar(object $usuario): void
    {
        if ($usuario->nome == 'joao' && $usuario->senha == '1234') {
            echo 'Autorizado' . "<br>";
        } else {
            echo 'Negado' . "<br>";
        }   
    }
}
