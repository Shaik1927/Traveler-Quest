<?php
  session_start();
  include_once "includes/config.php";
  if(!isset($_SESSION['id'])){
    header("location: admin_login.php");
  }
?>

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
    <!-- <link rel="stylesheet" href="C:\Users\ADMIN\Desktop\Admin-2\css\style.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <aside>

            <div class="top">
                <div class="logo">
                    <h2> <span class="danger">Traveler Quest.</span> </h2>
                </div>
                <div class="close" id="close_btn">
                    <span class="material-symbols-sharp">
          close
          </span>
                </div>
            </div>

            <!-- end top -->
            <div class="sidebar">

               <a href="dashboard.php">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashbord</h3>
                </a>
                <!--  <a href="#" >
                    <span class="material-symbols-sharp">person_outline</span>
                    <h3>custumers</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">insights </span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">mail_outline </span>
                    <h3>Messages</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">receipt_long </span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">report_gmailerrorred </span>
                    <h3>Reports</h3>
                </a> -->

                <a href="#" onclick="toggleDropdown('dropdown1')">
                    <span class="material-symbols-sharp">add </span>
                    <h3>Add Activities</h3>
                </a>
                <div class="dropdown" id="dropdown1">
            <a href="add_top_rate.php">Add Top-Rated </a>
            <a href="add_categeory.php">Add Activity</a>
            <a href="add_locations.php">Add Loctions</a>
            <a href="add_tools&items.php">Add Tools/Items</a>
            <!-- Add more sub-options as needed -->
        </div>


                <a href="#" onclick="toggleDropdown('dropdown2')">
                <span class="material-symbols-outlined">description</span>
                    <h3>App Data</h3>
                </a>
                <div class="dropdown" id="dropdown2">
            <a href="fetch_top_rate.php">Top-Rate activities</a>
            <a href="fetch_categeory.php"> Activity</a>
            <a href="fetch_locations.php">Loctions</a>
            <a href="fetch_items.php">Tools/Items</a>
            <!-- Add more sub-options as needed -->
        </div>



               
                <a href="logout.php">
                    <span class="material-symbols-sharp">logout </span>
                    <h3>logout</h3>
                </a>



            </div>

        </aside>
   
        <main>

            <div class="right">

                <div class="top">
                    <button id="menu_bar">
<span class="material-symbols-sharp" >menu</span>
</button>
<?php
$aid=$_SESSION['id'];
$sql="SELECT name,email from  tbladmin where id=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               
    ?>
    <a href="admin_profile.php">
                    <div class="profile" href="">
                        <div class="profile-photo">
                           <img src="images/TQ-favicon5.png" alt="" href="admin_profile.php">
                        </div>
                        <div class="info">
                            <h2><?php  echo $row->name;?></span></a><?php $cnt=$cnt+1;}} ?></h2>
                        </div>
                    </div>
                    </a>
                </div>


            </div>

