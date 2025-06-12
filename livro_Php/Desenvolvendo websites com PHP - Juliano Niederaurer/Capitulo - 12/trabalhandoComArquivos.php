<?php

    //tenta abrir um arquivo se nao consguir cria um
    $arquivo = fopen('arquivo.csv', 'a+');

    //dados
    $data = "DADO A SER INSERIFO \n";

    //escreve em um arquivo
    fwrite($arquivo, $data);
    
    //ultilizando file_put_contents()
    file_put_contents("$arquivo","$data");
    