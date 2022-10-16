<?php

error_reporting(E_ALL);

$divisor = 0;

try {
    $valor = 100 / $divisor;
} catch (\Throwable $th) {
    echo $th->getMessage();
}

