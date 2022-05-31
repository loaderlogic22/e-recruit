<!DOCTYPE html>
<html lang="en">
<?php include("./components/head.php"); ?>

<body>
    <div class="flex">
        <div class="side-login"></div>
        <div class="form-login">
            <div class="login">
                <form action="student_api.php" id="form" method="POST">
                    <h2>Login</h2>
                    <br>
                    <label for="roll">Roll No</label>
                    <br>
                    <input type="number" name="roll" id="roll" required>
                    <br>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="Password" id="password" required>
                    <br>

                    <input type="submit" id='submit' value="Submit">
                </form>
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