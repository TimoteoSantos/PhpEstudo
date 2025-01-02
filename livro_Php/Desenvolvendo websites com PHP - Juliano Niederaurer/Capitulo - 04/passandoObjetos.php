<?php

//orientacao a objetos com php

//criando uma classe
class Produto
    {
        private $cod;
        private $descricao;

        //metodo cosntrutor
        public function __construct($cod,$descricao)
        {
            $this->cod = $cod;
            $this->descricao = $descricao;
        }

        public function getCod():int
        {
            return $this->cod;
        }
        public function getDescricao():String
        {
            return $this->descricao;
        }
    }

//classe venda
class Venda
    {
        public $codVenda;
        public Produto $produto;

        public function __construct(Produto $produto, $codVenda)
        {
            $this->codVenda = $codVenda;
            $this->produto = $produto;
        }
    }

$produto = new produto(10,"SH BOLVINO");
$venda = new Venda($produto,99);

echo $venda->produto->getCod() . $venda->produto->getDescricao();



