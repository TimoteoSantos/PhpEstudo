<?php

/*

1. se uma classe tiver um namespace so é possivel chamar ela por ele
2. se uma classe tem um namespace e se chamar sem namespace vai chamar a que nao tem

*/
require_once 'model/Produtos.php';
require_once 'controller/Produtos.php';

//com namespace
$produto = new \models\Produto("nome", "valor");
echo $produto->Produto();

//sem namespace
$produto = new Produto("nome", "valor");
echo $produto->Produto();