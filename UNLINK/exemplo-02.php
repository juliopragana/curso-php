<?php 
//apagando arquivos dentro de uma pasta
if(!is_dir("images")) mkdir("images");

//fazendo uma varredura no diretório
foreach (scandir("images") as $item) {
	if(!in_array($item , array(".", ".."))){
		unlink("images/" .$item);
	}	
}	

echo "Ok";


 ?>