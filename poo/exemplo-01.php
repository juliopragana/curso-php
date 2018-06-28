<?php 
//estrutura de uma classe

class Pessoa{
	
	public $nome;//atributos
	
	public function falar(){//metodo

		return "O meu nome é ".$this->nome;
	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


 ?>