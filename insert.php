<?php
    require_once "./connection.php";

    if(isset($_POST['submit']))
    {
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $gen = $_POST['Gender'];
        $city = $_POST['City'];
        $state = $_POST['State'];
        $email = $_POST['Email'];
        $phone = $_POST['codepno'].$_POST['Phone'];
        $pass = $_POST['cpassword'];

        $query = "INSERT INTO `studdat`(`Fname`,`Lname`,`Gender`,`City`,`State`,`Email`,`Phone`,`Password`) VALUES('$fname','$lname','$gen','$city','$state','$email','$phone','$pass')";

        $result = mysqli_query($conn,$query);

        if ($result) 
        {
            ?>
            <script>
                alert("Data Saved Successfully...");
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