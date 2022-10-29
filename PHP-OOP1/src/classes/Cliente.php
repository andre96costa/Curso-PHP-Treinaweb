<?php
namespace App\Classes;

class Cliente
{
    private string $nome;
    private int $idade;
    private string $endereco;
    private string $telefone;

    public function __construct(string $nome, string $telefone, int $idade) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;
    }

    public function __set(string $nomePropriedade, $valor)
    {
       $this->$nomePropriedade = $valor;
    }

    public function __get(string $nomePropriedade)
    {   echo "no __get \n";
        return $this->$nomePropriedade;
    }

    public function __call(string $nomeMetodo, array $argumentosMetodo)
    {
        var_dump($nomeMetodo, $argumentosMetodo);
    }

    public function __invoke(bool $status)
    {
        $this->status = $status;
    }

    public function __toString()
    {
        return $this->nome . " " . $this->idade;   
    }
    
    public function comprar(): void
    {
        echo "O cliente $this->nome realizou uma compra";
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function __destruct()
    {
        echo 'foi destruido';
    }
}