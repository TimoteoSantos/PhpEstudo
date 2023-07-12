<?php
/*
crie uma classe chamada aluno 
com nome e idade
crie um metodo contrutor destrutor e to string 
atributos privados e crie um metodo estatico que mostra o nome e idade o nome e estatico
*/

class Aluno
{

	public static $nome;
	private $idade = 10;
	private const VALOR = 10;
	
	public function __construct($nome, $idade)
	
	{
	self::$nome = $nome; //cuidado ao usar sel:: nao é uma variavel
	$this->$idade = $idade;			
	}
	
	/*O METODO MAGICO toString() retorna os valores do objeto como string quano 
	o objeto é impresso na tela exemplo:
	
	SE TENTARMOS DAR UM ECHO EM UM OBJETO QUE NAO TEM TOSTRING ELE MOSTRARA UM ERRO MAS SE TIVER
	UM TOSTTRING ELE VAI EXIGIIR O QUE FOR INFORMADO NO TOSTRING	
	*/
	public function __toString() //metodo magico que mostra os dados de um objeto como uma string
	{
	
	//ele precisa de um retorno porque o sentido desse metodo é retornar valores como string (valores do objeto)
	return 	self::$nome. " - " .  $this->idade . " - " .   self::VALOR; //OBSERVE QUE A CONSTANTE FOI CHAMADA IGUAL O METODO STATIC
		
	}
	
	//GETTER E SETTERS
	public function getIdade()
	{
	return $this->idade;
	}
	public function setIdade($idade)
	{
	$this->idade = $idade;
	}
	
	public static function verIdade()
	{
	return $this->getIdade();
	}
	
}
//acesso direto sem instanciar a classe porque estou usando atributo statico
Aluno::$nome = 'timoteo';
var_dump(Aluno::$nome);

Aluno::verIdade();

$aluno = new Aluno("timoteo",22);

echo $aluno; // NAO ULTILIZAR ()

