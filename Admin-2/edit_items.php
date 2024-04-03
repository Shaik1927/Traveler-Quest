<?php
session_start();
error_reporting(0);
include "includes/header.php";

if (isset($_POST['submit'])) {
    $activity = $_POST['activity'];
    $content = $_POST['content'];

    $eid = $_POST['editid'];

    $sql = "UPDATE ckeditor SET activity=:activity, content=:content WHERE id=:eid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':activity', $activity, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);

    $query->bindParam(':eid', $eid, PDO::PARAM_INT);
    $query->execute();

    echo '<script>alert("Details have been updated"); window.location.href = "fetch_items.php";</script>';
}

?>

<div class="recent_order">
    <h2>Update Tools / Items for Adventure</h2>
    <div class="wrapper">
        <section class="form login">
            <form method="post">
                <?php
                $eid = $_GET['editid'];
                $sql = "SELECT * from  ckeditor where id=:eid";
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

                        <label class="label_field">content</label>
                        <div class="field input">
                            <textarea id="content" name="content" class="form-control" required='true'><?php echo htmlentities($row->content); ?></textarea>
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
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
</script>
</body>

</html>
