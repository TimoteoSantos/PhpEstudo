<?php

//CLASSE PARA INSTANCIA UM TIPO DE PESSOA
class Pessoa
{
	//METODOS
	//public qualquer lugar que instacie a classe
	public $nome = "Ramus Lerdof";
	//portected dentro e herdado 
	protected $idade = "56";
	//private apenas a classe nao faz parte da classe herdada
	private $senha = "123456";

	//metodo privado so é acessado dentro da classe
	private function acessoDados(){
		echo "Posso ver os dados diretamente estou dentro da classe" . "</br>";
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
	
	/*metodo verDados que acessa um metodo privado e consegue ser visto 
	externamente mas o que vemos é o ver dados nao o acessoDados()
	ultil quando temos um metodo que so pode ser acessado pela classe ou que no contexto nao faz sentido
	ser acessado de fora é apenas para uma regra de negocio da classe E NAO É NESCESSARIO ACESSA-LO DE FORA
	PRESTE ATENCAO: METODOS STATICOS PRECISAM SER PUBLICOS ELES SAO CHAMADOS DIRETAMENTE
	*/
	public function verDados(){
	$this->acessoDados();
	}	
}
/*CLASSE PARA INSTANCIAR UM PROGRAMADOR QUE É UM TIPO DE PESSOA KKKK
OBSERVER: A CLASSE PROGRAMADOR HERDA TUDO DE PESSOA EXCETO O QUE ESTIVER EM PRIVATE OU SEJA acessoDados() e senha
*/

class Programador extends Pessoa{

	//metodo que muda a idade ele consegue acessar porque protected é herdado de Pessoa tem acesso direto
	public function alterarIdade($idade){
	$this->idade = $idade;
	}
	
	//nao consegue alterar a senha porque so quem consegue acessar é a classe pai a que foi extendida
	public function alterarSenha($senha){
	$this->senha = "321";
	}
}
//ao instanciar a classe programador ja temos todas as ferramentas de pessoa
$objeto = new Programador();//por didatica os dados foram definidos nos valores na classe Pessoa

$objeto->nome = "timoteo"; //troquei o valor atraves da classe programador
$objeto->alterarIdade(20);//a classe Programador consegue alterar a idade metodo da classe programador
$objeto->alterarSenha(123455); //metodo da classe programador tem acesso a atributos protected
//metodo da chasse Pessoa
$objeto->verDados();




