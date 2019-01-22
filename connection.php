<?php 
include_once "config.php";
class db_connection{
    public $connect;
    function __construct(){
    	 $this->connect=mysqli_connect(SERVER, USER, PASSWORD, DB);
          // var_dump($conn);
        // exit;
         if (mysqli_connect_error()) {
            die("Connection not established");
        }
        
        return true;
    }
}
?>