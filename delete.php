<?php
    require_once "./connection.php";

    if(isset($_GET['Id']))
    {
        $id = $_GET['Id'];
        $query = "DELETE FROM `studdat` WHERE `Id`='$id'";
        $result = mysqli_query($conn,$query);
        if ($result) 
        {
            ?>
            <script>
                alert("Data Deleted Successfully...");
                window.location.href = "table.php";
            </script>
            
            <?php
        }
        else
        {
            echo "Error";
        }
    }
?>