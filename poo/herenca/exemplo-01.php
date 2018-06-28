<?php 

//herana

class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setSNumero($n){
		$this->numero = $n;
	}

}

class CPF extends Documento{

	public function  validar():bool{
		//herdando do pai
		$numeroCPF =	$this->getNumero();


		//aqui vai a validação real.
		return true;
	}
}

//usando a classe
$doc = new CPF();
$doc->setSNumero("999.999.999-00");
var_dump($doc->validar());
echo "<br>";

echo $doc->getNumero();

 ?>
