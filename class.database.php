<?php
include_once "class.config.php";
class database{
    private $PDO;

    private function __CONSTRUCT()
    {
        try
        {
            $this->PDO = new PDO('mysql:host='.config::getPath('mysql/localhost').';'.
                                 'dbname=' .config::getPath('mysql/CafeeBar'),
                                 config::getPath('mysql/asd'),
                                 config::getPath('mysql/asd'));
           
        }
        catch(PDOexception $e)
        {
            die($e->getMessage());
        }
    }
}



