<?php
namespace App\Classes\novo;

use App\Classes\Pessoa;
use App\Traits\Imprimir;

class Cliente extends Pessoa
{
    use Imprimir;
    
    public function setId(int $id): void
    {
        $this->id = $id + 1000;
    }
}