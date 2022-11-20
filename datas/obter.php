<?php

date_default_timezone_set('America/Sao_Paulo');

$data = date('d-m-Y H:i:s', time() + (60*60*24));

echo '<pre>';
var_dump($data);
var_dump(date('e'), date('P'));
var_dump(date('d/m/Y', strtotime('+10 day')));
echo '</pre>';