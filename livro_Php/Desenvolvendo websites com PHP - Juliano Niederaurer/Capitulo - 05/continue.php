<?php
//comandos de controle de fluxo 

/* comando continue interrompe um laço porem nao para o scritp ele apenas volta para
onde estava o laço.*/

for($i=0;$i<10;$i++)
{
    //saber se o resto da divisao e zero
    if($i % 2 != 0){
    continue;//se nao for zero vai voltar para o for nao vai execultar os comandos depois dele
    }
    echo $i; //escreve os numeros pares
}

