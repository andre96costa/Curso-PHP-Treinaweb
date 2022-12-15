<?php

class Carro3
{
    #[Validacao('max', 110)]
    public int $velocidade;
}

#[Attribute]
class Validacao
{
    public function __construct(public string $regra, public int $valor) 
    {}

    public static function validar(object $objParaValidar) {

        $reflectionClass = new ReflectionClass($objParaValidar::class);

        foreach ($reflectionClass->getProperties() as $propriedade) {
            $nomePropriedade = $propriedade->getName();
            $atributos = $propriedade->getAttributes(self::class);
        
            foreach ($atributos as $atributo) {
                $instanciaValidacao = $atributo->newInstance();
                $nomeRegra = $instanciaValidacao->regra;
                
                $mensagemValidacao = Regras::$nomeRegra($objParaValidar->$nomePropriedade, $instanciaValidacao->valor);

                echo "$nomePropriedade: $mensagemValidacao" ;
            }
        }
    }
}


class Regras
{
    public static function max(int $valor, int $maximo): string
    {
        if ($valor > $maximo) {
            return 'valor maior que o máximo';
        }
        return 'Valor menor que o máximo';        
    }
}




$c = new Carro3;
$c->velocidade = 200;

Validacao::validar($c);