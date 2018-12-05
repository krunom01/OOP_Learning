<?php

class config {
    public static function getPath($path = null)
    {
        if($path)
        {   
            $conf = $GLOBALS['mysql'];
            $path = explode(".", $path); 

            foreach($path as $paths)
            {
                $conf = $conf[$paths];
            }
            
        }
        return false;
    }
}
