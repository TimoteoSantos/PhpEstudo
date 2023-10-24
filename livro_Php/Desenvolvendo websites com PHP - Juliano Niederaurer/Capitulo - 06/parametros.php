<?php

/*
Quando estudamos funcoes aprendemos que o valor da variavel alterado dentro de uma funcao nao reflete so a variavel original
porem ao passar uma variavel por referencia esse valor é alterado na variavel original conforme mostra exemplo abaixo
https://www.php.net/manual/pt_BR/language.references.pass.php

*/

function dobro($valor){$valor = 2 * $valor;}//passagem do valor da variavel apenas o valor
function duplicar(&$valor){$valor = 2 * $valor;} //passagem de variavel por referencia

//testando tipos de paramentros valor e referencia


//variavel inicia com 5
$valor = 5;
//funcao que duplica o valor recebino no parametro nao o valor da variavel. recebendo o valor
dobro($valor);
//escrevendo o valor da valor da variavel
echo $valor . "<br>";

//funcao que duplica o valor da variavel recebendo a referencia da variavel na memoria
duplicar($valor);
echo $valor;


//ARGUMENTO PADRAO

//https://www.php.net/manual/en/functions.arguments.php

function escreverAno($ano = 2023)//se nao for enviado argumento o valor padrao sera 2013
{
    echo $ano;
}

//chamando a funcao sem argumento
echo escreverAno();

//chamando a funcao com passagem de argumento
echo escreverAno(2023)

