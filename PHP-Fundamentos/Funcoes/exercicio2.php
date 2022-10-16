<?php

function anoBissexto($ano) {
    if ($ano % 4 == 0)
    {
        if ($ano % 100 == 0)
        {
            if ($ano % 400 == 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return true;
        }
    }
    return false;
}

$ano = 2020;
print(anoBissexto($ano) ? "Ano bissexto" : "Não é ano bissexto");