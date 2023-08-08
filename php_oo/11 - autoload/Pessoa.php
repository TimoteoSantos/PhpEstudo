<?php

class Pessoa
{
	//METODOS
	//public
	public static $nome;
	//portected 
	protected $idade;
	//private
	private $senha;
	
	public function __construct($nome, $idade, $senha){
		self::$nome = $nome;
		$this->idade = $idade;
		$this->senha = $senha;	
	}
	
	public function getSenha(){
	
	return $this->senha;
		
	}
	
	//metodo privado so é acessado dentro da classe
	private function acessoDados(){
		echo "Posso ver os dados diretamente estou dentro da classe" . "</br>";
		echo self::$nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
	
	//metodo ver dados, os objetos externos conseguem ver os dados sem chamar o atributo pode chamar pelo toString tambem
	public function verDados(){
	$this->acessoDados();
	}
	
	public function __toString(){
		return  "nome -> " . self::$nome . " -> Idade -> " . $this->idade . " Senha - >" . $this->senha;

	}
	
}//FIM DA CLASSE PESSOA PARA USAR EM QUALQUER TIPO DE PESSOA	