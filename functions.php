<?php
include_once "connection.php";
class signup{
   public $conn;
   function __construct(){
      $this->conn= new db_connection();
   }
   // function return_array(){
   //    $arr = array();
   //    $arr['one'] = "one value here";
   //    $arr['two'] = "second value here";
   //    $arr['three'] = "third value here";
   //    return $arr;
   // }
   function query(){
      if (isset($_POST['submit'])) {
         $first_name = $_POST['first_name'];
         $last_name = $_POST['last_name'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $confirm_password = $_POST['confirm_password'];
         if ($password != $confirm_password) {
            $msg = "password does not match";
            $_SESSION['messageErr'] = $msg;
            header("location: ../index.php");
         }else{
            $query = "select * From signup where email = '$email'";
            
            // var_dump($conn->conn);
            $run = $this->conn->connect->query($query);
            // var_dump(mysqli_fetch_array($run));
            if (mysqli_fetch_array($run) > 0) {
               $msg = "user already registered";
               $_SESSION['messageErr'] = $msg;
               header("location: ../index.php");
            }else{
               $query = "INSERT INTO signup (f_name, l_name , email, password, c_password) VALUES ('$first_name', '$last_name', '$email', '$password', '$confirm_password')";
               $run = $this->conn->connect->query($query);
               if ($run) {
                  $msg = "User added successfully";
                  $_SESSION['messageSuccess'] = $msg;
                  header("location: ../index.php");
               }
               
            }
         }
      }
   }
}

class signin{
   public $conn;
   function __construct(){
      $this->conn = new db_connection;
   }
   function query(){
      if (isset($_POST['submit'])) {
         $email = $_POST['email'];
         $password = $_POST['password'];
         $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
         $run = $this->conn->connect->query($query);
         $count = mysqli_num_rows($run);
         // var_dump($count);
         if ($count > 0) {
            $_SESSION['email'] = $email;
            $row = mysqli_fetch_array($run);
            $_SESSION['loginData'] = $row;
            // print_r($test);
            header("location: ../welcome.php");
         }else{
            $_SESSION['messageErr'] = 'Email Password does not match!';
            header("location: ../signIn.php");
         }
      }
   }
}
   // function signup(){
   //      include('connection.php');
   // 		if (isset($_POST['submit'])) {
   // 			$first_name = $_POST['first_name'];
   // 			$last_name = $_POST['last_name'];
   // 			$email = $_POST['email'];
   // 			$password = $_POST['password'];
   // 			$confirm_password = $_POST['confirm_password'];
   // 			if ($password != $confirm_password) {
   // 				
   // 			}else
   // 			{
   // 				$query = "select * From signup where email = '$email'";
   // 				$run = mysqli_query($conn, $query);
   // 				$count = mysqli_num_rows($run);
   // 				if ($count > 0) {
   // 					
   // 				}else
   // 				{
   // 					$query = "INSERT INTO signup (f_name, l_name , email, password, c_password) VALUES ('$first_name', '$last_name', '$email', '$password', '$confirm_password')";
   // 					$run = mysqli_query($conn, $query);
   // 					if ($run) {
   // 						
   // 					}
   // 				}
   // 			}
   // 		}
   // 	}
   // 	function signin(){
   // 		include('connection.php');
   // 		if (isset($_POST['submit'])) {
   // 			$email = $_POST['email'];
   // 			$password = $_POST['password'];
   // 			$query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
   // 			$run = mysqli_query($conn, $query);
   // 			$count = mysqli_num_rows($run);
   // 			if ($count > 0) {
   // 				$_SESSION['email'] = $email;
   // 				header("location: welcome.php");
   // 			}else
   // 			{
   // 				
   // 			}
   // 		}
   // 	}
?>