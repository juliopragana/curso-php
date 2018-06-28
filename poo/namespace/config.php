<?php 

	spl_autoload_register(function($nameClasse){

		//nome da Pasta onde vai ser salvo as classes
		$dirClass = "class";
		$filename = $dirClass .DIRECTORY_SEPARATOR. $nameClasse .".php";

		if(file_exists($filename)){
			require_once($filename);
		}

		
	});


 ?>