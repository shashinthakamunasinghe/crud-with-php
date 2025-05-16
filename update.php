<?php
include("database.php");

 if (isset($_GET['id'])) {
     $id = $_GET['id'];

     // Get the existing data
     $sql = "SELECT * FROM student_details WHERE Id = $id";
     $result = mysqli_query($connection, $sql);
     $row = mysqli_fetch_assoc($result);
 }
    
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form data
    $id = $_POST["id"]; 
    $First_name = $_POST["firstname"];
    $Last_name = $_POST["lastname"];
    $Address = $_POST["address"];
    $City = $_POST["city"];
    $Phone_no = $_POST["phoneno"];
    $Email = $_POST["email"];
    $Password = $_POST["password"];

    // Update the database
    $update_sql = "UPDATE student_details SET 
        First_name='$First_name', 
        Last_name='$Last_name', 
        Address='$Address', 
        City='$City', 
        Phone_no='$Phone_no', 
        Email='$Email', 
        Password='$Password'
        WHERE Id = $id";

 if (mysqli_query($connection, $update_sql)) {
         echo "Updated successfully!";
         header("Location: index.php"); // redirect after update
         exit;
     } else {
         echo "Error updating: " . mysqli_error($connection);
     }
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>

<form class="row g-3" method="POST">
                <h3>Update Student Details</h3>
                
                    <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                
                    <div class="col-md-4">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo $row['First_name']?>">
                    </div>

                    <div class="col-md-4">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" value="<?php echo $row['Last_name']?>">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $row['Address']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" value="<?php echo $row['City']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone no</label>
                        <input type="number" class="form-control" name="phoneno" value="<?php echo $row['Phone_no']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['Email']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $row['Password']?>">
                    </div>             
            <div class="col-12">
                <a href="index.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                <input type="submit" class="btn btn-primary" value="Submit" >
            </div>
        </form>
</body>
</html>