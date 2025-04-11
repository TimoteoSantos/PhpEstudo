<?php
require_once 'models/Produtos.php';
require_once 'class/Produtos.php';

//invocando a classe do namespace classe
$produtos = new \classe\Produtos();
$produtos->listarProdutos();

//invocando a classe do namespace models
$produtos = new \models\Produtos();
$produtos->listarProdutos();