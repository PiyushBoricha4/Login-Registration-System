<?php
    $hostname = "localhost";
    $dbname = "connection";
    $db_uname = "root";
    $db_pass = "";

    session_start();
    
    $conn = mysqli_connect($hostname,$db_uname,$db_pass,$dbname);

    if($conn)
    {
       // echo "Connection Successful...";
    }
    else
    {
        echo "Connection Failed...";
    }
?>