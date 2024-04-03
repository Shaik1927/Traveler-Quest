<?php
include "includes/header.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<section id="trekking" class="section-p1" style="margin-top:60px;" >
    <div class="col-md-7 heading-section ftco-animate" style="margin-left:9%">
                <span class="subheading">Adventures</span>
                <h2 class="mb-4"><strong>Trekking</strong></h2>
            </div>
        <!-- <div class="trek1" style="text-align: center;">Trekking</div> -->
        <div class="trek">
            <img src="images/trekking.jpg" alt="">
            <p>
                Trekking is an outdoor activity of walking for more than a day. It is a form of walking ,undertaken with the specific purpose of exploring and enjoying the scenery.Trekking could be a motive, It could be a commitment, an aim, an objective, a mission,
                a party, a social gathering.</p>
        </div>
        
    </section>


    <div class="form-group1" style="margin-left:18%;margin-bottom:150px;margin-top:0;"  onclick="window.location.href='mycommunity.php?activity=Trekking'">
                <button type="button" style="margin-left:28%" class="btn btn-primary py-3 px-5" style="margin-bottom:50px">Join Trekking Community</button>
              </div>
              <!-- margin-left:18%;  style="margin-left:28%" -->
              

    <!--locations edit here and in data base  -->
<section class="ftco-section services-section bg-light" > 
    <div class="container">
        <div class="row2 d-flex">

        <?php
    // Query to select all images from the table
    $sql = "SELECT * FROM geolocation where activity='trekking' and mylocation='Chennai'";
    $result4 = $conn->query($sql);
    ?>
            <?php
            if ($result4->num_rows) {
                while ($row = $result4->fetch_assoc()) {
                    $activity = $row['activity'];
                    $advlocation = $row['advlocation'];
                    $image = $row['image'];

           
                echo '  <a href="location.php?place='.$advlocation.'">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="  media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="data:image/jpeg;base64,' . base64_encode($image) . '" style="width:200px;height:200px;" alt="">
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3" >' .$advlocation . '</h3>
                    </div>
                </div>
            </div>  </a>';
                
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
    $sql = "SELECT * FROM ckeditor where activity='Trekking'";
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
    $sql = "SELECT * FROM activities where categeory='Trekking'";
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



<!-- <p><span> TREKKING GEAR</span></p>
                <p>1. Ruck sack bag with rain cover</p>
                <p>2. Day Pack Bag </p>
                <p>3. Head Torch with spare Batteries </p>
                <p>4. U V protection sunglasses </p>
                <p>5. Water Bottles</p>
                <p><span>FOOTWEAR</span></p>
                <p>1. Non-skid, deep treaded, high-ankle trekking shoes </p>
                <p>2. Pair of light weight Slipper/Sandals</p>
                <p><span>CLOTHING</span> </p>
                <p>1. Quick Dry Warm lower or Track Pants </p>
                <p>2. Full sleeves T-shirts/ Sweatshirts </p>
                <p>3. Pair of thick woolen socks </p>
                <p>4. Thermal Body warmer Upper & Lower</p>
                <p>5. Undergarments </p>
                <p>6. Warm jacket closed at wrist & neck </p>
                <p>7. Full sleeves sweater </p>
                <p>8. Rain wear ( Jacket & Pants ) </p>
                <p>9. Pair of waterproof, warm gloves</p>
                <p>10. Woolen cap</p>
                <p>11. Sun shielding Hat</p>
                <p><span>TOILETRIES</span></p>
                <p>1. Personal toiletries kit (Small Towel, Toilet paper, paper soap, Bar soap, toothbrush, toothpaste, cold cream, etc.) </p>
                <p>2. Lip Balm small pack</p>
                <p><span>MISCELLANEOUS</span> </p>
                <p>1. Camera (Optional)</p>
                <p>2. Carry your medicines in plenty in case you have any specific ailment. Consult your doctor before joining the trek. </p>
                <p>3. Dry fruits, Nuts, Chocolate bars (Optional)</p>
 -->

        <?php
        include "includes/footer.php";
        ?>