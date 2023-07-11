<?php

//variavel de escopo global
$num = 5000;

function testeEscopo(){

	global $num; // essa variavel nao veio por argumento ela esta no escopo globar por isso usamos a palabra reservada global

	//+= pega o valor da variavel e atribui o que estiver a esquerda 
	//nesse exemplo estamos atribuindo o valor da variavel $num = $num + 5;
	$num += 5;
	//retornar o valor
	return $num; 
}

echo testeEscopo();//ESCREVE O RETORNO DA FUNCAO
echo $num . "<br>"; // VARIAVEL GLOBAL TAMVEM SOFRE ALTERACAO