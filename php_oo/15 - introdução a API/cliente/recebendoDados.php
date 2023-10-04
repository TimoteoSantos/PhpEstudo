<?php

require_once 'BuscarAPI.php';

$data_array = BuscarAPI::BuscarApi('http://localhost/PhpEstudo/php_oo/15%20-%20introdu%c3%a7%c3%a3o%20a%20API/server/enviandoParaOutraAPP.php');

// Itera sobre os dados e imprime cada item
foreach ($data_array as $item) {
    echo "ID: " . $item['ID'] . "<br>";
    echo "Nome: " . $item['NOME'] . "<br>";
    echo "Senha: " . $item['SENHA'] . "<br>";
    echo "----------------- <br>";
}