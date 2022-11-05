<?php

use App\Classes\Produto;

require_once "../autoload/autoload-psr4.php";

$prod = new Produto("Cerveja");
$prod->defineCodigoDeBarras("00001111");
$prod->definirPreco(4.20);

echo $prod->retornaDetalhes();