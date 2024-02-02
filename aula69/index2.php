<?php

$valor1 = 10;
$valor2 = 0;

try {
    $resultado = $valor1 / $valor2;
    echo $resultado;
} catch (Throwable $e) {
    echo 'ERRO: ' . $e-> getMessage();
} finally {
    echo '<br>ESre código será sempre executado.';
}

echo 'FIM!';