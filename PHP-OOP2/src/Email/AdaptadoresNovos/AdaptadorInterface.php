<?php

namespace App\Email\AdaptadoresNovos;

interface AdaptadorInterface
{
    public function processar(): void;
}