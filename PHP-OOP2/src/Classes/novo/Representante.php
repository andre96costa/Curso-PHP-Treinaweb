<?php

namespace App\Classes\novo;

class Representante extends Vendedor
{
    protected static function comissao(bool $temBonus): float
    {
        if ($temBonus) {
            return 2.5 * parent::$bonos + 1;
        }
        return 2.5 + 1;
    }
}