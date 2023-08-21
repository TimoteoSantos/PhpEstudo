<?php
//preenchendo um array dinamicamente por for
for ($i=0;$i<= 10;$i++){
    $array[$i] = $i;
}
//percorrendo o array
foreach ($array as $dados){
    echo $dados;
}