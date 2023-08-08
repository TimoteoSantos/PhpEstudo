<?php

//criar uma funcao que inclui os arquivos
//TODOS OS ARQUIVOS DENTRO DESSA FUNCAO SERAO ENCHERGADOS PELOS ARQUIVOS QUE INCLUIREM ESSE ARQUIVO

//raiz do projeto onde deixamos neste caso as classes no contexto didatico
function incluirClasses($nomeClasses)
{
        require_once 'Pessoa.php';
        require_once 'Estudante.php';
}

//funcao que busca as classes da minha funcao incluirClasses()
spl_autoload_register("incluirClasses"); // funcao spl para registro de arquivos de classes podemos ter quantas precisarmos

/*
No exemplo a seguir o autoload busca em uma pasta especifica 
para isso usamos desta vez um funcao anonima ou seja criamos nossa funcao de forma anonima em vea de colocarmos um nome para ela
*/


//pasta responsavel por guardar nossas interfaces
spl_autoload_register(function($nomeInterface){

    if(file_exists("Interfaces".DIRECTORY_SEPARATOR.$nomeInterface.".php")){
    
        require_once ("Interfaces".DIRECTORY_SEPARATOR.$nomeInterface.".php");
    
    }

});


//require_once 'Estudante.php';
$estudante = new Estudante(50,'timoteo',10,20);// perceba que ele recebe os dados de um estudante e de uma pessoa