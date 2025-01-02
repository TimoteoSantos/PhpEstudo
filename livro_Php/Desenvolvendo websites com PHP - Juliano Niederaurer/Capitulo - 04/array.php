<?php

$array = array (
    1 => 1,
    "2" => 2,
    55 => 202,
    "piramide" => 20002
    );
    
//print($array["piramide"]);

$array2 = array("calango",10);
//print($array2[0]);

//forma sem usar a funcao
$array3 = [
    "nome" => "timoteo",
    "idade" => 35
    ];
    
//echo $array3["nome"] . $array3["idade"];

//array multidimensional

$array4 = [
     
      "01" => 01,
               "multi" => [
                   "02" => 02,
                            "multi2" => [
                                "03" => 03
                                ]
                   ]
    ];
echo $array4["01"];
echo $array4["multi"]["02"];
echo $array4["multi"]["multi2"]["03"];







