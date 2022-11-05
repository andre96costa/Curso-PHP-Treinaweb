<?php

namespace App\Email\AdaptadoresNovos\Mailgun;

use App\Email\AdaptadoresNovos\AdaptadorBase;

class Adaptador extends AdaptadorBase
{
    public function processar(): void
    {
        echo "processado com adaptador mailgun";
    }
}