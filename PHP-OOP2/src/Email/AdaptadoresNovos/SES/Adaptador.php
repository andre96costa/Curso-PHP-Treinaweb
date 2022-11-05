<?php

namespace App\Email\AdaptadoresNovos\SES;

use App\Email\AdaptadoresNovos\AdaptadorBase;

class Adaptador extends AdaptadorBase
{
    public function processar(): void
    {
        echo "processado com adaptador SES";
    }
}