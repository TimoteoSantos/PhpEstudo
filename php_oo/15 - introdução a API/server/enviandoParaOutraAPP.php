<?php
//instanciando a classe mysqli passando parametros servidor usuario senha e bando
$conn = new mysqli("localhost","root","", "php7");

$consulta = $conn->query("SELECT * FROM USUARIO");

$data = array(); //array vazio

while($linha = $consulta->fetch_assoc())
{
    array_push($data,$linha);//inserindo dados no array $data
}
echo json_encode($data);//ao dar echo esta enviando para o cliente os dados codificados