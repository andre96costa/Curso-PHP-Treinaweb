<?php

$numeros = [2,3,5,7,9,10];

foreach ($numeros as $value) {
    echo $value . "<br>";
}

echo "<br>";

foreach ($numeros as $chave => $value) {
    echo "$chave - $value <br>";
}

echo "<br>";

foreach ($numeros as $chave => $value) {
    echo "$numeros[$chave] <br>";
}

