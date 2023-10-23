<?php

/*conexao com o sql server
OBSERVE A ConnectionPooling=0  Long polling é uma técnica
 para manter aberta uma conexão
HTTP entre um servidor web e um client.

PARA TRABALHAR COM ACINCRONO PRECISA SER 1 E NAO 0
*/

$conn = new PDO("sqlsrv:Database=EstudosPHP;
                server=DESKTOP-JNN3B4I\SQLEXPRESS;ConnectionPooling=0",
    "sa",
    "123456");

$stmt =  $conn->prepare("SELECT * FROM usuarios");
$stmt->execute();

// ---------------------------------------------------------------------------------
//pagando os dados que estao no banco
$result = $stmt->fetchAll();

//escrevendo resultados
foreach ($result as $dados)
{
    echo $dados[1] . "<br>";
    echo  $dados[2] . "<br>";
    echo "<hr>";
}
//----------------------------------------------------------------------------------