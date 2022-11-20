<?php

$dec = 980;
$bin = 0b1111010100; //980 em binario
$oct = 01724; //980 em octal
$hex = 0x3d4; //980 em hexadeciaml

echo "<pre>";
var_dump($dec, $bin, $oct, $hex);
echo "</pre>";


$intMax = PHP_INT_MAX; //Esse valor pode variar de acordo com o sistema operacional
$intMin = PHP_INT_MIN;
$intSize = PHP_INT_SIZE;