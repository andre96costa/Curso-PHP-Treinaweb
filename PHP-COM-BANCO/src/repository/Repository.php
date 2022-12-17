<?php

namespace App\Repository;

use App\Utils\Conexao;

abstract class Repository
{
    protected Conexao $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function select(string $tabela): array
    {
        $sql = "SELECT * FROM $tabela";
        $resultado = $this->conexao->query($sql);
        return $resultado->fetchAll(\PDO::FETCH_OBJ);
    }
}
