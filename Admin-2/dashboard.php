<?php
include "includes/header.php";
// include "includes/side-bar.php";
?>
<div>

<h1>Dashbord</h1>

<!-- addd a  sales div for a newly enterd data  -->
<div class="insights">

    <div class="sales">
    <span class="material-symbols-outlined" style="color:#008080;">
group
</span>
        <div class="middle">

            <div class="left">
            <?php 
$sql1 ="SELECT * from  users";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totcat=$query1->rowCount();
?>
                                    <h1 class="total_no"><?php echo htmlentities($totcat);?></h1>
                                    <h3 class="head_couter">User details<br /><br />
                                       <a href="#" class="button">View Details</a></h3>
            </div>


        </div>
    </div>
  
    <div class="sales">
    <span class="material-symbols-outlined" style="color:#FFD700;">
star_half
</span>
        <div class="middle">

            <div class="left">
            <?php 
$sql1 ="SELECT * from  home";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totcat=$query1->rowCount();
?>
                                    <h1 class="total_no"><?php echo htmlentities($totcat);?></h1>
                                    <h3 class="head_couter">Top-Rated<br /><br />
                                       <a href="fetch_top_rate.php" class="button">View Details</a></h3>
            </div>


        </div>
    </div>

    <div class="sales">
    <span class="material-symbols-outlined">
sailing
</span>
        <div class="middle">

            <div class="left">
            <?php 
$sql1 ="SELECT * from  activities";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totcat=$query1->rowCount();
?>
                                    <h1 class="total_no"><?php echo htmlentities($totcat);?></h1>
                                    <h3 class="head_couter">Activities<br /><br />
                                       <a href="fetch_categeory.php" class="button">View Details</a></h3>
            </div>


        </div>
    </div>

    <div class="sales">
    <span class="material-symbols-outlined" style="color:red">
location_on
</span>
        <div class="middle">

            <div class="left">
            <?php 
$sql1 ="SELECT * from  geolocation";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totcat=$query1->rowCount();
?>
                                    <h1 class="total_no"><?php echo htmlentities($totcat);?></h1>
                                    <h3 class="head_couter">Locations<br /><br />
                                       <a href="fetch_locations.php" class="button">View Details</a></h3>
            </div>


        </div>
    </div>

</div>


<div class="recent_order">
    <h2>Active Users</h2>
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <!-- <th>Image</th> -->
                <th>Status</th>
             
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * from users where status='Active now'";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $row) {
                ?>
                <tr>
                    <td><?php echo htmlentities($cnt); ?></td>
                    <td><?php echo htmlentities($row->fname); ?></td>
                    <td><?php echo htmlentities($row->lname); ?></td>
                    <!-- <td><img style="width: 100px;height:100px;" src="../ChatApp/uploads/<?php echo htmlentities($row->imagename); ?>" alt="Image"></td> -->
                    <td><?php echo htmlentities($row->email); ?></td>
                    <td><?php echo htmlentities($row->status); ?></td>
                    <!-- <td>
                        <a href="edit-category.php?editid=<?php echo htmlentities($row->ID); ?>" class="btn btn-success" aria-hidden="true" style="margin-bottom:5px;">Edit</a>
                        <a href="manage-category.php?delid=<?php echo ($row->ID); ?>" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger"> Delete</a>
                    </td> -->
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