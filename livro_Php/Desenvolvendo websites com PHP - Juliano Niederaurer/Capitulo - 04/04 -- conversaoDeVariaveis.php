<?php
// conversao de variaveis 

$string = "5"; //para o php isso se trata de uma palavra
$int = "3"; // e isso se trata de um numero

var_dump($int);
echo "Eu sou uma soma entre sting". $string + $int; // estamos tentando somar uma palavra com um numero
/*o php vai tentar fazer o calculo mesmo assim porque ele vai converter de forma automatica
mesmo o php fazendo essa conversao é natural que precisaremos em algum momento realizar 
a conversao de de variaveis em php
*/

/* CONVERSORES EM PHP
int, ineger = inteiro
real, float, double = ponto flutuante
string = string
array = vetor
object = objeto*/

//EXEMPLO

echo "<br>";
$x = (string) "50";
var_dump($x);
$y = "2.35";
$soma = (int) $y + $x;
var_dump($soma);


//PRESTE ATENCAO NA NOTACAO DEPOIS DO NOME DA VARIAVEL NA HORA DE ATRIBUIR COLOCAMOS O TIPO


