<?php

//classe conexao mysql
class Conexao
{
	private $host;
	private $usuario;
	private $senha;
	private $banco;
	private $conexao;

	//metodo construtor inicaliza os metodos ao instanciar a classe conexao
	public function __construct(string $host,string $usuario, string $senha, string $banco){

		//enviado os dados para os metodos do objeto
		$this->host = $host;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->banco = $banco;
	}

	public function conectar(){
		//insere dentro do atributo conexao uma conexao 
		//passando os dados para o mysqli_conect que é uma funcao de conexao com os argumentos do acesso ao banco
		$this->conexao = mysqli_conect($this->host,$this->usuario,$this->senha,$this->banco);

	if(mysqli_connect_errno($this->conexao)){//testando se conectou
		return false;
	}else{
			mysqli_query()
		}

	}

}