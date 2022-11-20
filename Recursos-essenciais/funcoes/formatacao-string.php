<?php

echo 'Treinaweb', " cursos";
print ' PHP <br>';

$curso = "PHP";
$versao = 7.4;

echo $curso . ' ' . $versao . '<br>';

printf("Curso de %s na versao %.1f", $curso, $versao);
echo '<br>';

$arr = array(1,2,3,4);
$obj = new \stdClass;
$obj->titulo = "teste";
$obj->valor = 213;
print_r($obj);
echo '<br>';
print_r("Curso de $curso na versao $versao <br>");
echo sprintf("Curso de %s na versao %.1f <br>", $curso, $versao);