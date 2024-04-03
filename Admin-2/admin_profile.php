<?php
include "includes/header.php";
if(isset($_POST['submit'])) {
    $aid = $_SESSION['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    
    $sql = "UPDATE tbladmin SET name=:name, number=:number, email=:email WHERE ID=:aid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':number', $number, PDO::PARAM_STR);
    $query->bindParam(':aid', $aid, PDO::PARAM_STR);
    
    $query->execute();
    
    if($query->rowCount() > 0) {
        echo '<script>alert("Your profile has been updated")</script>';
        echo "<script>window.location.href ='admin_profile.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
?>

<?php

$sql="SELECT * from  tbladmin";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

foreach($results as $row)
?>

<div class="recent_order">
    <h2>Top-Rated Activities</h2>
    <div class="wrapper">
<section class="form login">
    <form action="" method="post">

    <label class="label_field">Name</label>
    <div class="field input">
   
            <input type="text" name="name" value="<?php  echo $row->name;?>" class="form-control" required='true'>
    </div>

    <label class="label_field">Contact Number</label>
    <div class="field input">
   
          <input type="text" name="number" value="<?php  echo $row->number;?>"  class="form-control" maxlength='10' required='true' pattern="[0-9]+">
    </div>


    <label class="label_field">Email</label>
    <div class="field input">

          <input type="email" name="email" value="<?php  echo $row->email;?>" class="form-control" required='true'>
    </div>

    


    <!-- <label class="label_field hidden">hidden label</label> -->
    <div class="field ">
    
          <button class="button" type="submit" name="submit" id="submit">Update</button>
    </div>

    </form>
</section>
</div>
</div>
                      

                           </main>
</div>
<script src="script.js"></script>
</body>

</html>