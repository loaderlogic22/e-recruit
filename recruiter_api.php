<?php
session_start();
error_reporting(E_ALL);
include "connection.php";
$case = $_POST['case'];
switch ($case) {
    case 'login':
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from recruiter where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_num_rows($result);
            if ($row === 1) {
                $_SESSION['username'] = $username;
                // header('location: index.php');
            }
            echo json_encode($row);
        }

        break;

    case 'signup':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $company = $_POST['company'];
        $location = $_POST['location'];
        $desc = $_POST['desc'];
        $url = $_POST['url'];

        // profile image upload
        $target_dir = 'uploads/profiles/';
        $target_file_image = $target_dir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file_image)) {

            // file uploaded 
            // insert to db
            $sql = "insert into recruiter (username,password,name,designation,company,location,description,web_url,logo) 
                values
                 ('$username','$password','$name','$designation','$company','$location','$desc','$url','$target_file_image')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $_SESSION['username'] = $username;
                header('location: index.php');
            } else {
                echo "Something went wrong or username already taken";
            }
        }
        break;

    case 'posts':
        $bytes = random_bytes(4);
        $post_id = bin2hex($bytes); //unqiue id
        $rec_id = $_SESSION['username'];
        $body = $_POST['body'];

        $target_dir = 'uploads/posts/';
        $target_file_image = $target_dir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file_image)) {
            $sql = "INSERT INTO `posts` (`post_id`, `body`, `image`, `rec_id`) VALUES ('$post_id','$body','$target_file_image','$rec_id')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo 'ok';
            } else {
                echo 'something went wrong' . mysqli_error($conn);
            }
        }

        break;

    case 'delete':
        $id = $_POST['id'];
        $sql = "delete from posts where post_id = '$id' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            //echo 'deleted';
        }
        break;

    default:
        # code...
        break;
}
