<?php

// criar cookie

$nome = 'meu cookie';
$valor = 'conteúdo do meu cookie';
$expiração = 3600; // 1 hora de duraçao
setcookie($nome, $valor, time() + $expiração);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP cookies</title>
</head>
<body>
    <?php require_once('nav.php') ?>

    <h3>Criar cookie</h3>
    <hr>
    <p>Cookie criado com sucesso</p>
</html>