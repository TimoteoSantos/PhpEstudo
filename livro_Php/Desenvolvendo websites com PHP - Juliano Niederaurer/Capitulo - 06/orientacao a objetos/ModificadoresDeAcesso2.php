<?php

class Classe1
{

    private $var1 = "ola, var1!";
    protected $var2 = "ola, var2";
    protected  $var3 = "ola, var3";
    public $var4 = 10;

    public function bomDia()
    {
        print "Classe1:" . $this->var1. "<br>";
        print "Classe1:" . $this->var2. "<br>";
        print "Classe1:" . $this->var3. "<br>";
    }

    public function dataAtual()
    {
        return date("m.d.y");
    }



} //final classe


class Classe2 extends Classe1
{
    public function bomDia()
    {
        Classe1::bomDia(); //CHAMANDO UM METODO DA CLASSE HERDADA

        print "Classe2:" . $this->var1. "<br>"; //ERRO porque é privado não é acessivel por essa classe

        print "Classe2:" . $this->var2. "<br>"; //protected é visivel aqui vai funcionar
        print "Classe2:" . $this->var3. "<br>"; //protected é visivel aqui vai funcionar

        //CHAMANDO OUTRO METODO DA CLASSE HERDADA
        echo "sou metodo da classe herdada que mostra a data atual " . Classe1::dataAtual();
    }
}


$obj2 = new Classe2();
$obj2->bomDia(); //vai escrever os dados em bomDia(); mas não podemos acessar o atributo diretemente

$obj2->var1; // ERRO nao consigo acessar daqui so dentro da classe

$obj2->var4; //consigo acessar daqui porque é publico o unico acessivel fora da classe



