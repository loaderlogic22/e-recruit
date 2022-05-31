<!DOCTYPE html>
<html lang="en">
<?php include("../components/head.php"); ?>
<<<<<<< HEAD
=======

>>>>>>> 0ffe9d5e5951c3ed2b66d100f5faa700aca81274
<body>
    <div class="flex">
        <div class="side-login"></div>
        <div class="form-login ">
            <div class="login">
                <form action="student_api.php" id="form" method="POST" autocomplete="off" class="d-flex justify-content-center">
                    <br><br>
                    
                        <h1>Login</h1>
                    
                    <br>
                    <br>
                    <label for="roll">Username</label>
                    <br>
<<<<<<< HEAD
                    
                    <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="off" required>
=======

                    <input type="number" name="roll" id="roll" placeholder="Enter your Roll" autocomplete="off" required>
>>>>>>> 0ffe9d5e5951c3ed2b66d100f5faa700aca81274
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
<<<<<<< HEAD
<!-- <a href="forgot.php" class="forgot">Forgot Password?</a> -->
<!-- <br>
 <br> -->
<a href="forgot.php" class="forgot">Are you a student?</a>
=======
                <a href="forgot.php" class="forgot">Forgot Password?</a>
                <br>
                <br>
                <a href="forgot.php" class="forgot">Are u a recruiter?</a>
>>>>>>> 0ffe9d5e5951c3ed2b66d100f5faa700aca81274
            </div>
        </div>
    </div>

    <script>
        document.getElementById('submit').addEventListener('click', e => {
            e.preventDefault();
            let roll = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            const fd = new FormData();
            fd.append('case', 'login');
            fd.append('username', roll);
            fd.append('password', password);
            fetch('../recruiter_api.php', {
                    method: 'post',
                    body: fd
                })
                .then(resp => resp.text())
                .then(resp => {
                    // alert(resp);
                    window.location.href = 'home.php';

                })

        })
    </script>
</body>

</html>