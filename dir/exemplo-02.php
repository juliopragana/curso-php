<?php 
//ver o que tem dentro das pastas.
$images = scandir("images");

$data = array();


foreach ($images as $img) {
	if(!in_array($img, array(".", ".."))){

		//directory
		$filename 	= "images".DIRECTORY_SEPARATOR.$img;
		//informações do arquivo
		$info = pathinfo($filename);
		//tamanho do arquivo. 
		$info["size"] = filesize($filename);
		//data de modificação
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		//acessar o arquivo pela url
		$info["url"] = "http://localhost:8080/php/dir/".str_replace("\\", "/", $filename);
		//var_dump($info);

		array_push($data, $info);


	}	
}

echo json_encode($data);



 ?>