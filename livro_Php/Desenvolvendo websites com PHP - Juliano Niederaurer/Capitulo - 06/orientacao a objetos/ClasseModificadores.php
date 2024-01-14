<?php

class Classe1
{
    private function MetodoPrivado()
    {
        echo "Clsse1::MetodoPrivado() chamado . </br>";
    }

    protected function MetodoProtegido()
    {
        echo "Classe1::MetodoProtegido() chamado . </br>";
        $this->MetodoPrivado();
    }
}

class Classe2 extends Classe1
{
    public function MetodoPublico()
    {
        echo "Classe2::MetodoPublico() chamado . </br>";
        $this->MetodoProtegido();
    }
}

$obj = new Classe2();
$obj->MetodoPublico();


/*
 * da mesma forma que os atributos os metodos podem ter modificadores de acesso
 * quando publico é visivel em qualquer parte do codigo
 * quando privado apenas a classe qua o implementou
 * quando protegido apenas a classe ou que a herda
 * nesse exemplo o metodo publico chama o metodo protegido e
 *  o metodo protegido chama o metodo privado
 * o metodo privado é acessivel apenas na classe que o criou
 */