<?php

// $_SESSION
// Acesso para leitura e manipulação das variáveis da sessão

session_start();

$_SESSION['usuario'] = 'Joao';
$_SESSION['perfil'] = 'Admin';
$_SESSION['autorizado'] = 'true';

echo '<pre>';
print_r($_SESSION);