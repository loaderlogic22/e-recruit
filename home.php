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
        ?>
    </h1>

    <div class="fullpage">
        <div class="contpage">
            <div class="leftpage">
                <div class="cardhead">
                    <div class="heading-card">
                        <p>Connect</p>
                    </div>
                    <div class="card left-card">
                        <div class="iconimg"><img src="./icon/whatsapp.png" alt="">
                            <a href="#" class="btn">Send Message</a>
                        </div>
                        <br><br>
                        <div class="iconimg"><img src="./icon/linkedin.png" alt="">
                            <a href="#" class="btn">Send Message</a>
                        </div>
                    </div>
                </div>
                <div class="cardhead">
                    <div class="heading-card">
                        <p>Explore</p>
                    </div>
                    <div class="card left-card">
                        <div class="iconimg"><img src="./icon/supplier.png" alt="">
                            <a href="#" class="btn">Placement</a>
                        </div>
                        <br><br>
                        <div class="iconimg"><img src="./icon/recruitment.png" alt="">
                            <a href="#" class="btn">Recruiters</a>
                        </div>
                    </div>
                </div>
                <div class="cardhead">
                    <div class="heading-card">
                        <p>T&P Members</p>
                    </div>
                    <div class="card left-card">
                        <div class="long-btn">
                            <a href="#">Technical Memeber</a>
                        </div>
                        <div class="long-btn">
                            <a href="#">Excutive Memeber</a>
                        </div>
                        <div class="long-btn">
                            <a href="#">Core Memeber</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>




            <div class="middlepage">

                <?php
                $sql = "select * from posts";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['post_id'];
                ?>
                        <div class="cardhead" id="<?php echo $id ?>">
                            <div class="heading-card">
                            </div>
                            <div class="card left-card">
                                <?php echo $row['body'] ?>
                                <div class="long-btn">
                                    <a href="apply_job.php?id=<?php echo $id ?>">Apply now</a>
                                </div>
                            </div>

                        </div>
                <?php  }
                }
                ?>
            </div>

            <div class="rightpage">
                <div class="cardhead">
                    <div class="heading-card">
                        <p>T&P Office</p>
                    </div>
                    <div class="card left-card">
                        <center>
                            <div class="pro">
                                <div class="prodit">
                                    <div class="proimg">
                                        <img src="./icon/user.png" alt="">
                                    </div>
                                    <div class="dit">
                                        <p>Jhon Deo</p>
                                        <p>T&P Office</p>
                                        <p>9362587410</p>

                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="cardhead">
                    <div class="heading-card">
                        <p>Faculty</p>
                    </div>
                    <div class="card left-card">
                        <center>
                            <div class="pro">
                                <div class="prodit">
                                    <div class="proimg">
                                        <img src="./icon/user.png" alt="">
                                    </div>
                                    <div class="dit">
                                        <p>Jhon Deo</p>
                                        <p>Faculty</p>
                                        <p>9362587410</p>
                                        <div class="long-btn">
                                            <a href="#">For Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="cardhead">
                    <div class="heading-card">
                        <p>Academic Queries</p>
                    </div>
                    <div class="card left-card">
                        <center>
                            <div class="pro">
                                <div class="prodit">
                                    <div class="proimg">
                                        <img src="./icon/user.png" alt="">
                                    </div>
                                    <div class="dit">
                                        <p>Jhon Deo</p>
                                        <p>Faculty</p>
                                        <p>9362587410</p>
                                        <div class="long-btn">
                                            <a href="#">For Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="margintop"></div>
    <?php include("./components/footer.php"); ?>
</body>

</html>