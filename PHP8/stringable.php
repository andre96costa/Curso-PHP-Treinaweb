<?php
declare(strict_types=1);

class Marca 
{
    public function __construct(public string $nomePropriedade) {}

    public function __toString(): string
    {
        return $this->nomePropriedade;        
    }
}

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
        protected Marca $marca,
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

    public function info(string $nomePropriedade): mixed
    {
        return $this->$nomePropriedade;
    }
}


$carro = new Carro(new Marca('Uno'), cor:'Preto', velocidadeAtual:0);
echo '<pre>';
var_dump($carro);
echo '</pre>';

echo $carro->info('marca');