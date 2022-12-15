<?php

declare(strict_types=1);

class Carro 
{
    // protected string $marca;
    // protected string $cor;
    protected int $potencia;

    // public function __construct(string $marca, string $cor) {
    //     $this->marca = $marca;
    //     $this->cor = $cor;
    // }

    public function __construct( //promoção de propriedade
        protected string $marca,
        protected string $cor,
        protected int $velocidadeAtual,
    ){}

    public function andar(int|null|string $aceleracao, int|string $velocidadeMaxima) : string|float
    {
        return "$aceleracao $velocidadeMaxima";
    }

    public function estaAndando(): mixed
    {
        if ($this->velocidadeAtual > 0) {
            return $this->velocidadeAtual;
        }

        return false;
    }
}

$carro = new Carro(marca:'Uno', cor:'Preto', velocidadeAtual:0);
echo '<pre>';
var_dump($carro);
echo '</pre>';


echo $carro->andar(null, velocidadeMaxima: '110'); //parametros nomeados

echo '<pre>';
var_dump($carro->estaAndando());
echo '</pre>';
