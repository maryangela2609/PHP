<?php

// Funções relacionadas com erros

error_reporting(E_WARNING);

require_once('ficheiro_inexistente.php');
echo 'Esta frase não vai aparecer';