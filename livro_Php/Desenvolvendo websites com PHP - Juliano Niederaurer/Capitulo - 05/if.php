<?php

//if elseif

$idade = 1;

if($idade > 10)//sera execultado esse embora possam exitir outras condicoes true ele vai execultar o primeiro true
{
    echo 'a idade é de' . $idade . 'anos';
}elseif($idade == 5)
{
    echo 'a idade é de '. $idade. 'anos';

}elseif($idade === 15)
{
    echo 'a idade é igual a 15';
}else
{
    echo  'nenhma condicao anterior atendida';

}