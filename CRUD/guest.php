<?php
include_once "database.php"; 

class guest{

    private $tableName = "guest_registration";
    public $id;
    public $name;
    private $password;
    private $registration_time;

    
  
    public function getGuests()
    {
        $getdata = null;
        $db = new database;
        $query = $db->prepare("SELECT * from  " . $this->tableName . " order by name");
        $query->execute();
        $allGuests = $query->fetchall(PDO::FETCH_OBJ);
        return $allGuests;


    }

}
