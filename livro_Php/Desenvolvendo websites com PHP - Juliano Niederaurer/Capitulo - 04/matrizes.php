<?php

//matrix
$dados = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

for ($i=0;$i<3;$i++)
{
    for ($j=0;$j<3;$j++)
    {
       echo "na posição = " . $i . $j .  " temos = " . $dados[$i][$j] . "\n"; 
    }
}