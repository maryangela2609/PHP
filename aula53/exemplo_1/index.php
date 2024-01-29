<?php

// Verifica se existe o cookie esperado
$valor = '[Não existe cookie]';
if(!empty($_COOKIE['meu_cookie'])){
    $valor = $_COOKIE['meu_cookie'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <?php require_once('nav.php') ?>

    <h1>Início</h1>
    <hr>
    <h2>Valor do cookie: <?= $valor ?></h2>
</body>
</html>