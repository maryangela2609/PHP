<?php 

//Podemo susar o fopen / fclose para ler ou escrever

// escreve um ficheiro
$file = fopen('novo.txt', 'w'); // r - leitura | w - escrita | a - acrescentar
for($i = 1; $i <= 100; $i++) {
    fputs($file, "3 x $i = " . (3 * $i) . PHP_EOL);
        //fwrite() é um alias de fputs
}

fclose($file);
echo 'feito';

