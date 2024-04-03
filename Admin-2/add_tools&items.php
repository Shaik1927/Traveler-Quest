<?php
include "includes/header.php";
// include "includes/side-bar.php";
?>
<div>
<div class="recent_order">
    <h2>Tools / Items for Adventure</h2>
        <div class="wrapper">
            <div class="title"><span>Enter Details for adding Tools / Items for Adventure</span>
            </div>
           


            <!-- <div class="container">
        <h3 align="center">CKEditor</h3>
        <br>
        <div class="box">
            <form method="post">
                <div class="form-group">
                    
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
           
        </div>
    </div> -->



            <section class="form login">
                <form action="tools&items_bk.php" method="post" enctype="multipart/form-data">
           
                    
                    <div class="field input">
                        <input type="activity" name="activity" placeholder="Activity" required>
                    </div>
                   
                    <div class="field input">
                    <textarea id="content" name="content" class="form-control"></textarea>
                    </div>

                    <div class="field ">
                        <input class="button " type="submit" value="Submit" >
                    </div>

                </form>
                <div class="error">
                <?php if(!empty($msg)){ echo $msg; } ?>
            </div>
            </section>

            
        </div>

</main>
</div>
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