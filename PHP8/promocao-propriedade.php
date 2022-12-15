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

    public function __construct(
        protected string $marca,
        protected string $cor
    ) 
    {}
}

echo '<pre>';
var_dump(new Carro('Uno', 'Preto'));
echo '</pre>';