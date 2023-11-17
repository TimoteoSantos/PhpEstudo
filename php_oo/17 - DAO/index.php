<?php
//require o arquivo de configuracao que contem o autload
require_once("config.php");

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