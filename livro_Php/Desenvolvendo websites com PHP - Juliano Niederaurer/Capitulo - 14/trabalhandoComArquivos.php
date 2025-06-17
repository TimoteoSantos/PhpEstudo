<?php

use PhpParser\Builder\Class_;

//tentar abrir o arquivo se nao existir cria um
$arquivo = fopen('arquivo.csv', 'a+');

Class Arquivos{
    function escreverArquivo($arquivo,$contador){
        //adidionar daddos ao arquivo
        fwrite($arquivo, "$contador\n");
    }
    function lerArquivo($arquivo)
    {
        if($arquivo){
            while (($linha = fgets($arquivo)) !== false){
                echo $linha;
            }
        }
    }

}//fim da classe

$ArquivoObjeto = new Arquivos;

$ArquivoObjeto->lerArquivo($arquivo);