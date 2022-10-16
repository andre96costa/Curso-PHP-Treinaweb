<?php

echo "inicio do arquivo inclusão.php ";

include "variaveis.php";
include "variaveis.php";
include "variaveis.php";
include "variaveis.php";
include "variaveis.php";
echo "estou usando a variavel nome no arquivo inclusao.php $nome <br>";

include_once "Funcoes/personalizadas.php";
include_once "Funcoes/personalizadas.php";
include_once "Funcoes/personalizadas.php";

require "variaveis.php";
echo "<br> estou usando a função somar no arquivo inclusao.php" . somar(20,30) . "<br>";


echo "<br><br>fim do arquivo inclusão.php";
