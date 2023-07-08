<?php

//cria a classe
Class User{

	//atributos
	private $nome;
	private $senha;

	//metodo construtor
	//ao criar um metodo construtor é obrigatorio inicializar os valores
	public function __construct($nome = 0, $senha = 1){

	$this->nome = $nome;
	$this->senha = $senha;
	}

	//get e set
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	//retornar todos os dados da classe
	public function exibir(){
		//retornando um array com os dados 
		return array (
			"nome"=>getNome(),
			"senha"=>getSenha()
		);

	}

}
//instaciando a classe sem passar valor porque o metodo construtor tem valores padrao
//se nao tivesse teriamos que passar por argumento na hora de instanciar
$usuario = new User();

$usuario->getSenha();
