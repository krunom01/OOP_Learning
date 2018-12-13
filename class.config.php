<?php
include_once "class.core.php";

class config {

 public static function getDBvalues($parts){
            
        return $GLOBALS["DBvalues"][$parts];

    }
}





