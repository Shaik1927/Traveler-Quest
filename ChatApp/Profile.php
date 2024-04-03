<?php
  session_start();
  include_once "php/config.php";

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



    <!-- style="margin-top: 70px;" -->

    <section class="ftco-section contact-section ftco-degree-bg" >
      
        
          <div class="col-md-6" id="">
          <form name="register"  id="register" method="post">
          <input type="hidden" name="action" value="register">
          <!-- <div class="form-group">
               <img  src="images/person_1.jpg" style="width:250px;height:250px; border-radius: 250px;margin-left:30%;" alt="">
               
            </div> -->
            <div class="form-group" style="text-align: center;">
               <h1>Your Profile</h1>
               
            </div>
            <!-- <div class="form-group">
               <input  type="file" style="width:250px;height:250px; border-radius: 250px;margin-left:30%;border:1px solid #000;" alt="">
               <input  name="image" src="images/person_1.jpg" placeholder="image" required>
               
            </div> -->

            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <div class="profile-img-container" >
          <img src="php/images/<?php echo $row['img']; ?>" alt="" class="profile-img" id="current-img">
          </div>


<?php 
//  remove here 
        //   echo ' <div class="profile-img-container" >
        //     <img style="border:1px solid #ccc;" src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Profile Photo" class="profile-img" id="current-img">
           
        // </div>';
         
 // <div class="edit-icon" onclick="openFileInput()" >
            //     <i class="fas fa-edit" ></i> <!-- You can use any edit icon of your choice -->
            // </div>
        ?>
      <!-- Input element for choosing a new photo
      <input type="file" id="file-input" accept="image/*"  onchange="displayNewImage()" /> -->


          <div class="form-group">
            <label >Username  </label>
                <input name="regname" id="regname" class="form-control" placeholder="username" value="<?php echo $row['fname']?>" readonly>
          
            <label >Email  </label>
                <input name="regemail" id="regemail" class="form-control" placeholder="Email" value="<?php echo $row['email'] ?>" readonly>
                
                <label >Mobile Number  </label>
              <input name="regmobile" id="regmobile" class="form-control" placeholder="Mobile number" value="<?php echo $row['lname'] ?>" readonly>
         
                </div>
          </form>
          </div>
        </div>
      </div>
    </section>

   
  
    <?php
    include "includes/footer.php";
    ?>
    




</body>

</html>



<?php
    // // Query to select all images from the table
    // $sql = "SELECT * FROM geolocation where activity='Bike Trips' and mylocation='Chennai'";
    // $result4 = $conn->query($sql);
    // ?>
    //         <?php
    //        

               
    //             echo '<a href="location.php?place='.$advlocation.'">
    //             <div class="col-md-3 d-flex align-self-stretch ftco-animate">
    //             <div class="  media block-6 services d-block text-center">
    //                 <div class="d-flex justify-content-center">
    //                 <img src="data:image/jpeg;base64,' . base64_encode($image) . '" style="width:200px;height:200px;" alt="">
    //                 </div>
    //                 <div class="media-body p-2 mt-2">
    //                     <h3 class="heading mb-3" >' .$advlocation . '</h3>
    //                 </div>
    //             </div>
    //         </div></a>';
                
    //             }
    //         } else {
    //             echo 'No Adventures found in the database.';
    //         }
            ?>