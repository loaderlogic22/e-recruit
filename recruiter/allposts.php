<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
$username = $_SESSION['username'];
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

<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table">

                <tr>
                    <th>id</th>
                    <th>Date</th>
                    <th>Body</th>
                    <th>Image</th>
                </tr>

                <?php
                $sql = "select * from posts where rec_id='$username'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '';
                    }
                }


                ?>

            </table>
        </div>
    </div>
</body>

</html>