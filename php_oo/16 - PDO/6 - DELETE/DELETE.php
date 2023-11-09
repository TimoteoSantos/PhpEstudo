<?php

//conexao com mysql
$conn = new PDO("mysql:dbname=php7;host=localhost", "root", "");

//dados recebidos
$id = 17;

//preparando a query
$stmt = $conn->prepare("DELETE FROM  estudantes WHERE ID = :ID"); //nao passar dados diretamente usar parametros
//associando um parametro a um valor
$stmt->bindParam(":ID", $id);
//envia para o banco de dados
$stmt->execute();