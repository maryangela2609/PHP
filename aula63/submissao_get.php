<?php

// Esse script vai tratar a submissão do formulário

// Se não houve uma submissão de formulário, dá acesso inválido
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

// Vai buscar o username e a password
$username = isset($POST['text_username']) ? $_POST['text_username'] : '';
$username = isset($POST['text_password']) ? $_POST['text_password'] : '';

// Verifica se o login é válido
$user = [
    "username" => "joao",
    "password" => "aaa"
];

if ($username == $user['username'] && $password == $user['password']) {
    echo '<h1>LOGIN OK</h1>';
}else {
    echo '<h1>LOGIN INVÁLIDO</h1>';
}

//link para voltar atrás
echo '<a href="index1.php">Voltar</a>';