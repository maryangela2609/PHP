<?php

/* 
    include
    include_once
    require
    require_once

*/

include 'script.php';
include 'outro.php';    // O script não existe. Vai aparecer um aviso
echo '<br>';
echo '<hr>';
include 'script.php';

// Principal diferença entre o include e o require:
// include: Mostra aviso se o script não existe e permite continuar a execução.
// require: mostra o erro e interrompe a execução.
