<?php

$numero = 100;

echo "<pre>";
var_dump($numero += 1);
echo "</pre>";

echo "<pre>";
var_dump($numero -= 2);
echo "</pre>";

echo "<pre>";
var_dump($numero *= 3);
echo "</pre>";

echo "<pre>";
var_dump($numero /= 4);
echo "</pre>";

echo "<pre>";
var_dump($numero %= 6);
echo "</pre>";

$string = "Treinaweb ";
$string .= " A melhor escola de programação do brasil.";

echo $string;