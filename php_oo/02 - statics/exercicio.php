<?php
/*
crie uma classe que soma dois numeros passados para metodos estaticos use uma constante para os vales padrao
*/

//classe somar
class Somar{
	//atributos
	private $numero1;
	private $numero2;
	//valor padrao atraves de constante
	const VALOR_PADRAO = 0;
	
	//metodo construtor
	public function __construct(int $numero1 = VALOR_PADRAO, int $numero2 = VALOR_PADRAO){
		//inicializando valores
		$this->numero1 = $numero1;
		$this->numero2 = $numero2;
	}

	//get e set
	public function getNumero1(){
	return $this->numero1;
	}
	public function setNumero1($numero2){
	return $this->numero2;
	}		
	
	public function getNumero2(){
	return $this->numero2;
	}
	public function setNumero2($numero2){
	return $this->numero2;
	}		
		
	/*
	NAO CONSEGUIMOS USAR O $THIS EM METODOS ESTATICOS ELES NAO TEM UM CONTEXTO EXPECIFICO COM O OBJETO
	POR ISSO PASSO NA CAMADA DA FUNCAO OS DADOS RETORNADOS DO GET 
	
	é como se eles fossem uma funcao em um arquivo separado porem colocamos dentro da classe porque faz parte do 
	contesto para chamarmos ele precisamos apenas de 
	
	NOME_CLASSE :: NOME_MEDOTO();
	
	*/
	
	//metodo que soma dois numeros
	public static function somarVariaveis($numero1,$numero2){ //recebe o valor por agrumento
	return $numero1 + $numero2; // retorna a soma
	
	}//fim do metodo estatico
	
}

//inicializar a classe Soma passando os numeros que desejamos inicializar no construtor
$somar = new Somar(1,2);
//pegando esses numeros via metodo porque sao privados
$numero1 = $somar->getNumero1();
$numero2 = $somar->getNumero2(); 

//invocando o metodo que faz a soma atraves de dados do objeto $somar
$soma = Somar::somarVariaveis($numero1,$numero2); // NOTE A FORMA DE INVOCAR ESSE METODO NAO CHAMA PELO NOME OBJETO-> CHAMA POR CLASSE::
var_dump($soma);// analisando o que esta na variavel soma

//atraves de dados aleatorios
$soma = Somar::somarVariaveis(1,1);
var_dump($soma);

//agora iremos pegar o retorno da soma e atualizar o valor do atributo $numero

$somar->setNumero2 = $soma;
var_dump($somar->getNumero2());


	
