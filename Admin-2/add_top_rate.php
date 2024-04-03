<?php
include "includes/header.php";
// include "includes/side-bar.php";
?>
<div>
<div class="recent_order">
    <h2>Top-Rated Activities</h2>
        <div class="wrapper">
            <div class="title"><span>Enter Details for adding Top-Rated Activities</span>
            </div>
           
            <section class="form login">
                <form action="top_rate_bk.php" method="post" enctype="multipart/form-data">
           
                    
                    <div class="field input">
                
                        <input type="activity" name="activity" placeholder="Activity" required>
                    </div>
                    <!-- <div class="field input">
                    
                        <input type="i" name="image" placeholder="locations" required>
                    </div> -->
                    <div class="field input">
                
                        <input type="rating" name="rating" placeholder="Rating for 10" required>
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