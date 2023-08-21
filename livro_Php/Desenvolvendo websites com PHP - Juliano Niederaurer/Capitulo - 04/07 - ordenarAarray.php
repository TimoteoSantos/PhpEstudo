<?php
	/*observe que nao foi colocada a chave apenas os valores,
	as chaves serao as posicoes dos dados nos arrays
	CADA VALOR ESTA CONTIDO EM UMA POSICAO COMECANDO DO ZERO
	*/
	
	$alunos = array ('timoteo','tiago','taiza','tacisio','tamires','taina');
	
	//ORDENAR ARRAY DE AZ
	sort($alunos);
	foreach ($alunos as $dados){
	echo "</br> uso o (sort() ordeno em ordem crescrente =>". $dados;
	}
	
	//ORDENAR ARRAY DE ZA
	rsort($alunos);
	foreach ($alunos as $dados){
	echo "</br> uso o (rsort() ordeno em ordem decrescrente ordem reversa =>". $dados;
	}
