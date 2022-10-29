<?php

namespace App\Produto;

class Produto
{
    public const NORMA = "1050";
    public string $titulo;
    public string $descricao = "Cerveja Brasileira";
    public float $preco;

    public function defineCodigoDeBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras(): void
    {
        echo '<br>' . $this->codigoBarras;
    }
    
}