<?php 

//Calendários em Padrão Português BR
//Padrão pra Windows e Linux
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));

 ?>