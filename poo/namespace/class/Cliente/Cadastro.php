<?php 

namespace Cliente;

//herando de uma pasta anterior. Usando a \
class Cadastro extends \Cadastro{

	public function registrarVenda(){
		echo "Foi registrada uma venda do cliente " .$this->getNome();
	}

}



 ?>