<?php 
echo '<pre>';

// Uma forma muito simples de obter o tamanho do ficheiro em bytes
$dados = filesize('registros.txt');
echo $dados . ' bytes';

echo '<br>';
echo '<hr>';


// E para obter várias informações sobre um determinado ficheiro
$info = pathinfo('registros.txt');
print_r($info);
