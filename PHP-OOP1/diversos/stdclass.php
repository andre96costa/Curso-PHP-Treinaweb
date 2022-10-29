<?php

$generica = new stdClass();

$generica->nome = "Treinaweb";
$generica->curso = "Curso PHP OO";

$array = [
    "nome"  => "Treinaweb",
    "curso" => "PHP OO"
];


$objeto = (object) $array;

echo "<pre>";
var_dump($generica);
var_dump($objeto);
echo "</pre>";
