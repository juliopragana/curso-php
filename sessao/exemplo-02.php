<?php 

require_once('config.php');

session_unset(); // limpa as variáveis de sessão

session_destroy(); //destruindo sessão

echo $_SESSION["nome"]; //chamando sessão



 ?>