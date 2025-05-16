
<!-- Modal --
            <form class="row g-3" method="POST">
                <div class="modal-body">

                    <div class="col-md-4">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstname" value="<?= $row['First_name']?>">
                    </div>

                    <div class="col-md-4">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" value="<?= $row['Last_name']?>">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="<?= $row['Address']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" value="<?= $row['City']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone no</label>
                        <input type="number" class="form-control" name="phoneno" value="<?= $row['Phone_no']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $row['Email']?>">
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?= $row['Password']?>">
                    </div>             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form> 
        </div>
    </div>
</div>
