<?php
abstract class Osoba{

    //učahurena privatna svojstva
    private $ime;
    private $prezime;
    private $visina;


    public function getIme(){
		return $this->ime;
	}

	public function setIme($ime){
		$this->ime = $ime;
	}

	public function getPrezime(){
		return $this->prezime;
	}

	public function setPrezime($prezime){
		$this->prezime = $prezime;
	}

	public function getVisina(){
		return $this->visina;
	}

	public function setVisina($visina){
		$this->visina = $visina;
	}

}
//nasljeđivanje
class Polaznik extends Osoba{
    private $brojUgovora;

	public function getBrojUgovora(){
		return $this->brojUgovora;
	}

	public function setBrojUgovora($brojUgovora){
		$this->brojUgovora = $brojUgovora;
	}

}

class Predavac extends Osoba{
    private $ziroRacun;

	public function getZiroRacun(){
		return $this->ziroRacun;
	}

	public function setZiroRacun($ziroRacun){
		$this->ziroRacun = $ziroRacun;
	}

}


class Ravnatelj extends Osoba{

    private $niz;
    public function __construct(){
        echo "Ravnatelj";
        $this->niz = array();
    }

    public function __get($naziv){
        if(array_key_exists($naziv,$this->niz)){
            return $this->niz[$naziv];
        }else{
            return "";
        }
    }

    public function __set($naziv,$vrijednost){
        
        $this->niz[$naziv]=$vrijednost;
     
    }
}


$t = new Polaznik();
$t->setIme("Pero");
$t->setPrezime("Perić");
$t->setVisina(180);
echo $t->getVisina();
print_r($t);
echo "<hr />";
$a  =(array)$t;
print_r($a);

echo "<hr /><hr />";

$o=new stdClass();
$o->ime="Pero";
$o->prezime="Perić";
$o->visina=180;
print_r($o);

$k = new stdClass();

$r = new Ravnatelj();
$r->nositelj="Eduard";
echo $r->nositelj;
