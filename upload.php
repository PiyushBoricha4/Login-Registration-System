<?php
    require_once "./connection.php";

    if (isset($_POST['submit'])) 
    {
        if(isset($_FILES['photo']))
        {
            $name = $_FILES['photo']['name'];
            $size = ($_FILES['photo']['size'])/1024;
            $error = $_FILES['photo']['error'];
            $tmp_name = $_FILES['photo']['tmp_name'];

            if($error == 0)
            {
                if($size<1024)
                {
                    $filename = time().$name;
                    $path = "./img/".$filename;
                    move_uploaded_file($tmp_name,$path);

                    $query = "INSERT INTO `files`(`Filename`) VALUES('$filename')";
                    $result = mysqli_query($conn,$query);

                    if($result)
                    {?>
                        <script>
                            alert("Data Saved Succesfully");
                            window.location.href = "Data.php";
                        </script>
<?php
                    }
                    else
                    {
                        echo "Error";
                    }
                }
                else
                {
                    echo "File size must be less than 1 MB";
                }
            }
            else
            {
            
            }
        }
    }
?>