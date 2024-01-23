<?php
//a palavra reservada final serve para que uma classe nao seja
//herdada por outra e para que um metodo nao sofre polimorfismo

class carro
{
    public $cor;
}

final class caminhao extends carro //foma correta a ultima classe recebe o valor final nao podendo ser extendida
{

}

$carro = new caminhao();
$carro->cor = "branco";

echo $carro->cor;

//esse codigo resultara em erro porque a classe carro é uma classe final