<?php

echo '<pre>';

// Listagem de ficheiros
echo __DIR__ . '<br>';
$files = scandir(__DIR__); // constante mágica __DIR__
print_r($files);

/*
    O . e o .. estão sempre presentes em cada pasta. São indentificados como a pasta atual (.) e a pasta anterior (..)

*/

echo '<hr>';
$files3 = scandir('./'); // lista a pasta atual
print_r($files2);

echo '<hr>';
$files3 = scandir('../'); // lista a pasta atual
print_r($files3);

// Podemos questionar se cada elemento encontrado é um ficheiro ou uma pasta
echo '<hr>';
foreach($files as $item) {
    echo is_file($item) ? 'Ficheiro' : 'Pasta';
    echo '<br>';
}

// POdemos verificar apenas ficheiro
echo '<hr>';
$files = scandir(__DIR__);
foreach ($files as $item) {
    if(is_file($item)) {
        echo $item . '<br>';
    }
}

echo '<br>';
echo '<hr>';

// POdemos criar e remover pastas
// mkdir(__DIR__ . '/pasta_teste);

// Se a pasta existir, vai aparecer um aviso
// Devemos sempre assegurar se a pasta ou ficheiro existe e para isso usamos: file_exists()

if(!file_exists(__DIR__ . '/pasta_testes')){
    mkdir(__DIR__ . '/pasta_teste');
}

// Para remover uma pasta...
//rmdir(__DIR__ . '/pasta_teste');

// Mais uma vez, vai aparecer um aviso se a pasta não existe
if(file_exists(__DIR__ . '/pasta_teste')) {
    rmdir(__DIR__ . '/pasta_teste');
}

// IMPORTANTE: A pasta só pode ser removida se estiver vazia.
//rmdir(__DIR__ . '/data');

// Podemos criar pastas de forma recursiva ou seja pasta dentro de pasta
// Como não vamos usar o segundo argumento, usamos named arguments
// Para definir o valor do terceito parâmetro

mkdir(__DIR__ . '/aaa/bbb', recursive: true);

