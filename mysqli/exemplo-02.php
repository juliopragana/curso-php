<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
	echo "Error: ".$conn->connect_error;
 }

//fazendo consulta no banco
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY idusuario");

$data = array();

//levando a consulta para um json.
while($row = $result->fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);

 ?>
