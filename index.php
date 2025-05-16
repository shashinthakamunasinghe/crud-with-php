<?php
include_once("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/crud.css">
</head>

<body>
    <h1>CRUD APPLICATION</h1>
    <br>
    <div class="box1">
        <h3>Student Details</h3>

        <a href='insert.php'><button type='button' class='btn btn-primary'>Add Student</button></a>
    </div>

    <?php
    $sql = "SELECT * FROM student_details";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo '
            <table class="table table-hover">
                <thead class ="table-secondary">   
                    <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Phone no</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th colspan="2">Action</th> 
                    </tr>
                </thead>
                <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                    <tr>
                        <td>$row[Id]</td>
                        <td>$row[First_name]</td>
                        <td>$row[Last_name]</td>
                        <td>$row[Address]</td>
                        <td>$row[City]</td>
                        <td>$row[Phone_no]</td>
                        <td>$row[Email]</td>
                        <td>$row[Password]</td>
                
                        <td><a href='update.php?id=" . $row['Id'] . "'><button type='button' class='btn btn-warning'>Edit</button></a></td>

                        <td><a href='delete.php?id=" . $row['Id'] . "'><button type='button' class='btn btn-danger'>Delete</button></a></td>
                        <br>
                    </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<tr><td>No records found</td></tr>";
    }
    
    // Include the modal form for updating student details
    //include("update.php");
    ?>
<?php
    // Close the database connection
    mysqli_close($connection);
?>

    
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>