<?php

namespace App\Email\AdaptadoresNovos;

class AdaptadorBase implements AdaptadorInterface
{
    public function processar(): void
    {
        echo "processado com adaptador base";
    }
}