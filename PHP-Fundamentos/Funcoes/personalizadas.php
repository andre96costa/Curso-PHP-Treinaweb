<?php

function somar($valor1, $valor2) {
    echo 'antes do return';
    return $valor1 + $valor2;
    echo 'depois do return, nunca é chamado';    
}

$soma = somar(12, 10);

echo $soma;
echo "\n";

echo somar(13, 90);
echo "\n";