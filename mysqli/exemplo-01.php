<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
	echo "Error: ".$conn->connect_error;
 }

//preparando um insert
 $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
 // o ss segnifica o tipo de dados que vão ser inserifos. I para inteiro, f- para float e etc..
 $stmt->bind_param("ss", $login, $pass);
 $login = "user";
 $pass = "12345";
 $stmt->execute();

 $login = "root";
 $pass = "@!#@";
 $stmt->execute();

 ?>
