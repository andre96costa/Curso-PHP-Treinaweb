<?php

namespace App\Repository;

use App\Entidade\Curso as EntidadeCurso;

class Curso
{
    public function todos(): array
    {
        $php = new EntidadeCurso;
        $php->nomeCurso = "Curso de PHP Fundamentos";
        $php->versaoFerramenta = 7.4;
        $php->cargaHoraria = 40;
        $php->status = true;

        $java = new EntidadeCurso;
        $java->__set("nomeCurso", "Curso de Java Fundamentos");
        $java->__set("versaoFerramenta", 11.4);
        $java->__set("cargaHoraria", 30);
        $java->__set("status", false);

        $csharp = new EntidadeCurso;
        $csharp->__set("nomeCurso", "Curso de C# Fundamentos");
        $csharp->__set("versaoFerramenta", 5);
        $csharp->__set("cargaHoraria", 60);
        $csharp->__set("status", true);

        $js = new EntidadeCurso;
        $js->__set("nomeCurso", "Curso de JavaScript Fundamentos");
        $js->__set("versaoFerramenta", 16);
        $js->__set("cargaHoraria", 80);
        $js->__set("status", true);

        return [
            "php" => $php,
            "java" => $java,
            "c#" => $csharp,
            "javascript" => $js
        ];
    }
}