<?php
session_start();
if (!isset($_SESSION['username'])) {
    // header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-5">
    <div class="container">
        <h1 style="text-align: center;">
            Welcome $recruiter
        </h1>
        <div class="row row-cols-2">
            <!-- grid item -->
            <div class="col col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Post a job</h5>
                        <p class="card-text">Post a job so that students can apply</p>
                        <a href="posts.php" class="btn btn-primary">Post Now</a>
                    </div>
                </div>
            </div>




        </div>
    </div>
</body>

</html>