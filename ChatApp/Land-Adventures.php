
<?php
include "includes/header.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<section class="ftco-section" style="margin-top:60px;">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Adventures</span>
                <h2 class="mb-4"><strong>Land </strong>Adventures</h2>
            </div>
        </div>
        <div class="row">
    <?php
    // Query to select all images from the table
    $sql = "SELECT * FROM activities where categeory='Land-Adventures'";
    $result = $conn->query($sql);
    ?>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $categeory = $row['categeory'];
                    $image = $row['image'];
                    $imagename = $row['imagename'];
                    $activity = $row['activity'];
                    $url = $row['url'];



                echo '<div class="col-md-6 col-lg-3 ftco-animate" >';
                echo '<div class="destination">';
                echo '<a href="' . $url . '" class="img d-flex justify-content-center align-items-center" style="background-image: url(data:image/jpeg;base64,' . base64_encode($image) . ');">';
                echo '<div class="icon d-flex justify-content-center align-items-center">';
                echo '<span class="icon-search2"></span>';
                echo ' </div>';
                echo '</a>';
                echo '<div class="text p-3">';
                echo '<h3><a href="#">' . $activity . '</a></h3>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
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