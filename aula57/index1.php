<?php

/*
    CSV - Significa COMMA SEPARATED VALUES (Valores separados por vírgula). 
    É um ficheiro com uma estrutura particular que permite ser usado entre aplicações para transporte de dados. Excel, LibreOffice, Google Sheets.
*/

// Criar um ficheiro CSV
$file = fopen('dados.csv', 'w');

// header das colunas
$header = ['COLUA', 'COLUB', 'COLUC'];
fputcsv($file, $header);

// Linhas
for($i = 1; $i <=100; $i++) {
    $linha = [rand(10000, 100000),  rand(10000, 100000), rand(10000, 100000)]; 
    fputcsv($file, $linha);
}
fclose($file);

