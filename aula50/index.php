<?php

// SESSÕES
// Todos os scripts devem ter o início de sessão
// Antes de qualquer output do PHP
session_name('minha_sessao');
session_set_cookie_params(10);
session_start();

// O valor de $nome e $apelido vai ser definido tendo em atenção a existência ou não das variáveis na super global $_SSESSION

$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
$apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : '-';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Exercício com sessões de PHP</h2>

    <h3>Valor da variável 'nome':</h3>
    <h1><?= $nome ?></h1>

    <h3>Valor da variável 'apelido':</h3>
    <h1><?= $apelido ?></strong></h1>

</body>
</html>
