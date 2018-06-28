<?php 

//Classe DateTime
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");
echo "<br>";
$dias = 9;

//adicionando data

//somando 15 dias
$periodo = new DateInterval("P15D");

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

 ?>