<?php
//conexao com mysql
$conn = new PDO("mysql:dbname=php7;host=localhost","root",""); //observar que o sao tres paremtros 1 banco 2 user 3 passoword

//dados a serem inseridos
$dados = array(
    "nome" => "timoteo",
    "idade"=>10,
    "altura"=>2.5,
    "peso"=>45.50
);

//preparando a query
    $stmt = $conn->prepare("INSERT INTO estudantes
                                (NOME,IDADE, ALTURA, PESO)
                                VALUES
                                (:NOME,:IDADE,:ALTURA,:PESO)");

    //associando um parametro do insert a uma variavel que contem os dados
    $stmt->bindParam(":NOME", $dados['nome']);
    $stmt->bindParam(":IDADE", $dados['idade']);
    $stmt->bindParam(":ALTURA", $dados['altura']);
    $stmt->bindParam(":PESO", $dados['peso']);

    //envia para o banco de dados
    $stmt->execute();

