<?php

class Documento 

{
	//atributo
	private $numero;
	
	//CONSTRUTOR DA CLASSE DOCUMENTOS 
	public function __construct($numero){
	
	$this->numero = $numero;
	
	}
	
	//getter e setters
	public function getNumero()
	{
	return $this->numero;
	}
	
	public function setNumero($num)
	{
	$this->numero = $num;	
	}
	
	
}
	//HERANCA	
	class CPF extends Documento 
	{	
		public $modelo; //como se fosse cpf ou sic
		
		public function __construct($modelo)
		{
		$this->modelo = $modelo;
		}
		
		//valicar cpf
		public function validar()
		{
		echo $this->getNumero();
		
		}
	}
	
	
	/*
	
	ao extender uma classe se a classe mae tiver um costrutor ele é obrigatorio na classe filha
	se a classe filha tiver um construtor vc pode usar parent
	
	
	class ClasseMae {
    public function __construct($parametro) {
        // código do construtor da classe mãe
    }
}

class ClasseFilha extends ClasseMae {
    public function __construct($parametro, $outroParametro) {
        parent::__construct($parametro); // chamando o construtor da classe mãe
        // código do construtor da classe filha
    }
}

// Instanciando a classe filha
$instancia = new ClasseFilha($parametro, $outroParametro);


*/
	

	$doc = new CPF(10);
	
	$doc->getNumero();
	echo $doc->modelo;
	
	$doc->validar();
	
	
