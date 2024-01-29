<?php
// Super Globais são variáveis em forma de arrays que estão sempre disponíveis durante a execução do código e às quais podemos aceder e manipular em qualquer escopo da aplicação.

// Vejamos o exemplo de uma função. Neste caso, todas as variáveis que têm um escopo global podem ser acedidas através da super global $GLOBALS

$nome = 'Joao';

apresentar();

echo $nome . '<br>';
echo $apelido;

function apresentar() {
    global $nome;
    echo $nome . '<br>';

    // ou

    echo $GLOBALS['nome'] . '<br>';

    // Podemos alterar o valor da variável global
    $GLOBALS['nome'] = 'carlos';
    $GLOBALS['apelido'] = 'ribeiro';

    // IMPORTANTE: Existem algumas alterações que não podemos fazer
    //como: $GLOBALS = [];
}