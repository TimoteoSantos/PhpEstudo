<?php

// funcoes recursivas sao funcoes que chamam elas mesmas

//uma funcao que recebe um valor como parametro
function teste ($valor) {

    //verifica se um valor é diferente de zero
    if ($valor != 0){
        //escreve o valor 
        echo "Foi chamada a funcao teste passando o valor $valor <br>";

        //ao entrar nessa funcao verifica se o valor informado é zero
        //quando nao é zero a funcao chama ela mesma 
        //verificando novamente se o valor for zero ela nao entra mais no if por isso nao chama mais a funcao
        
        teste($valor -1);
    }
 
}


teste(7);