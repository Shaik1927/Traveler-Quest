<?php 
  // session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<?php include "php/config.php"; ?>
<head>
 
 <style>
     body {
         font-family: 'Poppins', sans-serif;
         background-image: url('../ChatApp/images/hot.jpg') !important;
         background-size: cover !important; ;
         background-position: center !important; ;
         background-repeat: no-repeat !important; ;
         background-color: #f5f5f5;
         margin: 0;
         padding: 0;
         height: 100vh;
     }

     h2 {
 text-align: center;
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
  <div class="" style="margin-top:50px"> 
    <!-- style="margin-top:50px;" -->
    <section class="form login">
      <h2>Registration</h2>
      <form action="php/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Phone Number</label>
            <input type="text" name="lname" placeholder="Phone Number" required>
          </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
      <div class="link" >Already signed up? <a href="login.php" style="color: #0056b3;font-weight:400;">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>



