<?php
//if sem chaves

$prova = 7;
$prova2 = 5;
$nota = ($prova+$prova2)/2;


if ($nota < 3)
	$desempenho = 'PESSIMO';
elseif($nota < 5)
	$desempenho = 'RUIM';
else
	echo 'a nota foi de ->' .$nota;
