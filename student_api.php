<?php
session_start();
error_reporting(E_ALL);
include "connection.php";
$case = $_POST['case'];
switch ($case) {
    case 'login':
        $username = $_POST['roll'];
        $password = $_POST['password'];

        $sql = "select * from student where roll = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        // echo $sql;
        if ($result) {
            $row = mysqli_num_rows($result);
            if ($row === 1) {
                $_SESSION['name'] = $username;
                echo 'ok';
                // header('location: index.php');
            }
        }

        break;

    case 'signup':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $year = $_POST['year'];
        $desc = $_POST['desc'];
        $dept = $_POST['dept'];

        // profile image upload
        $target_dir = 'uploads/profiles/';
        $target_file_image = $target_dir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file_image)) {

            // resume upload
            $target_dir = 'uploads/resume/';
            $target_file_resume = $target_dir . basename($_FILES['path']['name']);
            if (move_uploaded_file($_FILES['path']['tmp_name'], $target_file_resume)) {
                // both file uploaded 
                // insert to db
                $sql = "insert into student (username,password,name,roll,dept,year,description,resume_path,image) 
                values
                 ('$username','$password','$name','$roll','$dept','$year','$desc','$target_file_resume','$target_file_image')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $_SESSION['name'] = $username;
                    header('location: index.php');
                } else {
                    echo "Something went wrong or username already taken";
                }
            }
        }
        break;

    case 'update':
        $stu_id = $_POST['id'];
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $year = $_POST['year'];
        $desc = $_POST['desc'];
        $dept = $_POST['dept'];

        $sql = "update student set name='$name',roll='$roll',year='$year',description='$desc',dept='$dept' where ";


    case 'apply_post':
        $stu_id = $_POST['stu_id'];
        $post_id = $_POST['post_id'];
        $sql = "insert into apply_post (post_id,applied_stu_id) values ('$post_id','$stu_id')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo 'Good job!';
        } else {
            echo 'error';
        }
        break;

    default:
        # code...
        break;
}
