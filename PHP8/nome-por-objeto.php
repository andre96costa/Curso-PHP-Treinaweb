<?php


namespace App\Models;

class Carro
{
    
}

echo Carro::class;
echo '<br>';

$uno = new Carro;

echo get_class($uno);
echo '<br>';

echo $uno::class;
