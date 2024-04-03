<?php
session_start();
error_reporting(0);
include "includes/header.php";

if (isset($_POST['submit'])) {
    $activity = $_POST['activity'];
    $mylocation = $_POST['mylocation'];
    $advlocation = $_POST['advlocation'];

    $eid = $_POST['editid'];

    $sql = "UPDATE geolocation SET activity=:activity, mylocation=:mylocation, advlocation=:advlocation WHERE id=:eid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':activity', $activity, PDO::PARAM_STR);
    $query->bindParam(':mylocation', $mylocation, PDO::PARAM_STR);
    $query->bindParam(':advlocation', $advlocation, PDO::PARAM_STR);

    $query->bindParam(':eid', $eid, PDO::PARAM_INT);
    $query->execute();

    echo '<script>alert("Details have been updated"); window.location.href = "fetch_locations.php";</script>';
}

?>

<div class="recent_order">
    <h2>Update Tools / Items for Adventure</h2>
    <div class="wrapper">
        <section class="form login">
            <form method="post">
                <?php
                $eid = $_GET['editid'];
                $sql = "SELECT * from  geolocation where id=:eid";
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

                        <label class="label_field">User location</label>
                        <div class="field input">
                            <input type="text" name="mylocation" value="<?php echo htmlentities($row->mylocation); ?>" class="form-control" required='true'>
                        </div>

                        <label class="label_field">Adventure location</label>
                        <div class="field input">
                            <input type="text" name="advlocation" value="<?php echo htmlentities($row->advlocation); ?>" class="form-control" required='true'>
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








