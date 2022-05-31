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
    <title>Posts - Jobs </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container p-5 d-flex align-items-center" style="flex-direction: column;">

        <div class="form-floating w-50 mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Comments</label>
        </div>

        <div class="w-50">
            <label for="formFile" class="form-label">Image(optional)</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <button class="btn btn-primary mt-3">
            Post
        </button>
    </div>

    <script>

    </script>
</body>

</html>