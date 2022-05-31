<?php
session_start();
error_reporting(E_ALL);
include "connection.php";
$case = $_POST['case'];
switch ($case) {
    case 'login':
        $username = $_POST['username'];
        $password = $_POST['password'];
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
                $sql = "insert into student (name,roll,dept,year,description,resume_path,image) 
                values
                 ('$username','$roll','$dept','$year','$desc','$target_file_resume','$target_file_image')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $_SESSION['name'] = $username;
                    header('location: index.php');
                }
            }
        }

        // 
        break;

    case 'signup':
        break;

    default:
        # code...
        break;
}

function fileUpload($files)
{
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($files['name']);
    if (move_uploaded_file($files['name'], $target_file)) {
        return true;
    }


    // return true;
}
