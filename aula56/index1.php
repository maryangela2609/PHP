<?php

// Função file_get_contents()

$dados = file_get_contents('dados.txt');
echo nl2br($dados);

echo '<hr>';

// Podemos ler apenas uma parte do ficheiro
$dados = file_get_contents('dados.txt', offset: 4, length: 6);
echo nl2br($dados);