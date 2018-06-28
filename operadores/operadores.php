<?php 
//operadores especial do PHP 7
$a = 50;
$b = 78;

var_dump($a <=> $b);
echo "<br>";

/* Se o valor do lado esquerdo for o maior, trás o valor 1. Se for o da direita, trás o valor -1. se for igual, trás o valor 0.*/

//mostra o valor que foi definido
$a = NULL;
$b = NULL; 
$c = 10;

echo $a ?? $b ?? $c; // pega a primeira variável com contenha valor.

 ?>