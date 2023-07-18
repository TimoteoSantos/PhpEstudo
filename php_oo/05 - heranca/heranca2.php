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
	
	//HERANCA (UM ESTTUDANTE É UMA PESSOA) QUE TEM A DIFERENCA QUE TEM MATRICULA TEM A ACAO DE LER LIVRO
	//ENTAO IREMOS USAR A CLASSE PESSOA JA QUE ELA PODE SER UTIL PARA QUALQUER TIPO DE PESSOA NO SISTEMA
	
	class Estudante extends Pessoa
	{	
		//atributos que pertencem apenas aos estudantes
		public $matricula;
		
		//metodo construtor de estudante passando o valor recebido da matricula para o atributo matricula
		public function __construct($maticula,$nome,$idade,$senha){//perceba que ele recebe o valor tambem do construtor de pessoas
			$this->matricula = $maticula;//atribuindo a matricula
			parent::__construct($nome,$idade,$senha);//enviando para o parent::construtor de pessoa
		
		}
	}


//instanciando a classe estudante
$estudante = new Estudante(50,'timoteo',10,20);// perceba que ele recebe os dados de um estudante e de uma pessoa

print " </br> Tenho acesso a senha porque getSenha() é publico eu nao tenho acesso a 'this->senha' porque ele é privado  Estudante->getSenha(" . ($estudante->getSenha() . ")"); //A CLASSE NAO TEM TOSTRING