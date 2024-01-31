<?php

// Se não houve uma submissão de formulário, dá acessp inválido
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

// Users (simulação de informação em base de dados)
$users = [
    // aaa
    'joao' => '',
    // bbb
    'ana' => '',
    // ccc
    'carlos' => ''
];

// vai buscar o username e a password
$username = isset($_POST['text_username']) ? trim($_POST['text_username']) : '';
$username = isset($_POST['text_password']) ? trim($_POST['text_password']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Result</title>
</head>
<body>
    
        <?php if (key_exists($username, $users)) : ?>

            <?php if(password_verify($password, $users[$username])) : ?>
                <h1>LOGIN OK!</h1>
            <?php else: ?>
                <h1>LOGIN INVÁLIDO</h1>
            <?php endif; ?>
            
        <?php else : ?>
            <h1>LOGIN INVÁLIDO</h1> 
        <?php endif; ?>  
        
        <a href="index1.php">Voltar</a>

</body>
</html>