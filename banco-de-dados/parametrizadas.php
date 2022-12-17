<?php

$conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', 'root');
$id = 1;
$query = $conexao->prepare('SELECT * FROM alunos WHERE id = ?');
$query->bindValue(1, $id, PDO::PARAM_INT);
$query->execute();

foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $linha) {
    var_dump($linha);
}
$temobusca = '';
$q2 = $conexao->prepare('SELECT * FROM alunos WHERE nome LIKE :termobusca');
$q2->bindParam(':termobusca', $temobusca, PDO::PARAM_STR);
$temobusca = '%aline%';
$q2->execute();

foreach ($q2->fetchAll(PDO::FETCH_ASSOC) as $linha) {
    var_dump($linha);
}