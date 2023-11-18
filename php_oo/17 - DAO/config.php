<?php
// Função spl_autoload que faz o autoload de classes
spl_autoload_register(function ($className) {
    
    $filename = "Class" . DIRECTORY_SEPARATOR . $className . ".php"; // Caminho da classe

    if (file_exists($filename)) { // Verifica se o arquivo existe

        require_once($filename); // Se existir, requer o arquivo
    }
});
