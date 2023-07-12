<?php

//cria a classe
Class User{

	//atributos
	private $nome;
	private $senha;
	public $idade;

	//metodo construtor
	//ao criar um metodo construtor é obrigatorio inicializar os valores
	public function __construct($nome, $senha){

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

	//criar funcao para retornar todos os dados
	public function mostrarDadosObjeto(){

		return $nome =  $this->idade;
	}
}


//O NOME E A SENHA SAO OBRIGATORIOS PORQUE ESTAO NO METODO CONSTRUTOR JA A IDADE NAO É OBRIGATORIO
// ISSO SIGNIFICA QUE TODO OBJETO DA CLASSE USER TEM SENHA E NOME, MAS A IDADE NAO.

//instaciando a classe sem passar valor porque o metodo construtor tem valores padrao
//se nao tivesse teriamos que passar por argumento na hora de instanciar
$usuario = new User('Timóteo',1);


//PUBLICO
//como o metodo foi declarado como publico podemos acessar os valores diretamente
$usuario->idade = 20; // atribuindo dados ao atributo diretamente porque ele é publico
echo "Acessei diretamente o metodo porque eu posso, sou publico e atribui - > " . $usuario->idade . " <br> "; //mostrando o valor do atributo diretamente porque ele é publico


//PRIVADO
/* para acessar atributos privados precisamos invocar os metodos get e set porque sao metodos publicos
que acessam os atributos, o set atribui valor porque tem essa regra dentro dele e o get consulta o que esta no atributo 
porque tem um retorno do get dentro dele
*/
echo "Quando eu fui criado me chamava ->" . $usuario->getNome() . "<br>";
$usuario->setNome("Tiago"); //trocando o nome do atributo para tiago
echo "Meu nome agora é -> " . $usuario->getNome() . "<br>";//escrevendo o novo nome
