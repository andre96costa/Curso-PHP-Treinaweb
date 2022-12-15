<?php


class Marca1 
{
    public ?string $nome = null;
}


class Carro1 
{
    public ?Marca1 $marca = null;
}

class Venda1 
{
    public ?Carro1 $carro = null;
}

$fiat = new Marca1;
$uno = new Carro1;
$venda = new Venda1;

echo $venda?->carro?->marca?->nome;