<?php
//conexao com mysql
$conn = new PDO("mysql:dbname=php7;host=localhost","root",""); //observar que o sao tres paremtros 1 banco 2 user 3 passoword

//dados a serem inseridos
$dados = array(
    "nome" => "TAIZA SIMIAO SANTOS",
    "idade"=>20,
    "altura"=>2,
    "peso"=>4,
    "id"=>4
);

//preparando a query
    $stmt = $conn->prepare("UPDATE estudantes 
                                SET NOME = :NOME,IDADE = :IDADE, ALTURA = :ALTURA, PESO = :PESO
                                WHERE ID =  :ID
                                ");

    //associando um parametro do insert a uma variavel que contem os dados
    $stmt->bindParam(":NOME", $dados['nome']);
    $stmt->bindParam(":IDADE", $dados['idade']);
    $stmt->bindParam(":ALTURA", $dados['altura']);
    $stmt->bindParam(":PESO", $dados['peso']);
    $stmt->bindParam(":ID",$dados['id']); //nao esqueca de associar todos os parametros nao passar direto para a query

    //envia para o banco de dados
    $stmt->execute();

