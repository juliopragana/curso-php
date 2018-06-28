<?php 

function ola($texto = "mundo", $periodo = "bom dia"){

	return "Olá mundo $texto! $periodo<br>";
}

echo ola();
echo ola("Júlio", "Boa Tarde");
echo ola("Paulo", "boa noite");
echo ola("Francisco");
echo ola("João", "");

 ?>