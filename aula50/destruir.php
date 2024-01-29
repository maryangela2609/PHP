<?php
session_start();
session_unset(); // remove todas as variáveis da sessão

session_destroy(); // destrói a sessão.

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

    <h2>Todos os valores foram destruídos</h2>

</body>
</html>
