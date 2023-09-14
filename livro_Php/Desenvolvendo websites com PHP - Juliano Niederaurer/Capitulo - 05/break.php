<?php
//comandos de controle de fluxo 

/*

o break termina a execução do comando atual, que pode ser ser for, foreach, while ou switch
quando é encontrado um break o comando é parado
*/

for($i=0;$i<10;$i++)
{
    if($i == 5){
        break;
    }
    echo $i; //so vai imprimir ate 4 porque quando chegar no 5 vai fazer um break
}

