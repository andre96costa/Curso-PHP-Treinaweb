<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', 'root');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conexao->beginTransaction();
        $conexao->query("INSERT INTO alunos(nome) values('Marta')");
        $conexao->query("UPDATE alunos645 SET nome = 'Gabriel manuel' WHERE id = 10");
    $conexao->commit();
} catch (\Throwable $th) {
    $conexao->rollBack();
}