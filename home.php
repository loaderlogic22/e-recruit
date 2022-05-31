<?php
include "connection.php";
session_start();
if (!isset($_SESSION['name'])) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include("./components/head.php"); ?>
<body>
<?php include("./components/header.php"); ?>
<div class="margintop"></div>
    <h1 style="text-align: center;">
        <?php
        $roll = $_SESSION['name'];
        $sql = "select name from student where roll = '$roll' ";
        $result = mysqli_query($conn, $sql);
        // if ($result) {
        //     $row = mysqli_fetch_assoc($result);
        //     echo 'Welcome ' . $row['name'];
        // }
        ?>
    </h1>

    <?php
    $sql = "select * from posts";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['post_id'];
            ?>
                <!-- <div id="<?php $id ?>" style="display:flex;background-color:red;width:20px;height:20px"> 
                </div> -->
                <?php  }
    }
    ?>
    <div class="fullpage">
        <div class="contpage">
            <div class="leftpage">
                <div class="connect">
                    Connect
                </div>
                <div class="card left-card">

                </div>
            </div>
            <div class="middlepage">

            </div>
            <div class="rightpage">

            </div>
        </div>
    </div>
    <div class="margintop"></div>
    <?php include("./components/footer.php"); ?>
</body>

</html>