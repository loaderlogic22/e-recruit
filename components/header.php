<div class="navbar">
    <div class="navbar-inner">
        <div class="bar" onclick="openside()"><img src="icon/menu.png" alt=""></div>
        <a href="index.php" class="brand"><img src="img/headerlogo.png" alt=""></a>
        <ul class="nav" id="sidebar">
            <div class="closebtn" onclick="closeside()"><img src="icon/close.png" alt=""></div>
            <?php
            session_start();
            include "connection.php";
            if (isset($_SESSION['name'])) {
            ?>
                <li class="lifirst"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="home.php">Jobs</a></li>
                <li><a href="profile.php"><?php

                                            // $_SESSION['name']
                                            $roll = $_SESSION['name'];
                                            $sql = "select name from student where roll = '$roll' ";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                echo $row['name'];
                                            }


                                            ?>
                    </a></li>
            <?php
            } else {
            ?>
                <li class="lifirst"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="home.php">Jobs</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php } ?>
        </ul>
    </div>
</div>