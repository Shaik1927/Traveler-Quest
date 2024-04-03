<?php
include "includes/header.php";
// include "includes/side-bar.php";
?>
<div>
<div class="recent_order">
    <h2>Categeories and Activities</h2>
        <div class="wrapper">
            <div class="title"><span>Enter Details for adding Categeories and Activities</span>
            </div>
           
            <section class="form login">
                <form action="categeory_bk.php" method="post" enctype="multipart/form-data">
           
                    
                    <div class="field input">
                        <input type="activity" name="activity" placeholder="Activity" required>
                    </div>
                   
                    <div class="field input">
                        <input type="categeory" name="categeory" placeholder="categeory" required>
                    </div>

                    <div class="field input">
                        <input type="text" name="url" placeholder="Enter activity filename.php"  required>
                    </div>

                    <div class="field">
                        <input type="file" name="image" placeholder="Image" required>
                    </div>

                    <div class="field input">
                        <input type="imagename" name="imagename" placeholder="imagename" required>
                    </div>

                    <div class="field ">
                        <input class="button" type="submit" value="Submit" >
                    </div>

                </form>
            </section>

            
        </div>





</main>
</div>
<script src="script.js"></script>
</body>

</html>