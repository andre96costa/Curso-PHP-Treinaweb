<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', 'root');
    $resultado = $conexao->query('SELECT * FROM alunos');
    $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach ($alunos as $aluno) {
        var_dump($aluno);
    }
} catch (\PDOException $e) {
    echo $e->getMessage();
}
