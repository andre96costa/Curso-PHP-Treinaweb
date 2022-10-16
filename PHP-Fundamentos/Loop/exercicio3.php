<?php

$t = intval(rtrim(fgets(STDIN)));

for($i = 0; $i < $t; $i++) {
    [$a, $b, $n] = array_map('intval', explode(' ', rtrim(fgets(STDIN))));
    $res = 0;
    $res += $a + pow(2, 0) * $b;
    echo "$res ";
    for ($j=1; $j < $n; $j++) { 
        $res +=  pow(2, $j) * $b;
        echo "$res ";
    }
    echo "\n";
}


//0 + 1 x 2 = 2
//0 + 1 x 2 + 2 x 2 = 6
//0 + 1 x 2 + 2 x 2 + 4 x 2 = 14