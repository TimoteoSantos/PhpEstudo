<?php
//require o arquivo de configuracao que contem o autload
require_once("config.php");


/*
//nao preciso incluir o arquivo da classe ja vem com o config.php
$sql = new Sql();

//tenho um metodo chamado seletc que me permite fazer consultas
//me retornando a consulta em forma de array com chave e valor
//vou atribuir esse retorno a variavel estudantes
//e vou encondar com json
$estudantes = $sql->select("SELECT * FROM estudantes");

//escrevendo os dados recebido encodando em json
echo json_encode($estudantes);
//escrevendo atraves de um  foreach acessando o valor por chave nomeada

echo "<hr>";

foreach($estudantes as $estudante)
{    echo $estudante['ID']; }

echo "<hr>";

//escrevendo todos os dados por foreach
foreach ($estudantes as $estudante){

    foreach($estudante as $valor)
    {
        echo $valor . "<br>";
    }
}
*/

//instaciando o usuario perceba que nao requerimos a classe
$usuario = new Usuario;

//chamando o mmetodo loadBiId() passando o numero a ser consultado
$usuario->loadById(17);
//escrevendo o objeto como ja chamaos antes o metodo loadById temos o retorno no objeto
//e como o objeto tem um metodo magico __toString() podemos escrever o objeto em questao
echo $usuario;

