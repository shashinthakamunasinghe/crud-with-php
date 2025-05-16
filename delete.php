<?php
include("database.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $sql = "DELETE FROM student_details WHERE Id = $id";

    if (mysqli_query($connection, $sql)) {
        echo "Record deleted successfully.";
        header("Location: index.php"); // redirect after deletion
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    echo "No ID provided for deletion.";
}
?>