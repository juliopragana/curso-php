<?php 
require_once("config.php");
//usando Namespace
use Cliente\Cadastro;


$cad = new Cadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");
$cad->registrarVenda();


 ?>

