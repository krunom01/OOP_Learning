<?php
include_once "class.config.php";

class database
{

    private $PDO;
    private $Querry;

    public function __CONSTRUCT()
    {
        try
        {
            $this->PDO = new PDO('mysql:host=' . config::getDBvalues("host"). ';'
                           . 'dbname=' .  config::getDBvalues("dbname"),
                                 config::getDBvalues("user"),
                                 config::getDBvalues("pass"));
           
        }
        catch(PDOexception $e)
        {
            die($e->getMessage());
        }
    }
    public function select($table, $where){
        return
    }
}
$baza = new database;
$baza->insert();