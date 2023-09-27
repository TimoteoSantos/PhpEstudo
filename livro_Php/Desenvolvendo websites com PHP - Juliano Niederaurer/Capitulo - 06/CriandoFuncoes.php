<?php

//criando uma funcao sem retorno em php

//uma funcao que recebe o numero(argumento) de vezes(loop) que vai escrever na tela
function repitaNumeros($numeroDeVezes)
{

    for ($i=0;$i<=$numeroDeVezes;$i++)
    {
        echo $i;
    }
}
//chamando a funcao
repitaNumeros(100);//enviamos via argumento o que precisarmos que a função use como dados