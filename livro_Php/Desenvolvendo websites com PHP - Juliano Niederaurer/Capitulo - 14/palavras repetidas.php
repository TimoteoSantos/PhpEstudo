<?php

// Lê o conteúdo completo do arquivo 'texto.txt' para uma string
$conteudo = file_get_contents('arquivo.csv');

// Converte todo o texto para letras minúsculas e extrai apenas as palavras
// str_word_count(..., 1) retorna um array com todas as palavras encontradas
$palavras = str_word_count(strtolower($conteudo), 1);

// Conta quantas vezes cada palavra aparece no array
// O resultado é um array associativo: ['palavra' => quantidade]
$frequencia = array_count_values($palavras);

// Filtra apenas as palavras que aparecem mais de uma vez
// array_filter mantém no array apenas os itens cuja quantidade seja maior que 1
$repetidas = array_filter($frequencia, function($qtd) {
    return $qtd > 1;
});

// Percorre cada palavra repetida e exibe no terminal a quantidade de repetições
foreach ($repetidas as $palavra => $qtd) {
    echo "$palavra aparece $qtd vezes\n";
}
