<?php

// __LINE__
// Indica a linha atual do código onde a constante se encontra 


echo 'Número da linha em index1.php: ' . __LINE__ . '<br>';

echo '<br>';
echo '<hr>';

require_once 'script.php';

echo '<br>';
echo '<hr>';

// __FILE__
// O caminho completo do ficheiro, independentemente de envolverem symbolic links. Se for usada dentro de um include ou require, será indicado o nome do script que está a ser incluído.

echo '(index1.php): ' . __FILE__ . '<br>';

include 'script1.php';
require 'script1.php';