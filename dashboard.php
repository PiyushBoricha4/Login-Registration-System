<?php
 require_once "./connection.php";

 
if(!isset($_SESSION['userdata'])){
    header("Location:login.php");
}
//  echo "<pre>";
//  print_r($_SESSION);


 $name= $_SESSION['userdata']['Register'];

 echo "Welcome $name";


?>

<a href="logout.php">Logout</a>