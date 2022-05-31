<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
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
            <div class="col col-md-3"></div>
            <div class="col col-md-3">
                <div class="card" style="width: 18rem;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Post a job</h5>
                        <p class="card-text">Post a job to hire employee</p>
                        <a href="posts.php" class="btn btn-primary">Post Now</a>
                    </div>
                </div>
            </div>


            <div class="col col-md-3">
                <div class="card" style="width: 18rem;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">View posts</h5>
                        <p class="card-text">View all the jobs posted by you</p>
                        <a href="allposts.php" class="btn btn-primary">View Now</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 mb-3"></div>

            <!-- grid item 2 -->
            <div class="col col-md-3 "></div>
            <div class="col col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Update profile</h5>
                        <p class="card-text">Update your old details</p>
                        <a href="posts.php" class="btn btn-primary">Post Now</a>
                    </div>
                </div>
            </div>


            <div class="col col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">View responses</h5>
                        <p class="card-text">View all responses from candidates</p>
                        <a href="posts.php" class="btn btn-primary">View Now</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3"></div>



        </div>
    </div>
</body>

</html>