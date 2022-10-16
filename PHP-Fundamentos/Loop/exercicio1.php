<?php

#$n = 2;
$n = intval(rtrim(fgets(STDIN)));

for ($i=1; $i <= 10; $i++) { 
    echo "$n X $i = " . $n * $i;
    echo "\n";
}