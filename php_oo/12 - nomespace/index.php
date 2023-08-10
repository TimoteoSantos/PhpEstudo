<?php

//arquivo de configuração de autolod
require_once ("config.php");

//usando uma classe que esta em um nomespace
use Cliente\Cadastro;

//estamos instanciando a classe do namespace cadastro nao a classe do autoload
$cadastro = new Cadastro("timoteo","email","senha");

//escrevendo o objeto direto isso porque a classe tem um metodo tostring essse metodo quem esta escrevendo
echo $cadastro;