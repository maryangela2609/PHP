<?php

// Verifica se houve um request do tipo POST
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido.');
}

// Regras de Validação

// - Todos os campos são de preenchimento obrigatório excepto o textarea. 
// - O primeiro campo de texto tem que ter entre 5 e 30 caracteres.
// - O campo da senha, tem que ter exatamente 12 caracteres
// - Das 3 checkboxes, pelo menos uma tem que estar selecionada
// - No caso do textarea, não é obrigatório, mas se tiver texto tem que ter, no mínimo, 30 caracteres

$erros = [];

// texto
if(empty($_POST['text_texto'])) {
    $erros[] = 'O campo Texto é de preenchimento obrigatório';
} else {
    if(strlen($_POST['text_texto']) < 5 || strlen($_POST['text_texto']) > 30) {
        $erros[] = 'O campo texto tem que ter entre 5 e 30 caracteres.';
    }
}

// Password

if(empty($_POST['text_password'])) {
    $erros[] = 'O campo Password é de preenchimento obrigatório';
} else {
    if(strlen($_POST['text_password']) !=12 ) {
        $erros[] = 'O campo texto tem que ter 12 caracteres.';
    }
}

// Select
if(empty($_POST['select'])) {
    $erros[] = 'Tem que selecionar um país';
}

// Checkboxs
if(empty($_POST['check_1']) && empty($_POST['check_2']) && empty($_POST['check_3'])) {
    $erros[] = 'Pelo menos um checkbox tem que estar selecionado';
} 

// CRadiobuttoms
if(empty($_POST['radio'])) {
    $erros[] = 'Tem que existir um radiobuttom selecionado';
}

// Área de texto
if(empty($_POST['text_area']) &&  strlen($_POST['text_area']) < 30) {
    $erros[] = 'Mínimo de 30 caracteres';
}

// Apresenta os erros, se existirem caso contrário, apresenta os resultados
if(!empty($erros)) {

    echo '<h4>ERROS!</h4>';
    echo '<ul>';
    foreach($erros as $erro) {
        echo "<li>$erro</li>";
    }
    echo '</ul>';
} else {
    echo '<pre>';
    print_r($_POST);
}