<?php

//classe aluno
public Aluno {

	//atributos
	private $nome;
	private $sobrenome;

	//eu inicializo os atributos
	public function __construct(string $nome, string $sobrenome){
		//atribuindo os parametros ao atributo
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;

	}

	//metodos
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->$nome = $nome;
	}
}