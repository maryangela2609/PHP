<?php

// Para definir o tema claro ou escuro do nosso site.

// Verifica se existe um coolie com o tema
$theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .light {
            background-color: white;
            color: black;
        } 
        .dark {
            background-color: black;
        }
        a {
            color: red;
        }
    </style>
</head>
<body class="<?= $theme ?>">
    
        <a href="theme_dark.php">Dark mode</a> | <a href="theme.light.php">Light mode</a>
        <h1>Exemplo simples de tema com cookie</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat provident iusto suscipit qui? Magnam, accusamus aliquid? Incidunt hic adipisci ut perspiciatis quae. Ipsum omnis magni eos in architecto, ducimus sapiente?</p>

</body>
</html>