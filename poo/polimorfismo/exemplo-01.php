<?php 

 abstract class Animal{

 	public function falar(){
 		return "Som";
 	}

 	public function mover(){
 		return "Anda";
 	}
 	
 }

 class Cachorro extends Animal{

 	public function falar(){
 		return "Late";
 	}

 }

class Gato extends Animal{
	public function falar(){
 		return "Mia";
 	}
}

class Passaro extends Animal{
	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " .parent::mover(); //parent, absorve o comportamento da classe pai. Staticamente.
	}
}


 $cachorro = new Cachorro;

 echo $cachorro->falar() . "<br>";
 echo $cachorro->mover() . "<br>";
 echo "--------------------------- <br>";

 $garfield = new Gato();

 echo $garfield->falar() . "<br>";
 echo $garfield->mover() . "<br>";
 echo "--------------------------- <br>";

 $ave = new Passaro();
 echo $ave->falar() . "<br>";
 echo $ave->mover() . "<br>";
 echo "--------------------------- <br>";
 ?>