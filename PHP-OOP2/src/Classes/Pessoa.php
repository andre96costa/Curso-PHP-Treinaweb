<?php

namespace App\Classes;

abstract class Pessoa 
{
    protected int $id;
    private string $nome;
    private int $idade;
    private string $telefone;
    private string $endereco;

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    abstract public function setId(int $id): void;
}