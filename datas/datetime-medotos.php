<?php
date_default_timezone_set('America/Sao_Paulo');

$aniversario = new DateTime('2020-08-22');
$aniversario->setTime(15,30);


echo '<pre>';
var_dump($aniversario);
var_dump($aniversario->getOffset());
echo '</pre>';