<?php

declare(strict_types=1);

function multiplicar($a, $b): int|float {
    return $a * $b;
}

echo multiplicar(10.3,2);

echo "<br>";
echo "<hr>";

$nome = 'João';

if($nome == 'Jose'){
    echo 'Verdade'. '<br>';
} else {
    echo 'Não';
}

echo "<br>";
echo "<hr>";

function executar(){
    $nome = 'teste';
    echo $nome;
}

executar();

echo "<br>";
echo "<hr>";


// É possível aceder dentro de uma função a uma variável globasl.
$nome = 'joão';

function dados(){
    global $nome; 
    $nome = 'joaquim';
}

dados();
echo $nome;
// Todas as variáveis dentro de uma função tem um escopo local. Apenas existem dentro da função. São destruídas assim que a função termina a sua execução.

?>