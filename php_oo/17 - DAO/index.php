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

//TRAS UM USUARIO

//chamando o mmetodo loadBiId() passando o numero a ser consultado
//$usuario->loadById(1);
//escrevendo o objeto como ja chamaos antes o metodo loadById temos o retorno no objeto
//e como o objeto tem um metodo magico __toString() podemos escrever o objeto em questao
//echo $usuario;

//TRAS TODOS OS USUARIOS

//como o metodo getList() é estatico nao precisamos isntaciar o objeto estamos acessando diretamente
//atraves de $lista apenas colocamos o nome da classe :: e o nome do metodo (classname::metodoname)


//atribuindo a variavel $lista o metodo getList() da classe Usuario
 //$lista = Usuario::getList();
 //dando um echo json_encode() no array recebido
 //echo json_encode($lista);

//$lista2 = $usuario->search("tim");
//echo json_encode($lista2);

//metodo para saber se usuario e senha sao iguais aos passados para classe usuario
//$usuario = new Usuario;
//$usuario->login("timoteo","123");
//echo $usuario;//escreve o tosting


//inserindo dados no banco
$usuario = new Usuario;
$usuario->setNome("tiago");
$usuario->setSenha('123');
$usuario->Insert();
echo $usuario;