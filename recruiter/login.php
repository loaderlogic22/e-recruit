<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<?php include("./components/head.php"); ?>
=======
<?php include("../components/head.php"); ?>

>>>>>>> c54db6914c510166c9dff74963d4a2be3b34c91a
<body>
    <div class="flex">
        <div class="side-login"></div>
        <div class="form-login">
            <div class="login">
<<<<<<< HEAD
                <form action="student_api.php" id="form" method="POST" autocomplete="off">
                    <br><br>
                    <center><h1>Login</h1></center>
                    <br>
                    <br>
                    <label for="roll">Roll No</label>
                    <br>
                    
                    <input type="number" name="roll" id="roll" placeholder="Enter your Roll" autocomplete="off" required>
                    <br>
                    <br>
                    <label for="password">Password</label>
                    <br>
                   
                    <input type="password" name="Password" id="password" placeholder="Enter your Password" autocomplete="off" required>
                    <br>

<br>
<br>
                    <input type="submit" id='submit' class="btn-grad" value="Submit">

                </form>
                <br>
<a href="forgot.php" class="forgot">Forgot Password?</a>
<br>
 <br>
<a href="forgot.php" class="forgot">Are u a Student?</a>
=======
                <form action="recruiter_api.php" id="form" method="POST">
                    <h2>Login</h2>
                    <br>
                    <label for="roll">ID/Username</label>
                    <br>
                    <input type="username" name="username" id="username" required>
                    <br>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="Password" id="password" required>
                    <br>
                    <input type="submit" id='submit' value="Submit">
                </form>
>>>>>>> c54db6914c510166c9dff74963d4a2be3b34c91a
            </div>
        </div>
    </div>

    <script>
        document.getElementById('submit').addEventListener('click', e => {
            e.preventDefault();
<<<<<<< HEAD
            let roll = document.getElementById('roll').value;
            let password = document.getElementById('password').value;
            const fd = new FormData();
            fd.append('case', 'login');
            fd.append('roll', roll);
            fd.append('password', password);
            fetch('student_api.php', {
=======
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            const fd = new FormData();
            fd.append('case', 'login');
            fd.append('username', username);
            fd.append('password', password);
            fetch('../recruiter_api.php', {
>>>>>>> c54db6914c510166c9dff74963d4a2be3b34c91a
                    method: 'post',
                    body: fd
                })
                .then(resp => resp.text())
                .then(resp => {
<<<<<<< HEAD
                    // alert(resp);
                    window.location.href = 'index.php';

=======
                    window.location.href = 'home.php';
>>>>>>> c54db6914c510166c9dff74963d4a2be3b34c91a
                })

        })
    </script>
</body>

</html>