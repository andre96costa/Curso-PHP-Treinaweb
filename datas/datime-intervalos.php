<?php

$data1 = DateTime::createFromFormat('Y-m-d', '2020-04-26');
$data2 = DateTime::createFromFormat('Y-m-d', '2022-08-22');

$diferenca = $data1->diff($data2);

$data1->add(new DateInterval('P3M27D'));

echo '<pre>';
var_dump($diferenca->format('%m meses, %d dias, %Y anos'));
var_dump($data1);
echo '</pre>';
