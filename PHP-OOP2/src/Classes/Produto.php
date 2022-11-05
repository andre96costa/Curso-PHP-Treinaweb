<?php

namespace App\Classes;

use App\Interfaces\Imprimivel;
use App\Interfaces\Retornavel;

class Produto implements Imprimivel, Retornavel
{
    public const NORMA = "1050";
    private string $titulo;
    public string $descricao = "Produtos em geral";
    private float $preco;
    private string $codigoBarras;

    public function __construct(string $titulo) {
        $this->titulo = $titulo;
    }

    final public function defineCodigoDeBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    private function acessaCodigoBarras(): string
    {
        return '<br>Código de barras do produto: ' . $this->codigoBarras;
    }

    public function definirPreco(float $preco): void
    {
        if ($preco > 0) {
            $this->preco = $preco;
        }
    }

    public function detalhes(): void
    {
        echo "<br> Nome do produto: " . $this->titulo . "<br>";
        echo "<br> Preço do produto: " . $this->preco . "<br>";
        echo "<br> Descrição do produto: " . $this->descricao . "<br>";
        $this->acessaCodigoBarras();
    }

    public function retornaDetalhes(): string
    {
        $saida = "<br> Nome do produto: " . $this->titulo . "<br>";
        $saida .= "<br> Preço do produto: " . $this->preco . "<br>";
        $saida .= "<br> Descrição do produto: " . $this->descricao . "<br>";
        $saida .= $this->acessaCodigoBarras();
        return $saida;
    }
    
}