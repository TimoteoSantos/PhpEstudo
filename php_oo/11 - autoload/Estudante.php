<?php

require_once 'autoload.php';

class Estudante extends Pessoa implements IEstudante
	{	
		//atributos que pertencem apenas aos estudantes
		public $matricula;
		
		//metodo construtor de estudante passando o valor recebido da matricula para o atributo matricula
		public function __construct($maticula,$nome,$idade,$senha){//perceba que ele recebe o valor tambem do construtor de pessoas
			$this->matricula = $maticula;//atribuindo a matricula
			parent::__construct($nome,$idade,$senha);//enviando para o parent::construtor de pessoa
		
		}

			public function anoNascimento()
			{
				$ano = date("Y");
				return $ano - $this->idade;

			}

	}


//instanciando a classe estudante
$estudante = new Estudante(50,'timoteo',34,20);// perceba que ele recebe os dados de um estudante e de uma pessoa
echo "Aluno nasceu aproximadamente no ano de ". $estudante->anoNascimento();
print " </br> Tenho acesso a senha porque getSenha() é publico eu nao tenho acesso a 'this->senha' porque ele é privado  Estudante->getSenha(" . ($estudante->getSenha() . ")"); //A CLASSE NAO TEM TOSTRING