<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Traveler Quest-Embark on Adventurous Journeys</title>
    <link rel="shortcut icon" href="../ChatApp/images/TQ-favicon5.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('../ChatApp/images/hot.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #f5f5f5; /* Fallback color if the image is not available */
            margin: 0;
            padding: 0;
            height: 100vh; /* Ensure the background covers the entire viewport */
        }

        h2 {
    text-align: center;
    color: #0056b3;
}

        .adm_login {
            max-width: 400px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8); /* Add transparency to the form background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        .field {
            margin-bottom: 20px;
        }

        .input {
            position: relative;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .material-symbols-outlined {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .adm_login,
        .field,
        .button {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>

<body>
    <section class="form adm_login">
        <h2>Admin Login..</h2>
        <div class="login_box">
            <form action="admin_login_bk.php" method="post" enctype="multipart/form-data">
                <div class="field input">
                    <input type="text" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="field input">
                    <input type="password" name="password" placeholder="Your Password" required id="id_password">
                    <span class="material-symbols-outlined" id="togglePassword">visibility_off</span>
                </div>
                <div class="field">
                    <input class="button" type="submit" value="Log in">
                </div>
            </form>
        </div>
    </section>

    <script src="script.js"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.textContent = type === 'text' ? 'visibility' : 'visibility_off';
        });
    </script>
</body>

</html>
