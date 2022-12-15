<?php

class Veiculo
{
    static protected function ligar(): static
    {
        return new static;
    }

    static public function ignicao()
    {
        var_dump(static::ligar());
    }
}


class Carro2 extends Veiculo
{
    static public function ignicao()
    {
        var_dump(static::ligar());
    }
}



var_dump(Carro2::ignicao());
var_dump(Veiculo::ignicao());
