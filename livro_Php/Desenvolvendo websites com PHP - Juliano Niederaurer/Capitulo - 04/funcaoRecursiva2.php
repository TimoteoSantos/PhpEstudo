<?php


function mostrarDezNumeros ($numero){

    if ($numero != 0){

        //escreve o numero
        echo $numero;

        //houve quantas chamadas foram nescessarias ate o numero ser igual a zero
        mostrarDezNumeros($numero - 1);
    }
}

//so houve uma chamada a funcao
mostrarDezNumeros(10);