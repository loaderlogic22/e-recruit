<!DOCTYPE html>
<html lang="en">
<?php include("./components/head.php"); ?>
<body>
    <div class="flex">
        <div class="side-login"></div>
        <div class="form-login">
            <div class="login">
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
<a href="forgot.php" class="forgot">Are u a recruiter?</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('submit').addEventListener('click', e => {
            e.preventDefault();
            let roll = document.getElementById('roll').value;
            let password = document.getElementById('password').value;
            const fd = new FormData();
            fd.append('case', 'login');
            fd.append('roll', roll);
            fd.append('password', password);
            fetch('student_api.php', {
                    method: 'post',
                    body: fd
                })
                .then(resp => resp.text())
                .then(resp => {
                    // alert(resp);
                    window.location.href = 'index.php';

                })

        })
    </script>
</body>

</html>