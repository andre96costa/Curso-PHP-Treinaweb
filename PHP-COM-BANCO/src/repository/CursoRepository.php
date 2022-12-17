<?php

namespace App\Repository;

class CursoRepository extends Repository
{
    public function todos(): array
    {
        return $this->select('cursos');
    }
}
