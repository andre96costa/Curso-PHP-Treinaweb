<?php
$t = intval(rtrim(fgets(STDIN)));

for($i = 0; $i < $t; $i++) {
    [$a, $b] = explode(' ', rtrim(fgets(STDIN)));

    try
    {
        [$a, $b] = explode(' ', rtrim(fgets(STDIN)));
        
        if(!is_numeric($a))
            throw new Exception("Erro: Valor não pode ser convertido para inteiro: '$a'", 1);
        
        if(!is_numeric($b))
            throw new Exception("Erro: Valor não pode ser convertido para inteiro: '$b'", 1);
        
        print(intdiv(intval($a), intval($b)) . PHP_EOL);
    }
    catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
    catch (DivisionByZeroError $th) {
        echo "Erro: Divisão por zero não permitida" . PHP_EOL;
    }
}