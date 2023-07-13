<?php

class Pessoa
{
	//METODOS
	//public
	public $nome = "Ramus Lerdof";
	//portected 
	protected $idade = "56";
	//private
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

//INSTANCIANDO A CLASSE

$objeto = new Pessoa();//por didatica os dados foram definidos nos valores

/*acessar o atributo $objeto->nome (public $nome),
ira conseguir acessar pois o atributo é publico

O MODIFICADOR DE ACESSO PUBLICO É VISIVEL TANTO DENTRO DA CLASSE QUANTO FORA DELA 

PARA ACESSAR BASTA BUSCAR DENTRO DO OBJETO O ATRIBUTO DIRETAMENTE COM -> ($OBJETO->ATRIBUTO OU METODO)
*/
echo "Estou vindo diretamente do atribulo ->". $objeto->nome . "</br>"; // Acessando de fora diretamente

/* acessando um atributo protected nem private de fora da classe diretamente

NÃO É POSSIVEL ACESSAR DIRETAMENTE UM ATRIBUTO OU METODO PROTECTED NEM PRIVATE DIRETAMENTE DE FORA DA CLASSE

PROTECTED: SO QUEM PODE ACESSAR ESSE UM ATRIBUTO OU METODO PROTECTED DIRETAMENTE É A PROPRIA CLASSE OU QUEM HERDA DELA
PRIVATE: APENAS A PROPRIA CLASSE CONSEGUE ACESSAR DIRETAMENTE OS ATRIBUTOS E METODOS PRIVATE.
*/

//se quiser testar so desconmentar

//echo $objeto->idade;//nao é possivel acessa-lo de fora diretamente
//echo $objeto->senha;//nao é possivel acessa-lo diretamente de fora

/*CHAMANDO UM METODO QUE ESTA DENTRO DA CLASSE E TEM ACESSO DIRETO AOS ATRIBUTOS 
OBSERVE: O METODO NAO ESTA PASSANDO PELO GET ELE APENAS ACESSA OS DADOS DIRETAMENTE
*/
//invocando um metodo que esta dentro da classe acessando diretamente os atributos independente do seu modificador
$dados = $objeto->verDados();





