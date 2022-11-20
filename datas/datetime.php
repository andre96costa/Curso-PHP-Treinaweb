<?php
date_default_timezone_set('America/Sao_Paulo');

$agora = new DateTime();
$ontem = new DateTime('yesterday');
$outro = new DateTime('2020-08-22');
$outro2 = DateTime::createFromFormat("d/m/Y H:i:s", '22/08/2020 00:00:00');

echo '<pre>';
var_dump($agora);
var_dump($outro);
var_dump($ontem);
var_dump($outro2->format('Y-m-d'));
echo '</pre>';


function isoParaBrasil($data)
{
    $dateTime = new DateTime($data);
    return $dateTime->format("d/m/Y");
}

function brasil_para_iso($data)
{
    return DateTime::createFromFormat('d/m/Y', $data)->format('Y-m-d');
}

echo '<pre>';
var_dump(isoParaBrasil('2022-11-19'));
var_dump(brasil_para_iso('19/11/2022'));

echo '</pre>';