<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Traveler Quest-Embark on Adventurous Journeys</title>
    <link rel="shortcut icon" href="images/TQ-favicon5.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    

   
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index5.php">Traveler Quest.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto" style="text-decoration:none;">
          <li class="nav-item"><a href="index5.php" class="nav-link">Home</a></li>
          
          <!-- <li class="nav-item"><a href="hotel.html" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
          <?php
            if(isset($_SESSION["unique_id"]) && $_SESSION["unique_id"] == true){ 
              echo '<li class="nav-item"><a href="Profile.php" class="nav-link">Profile</a></li>';
              echo '<li class="nav-item"><a  class="nav-link">Chats <i class="fas fa-caret-down"></i></a>';
              echo '<ul class="dropdown" style="text-decoration:none;">';
              echo '<li><a href="community.php">Community Chats</a></li>';
              echo ' <li><a href="users.php">Personal Chats</a></li>';
              echo '</ul>';
              echo '</li>';
              // echo '<li class="nav-item"><a style="Padding:14.4px 20px;" class="nav-link" href="Notifications.php"><i  class="fas fa-bell"></i></a></li>';
              ?>
<li class="nav-item"><a href='php/logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>' class="nav-link">Logout</a></li>
<?php
             echo' <li class="nav-item cta"><a href="search.php" class="nav-link" style="width: fit-content;"><span>Search</span></a></li>';
            }
            else{
              echo'<li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>';
            }
          ?> 
        
          
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->





<?php  include_once "header.php"; ?>
<body>
  <div class="wrapper" style="margin-top:80px">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <!-- <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a> -->
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      
      <div class="users-list"><a href="chat.php?user_id=<?php echo $row['unique_id']; ?>">
                    <div class="content">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                    <span><?php echo $row['fname'] ?></span>
                    <p><?php echo $row['status']; ?></p>
                    </div>
                    </div>
                    <?php 
                    if(isset($row["unique_id"]) && $row["unique_id"] == true){
                      echo'<div class="status-dot "><i class="fas fa-circle"></i></div>';
                    }
                    else{
                      echo'<div class="status-dot offline"><i class="fas fa-circle"></i></div>';
                    }
                    ?>
                    
                </a>
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>







<?php
include "includes/footer.php";
?>
