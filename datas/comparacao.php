<?php
date_default_timezone_set('America/Sao_Paulo');

$data1 = strtotime('2020-01-30');
$data2 = strtotime('2020-02-05');

echo '<pre>';
var_dump('30/01/2020' > '05/02/2020');
var_dump("2020-01-30" > "2020-02-05");
var_dump($data1);
var_dump($data2);
var_dump($data1 > $data2);

echo '</pre>';