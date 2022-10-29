<?php

$a = 1;
$b = $a;
$a = 3;

echo "a: $a" . ' ' . "b: $b";
echo '<br>';

$c = 2;
$d = &$c;

echo "c: $c" . ' ' . "d: $d";
echo '<br>';

$c = 10;

echo "c: $c" . ' ' . "d: $d";
echo '<br>';

$d = 30;

echo "c: $c" . ' ' . "d: $d";
echo '<br>';