<?php

$data1 = new DateTimeImmutable('2022-08-22', new DateTimeZone('America/Sao_Paulo'));
$data2 = new DateTimeImmutable('2022-08-23', new DateTimeZone('America/Sao_Paulo'));

echo '<pre>';
var_dump($data2);
var_dump($data1 < $data2);
echo '</pre>';