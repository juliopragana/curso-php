<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
//INSERINDO NO BANCO
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN , :PASSWORD)");

$login = "Jose";
$password = "12345678";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
echo "Dados inseridos";

 ?>