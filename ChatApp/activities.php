<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novel Quest</title>
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        .container {
            margin-top: 20px;
        }
        
        .container .wrapper {
            margin-left: 35%;
        }
        
        .row {
            padding: 20px;
        }
    </style>

</head>

<body>
    <section id="Logo" class="section-p1">
        <h1 style="font-style: italic;">NOVEL QUEST</h1>
        <a href="#"><img src="images/logo.jpg" alt=""></a>
    </section>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>enter details</span>
            </div>
            <div>
                <p> Activities data base </p>
            </div>
            <form action="activitiesbk.php" method="post" enctype="multipart/form-data">

            <div class="row">
                    <input type="categeory" name="categeory" placeholder="categeory" required>
                </div>

                <div class="row">
                    <input type="activity" name="activity" placeholder="activity" required>
                </div>

                <div class="row">
                    <input type="file" name="image" placeholder="image" required>
                </div>

                <div class="row">
                    <input type="imagename" name="imagename" placeholder="imagename" required>
                </div>

                <div class="row">
                    <input type="text" name="url" placeholder="url" required>
                </div>


                <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
                <div class="row button">
                    <input type="submit" value="Submit">
                </div>
                <!-- <div class="signup-link">Already have an account? <a href="#" onclick="window.location.href='login.php'">Log in</a></div> -->
            </form>
        </div>
    </div>



</body>

</html>