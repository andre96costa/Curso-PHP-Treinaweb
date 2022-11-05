<?php

namespace App\Classes;

class Microondas extends Eletrodomestico
{
    public int $potencia;
    public string $descricao = "Microondas em geral";

    public function __construct(string $titulo, int $voltagem, int $potencia) {
        parent::__construct($titulo, $voltagem);
        $this->potencia = $potencia;
    }

    public function definirPotencia(int $potencia): void
    {
        $this->potencia = $potencia;
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo " Potencia: " . $this->potencia;
    }
}