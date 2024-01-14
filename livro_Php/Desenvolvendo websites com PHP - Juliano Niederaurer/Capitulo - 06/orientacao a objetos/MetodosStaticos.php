<?php

class classe
{
    static $variavel_estatica = 10;

    public static function Somar ($numero)
    {
        return Classe::$variavel_estatica += $numero;
    }
}

//como o metodo é statico nao precisamos instanciar a classe
echo classe::Somar(10);