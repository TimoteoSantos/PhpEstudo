<?php

/*--------------------------------------------------------------*/
//pegando a data atual com ano de 4 digitos
$dataAtual = date ("d/mY" , time());

echo $dataAtual;

echo "<br>";

//pegando apenas o ano
//voce pode pegar o dia mes ou ano
$ano = date ("Y" , time());
//escrevendo o ano
echo $ano;

/*------------------------------------------------------------*/

//PEGANDO DATA COM ORIENTACAO

class Data{
	public $dataAtual;
	public $ano;	
	
	public function pegarData(){
	  return date ("d/m/Y", time());
	}
}

echo "<br>";

$data = new Data;
echo " Estou vindo de um metodo -> ". $data->pegarData();
