<?php

$nome = "Treinaweb cursos";

echo "<pre>";
var_dump($nome[10]);
echo "</pre>";

$nome[10] = 'C';
echo "<pre>";
var_dump($nome);
echo "</pre>";

echo "<h1 style=\"color: red;\">Treinaweb Cursos</h1> <br>";
echo '<h1 style="color: red;">Treinaweb Cursos</h1> <br>';

$heredoc = <<<HTML
    texto meu textp
                          outra linha
    <p>Paragramfooooo</p>
    \$a = 12;
    $nome
    <br>
HTML;

$nowdoc = <<<'T'
                    $nome, aqui não interpreta variaveis
 <h1 style="color: red;">Treinaweb Cursos</h1> <br>
T;

echo $heredoc;
echo $nowdoc;


