<?php

// FUNÇÕES

function contruir_resultado(){
    $valor1 = 100;
    $valor2 = 5;
    return $valor1 * $valor2;
}

$resultado = contruir_resultado();
echo $resultado;

echo "<br>";
echo "<hr>";

// Parâmetros são variáveis indicadas dentro dos parênteses da função e que vão estar disponíveis para serem usadas dentro da função. São separados por vírgula

function adicionar($a, $b){
    return $a + $b;
}

echo adicionar(100,50);
?>
