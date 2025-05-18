<?php
include_once("database.php");
include("insert.php");
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
    <h1 style="text-align: center; background:linear-gradient(to top right, #ffff99 0%, #ff9900 75%);; padding: 20px;">CRUD APPLICATION</h1>
    <br>
    <div class="box1" style="width: 100%; margin: 10;">
        <h3>Student Details</h3>

        <!-- Button trigger modal -->
         <div class="btn-group" style="float:right; margin-right: 20px;">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertStudentModal" >Add Student
        </button></div>
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

                        <td><button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#updateStudentModal' 
                        data-id='" . $row["Id"] . "'
                        data-firstname='" . $row["First_name"] . "'
                        data-lastname='" . $row["Last_name"] . "'
                        data-address='" . $row['Address'] . "'
                        data-city='" . $row['City'] . "'
                        data-phoneno='" . $row['Phone_no'] . "'
                        data-email='" . $row['Email'] . "'
                        data-password='" . $row['Password'] . "'>Edit</button></td>

                        <td><a href='delete.php?id=" . $row['Id'] . "'><button type='button' class='btn btn-danger'>Delete</button></a></td>
                        <br>
                    </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<tr><td>No records found</td></tr>";
    }
    ?>

    <!--Update Modal -->
    <div class="modal fade" id="updateStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Student Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="update.php" method="POST">
                        <input type="hidden" name="id" id="editId" value="">

                        <div class="col-md-4">
                            <label for="firstname" class="form-label">First name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" value="">
                        </div>

                        <div class="col-md-4">
                            <label for="lastname" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" value="">
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="">
                        </div>

                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="city" value="">
                        </div>

                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone no</label>
                            <input type="number" class="form-control" name="phoneno" id="phoneno" value="">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="">
                        </div>

                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
                </form>

            </div>
        </div>
    </div>

    <?php
    // Close the database connection
    mysqli_close($connection);
    ?>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
    <script src="JavaScript/model.js"></script>
</body>

</html>