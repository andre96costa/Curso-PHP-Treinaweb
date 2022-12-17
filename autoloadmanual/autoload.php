<?php

function carregar(string $classe)
{
    //Base do namespace de todas as classes, começam com App\
    $namespaceRaiz = "App\\"; 

    //Diretorio base da aplicacao, onde os arquivos ficaram. Menos os publicos.
    $diretorioBase = realpath(dirname(__FILE__,2) . '/src') ;

    //Pega o tamanho da raiz do namespace
    $tamanhoNamespaceRaiz = strlen($namespaceRaiz);
   
    $validaNamaspace = substr($classe, 0, $tamanhoNamespaceRaiz);
    if ($namespaceRaiz !== $validaNamaspace) {
        return;
    }

    $caminhoRelativo = substr($classe, $tamanhoNamespaceRaiz);
    $caminhoArquivo =  str_replace('\\', DIRECTORY_SEPARATOR, $diretorioBase .'\\'. $caminhoRelativo  . '.php');
    
    if (file_exists($caminhoArquivo)) {
        require $caminhoArquivo;
    }
}

spl_autoload_register("carregar");