<?php
session_start();
error_reporting(0);
include "includes/header.php";

if (isset($_POST['submit'])) {
    $activity = $_POST['activity'];
    $categeory = $_POST['categeory'];
    $url = $_POST['url'];
    $eid = $_POST['editid'];

    $sql = "UPDATE activities SET activity=:activity, categeory=:categeory, url=:url WHERE id=:eid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':activity', $activity, PDO::PARAM_STR);
    $query->bindParam(':categeory', $categeory, PDO::PARAM_STR);
    $query->bindParam(':url', $url, PDO::PARAM_STR);
    $query->bindParam(':eid', $eid, PDO::PARAM_INT);
    $query->execute();

    echo '<script>alert("Details have been updated"); window.location.href = "fetch_categeory.php";</script>';

    
}

?>

<div class="recent_order">
    <h2>Update Categeory & Activities </h2>
    <div class="wrapper">
        <section class="form login">
            <form method="post">
                <?php
                $eid = $_GET['editid'];
                $sql = "SELECT * from  activities where id=:eid";
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

                        <label class="label_field">categeory</label>
                        <div class="field input">
                            <input type="text" name="categeory" value="<?php echo htmlentities($row->categeory); ?>" class="form-control" required='true'>
                        </div>

                        <label class="label_field">url</label>
                        <div class="field input">
                            <input type="text" name="url" value="<?php echo htmlentities($row->url); ?>" class="form-control" required='true'>
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
