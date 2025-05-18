<?php
include("database.php");

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

