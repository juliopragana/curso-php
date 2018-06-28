<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
//UPDATE NO BANCO
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha= :PASSWORD WHERE idusuario = :ID");

$id = 1;

$login = "Jose Novo";
$password = "qnovo";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID" , $id);

$stmt->execute();
echo "Dados alterados";

 ?>