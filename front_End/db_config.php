<?php

class Dbconfig
{
    function __construct(){
        $this->db_connect();
    }
    public $connection;

    public function db_connect()
    {
        $this->connection = mysqli_connect('localhost','root' ,'','stock');
            if(mysqli_connect_error())
            {
                die("connection failed");
            }
    }


    public function check($a){
        $return = mysqli_real_escape_string($this->connection,$a);
        return $return;
    }
}

$db = new Dbconfig();



?>