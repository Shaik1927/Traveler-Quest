<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Novelquest - Travel Anywhere</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
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
      <a class="navbar-brand" href="index.html">Novelquest.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index5.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="Profile.php" class="nav-link">Profile</a></li>
          <li class="nav-item active"><a href="chats.php" class="nav-link">Chats</a></li>
    <li class="nav-item"><a style="Padding:14.4px 20px;" href="Notifications.php"><i style="color:#fff;margin-top:18px;" class="fas fa-bell"></i></a></li>
          <!-- <li class="nav-item"><a href="hotel.html" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
          <?php
            if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){ 
              echo '<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
            }else{
              echo '<li class="nav-item"><a href="login.php" class="nav-link">Login / Register</a></li>';

            }

          ?> 
          <li class="nav-item cta"><a href="search.php" class="nav-link"><span>Search</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->



    <!-- END nav -->
    
    <!-- <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Connect with Friends</h1>
          </div>
        </div>
      </div>
    </div> -->




     <!-- <section class="ftco-section bg-light">
     <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Connect with Friends</h1>
          </div>
        </div>
      </div>
     </div>
     </section> -->



<section class="ftco-section" style="margin-top:60px;">
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Communications</span>
                <h2 class="mb-4">Connect with <strong>Friends</strong></h2>
            </div>
        </div>
        <div class="row2">
            <div class="col-md-6 col-lg-3 ftco-animate" onclick="window.location.href='community.php'" style="margin-right:40%">
                <div class="destination" >
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Community chat's</a></h3>
                        
                       
                        
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-3 ftco-animate" onclick="window.location.href='Water-Adventures.php'">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/person_2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Water Adventures</a></h3>
                       
                      
                    </div>
                </div>
            </div> -->
            <div class="col-md-6 col-lg-3 ftco-animate" onclick="window.location.href='users.php'">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/person_2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Private chat</a></h3>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php
        include "includes/footer.php";
        ?>