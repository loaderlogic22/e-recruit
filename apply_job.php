<?php
include "connection.php";
session_start();
if (!isset($_SESSION['name'])) {
    header('location: login.php');
}
$name = $_SESSION['name'];
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        const fd = new FormData();
        fd.append('case', 'apply_post');
        fd.append('stu_id', '<?php echo $name ?>');
        fd.append('post_id', '<?php echo $id ?>');
        fetch('student_api.php', {
                method: 'post',
                body: fd
            })
            .then(e => e.text())
            .then(e => {
                // alert(e);
                swal(e, "You have applied for the job!", "success");
                setTimeout(() => {
                    window.location.href = 'home.php';
                }, 2000)
            })
    </script>
</body>

</html>