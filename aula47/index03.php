<?php

// Include_once e require_once efetuam a inclusão do script apenas uma vez. Se o script foi anteriormente carregado, já não vai mais ser carregado.

include_once 'script.php';
include_once 'script.php';

echo '<br>';
echo '<br>';

require_once 'script.php';
require_once 'script.php';
