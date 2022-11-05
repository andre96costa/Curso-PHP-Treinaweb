<?php

namespace App\Entidade;

class Curso
{
    private string $nomeCurso;
    private float  $versaoFerramenta;
    private int    $cargaHoraria;
    private bool   $status;

    public function __set(string $propriedade, $valor)
    {
        $this->$propriedade = $valor;        
    }

    public function __get(string $propriedade)
    {
        return $this->$propriedade;
    }
}