<?php

class FinalEmMetodo
{
    public $atributo;

   final function somar($num1,$num2)
    {
        return $num1 + $num2;
    }

    final function somaEPar($num1,$num2)
    {
        $resultadoSoma = $this->somar($num1,$num2);

        $restoDaDivisao = $resultadoSoma % 2;
        if($restoDaDivisao == 0)
        {
            return true;
        }else{
            return false;
        }

    }

}


class Valor extends FinalEmMetodo
{

 //ao tentar fazer o polimorfismo desse metodo dara erro porque o metodo é um metodo final nao pode ser reescrito
//function somar()
//{
//}
}

$teste = new Valor();

$result = $teste->somaEPar(1,2);

if($result){echo "é par";}else{echo "é impar";}


/*
 * UMA CLASSE FINAL NAO PODE SER HERDADAD E UM METODO FINAL NAO PODE SER REESCRITO POLIMORFISMO
 */