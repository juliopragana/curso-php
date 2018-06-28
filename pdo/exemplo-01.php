<?php 
//classe PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//recebendo os dados do banco
foreach ($result as $row) {
	//mostrando a consulta
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>".$value."<br>";

	}
	echo "<hr>";
}

 ?>