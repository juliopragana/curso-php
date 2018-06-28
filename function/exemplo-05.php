<?php
//função nova do php 7 que atribui um array como parâmetros de um unico tipo.

function soma(int ...$valores){
//soma os valores do array
	return array_sum($valores); 

} 

echo soma(2, 2);
echo "<br>";
echo soma(25, 2);
echo "<br>";
echo soma(1.4, 2.4);





 ?>