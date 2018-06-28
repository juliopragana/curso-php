<?php
//função nova do php 7 que atribui um array como parâmetros de um unico tipo.

//recebendo como parâmetro valor tipo de inteiro
//retornando o tipo de valor String na função
function soma(int ...$valores):string{
//soma os valores do array
	return array_sum($valores); 

} 

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 2);
echo "<br>";
echo soma(1.4, 2.4);





 ?>