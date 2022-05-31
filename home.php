<?php
include "connection.php";
session_start();
if (!isset($_SESSION['name'])) {
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
    <style>




    </style>
</head>

<body>
    <h1 style="text-align: center;">
        <?php
        $roll = $_SESSION['name'];
        $sql = "select name from student where roll = '$roll' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            echo 'Welcome ' . $row['name'];
        }
        ?>
    </h1>

    <?php
    $sql = "select * from posts";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['post_id'];
            echo "
                <div id='$id' style='display:flex;background-color:red;width:20px;height:20px'>
                    
                </div>
                ";
        }
    }
    ?>
</body>

</html>