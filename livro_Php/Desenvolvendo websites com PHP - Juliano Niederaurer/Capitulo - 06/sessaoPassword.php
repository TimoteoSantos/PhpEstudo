<?php
session_start();

/* desenvolva um codigo que ao passar a senha e o usuario coloque na sessao o usuario
 * caso o usuario seja igual ao cadastrado assuma para usuario user e senha 123456
 *
 * */

//usuario e senha do banco
$user = 'user';
$senha = '123456';

//usuario e senha input
$userIn = 'user';
$passIn = '123456';

//verificar se sao iguais
if ($userIn == $user and $passIn == $senha)
//se for
{

    $_SESSION['user'] = 'user';

    //unset($_SESSION['user']);

   header('Location: sessao.php');

///se nao for
}else{

    echo 'senha ou usuario invalido';
}


