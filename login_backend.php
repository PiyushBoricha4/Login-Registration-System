<?php
    require_once "./connection.php";
    


    if(isset($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM `login` WHERE `Email`='$user' AND `Password`= '$pass' ";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0)
        {
            // echo "Log in Successfull";
            $data=mysqli_fetch_assoc($result);

            $_SESSION['userdata']=$data;
            
            ?>
            <script>
                alert("Login Successfully");
                window.location.href="dashboard.php";
             </script>
            <?php
// echo "<pre>";
// print_r($data);


        }
        else
        {
          ?>
            <script>
                alert("Invalid Username or Password");
             </script>

<?php
        }
    }
?>