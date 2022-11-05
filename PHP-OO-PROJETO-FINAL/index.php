<?php

use App\Repository\Curso;
use App\Uteis\Formatador;

require_once "autoload/autoload.php";

$cursoRepositorio = new Curso;
$formatador = new Formatador;

require_once "exibicao/principal.php";