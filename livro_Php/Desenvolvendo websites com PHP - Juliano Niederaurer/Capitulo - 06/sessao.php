<?php
//inicia a sessao
session_start();


//se existir usuario valores na posição usuario escreve o usuario
if($_SESSION['user'])
{
    echo $_SESSION['user'];
}