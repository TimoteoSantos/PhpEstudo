<?php

//usando funcao recursiva para calculo de fatorial de um numero

function fatorial ($numero){

    //nao existe fatorial de numeros negativos
    if($numero<0){return -1;}
    //se o fatorial for 1 sempre sera 1 pois o fatorial de 1 é 1
    if($numero<=1){return 1;}

    //retorna os dados da funcao usada recursivamente

    $retorno = $numero*fatorial($numero - 1 );

    return $retorno;
}

echo fatorial(1);