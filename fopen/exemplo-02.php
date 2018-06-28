<?php 
	//manipulando arquivos CSV

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//salvando a consulta do banco em um arquivo CSV

$headers = array();
//fazendo uma varredura na primeira linha
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

//Criando arquivo
$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

//juntando os dados (linhas) com o cabeçalho
foreach ($usuarios as $row) { // foreach nas linhas
	$data = array();
	foreach ($row as $key => $value) { // foreach nas colunas
		array_push($data, $value);
	} //fim do foreah de coluna

	//adicionando os dados no arquivo
	fwrite($file, implode(",", $data) . "\r\n"); // vem forech de linha
}	// fim do foreach de linha


fclose($file);

echo implode(",", $headers);


 ?>