<?php

class BuscarAPI
{

 public static function BuscarApi($json_url){

// Faz a requisição para obter os dados JSON
$response = file_get_contents($json_url);

if ($response === false) {
    die('Não foi possível obter os dados JSON.');
}

// Decodifica o JSON para um array associativo
$data_array = json_decode($response, true);

// Verifica se a decodificação foi bem-sucedida
if ($data_array === null) {
    die('Erro ao decodificar o JSON.');
}
//retornando o array com os dados
return $data_array;
}

}
