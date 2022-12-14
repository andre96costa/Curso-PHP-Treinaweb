<?php

namespace App\Classes;

class Eletrodomestico extends Produto
{
    private int $voltagem;
    public string $descricao = "Eletrodomestico em geral";

    public function __construct(string $titulo, int $voltagem) {
        parent::__construct($titulo);
        $this->voltagem = $voltagem;
    }

    public function definirVoltagem(int $voltagem): void
    {
        if ($voltagem == 110 || $voltagem == 220) {
            $this->voltagem = $voltagem;
        }
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br> Voltagem: " . $this->voltagem . "<br>";
    }

}