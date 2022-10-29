<?php

function carregar(string $classe)
{
    $nsRaiz = "App\\";
    $diretorioBase = __DIR__ . "/../src/";
    $tamanhoNsRaiz = strlen($nsRaiz);

    $nsRaizRecebido = substr($classe, 0, $tamanhoNsRaiz);
    if ($nsRaiz !== $nsRaizRecebido) {
        return;
    }

    $caminhoRelativo = substr($classe, $tamanhoNsRaiz);
    $caminhoArquivo = $diretorioBase . str_replace('\\', '/',$caminhoRelativo) . '.php';
    
    if (file_exists($caminhoArquivo)) {
        require $caminhoArquivo;
    }
}

spl_autoload_register("carregar");