<?php

	// criando um array 
	$variavel = array ("chave"=>"valor"); //essa é uma das formas de escrever um array de dados
	
	//escrevendo um array
	echo $variavel['chave'];
	
	//APLICACAO EM CHAVE ASSOCIATIVA
	$compras = array ("fruta"=> "maca", "sereal" => "arroz", "limpeza" => "sabao em po");
	
	echo "<br>" . $compras["fruta"]; //escrevendo a chave fruta
	echo "<br>" . $compras["sereal"]; //escrevendo a chave sereal
	echo "<br>" . $compras["limpeza"];//escrevendo a chave limpeza
		
	/*	como podemos observar um array pode conter varios valores dentro dele e para que possamos ver o que esta
		contino neles precisamos apenas indicar qual o indice queremos ver	
	*/
	
	//OUTRA FORMA DE ESCREVER ARRAY
	
	//observe que nao foi colocada a chave apenas os valores, as chaves serao as posicoes dos dados nos arrays
	$alunos = array ('timoteo','tiago','taiza','tacisio','tamires','taina');//cada valor representa um numero começando por zero
	
	/*obser a diferenca entre escrever um array e ler ele
	ao escrever usamos parenteses e ao ler usamos colchetes*/
	
	echo $alunos[0];//vai retornar timoteo
	
	//funcao que conta quantas posicoes existem em um array existem duas
	//usando sizeof()
	echo sizeof($alunos);
	//usando count()
	echo count($alunos);
	
	//o foreach percorre o array e mostra todos os dados	
	foreach ($alunos as $dados){//ele recebe o array e onde tem as é o que recebe a interacao pode fazer o que precisar com ele
	//encontrar uma string dentro de um array
	if($dados == 'timoteo')echo "</br>" . $dados;
	}
	
	foreach ($compras as $carregar){
	echo "</br>" . $carregar;
	
	}

	//destruindo a variavel apos finalizar o foreach
	//unset($carregar); caso queira destruir a variavel do foreach apos terminar a execulsão

	echo "</p>";
	
	echo '$alunos = array (timoteo,tiago,taiza,tacisio,tamires,taina)' . "</br>";
	
	//USANDO FOR	
	//pegar o tamanho do array
	$tamanho = sizeof($alunos);
	//interagindo com o array pelo $tamanho que é a quantidade de posicoes no array $alunos	
	for ($i=0;$i < $tamanho; $i++){
	//a cada posicao troca o valor da chave
	echo "</br> no indece [" . $i . " ]". "temos o valor de [".  $alunos[$i] . "]";
	}
	
	
	
	
	
