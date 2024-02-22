<?php
//usando operador ternario para descobrir se o nome existe no get
$nome = (isset($_GET['nome'])) ? $nome = $_GET['nome'] : $nome = "";
echo $nome;
?>

<form action="index.php" method="get">
    Nome :<input type="text" name="nome" value=<?php  echo $nome ;?>  size="2">
</form>