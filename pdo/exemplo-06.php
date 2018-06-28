<?php

//TRANSACTION DE SEGURANÇA


$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
//INCIANDO TRANSAÇÃO
$conn->beginTransaction();

//DELETANDO NO BANCO
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;




$stmt->execute(array($id));

$conn->rollback();

echo "Dados EXCLUIDOS";

 ?>