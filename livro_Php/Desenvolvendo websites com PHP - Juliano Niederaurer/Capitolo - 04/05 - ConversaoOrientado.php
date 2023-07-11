<?php

//class converter
class converter{
	//atributo numero private
	private $numero;
	//metodo construtor ja convertendo o numerro
	public function __construct(int $numero = 0){
		//passando o numero para o atributo
		$this->numero = $numero;
		}
	//getters e setters
	public function getNumero(){
	return $this->numero;
	}
	
	public function setNumero($numero){
	
	$this->numero = (int) $numero; //ao enviar para o atributo ja converte
		
	}
	
}
//instacia a classe
$numero = new converter("20");
$num = $numero->getNumero(50);//invoca o set passando um valor
var_dump($numero);//analisa o que esta no objeto $numero

//intanciando um novo objeto
$numero2 = new converter("100");//passei o valor 10
$numero2->setNumero(50);//troquei 100 por 50

$num2 = $numero2->getNumero(); // peguei o valor do get para esse objeto
var_dump($numero2);//analisa o que esta no objeto $numero


echo "<br>" . $num + $num2;


/*
COMO PODEMOS VER NESTE EXEMPLO PODEMOS CONVERTER UM VALOR NO CONSTRUTOR OU NO SET PASSAMOS COMO STRING MAS 
FOI CONVERTIDO PARA INTEIRO, VIMOS TAMBEM QUE UMA CLASSE É UMA REPRESENTAÇAÃO DE FUNCIONALIDADE E NAO UM 
ARQUIVO DE DADOS USAMOS ELA PARA CRIAR DUAS ENTIDADES COMPLETAMENTE DISTINTAS ACESSANDO SEUS ATRIBUTOS E 
METODOS, ENTENDA QUE UMA CLASSE É APENAS UMA FERRAMENTA A INSTANCIA É QUE CONTEM OS DADOS PASSADOS PARA A CLASSE
*/


	
