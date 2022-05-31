<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - Jobs </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container p-5 d-flex align-items-center" style="flex-direction: column;">

        <form method="post">
            <div id="editor" class="mb-3">Enter your post details here</div>

            <div class="w-100 mt-3">
                <label for="formFile" class="form-label">Image(optional)</label>
                <input class="form-control" name="image" type="file" id="formFile" accept=".jpg,.png,.jpeg">
            </div>
            <input type="hidden" name="case" value="posts">
            <button class="btn btn-primary mt-3">
                Post
            </button>
        </form>

    </div>

    <script src="../js/Editor.js"></script>
    <script>
        data = '';
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    editorData = editor.getData();
                    data = editorData;
                });
            })
            .catch(error => {
                console.error(error);
            });

        document.querySelector('button').addEventListener('click', e => {
            e.preventDefault();
            if (data == '') {
                alert('Enter body of the post');
                return;
            }
            // alert(data);
            let photo = document.getElementById("formFile").files[0];
            let formData = new FormData();

            formData.append("image", photo);
            formData.append("body", data);
            formData.append("case", 'posts');

            fetch('../recruiter_api.php', {
                    method: "POST",
                    body: formData
                })
                .then(e => e.text())
                .then(e => {
                    if (e == 'ok') {
                        alert("Post uploaded");
                        window.location.reload();
                    }
                })
        })
    </script>
</body>

</html>