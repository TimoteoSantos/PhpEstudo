<?php

//ULTILIZE htmlspecialchars() para transformar as entradas em string

//dessa forma o mesmo campo que ultilizamos para fazer cadastros pode ser ultilizado para fazermos o update
//usando operador ternario para descobrir se o nome existe no get
$nome = (isset($_GET['nome'])) ? $nome = $_GET['nome'] : $nome = "";
$idade = (isset($_GET['idade'])) ? $idade  = $_GET['idade'] : $idade = 0;

$anoNascimento  = date("Y") - $idade;

echo " Olá  <strong> " . $nome. " </strong> voce tem " . $idade . " e nasceu no ano de " . $anoNascimento. "<p>";

?>

<form action="#" method="get">
    Nome :<input type="text" name="nome" value=<?php  echo $nome ;?> >
    Idade :<input type="number" name="idade" value=<?php  echo $idade ;?> >
    <input type="submit" value="enviar">
</form>


<table border="1">
    <thead>
    <th>nome</th>
    <th> idade </th>
    </thead>

    <tr>
        <td> <?php echo $nome  ;?> </td>
        <td> <?php echo $idade ;?></td>
    </tr>
</table>