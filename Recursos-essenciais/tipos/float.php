<?php

use function PHPSTORM_META\type;

$n1 = 10.23;
$n2 = .23;
$n3 = 75e3; // 75 * 10^3 = 75000
$n4 = 75e-3; //75 * 10^-3 = 0,075


echo "<pre>";
var_dump($n1, $n2, $n3, $n4);
echo "</pre>";

echo "<pre>";
var_dump(10_000_000);
echo "</pre>";
