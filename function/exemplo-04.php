<?php 

function ola(){

	//transformando todos os argumentos em um array
	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(ola("Bom dia", 10));

 ?>