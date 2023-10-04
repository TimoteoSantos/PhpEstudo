<?php

//instanciando a classe mysqli passando parametros servidor usuario senha e bando
$conn = new mysqli("localhost","root","", "php7");

//verifcando se existe erro
if($conn->connect_error){
    //se deu erro escrever erro na tela
    $conn->connect_eror;
}

//FAZENDO INSERT COM A CLASSE MYSQLI

//precisamos preparar os dados antens de enviar para o mysql
//chamando um paramentro do objeto chamado prepare
/*

1º precisamos preparar o comando sql para enviar para o bd
2º depoir dizemos quais os tipos de dados que iremos enviar para o bd
3º depois execultamos o comando
*/

$nome = 'tiago';
$senha = 123456;

//prepanado o comando
$stmt = $conn->prepare("INSERT INTO USUARIO (NOME,SENHA)VALUES(?,?)");
//dezendo que tipo de dado sao cada valor que sera enviado
$stmt->bind_param("ss",$nome,$senha);//NAO PODE MANDAR OS DADOS DIRETOS SO POR REFERENCIA
//execultando o comando no bd
$stmt->execute();//metodo que execulta o que estiver em $stmt

//PODERIAMOS FAZER UM LOOP AQUI APENAS COM O EXECUTE POR EXEMPLO

//perceba que agora o execute esta guardando a consulta poddo adicionar mais dados apenas trocando 
//os valores das variaveis
$nome = 'Theo';
$senha = 1;
$stmt->execute();//metodo que execulta o que estiver em $stmt

//perceba que agora o execute esta guardando a consulta poddo adicionar mais dados apenas trocando 
//os valores das variaveis
$nome = 'Taiza';
$senha = 31;
$stmt->execute();//metodo que execulta o que estiver em $stmt


// FAZENDO SELECT COM A CLASSE MYSQLI

/*PARA ISSO USAMOS O METODO query(), com esse metodo podemos buscar dados atraves de um select ele vai retornar
os dados podemos entao guardar esse resultado em uma variavel e depois escrever ou ultilizar esses dados
*/

$consulta = $conn->query("SELECT * FROM USUARIO");

while($linha = $consulta->fetch_array())
{
    echo $linha['ID']. "<BR>    ";
    echo $linha['NOME']. "<br>";
    echo $linha['SENHA'] . "<br>";
}


