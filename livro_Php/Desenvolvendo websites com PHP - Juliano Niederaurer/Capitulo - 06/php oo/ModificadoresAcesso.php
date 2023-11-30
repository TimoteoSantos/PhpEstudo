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

//metodos protejidos so podem ser acessados pela propria classe
$vendaCredito->adicionarCodCartao(5555);
echo $vendaCredito->getCodCartao();