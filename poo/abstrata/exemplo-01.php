<?php 

interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

// classe abstrata não pode ser instanciada direta. Só quando implementada por outra classe

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
	echo "O veículo acelerou até ". $velocidade ." km/h";
	}

	public function freiar($velocidade){
		echo "O veículo frenou até ". $velocidade . " km/h";
	}

	public function trocarMarcha($marcha){
		echo "O veiculo trocou a marcha ". $marcha;
	}

}

class DelRey extends Automovel{
	public function empurrar(){

	}
}

$carro = new DelRey();
$carro->acelerar(200);


 ?>