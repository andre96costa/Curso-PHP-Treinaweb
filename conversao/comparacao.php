<?php

$nome = 'Treinaweb cursos';

$cursos = explode(', ', 'Php, C#, Java, Flutter');

$s = implode(' - ', $cursos);

echo '<pre>';
var_dump($cursos);
var_dump($s);
echo '</pre>';
