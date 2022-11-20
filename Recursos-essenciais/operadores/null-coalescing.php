<?php

$valor = [
    'php' => 7.2,
    'dart' => 2,
    'c' => 9
];

$cSharp = $valor['c#'] ?? 'Curso não existe';

echo "<pre>";
var_dump($cSharp);
echo "</pre>";
