<?php 

//cria arquivo e dar permissão para escritas

$file = fopen("log.txt", "a+") ;
//escreve a data no arquivo.
fwrite($file, date("Y-m-d H:i:s") . "\r\n");

//fechando o arquivo
fclose($file);

echo "Arquivo criado com sucesso";

 ?>