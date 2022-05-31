<?php
include 'connection.php';

// $id = $_POST['id'];
// $name = $_POST['name'];
// $roll = $_POST['roll'];
// $designation = $_POST['designation'];
// $conpany = $_POST['conpany'];
// $description = $_POST['description'];
// $website = $_POST['website'];
// $logo = $_POST['logo'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $cpassword = $_POST['cpassword'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Placement Cell</title>
</head>

<body>
    <div class="container">
        <div class="d-flex  justify-content-center">
            <form class="col-md-6 " method="POST">
                <div class="col-md-12 d-flex  justify-content-center">
                    <h1>Recruiter</h1>
                </div>
                <div class="mb-3 ">
                    <label for="id" class="form-label">ID</label>
                    <input type="id" class="form-control" id="id" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="designation" class="form-control" id="designation" required>
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <input type="company" class="form-control" id="company" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">location</label>
                    <input type="location" class="form-control" id="location" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="description" class="form-control" id="description" required>
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="website" class="form-control" id="website" required>
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Company logo</label>
                    <input class="form-control form-control-sm" id="logo" type="file" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="cpassword" class="form-control" id="cpassword" required>
                </div>

                <div class="center ">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary mid">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>