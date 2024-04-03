



<?php
include "includes/header.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
    

    <section id="trekking" class="section-p1" style="margin-top:60px;">
    <div class="col-md-7 heading-section ftco-animate" style="margin-left:9%">
                <span class="subheading">Adventures</span>
                <h2 class="mb-4"><strong>Survival</strong></h2>
            </div>
        <!-- <div class="trek1" style="text-align: center;">Bike Trip</div> -->
        <div class="trek">
            <img src="images/Survival.jpg" alt="">
            <p>
                Survival is one of the most popular and most preferred extreme sports in the world. It is done by riding the waves in the sea or the ocean by standing or lying on a surfboard.</p>
        </div>
        <div class="form-group" style="margin-left:18%;margin-bottom:150px;margin-top:0;" onclick="window.location.href='mycommunity.php?activity=Survival'">
                <button type="button" style="margin-left:28%" class="btn btn-primary py-3 px-5">Join Survival Community</button>
              </div>

              <section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row2 d-flex">

        <?php
    // Query to select all images from the table
    $sql = "SELECT * FROM geolocation where activity='Survival' and mylocation='Chennai'";
    $result4 = $conn->query($sql);
    ?>
            <?php
            if ($result4->num_rows) {
                while ($row = $result4->fetch_assoc()) {
                    $activity = $row['activity'];
                    $advlocation = $row['advlocation'];
                    $image = $row['image'];

               
                echo '<a href="location.php?place='.$advlocation.'"><div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="  media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="data:image/jpeg;base64,' . base64_encode($image) . '" style="width:200px;height:200px;" alt="">
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3" >' .$advlocation . '</h3>
                    </div>
                </div>
            </div></a>';
                
                }
            } else {
                echo 'No products found in the database.';
            }
            ?>
        </div>
    </div>
</section>



        <div class="col-md-7 heading-section ftco-animate" style="margin-left:9%">
                <span class="subheading">Tools & Needs</span>
                <h2 class="mb-4"><strong>List </strong> of  Tools</h2>
            </div>
            <section id="trekking1" class="section-p1" style="margin-left:9%">
           
                <div class="trek2">
                <?php
    // Query to select all images from the table
    $sql = "SELECT * FROM ckeditor where activity='Survival'";
    $result = $conn->query($sql);
    ?>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $content = $row['content'];
                echo '<div href="#">' .$content . '</div>';
                
                }
            } else {
                echo 'No products found in the database.';
            }
            ?>

   
                </div>
            </section>
       
        <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Explore</span>
                <h2 class="mb-4"><strong>Explore</strong> Similar Adventures</h2>
            </div>
        </div>
        <div class="row2">
        <?php
    // Query to select all images from the table
    $sql = "SELECT * FROM activities where categeory='Survival'";
    $result2 = $conn->query($sql);
    ?>
            <?php
            if ($result2->num_rows > 0) {
                while ($row = $result2->fetch_assoc()) {

                    $categeory = $row['categeory'];
                    $image = $row['image'];
                    $imagename = $row['imagename'];
                    $activity = $row['activity'];
                    $url = $row['url'];

                    echo '  <div class="col-md-6 col-lg-3 ftco-animate" >';
                    echo '  <div class="destination" >';
                    echo '   <a href="' . $url . '" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(data:image/jpeg;base64,' . base64_encode($image) . ');">';
                    echo '       <div class="icon d-flex justify-content-center align-items-center">';
                    echo '         <span class="icon-search2"></span>';
                    echo '     </div>';
                    echo ' </a>';
                    echo '  <div class="text p-3">';
                    echo '      <h3><a href="#">' . $activity . '</a></h3> ';
                    echo '  </div>';
                    echo '  </div>';
                    echo '  </div>';
                }
            } else {
                echo 'No products found in the database.';
            }
            ?>

<?php
    // Close the database connection
    $conn->close();
    ?>
        </div>
    </div>
</section>
        <?php
        include "includes/footer.php";
        ?>