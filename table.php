<?php 
    require_once "./connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <h3 class="bg-info p-3 text-center">
        Registration Data
    </h3>
        <div class="container mt-5">

        <div class="d-flex justify-content-end">
            <a href="./form.php" class="btn btn-primary my-3"> Add New</a>
        </div>

<table class="table">
    <thead>
        <tr class="table-primary">
            <th>Sr.no</th>
            <th>Name</th>
            <th>Gender</th>
            <th>State</th>
            <th>City</th>
            <th>Email</th>
            <th>Mobile</th>
            <!-- <th>Password</th> -->
            <th colspan="2">action</th>
        </tr>
    </thead>
    <tbody>
    <?php
            $query="SELECT * FROM `studdat`";
            $result=mysqli_query($conn,$query);
            if($result)
                $i=1;
            {
                while ($data=mysqli_fetch_assoc($result))
                {
                    echo "<tr class='table-info'>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$data['Fname'].' '.$data['Lname']."</td>";
                        echo "<td>".$data['Gender']."</td>";
                        echo "<td>".$data['State']."</td>";
                        echo "<td>".$data['City']."</td>";
                        echo "<td>".$data['Email']."</td>";
                        echo "<td>".$data['Phone']."</td>";
                        // echo "<td>".$data['crass']."</td>";
                        echo "<td> <i class='bi bi-pencil-square'></i> </td>";
                        echo "<td> <a href='javascript:void(0);' onclick='deletedata(".$data['Id'].")'> <i class='bi bi-trash-fill'></i> </a></td>";
                        echo "</tr>";
                $i++;
                }
            }
        
    ?>
   
    </tbody>
</table>
<script>
        function deletedata(Id)
        {
            let del = confirm("Do you want to delete data...?");

            if (del) 
            {
                window.location.href = "delete.php?Id="+Id;
            }
        }
    </script>
</body>
</html>