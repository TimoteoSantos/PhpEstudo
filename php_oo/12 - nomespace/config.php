<?php

/* a seguir uma função anonima que passa para o spl regiter 
   o endereco de arquivos dentro da pasta class
*/

spl_autoload_register(function($nomeclass)
{
    $dirClass = "Class"; //pasta onde estao as classes
    
    //caminho completo da classe pasta separador nome da classe e extenção
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nomeclass . ".php";//nome e camninho do arquivo

    // o nome completo do arquivo é atribuido a variavel $fileName = Class/cadastro.php por exemplo
    if(file_exists($fileName)){ //verificar se o arquivo existe
        
        require_once ($fileName);//se existir requerer o arquivo com o nome completo que recebemos
    }

});