<?php

// A super global $_GET

// Vamos usar o endereço:

// http://php.test/aula61/index3.php?id=100&produto=bicicleta

$id = isset($_GET['id']) ? $_GET['id'] : null;
$produto = isset($_GET['produto']) ? $_GET['produto'] : null;

echo "ID = $id <br>";
echo "Produto = $produto";

/*
    Vejamos a informação disponível nas ferramentas do programador
    Network > Name
    Headers > Método GET e Payload

    Esta é uma das formas que podes usar para passar informações entre páginas. Cuidado, nunca passes informações que possam ser sensíveis ao funcionamento da aplicação.

    Outra nota: Existem determinados caravteres que entram em conflito com uma query string. Por exemplo o &, o espaço, o < e >. 
    Veremos noutra ocasião como ultrapassar esses desafios


*/