<?php

class Login{


	//atributo estatico
	public static $nome; //PERCEBA QUE SE TRATA DE UM ATRIBUTO ESTATICO
	private $senha;
	
	//construtor	
	public function __construct(string $nome,string $senha){
	
	self::$nome = $nome;// PERCERBA A DIFERENCA DO $, É NESECESSARIO INFORMAR COMO UMA VARIAVEL.
	$this->senha = $senha; //$this-> continua normal porque aqui é um atributo private
	}
	
	public function getSenha(){
	 return $this->senha;
	}
	
	
	}
	
	//instaciando a classe
	$usuario = new Login("teste",123456);
	//mostrando o que tem em nome	
	var_dump($usuario::$nome);
	
	//mostrando o que tem senha
	var_dump($usuario->getSenha());
	










