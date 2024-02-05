<?php

function exploder($barras)
{
	//a funcao explode separa uma string a partir de um separador
	//veremos adiante o uso de uma string que tem o simbolo de | onde 
	//separamos codigos de barras
    //usando a funcao explode para separar a string
     return $dividido = explode('|',$barras);
}
     //dados a serem explodidos
     $barras = '789|7543 | 8877'; //PERCEBA QUE EXISTE UM ESPACO NA ULTIMA POSICAO PODEMOS USAR A FUNCAO trim() PARA RETIRAR ESSES ESPACOS
     
     $dividido = exploder($barras);
     
     
     foreach ($dividido as $dados)
     {
     	echo trim($dados);
     }
     
     
     
     