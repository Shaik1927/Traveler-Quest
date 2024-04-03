<?php
include "includes/header.php";
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql="delete from ckeditor where id=:rid";
$query=$dbh->prepare($sql);
$query->bindParam(':rid',$rid,PDO::PARAM_STR);
$query->execute();
 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'fetch_items.php'</script>";    
}
?>
<style>
.scroll1 {
        min-width: 150px !important;
        height: 250px;
        overflow-y: auto;
    }
</style>
<div>
<div class="recent_order">
    <h2>Tools / Items for Adventure</h2>
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Activity</th>
                <th>tools/items</th>
                <th>Action</th>
             
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * from ckeditor";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $row) {
                ?>
                <tr >
                    <td class="scroll"><?php echo htmlentities($cnt); ?></td>
                    <td class="scroll"><?php echo htmlentities($row->activity); ?></td>
                    <td class="scroll " style="text-align: left;background-color: #eceef1;"><div class="scroll1"><?php echo strip_tags($row->content, '<ul><ol><li><p><br>'); ?></div></td>

                    <td class="scroll">
                        <a href="edit_items.php?editid=<?php echo htmlentities($row->id); ?>" class="btn btn-success" aria-hidden="true" style="margin-bottom:5px;">Edit</a>
                        <a href="fetch_items.php?delid=<?php echo ($row->id); ?>" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger"> Delete</a>
                    </td>
                </tr>
                <?php $cnt = $cnt + 1;
            }
        }
        ?>
    </tbody>
    </table>

</div>

</main>
</div>
<script src="script.js"></script>
</body>

</html>