<?php

//criando a classe
Class Telefone{

	//criando os atributos
	private $telefone;

	//metodo construtor
	public function __construct($telefone=10){
		//metodo inicializa o atributo
		$this->telefone = $telefone;
	}

	//get do atributo posso ate formatar o numero antes de exibir
	public function getTelefone(){
		return $this->telefone;
	}

	//set atributo posso ate formatar o numero antes de gravar
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

}

//instaciando a classe Telefone
$telefone = new Telefone();
//invocando o metodo set para adicionar valores
$telefone->setTelefone(50);
//invocando o metodo get para pegar o valor
echo $telefone->getTelefone();
