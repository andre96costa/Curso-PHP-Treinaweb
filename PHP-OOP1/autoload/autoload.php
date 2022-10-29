<?php

function carregar(string $nomeClasse)
{
    $caminhaCompleto = __DIR__ . "/../src/Classes/$nomeClasse.php";
    if (file_exists($caminhaCompleto)) {
        require_once $caminhaCompleto;
    }
}

spl_autoload_register("carregar");