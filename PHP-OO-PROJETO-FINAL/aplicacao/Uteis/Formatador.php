<?php

namespace App\Uteis;

class Formatador
{
    public static function carga_horaria(int $carga): string
    {
        return $carga . " horas";
    }
}