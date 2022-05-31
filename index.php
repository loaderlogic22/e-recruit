<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
$name = $_SESSION['name'];
// echo $name;s
