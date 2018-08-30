<?php

class Person{
    private $name;
    private $surname;
    private $height;
    
    public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function getHeight(){
		return $this->height;
	}

	public function setHeight($height){
		$this->height = $height;
    }
}
$k=new Person();
$k->setName("Kruno");
$k->setsurName("Marijanovic");
print_r($k);
