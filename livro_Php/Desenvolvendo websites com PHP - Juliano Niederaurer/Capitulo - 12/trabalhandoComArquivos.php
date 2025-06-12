<?php

//tentar abrir o arquivo se nao existir cria um
$arquivo = fopen('arquivo.csv', 'a+');

//adidionar daddos ao arquivo
fwrite($arquivo, "teste\n");
