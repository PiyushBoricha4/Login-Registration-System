<?php
    require_once "./connection.php";

    if(isset($_POST['sign']))
    {
        $fname = $_POST['register'];
        $mail = $_POST['mail'];
        $pass = $_POST['newpass'];
        
        $query = "INSERT INTO `login`(`Register`,`Email`,`Password`) VALUES('$fname','$mail','$pass')";

        $result = mysqli_query($conn,$query);
    }
?>