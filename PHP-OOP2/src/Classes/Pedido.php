<?php

namespace App\Classes;

use App\Classes\novo\Cliente;

class Pedido
{
    private Cliente $cliente;
    private Produto $produto;

    public function __construct(Cliente $cliente, Produto $produto) {
        $this->cliente = $cliente;
        $this->produto = $produto;
    }

    public function getProduto(): Produto
    {
        return $this->produto;
    }
}