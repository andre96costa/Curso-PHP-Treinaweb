<?php

use App\Repository\CursoRepository;
use App\Utils\Conexao;

require_once "vendor/autoload.php";

$dbConfig = require('src/config/config.php');
$conexao = new Conexao($dbConfig);

$cursoRepositorio  = new CursoRepository($conexao);


require_once "public/principal.php";