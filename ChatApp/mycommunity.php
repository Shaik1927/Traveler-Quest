<?php
session_start();
if (isset($_GET['activity'])) {
  $activity = $_GET['activity'];
  $_SESSION['activity'] = $activity;  
}

if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
?>
<?php

  include_once "php/config.php";
?>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}
  body {
    display: flex;
    
    align-items: center;
    justify-content: space-evenly;
    min-height: 100vh;
    background: #f7f7f7;
    align-content: space-around;
    flex-direction: column;
}
  .wrapper {
    background: #fff;
    max-width: 500px;
    width: 100%;
    border-radius: 16px;
    box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1), 0 32px 64px -48px rgba(0, 0, 0, 0.5);
}
.chat-area header {
    width: 100%;
    padding: 18px 30px;
    height: 400px;
}

.chat-area header .back-icon {
    color: #333;
    font-size: 18px;
}

.chat-area header img {
    height: 45px;
    width: 45px;
    margin: 0 15px;
}

.chat-area header .details span {
    font-size: 17px;
    font-weight: 500;
}
.chat-area .details{
  max-height: 350px;
    overflow-y: auto;
}
:is(.details,
.chat-area)::-webkit-scrollbar {
    width: 0px;
}

.incoming .details p {
    background: #fff;
    color: #333;
    border-radius: 18px 18px 18px 0;
}

.typing-area {
    min-width: 450px;
    padding: 18px 30px;
    display: flex;
    justify-content: space-between;
}

.typing-area input {
    height: 45px;
    width: calc(100% - 58px);
    font-size: 16px;
    padding: 0 13px;
    border: 1px solid #e6e6e6;
    outline: none;
    border-radius: 5px 0 0 5px;
}

.typing-area button {
    color: #fff;
    width: 55px;
    border: none;
    outline: none;
    background-color: #87CEEB;
    font-size: 19px;
    cursor: pointer;
    opacity: 0.7;
    pointer-events: none;
    border-radius: 0 5px 5px 0;
    transition: all 0.3s ease;
}

.typing-area button.active {
    opacity: 1;
    pointer-events: auto;
}


/* Responive media query */

@media screen and (max-width: 450px) {
    .form,
    .users {
        padding: 20px;
        width: 100%;
    }
    .form header {
        text-align: center;
    }
    .form form .name-details {
        flex-direction: column;
    }
    .form .name-details .field:first-child {
        margin-right: 0px;
    }
    .form .name-details .field:last-child {
        margin-left: 0px;
    }
    .users header img {
        height: 45px;
        width: 45px;
    }
    .users header .logout {
        padding: 6px 10px;
        font-size: 16px;
    }
     :is(.users,
    .users-list) .content .details {
        margin-left: 15px;
    }
    .users-list a {
        padding-right: 10px;
    }
    .chat-area header {
        padding: 15px 20px;
    }
  
    .chat-area form {
        padding: 20px;
    }
    .chat-area form input {
        height: 40px;
        width: calc(100% - 48px);
    }
    
}

.ftco-section {
    position: relative;
    width: 120%;
    display: block;
}
</style>
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

<body>
<h2 style="margin-top:80px"><?php
  $activity=$_SESSION['activity'];
 echo $activity;
 echo' Community'; 
 ?>
 </h2>
  <div class="wrapper" >
 
    <section class="chat-area">
    
      <header>
       
      <div class="details">
      <?php
  
  // Include database connection code here
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = '';
  $db_name = 'travelapp';

  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  $unique_id = $_SESSION["unique_id"];  
  $activity=$_SESSION['activity'];
  
  $sql = "SELECT * FROM messages_grp where activity='$activity' "; //    AND unique_id = {$_SESSION['unique_id']}    Modify your query to filter messages for the session user
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $data_id = $row["unique_id"];
        $id = $row['id'];
          $fname = $row["fname"];
          $message = $row["message"];

          if ($unique_id != $data_id) {
              echo '
              <div class="msg left-msg">
                <div class="msg-bubble">
                  <div class="msg-info">
                    <div class="msg-info-name">' . $fname . '</div>
                  </div>
                  <div class="msg-text">
                    ' . $message . ' <br>
                   

                  </div>
                </div>
              </div>';
          } if($unique_id== $data_id) {
              echo '
              <div class="msg right-msg">
                <div class="msg-bubble">
                  <div class="msg-info">
                    <div class="msg-info-name">' . $fname . '</div>
                  </div>
                  <div class="msg-text">
                    ' . $message . ' <br>

                  </div>
                </div>
              </div>';
          }
      }
  }

  mysqli_close($conn);
?>
        </div>
      </header>
      <form action="mycommunitybk.php" method="post" class="typing-area">
    <input type="text" class="msger-input" name="message" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn"><i class="fab fa-telegram-plane"></i></button>
  </form> 
    </section>
  </div>

<?php
include "includes/footer.php";
?>