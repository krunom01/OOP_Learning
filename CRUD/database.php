<?php
class database{
    private $hostName = 'localhost';
    private $DBname = 'CaffeBar';
    private $username = '';
    private $password = '';
    public  $connection = null;

    public function getConnection(){
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
}
