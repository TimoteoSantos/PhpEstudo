<?php

//classe pessoa
Class Pessoa{

    public $nome;
    
    public function __construct(String $nome){
        $this->nome = $nome;
    }
}

$pessoa = new Pessoa("TIMOTEO");
echo $pessoa->nome;