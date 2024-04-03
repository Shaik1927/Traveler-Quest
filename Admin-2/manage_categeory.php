<?php
include "includes/header.php";
// include "includes/side-bar.php";
?>
<div>
<div class="recent_order">
    <h2>Top-Rated Activities</h2>
    <table >
                                       <thead>
                                          <tr>
                                             <th>S.No</th>
                                             <th>Category</th>
                                             <th>Activity</th>
                                             <th>Image</th>
                                             <th>Image Name</th>
                                             <th>url</th>
                                             
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
$sql="SELECT * from activities";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               
   ?> 
                                          <tr>
                                              
                                             <td><?php echo htmlentities($cnt);?></td>
                                             <td><?php  echo htmlentities($row->categeory);?></td>
                                             <td><img style="width: 100px;height:100px;" src="../ChatApp/uploads/<?php echo htmlentities($row->imagename); ?>" alt="Image"></td>

                                             <td><?php  echo htmlentities($row->imagename);?></td>
                                             <td><?php  echo htmlentities($row->activity);?></td>
                                             <td><?php  echo htmlentities($row->url);?></td>
                                             <td><a href="edit-maid.php?editid=<?php echo htmlentities ($row->mid);?>"><i class="btn btn-success" aria-hidden="true" style="margin-bottom:5px;">Edit</i></a> <a href="manage-maid.php?delid=<?php echo ($row->mid);?>" onclick="return confirm('Do you really want to Delete ?');"><i class="btn btn-danger"> Delete</i></a></td>
                                          </tr><?php $cnt=$cnt+1;}} ?>
                                       </tbody>
                                    </table>

</div>

</main>
</div>
<script src="script.js"></script>
</body>

</html>