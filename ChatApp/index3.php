<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <style>
        .box {
            width: 100%;
            max-width: 600px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 0 auto;
        }

        .ck-editor__editable[role="textbox"] {
            min-height: 300px;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "travelapp";
    $connection = mysqli_connect($server, $username, $password, $database);
    
    if (!$connection) {
        die("Connection terminated: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $activity = $_POST['activity'];
        $content = $_POST['content'];
        
        $insert_query = mysqli_query($connection, "INSERT INTO ckeditor (activity, content) VALUES ('$activity', '$content')");
        
        if ($insert_query) {
            $msg = "Data Inserted";
        } else {
            $msg = "Error: " . mysqli_error($connection);
        }
    }
    ?>
    <div class="container">
        <h3 align="center">CKEditor</h3>
        <br>
        <div class="box">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="activity" placeholder="Activity" required>
                </div>
                <div class="form-group">
                    <textarea id="content" name="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
            <div class="error"><?php if (!empty($msg)) { echo $msg; } ?></div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
