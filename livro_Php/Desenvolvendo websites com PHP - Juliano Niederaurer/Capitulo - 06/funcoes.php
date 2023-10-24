<?php

//criando funcoes em php
function calcularDoisNumeros($numero1,$numero2)

{
    //retorno da funcao
    return $numero1 + $numero2;
}

echo calcularDoisNumeros(1,2);


//retornando um vetor

function clubes()
{
    $clubes [] = 'Gremio';
    $clubes [] = 'Palmeiras';
    $clubes [] = 'Flamengo';

    return $clubes;
}

//chamando a funcao
$clubes = clubes();

//PERCORRENDO COM FOREACH

//percorrendo valores
foreach($clubes as $valor)
{   //escrevendo dados
    echo $valor;

}

//PERCORRENDO COM FOR

//chamando a funcao
$nomes= clubes();

//percorrendo com for
for($i=0;$i < sizeof($nomes);$i++)
{

    echo $nomes[$i];
}