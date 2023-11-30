<?php
    //trabahando com funcoes recursivas
    //sao funcoes que chamam ou invocam a elas mesmas

    //criando uma funcao para testar a recussividade
    function teste($valor)
    {
        //a funcao recebe o valor e verifise ele diferente de  zero
        if($valor != 0)
        {   //se ele for diferente de zero ele escrebe esse trecho
            echo "foi chamada a funcao teste passando o valor $valor <br>";
            //chama a funcao teste
            teste($valor -1);
        }//sai do if

    }
    teste(7);