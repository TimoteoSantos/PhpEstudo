<?php

/*

preciso que faca uma lista de zero a 100 mostrando apenas numeoros pares 
ao encontrar um numero par deve mostrar dois numeros sucessores desse numero e ir para o prosimo
colocar os numeos pares dentro de um array e depois usar foreach pra percorrer 
*/

//variaveis
$array = array();
$sucessorEscrecer = array();
$sucessor = 1;

//for para percorrer o  100 numeos
for ($numero=0;$numero<=100;$numero++)
{
	//usando o mod para saber se é par
	$par = $numero % 2;
	//verificando se é par
	if ($par == 0)
	{	//se for guardar em um vetor
		$array[$numero] = $numero;
		
		//for para calcular os dois numeros sucessivos
		for($i = 1 ; $i <= 2;$i++)
		{
			//calculando o sucessor o sucessor é igual ao numero que estamos verificando mas a posicao de i que pode ser 1 ou dois
			$sucessor = $numero  + $i;
			//guarda esse valor em um array
			$sucessorEscrecer[$i] = $sucessor;
			
		}
		//escreve nas duas posicoes possiveis de i
		echo "O primeiro sucessor de  [ ". $numero ." ] =>". $sucessorEscrecer[1] . " ] ";
		echo "O segundo sucessor de ". $numero ."=>". $sucessorEscrecer[2] . " ] ";

		
	}
}

//usando o foreach para escrever os numeros pares
foreach($array as $escrever)
{
	echo $escrever;
}

