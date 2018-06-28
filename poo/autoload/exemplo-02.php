<?php 
//autoload de diretórios diferentes

function incluirClasses($nomeClasse){

	//verificando se já existe a classe

	if(file_exists($nomeClasse.".php") === true){
		require_once($nomeClasse.".php");
	}
	
}

spl_autoload_register("incluirClasses");

//verifica se existe a pasta com a Classe, se existir, registra o autoload.
spl_autoload_register(function($nomeClasse){
	if(file_exists("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse. ".php") === true){
		require_once("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse. ".php");
	}
});


$carro = new DelRey();
$carro->acelerar(80);


 ?>