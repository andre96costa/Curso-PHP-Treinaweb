<?php

$valor = 1879.85;

$real = number_format($valor, 2, ',', '.');

echo '<pre>';
var_dump('R$ ', $real);
echo '</pre>';