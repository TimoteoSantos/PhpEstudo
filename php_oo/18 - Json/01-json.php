<?php

function retornandoJson(){
	
	$array = 
	[
		"matricula" => 1,
		"nome" => 'TIMOTEO'
	];
	
	return json_encode($array);
}

$retorno = retornandoJson();

$retorno2 = json_decode($retorno);

foreach ($retorno2 as $dados){
	
	echo $dados;
}	