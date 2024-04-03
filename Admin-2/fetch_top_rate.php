<?php
include "includes/header.php";

if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql="delete from home where id=:rid";
$query=$dbh->prepare($sql);
$query->bindParam(':rid',$rid,PDO::PARAM_STR);
$query->execute();
 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'fetch_top_rate.php'</script>";     


}
?>
<div>
<div class="recent_order">
    <h2>Top-Rated Activities</h2>
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Activity</th>
                <th>Image </th>
                <th>imagename</th>
                <th>URL</th>
                <th>Rating</th>
                <th>Action</th>
             
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * from home";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $row) {
                ?>
                <tr>
                    <td><?php echo htmlentities($cnt); ?></td>
                    <td><?php echo htmlentities($row->activity); ?></td>
                    
                    <td><img style="width: 100px;height:100px;" src="../ChatApp/uploads/<?php echo htmlentities($row->image); ?>" alt="Image"></td>
                    <td><?php echo htmlentities($row->image); ?></td>
                    <td><?php echo htmlentities($row->url); ?></td>
                    <td><?php echo htmlentities($row->rating); ?></td>
                    <td>
                        <a href="edit_top_rated.php?editid=<?php echo htmlentities($row->id); ?>" class="btn btn-success" aria-hidden="true" style="margin-bottom:5px;">Edit</a>
                        <a href="fetch_top_rate.php?delid=<?php echo ($row->id); ?>" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger"> Delete</a>
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