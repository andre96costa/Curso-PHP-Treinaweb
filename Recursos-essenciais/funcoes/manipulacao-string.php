<?php

$frase = 'TreinaWeb Cursos';

echo "<pre>";
var_dump(strpos($frase, 'r'));
echo "</pre>";
echo "<pre>";
var_dump(strpos($frase, 'r', 9));
echo "</pre>";
echo "<pre>";
var_dump(strpos($frase, 'r', 9));
echo "</pre>";

echo "<pre>";
var_dump(str_replace('Cursos', 'Online', $frase));
echo "</pre>";

echo "<pre>";
var_dump(substr($frase, 0, 3));
echo "</pre>";