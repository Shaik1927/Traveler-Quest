<?php
session_start();
error_reporting(0);
include "includes/header.php";

if (isset($_POST['submit'])) {
    $activity = $_POST['activity'];
    $url = $_POST['url'];
    $rating = $_POST['rating'];
    $eid = $_POST['editid'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp, "upload_directory/" . $image);

    $sql = "UPDATE home SET activity=:activity, url=:url, rating=:rating, image=:image WHERE id=:eid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':activity', $activity, PDO::PARAM_STR);
    $query->bindParam(':url', $url, PDO::PARAM_STR);
    $query->bindParam(':rating', $rating, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':eid', $eid, PDO::PARAM_INT);
    $query->execute();

    echo '<script>alert("Details have been updated"); window.location.href = "fetch_top_rate.php";</script>';
}

?>

<div class="recent_order">
    <h2>Update Top-Rated Activities</h2>
    <div class="wrapper">
        <section class="form login">
            <form method="post" enctype="multipart/form-data">
                <?php
                $eid = $_GET['editid'];
                $sql = "SELECT * from  home where id=:eid";
                $query = $dbh->prepare($sql);
                $query->bindParam(':eid', $eid, PDO::PARAM_INT);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                if ($query->rowCount() > 0) {
                    foreach ($results as $row) {
                ?>

                        <label class="label_field">Activity</label>
                        <div class="field input">
                            <input type="text" name="activity" value="<?php echo htmlentities($row->activity); ?>" class="form-control" required='true'>
                        </div>

                        <label class="label_field">URL</label>
                        <div class="field input">
                            <input type="text" name="url" value="<?php echo htmlentities($row->url); ?>" class="form-control" required='true'>
                        </div>

                        <label class="label_field">Rating</label>
                        <div class="field input">
                            <input type="text" name="rating" value="<?php echo htmlentities($row->rating); ?>" class="form-control" required='true'>
                        </div>

                        <label class="label_field">Image</label>
                        <div class="field input">
                            <input type="file" name="image" class="form-control">
                        </div>

                        <input type="hidden" name="editid" value="<?php echo $eid; ?>">

                <?php }
                } ?>
                <div class="field">
                    <button class="button" type="submit" name="submit" id="submit">Update</button>
                </div>
            </form>
        </section>
    </div>
</div>
</main>
<script src="script.js"></script>
</body>

</html>
