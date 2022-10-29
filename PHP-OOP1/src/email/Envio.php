<?php

namespace App\Email;

use App\Classes\Cliente;
use App\Email\Adaptadores\Mailgun\Adaptador;
use App\Email\Adaptadores\SES\Adaptador as SESAdaptador;

const VERSAO = 1.0;

class Envio
{
    public function enviar(): void
    {
        $adaptador = new Adaptador();
        $transporte = new Transporte();

        $obj = new \stdClass;
        $cliente = new Cliente();

        var_dump($adaptador, $transporte, $obj);
    }

    public function m1(): void
    {
        $adaptador = new Adaptador();
    }

    public function m2(): void
    {
        $adaptador = new SESAdaptador();
    }
}

function validar(string $email): void
{
    echo '<br>'. "O $email é valido";
}