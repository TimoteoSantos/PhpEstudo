<?php

//funcao que retorna um array
function clubes()
{
    $clubes = array(
    0 => "Gremio",
    01 => "Palmeiras",
    02 => "Flamengo"
    );

    return $clubes;//retornando todos os dados em um vetor
}

$clubes = clubes();//invocando a funcao e guardando os dados em uma variavel

//interagindo com foreach
foreach ($clubes as $times)//convertendo o array em string
{
    echo $times."<br>";//escrevendo os dados recebidos

}

echo "<hr>";

//interagindo com for
for($i=0;$i < sizeof($clubes);$i++)
{
    echo $clubes[$i]. "<br>";
    
}

echo "<hr>";

//interagindo com wihle
$inicio = 0;
while ($inicio < sizeof($clubes)){

    echo $clubes[$inicio]."<br>";
    $inicio++;
}