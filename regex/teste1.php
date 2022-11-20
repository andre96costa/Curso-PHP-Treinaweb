<?php

$aniversarios = "Elton 22/08 Daniel 26/04 Luciane 09/12 Uriel 10/02";

$nomes2 = preg_replace(
    ['/[a-z]{5}/i', '/[0-9\/]+/'],
    '#', 
    $aniversarios
);

var_dump($nomes2);