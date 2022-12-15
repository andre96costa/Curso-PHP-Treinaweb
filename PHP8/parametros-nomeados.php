<?php

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
        protected string $cor
    ){}

    public function andar(int $aceleracao, int $velocidadeMaxima)
    {
        echo "$aceleracao $velocidadeMaxima";
    }
}

$carro = new Carro(marca:'Uno', cor:'Preto');
echo '<pre>';
var_dump($carro);
echo '</pre>';


$carro->andar(aceleracao: 5, velocidadeMaxima: 110); //parametros nomeados
