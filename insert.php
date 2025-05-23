<?php
//Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First_name = $_POST["firstname"];
    $Last_name = $_POST["lastname"];
    $Address = $_POST["address"];
    $City = $_POST["city"];
    $Phone_no = $_POST["phoneno"];
    $Email = $_POST["email"];
    $Password = $_POST["password"];

    //Insert data
    $sql = "INSERT INTO student_details (First_name, Last_name, Address, City, Phone_no, Email, Password) VALUES ('$First_name', '$Last_name', '$Address', '$City', '$Phone_no', '$Email', '$Password' )";

    if (mysqli_query($connection, $sql)) {
        echo "Data inserted successfully.";
        header("Location: index.php"); // redirect after insert
        exit;
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>

<!-- Insert Modal -->
<div class="modal fade" id="insertStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Insert Student Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3" method="POST">
                    <div class="col-md-4">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required>
                    </div>

                    <div class="col-md-4">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" required>
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city" required>
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone no</label>
                        <input type="number" class="form-control" name="phoneno" id="phone" required>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>


                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label" for="invalidCheck2">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                Agree to terms and conditions
                            </label>
                        </div>
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