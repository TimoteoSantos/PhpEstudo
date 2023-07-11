<?php

class Endereco
{	//atributos
	private $logradouro;
	private $numero;
	private $cidade;
	
	//metodo construtor
	public function __construct(string $a, int $b, string $c)//esse metodo magico é chamado ao instanciar a classe
	{	//atribuindo aos paramentros
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}
	
	/*
	metodo destrutor é a ultima coisa a acontecer antes de destruir o objeto
	*/
	public function __destruct()
	{
		echo "saindo" ; // acao ao ser destruido o objeto
	}
}

$endereco = new Endereco("a",1,"asdf");
unset($endereco);//destruindo o objeto $endereco
