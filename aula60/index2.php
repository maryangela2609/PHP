<?php

// $_SERVER
// Informações sobre o servidor e ambiente de execução

// Nome do script atualmente em execução
echo 'Script: '. $_SERVER['PHP_SELF'] . '<br>';

// Endereço IP do servidor
echo 'IP: ' . $_SERVER['SERVER_ADDR'] . '<br>';

// Nome do servidor 
echo 'Nome do Servidor: ' . $_SERVER ['SERVER_NAME'] . '<br>';

// Informações sobre o sistema do servidor
echo 'Sistema: ' . $_SERVER ['SERVER_SOFTWARE'] . '<br>';

// Informações sobre o protocolo usado
echo 'Protocolo: ' . $_SERVER ['SERVER_PROTOCOL'] . '<br>';

// Pasta raíz da aplicação
echo 'Caminho: ' . $_SERVER ['DOCUMENT_ROOT'] . '<br>';

// Existem várias outras informações que podemos recolher com esta super global
