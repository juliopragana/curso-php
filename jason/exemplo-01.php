<?php 
//array bimidicional
//função para adicionar valor em um array já criado.

$pessoas = array();

//array_push adiciona valor em um array

//adicionando um array no array pessoas.
array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));
array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

//converter um array em Json

echo json_encode($pessoas);



 ?>