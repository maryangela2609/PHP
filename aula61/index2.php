<?php

// A Super Global $_GET

// Vamos usar o endereço:
// http://php.test/aula61/index2.php

// Para captar um determinado valor da query string, recorremos à chave do array associativo da super global $_GET

//echo $_GET['id'];

// Se a variável não existir vai surgir um erro

//echo $_GET['teste'];

// Devemos sempre verificar se existe e depois captar esse parâmetro
$valor = null;
if(isset($_GET['teste'])){
   $valor = $_GET['teste'];
}
echo '<br>';
echo '<hr>';
echo "Valor: $valor";