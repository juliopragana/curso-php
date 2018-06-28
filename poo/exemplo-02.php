<?php 

class Carro{

	//atributos
	private $modelo;
	private $motor;
	private $ano;

	//metodos GET e SET

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}	

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	//metodo com todas as funções

	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
}


//usando a classe
$gol = new Carro();
$gol->setModelo("Gol GT"); //atribuindo no set que é publico
$gol->setMotor("1.6");
$gol->setAno("2016");

//exibindoo todas informaçãos do objeto
var_dump($gol->exibir());




 ?>