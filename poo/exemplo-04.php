<?php 
//médotodo construtor

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
		
	}

	public function __destruct(){
		//var_dump("Destruir");
	}

	//convertendo Objeto em String
	public function __toString(){
		return $this->logradouro.",".$this->numero.",".$this->cidade;
	}

}

$newEndereco = new Endereco("Rua Rodemar Saraiva Leão", "123", "Santos");

var_dump($newEndereco);
//unset($newEndereco);

echo "<br>";

echo $newEndereco;


 ?>