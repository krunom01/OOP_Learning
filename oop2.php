<?php

class User {
	public $age;
	private $password;	
	public function __construct($age){
		$this->age = $age;
		$this->password = "kruno";		
	}
	public function getPassword($hint){
		if($hint == "nesto"){
			return $this->password;
		}
		else {
			return "U don't have permission";
		}
	}
	
}
$Kruno = new User(31);

echo $Kruno->getPassword("asd");

$x = 10;

function add()
{
	echo $GLOBALS['x'];
}
add();
