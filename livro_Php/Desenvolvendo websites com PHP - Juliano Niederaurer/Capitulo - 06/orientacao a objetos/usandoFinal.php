<?php
//a palavra reservada final serve para que uma classe nao seja
//herdada por outra e para que um metodo nao sofre polimorfismo


final class carro
{
    public $cor;
}

class caminhao extends carro
{

}

$carro = new caminhao();
$carro->cor = "branco";

echo $carro->cor;

//esse codigo resultara em erro porque a classe carro é uma classe final