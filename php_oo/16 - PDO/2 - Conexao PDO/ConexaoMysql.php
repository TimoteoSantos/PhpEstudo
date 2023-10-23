<?php

//CONECTANDO

//dentro dos parametros colocar os dados de conexao
$conn = new PDO("mysql:dbname=php7;host=localhost","root",""); //observar que o sao tres paremtros 1 banco 2 user 3 passoword


//BUSCANDO DADOS

//preparando a query
$stmt = $conn->prepare("SELECT * FROM estudantes ORDER BY NOME");
//chamado a execulção
$stmt->execute();
//criar um array dos dados buscados
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//LISTANDO

//listando todos os dados sem precisar informar a chave
foreach ($results as $dados)
{
	//para cada registro fazer isso
	foreach($dados as $key => $value)//cria uma array para cada dado, e associa as chaves
	{
		echo $key . "  |  " . $value . "<br/>";
	}

	//ao ir para outro registro criar uma linha
	echo "========================================================= <br>";
}

echo "<hr>";

//listando de forma simples porem precisa informar a chave
foreach($results as $value)
{
	echo $value["NOME"];
}
