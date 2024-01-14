<?php

//public = qualquer dominio pode acessar
//protected  = classe ou classe que herda
//private = apenas a classe que o contem

class Venda
{
    public $datavenda;
    protected  $valor;
    private $codcartao;

    public function adicionarCodCartao($cod)
    {   //acessando o valor que esta como protected
        $this->codcartao = $cod;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getCodCartao()
    {
        return $this->codcartao;
    }
}

class VendaCredito extends Venda

{
    public $parcelas;

    //o valor esta como protected e pode ser acessado da classe herdada
    //porem so pode ser acessado dentro da classe ou da que herdou nao fora da classe
    //como acontece com o modificador de acesso publico
    //UMA METODO QUE ALTERA O VALOR DA VENDA
    public function adicionarValor($valor)
    {   //acessando o valor que esta como protected
        $this->valor = $valor;
    }
}

$vendaCredito = new VendaCredito();

//metodo publico pode ser acessado diretamente de qualquer lugar
echo $vendaCredito->parcelas = 10;
echo $vendaCredito->datavenda = '01/10/2023';

//metodo protected so pode ser acessado de dentro da classe
//por isso temos um metodo dentro da classe que herdou que tem acesso ao metodo
//apenas para fins didaticos
$vendaCredito->adicionarValor(50);
echo $vendaCredito->getValor();
//echo $vendaCredito->valor; ISSO RESULTARA EM ERRO PORQUE SO É POSSIVEL ACESSAR DE DENTRO CLASSE

//metodos protejidos so podem ser acessados pela propria classe
$vendaCredito->adicionarCodCartao(5555);
echo $vendaCredito->getCodCartao();


/* * MODIFICADORES DE ACESSO
 *
 * PUBLIC É VISIVEL NA PROPRIA CLASSE E EM TODAS QUE HA HERDAM INCLUSE ATRAVES DIRETAMENTE DO OBJETO
 * PRIVATE SÓ É VISÍVEL DENTRO DA CLASSE QUE O CRIOU
 * PROTECTED É VISIVEL PELA CLASSE E AS QUE HA HERDAREM POREM NAO É VISÍVEL PELO OBJETO APENAS DENTRO DA CLASSE HERDADA
 * * */