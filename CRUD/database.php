<?php
class database{
    private $hostName = 'localhost';
    private $DBname = 'CaffeBar';
    private $username = 'mirom';
    private $password = 'kruno';
    public  $connection = null;

    public function __construct(){
        try
        {
            $this->connection = new PDO("mysql:host=" . $this->hostName . ";" . "dbname=" . $this->DBname, 
                                $this->username, $this->password);
        }
        catch(PDOexeption $e)
        {
            die($e->getMessage());
        }
    }
    public function prepare($query) { 
        return $this->connection->prepare($query); 
    } 
    
}


