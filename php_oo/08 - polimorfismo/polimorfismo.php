<?php
	
	//nao podemos instanciar a classe animal ela é abstrata
	abstract class Animal
	{
		public function andar()
		{
			echo "estou andando";
		}

		public function respirar(){
			echo "estou respirando";
		}
	}

	class Peixe extends Animal{

		public function Andar()// o metodo foi Andar() foi sobrescrito por esse o comportamento sera esse
		{
			echo "estou nadando";
		}
	}

	$peixe = new Peixe;
	$peixe->andar();//o metodo retornado sera o da classe peixe
	$peixe->respirar(); //o metodo retornado sera o da classe animal