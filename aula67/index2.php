<?php

// Validar se tem número de caracteres válidos (3 a 20)

$valor = "joao ribeiro é o instrutor";
if (strlen($valor) <3 || strlen($valor) > 20) {
    echo 'A string deve ter entre 3 e 20 caracteres.<br>';
} 

// Verificar se um email é válido
$email = "joao.ribeiro@gmail";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo '<br>';

// Verificar se uma IRL é válida
$url = "http://www.google.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));
echo '<br>';
echo '<hr>';

// Validar se um número de telefone começa por 9 e tem 9 dígitos
var_dump(preg_match("/^9{1}\d{8}$/", "966213456"));

