<?php

date_default_timezone_set('America/Sao_Paulo');

// 10/11/2009
// 11/10/2010

$dia = date('Y-m-d', strtotime('2022-11-19'));
$diaDaSemana = date('N', strtotime('2022-11-19'));
$diaDaSemanaNome = date('l', strtotime('2022-11-19'));

$dia1 = date('Y-m-d', strtotime('2009-11-10'));
$diaDaSemana1 = date('N', strtotime('2009-11-10'));
$diaDaSemanaNome1 = date('l', strtotime('2009-11-10'));

$dia2 = date('Y-m-d', strtotime('2010-10-11'));
$diaDaSemana2 = date('N', strtotime('2010-10-11'));
$diaDaSemanaNome2 = date('l', strtotime('2010-10-11'));


echo '<pre>';
var_dump($dia);
var_dump($diaDaSemana);
var_dump($diaDaSemanaNome);

var_dump($dia1);
var_dump($diaDaSemana1);
var_dump($diaDaSemanaNome1);

var_dump($dia2);
var_dump($diaDaSemana2);
var_dump($diaDaSemanaNome2);
echo '</pre>';

$data1 = '2009-11-10';
$data2 = '2010-10-11';

function diaSemana($strData)
{
    $diaDaSemanaNome = '';
    $padraoIso = date('Y-m-d', strtotime($strData));
    $dia = date('N', strtotime($padraoIso));

    switch ($dia) {
        case 1:
            $diaDaSemanaNome = 'Segunda-Feira';
            break;
        case 2:
            $diaDaSemanaNome = 'Terça-Feira';
            break;
        case 3:
            $diaDaSemanaNome = 'Quarta-Feira';
            break;
        case 4:
            $diaDaSemanaNome = 'Quinta-Feira';
            break;
        case 5:
            $diaDaSemanaNome = 'Sexta-Feira';
            break;
        case 6:
            $diaDaSemanaNome = 'Sabado';
            break;
        case 7:
            $diaDaSemanaNome = 'Domingo';
            break;
    }
    return $diaDaSemanaNome;
}

echo diaSemana($data1);
