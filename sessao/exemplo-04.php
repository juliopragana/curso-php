<?php 
//forçando criar uma sessão id
require_once("config.php");

//forçando a criação de um novo id
session_regenerate_id();

echo session_id();

var_dump($_SESSION);


 ?>