<?php 
  // session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<?php include "includes/config.php"; ?>
<head>
 
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
    /* color: #0056b3; */
}

        .login {
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

        .login,
        .field,
        .button {
            animation: fadeIn 0.8s ease-out;
        }
  </style>
</head>
<body >
  <div class="" style="margin-top:100px">
    <section class="form login" >
      <h2>Log in</h2>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit"   value="Login">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php" style="color: #0056b3;font-weight:400;">Signup now</a></div>
    </section>
  
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
