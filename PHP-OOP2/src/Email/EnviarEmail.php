<?php

namespace App\Email;

use App\Email\AdaptadoresNovos\AdaptadorInterface;

class EnviarEmail
{
    public function enviar(AdaptadorInterface $adaptador): void
    {
        $adaptador->processar();
    }
}