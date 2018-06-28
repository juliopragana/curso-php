<?php 

	$name = "images";

	//verifica se existi um diretório, se não, cria-o.
	if(!is_dir($name)){
		//cria
		mkdir($name);
		echo "Diretório $name criado com sucesso";
	} else {
		//remove
		rmdir($name);
		echo "Já existir o diretório: $name, foi removido";
	}


 ?>