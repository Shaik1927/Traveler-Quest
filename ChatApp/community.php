<?php
include "includes/header.php";

if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  ?>
<style>
    .col-md-7{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-content: center;

    }
</style>

<div class="col-md-7 heading-section ftco-animate" style="margin-top:70px;">
                <h2 class="mb-4">Join A<strong> Community</strong></h2>
            </div>
<div  style ="display: flex;flex-direction: column;justify-content: space-between;align-items: center;">
    <!--  style="margin-left:9%;" -->

<?php
               
                // Query to select all images from the table
                $sql = "SELECT * FROM ckeditor ";
                $result3 = $conn->query($sql);

                if ($result3->num_rows > 0) {
                    while ($row = $result3->fetch_assoc()) {
                        // Retrieve the image data
                        
                
                        $activity = $row['activity'];
                        $urls = $row['urls'];
                       
                       
                        echo '<a type="button" href="mycommunity.php?activity=' . $activity . '"  class="form-group" >';
                        echo '<button style="width:350px;"  class="btn btn-primary py-3 px-5" >' . $activity . ' Community</button>';
                        echo '</a>';

                      
                    }
                } else {
                    echo 'No activity found in the table.';
                }

                $conn->close();
            ?>



                <!-- <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5" onclick="window.location.href='mycommunity.php'"> Trekking Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Bike Trip Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Paintball Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Paintball Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Go Karting Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Camping Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Safari Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Horse riding Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Scuba Diving Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> River Rafting Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Water Parks Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Parasailing Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Surfing Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Wakeboarding Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Boating Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Bunjee jump Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Paragliding Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Hot air balloon Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Helicopter Ride Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Sky Diving Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Paramotoring Community</button>
                <button type="button" style="margin-left:28%;margin-bottom:10px;width:300px;" class="btn btn-primary py-3 px-5"> Rock Climbing Community</button> -->

              </div>

    <?php
        include "includes/footer.php";
        ?>