<?php

//recebendo os dados via get
$username = $_POST['username'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$erro = False;

//VALIDAR USUARIO

//validando o tamando dos campos senha e username
if (mb_strlen($username) < 5)
{
    echo "o username deve possuir no minimo 5 caracteres";
    $erro = True;
}

if (mb_strlen($senha) < 5)
{
    echo "a senha deve possuir mais que 5 caracteres";
    $erro = True;
}

//validar se digitou a senha e o nome do usuario iguais
if ($username == $senha)
{
    echo  "o nome do usuario e a senha devem ser diferentes";
    $erro = True;
}