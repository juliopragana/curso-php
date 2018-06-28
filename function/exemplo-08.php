<?php 
// função anonima	
function test($callback){
//processo lento
	$callback();

}

test(function(){
	echo "Terminou";
});


 ?>