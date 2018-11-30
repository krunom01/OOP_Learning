<?php
include_once "configuration.php";

class guest 
{
    public $database;

    public function __construct()
    {
        $this->database = new \MySQLi(SERVER, USERNAME ,PASSWORD, DATABASE);
        if(!$this->database)
        {
            die("Connection error: " . mysqli_connect_error());         
        }
    }
//registration
    public function user_registration($name,$email,$password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $date = date("Y-m-d H:i:s");
        //checking if guest exists 
        $sql_check_guest = "SELECT * FROM guest_registration WHERE name='$name' or email='$email'";
        $check = $this->database->query($sql_check_guest);
        $rowsNumber=$check->num_rows;
        if( $rowsNumber > 0)
        {
            return false;
        }
        else
        {
            $sqlInsert = "INSERT INTO guest_registration set name='$name', email='$email',
                        password='$hashed_password', registration_time='$date'";
            $insert = mysqli_query($this->database ,$sqlInsert);
        }
    }
//login
    public function login($guestName, $guestPassword)
    {
        
        $sql_login_check = "SELECT * FROM guest_registration where name='$guestName'";
        $result = $this->database->query($sql_login_check);
        $obj = $result->fetch_object();
        if(!empty($obj))
        {
            if(password_verify($guestPassword, $obj->password))
            {
                $_SESSION['userLogin'] = true;
                $_SESSION['userID'] = $obj->id;
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
//session start
    public function user_session()
    {
        return $_SESSION['userLogin'];
    }
//session destroy
    public function session_destroy()
    {
        $_SESSION['userLogin'] = FALSE;
        session_destroy();
    }


}

