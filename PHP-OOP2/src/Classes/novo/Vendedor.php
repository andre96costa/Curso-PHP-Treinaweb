<?php 

namespace App\Classes\novo;

class Vendedor
{
    public float $totalDeVendas = 0;
    protected static float $bonos = 1.2;

    private static function comissao(bool $temBonus): float
    {
        if ($temBonus) {
            return 2.5 * self::$bonos;
        }
        return 2.5;
    }

    public static function calculoComissao(bool $bool, float $valor): float
    {
        $porcentageComissao = static::comissao($bool) / 100;
        return $porcentageComissao * $valor;
    }

    public function addVenda(float $valor): void
    {
        $this->totalVendas = $this->totalDeVendas + $valor;        
    }

    public function minhaComissao(): float
    {
        return static::calculoComissao(true, $this->totalDeVendas);
    }

}