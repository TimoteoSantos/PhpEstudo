<?php
/*
 * Transação é uma analise se todas querys deram certo se alguma nao der certo
 * irá ser desfeito todo  o  processo, imagine em um sistema bancario
 * se a transferencia nao for recebida na outra conta o dinheiro volta
 * porque nao foi completo todo o processo *
 * */

//conexao com mysql
$conn = new PDO("mysql:dbname=php7;host=localhost", "root", "");

//A transação esta amarrada a conexão

//AQUI ESTAMOS INICIANDO UMA TRANSAÇÃO
$conn->beginTransaction();

/*AO INICIAR A TRANSAÇÃO PRECISAMOS FAZER TODAS AS QUERYS E DEPOIS FAZER
 * $conn->rollBack();
 * E
 * $conn->commit();
*/

//dados recebidos
$id = 19;
//preparando a query
$stmt = $conn->prepare("DELETE FROM  estudantes WHERE ID = ?"); //nao passar dados diretamente usar parametros

//associando um parametro a um valor
$stmt->execute(array($id)); //se tivessemos outros dados para enviar poderiamos separar por virgula para cada interrogação

//AQUI ESTAMOS CANCELANDO UMA TRANSAÇÃO
$conn->rollBack();
//AQUI ESTAMOS CONFIRMANDO UMA TRANSAÇÃO
$conn->commit();

//SO AJUSTAR A CADA NESCESSIDADE DE CODIGOS