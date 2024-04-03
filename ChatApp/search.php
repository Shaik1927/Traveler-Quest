<?php
include "includes/header.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to start adventures or visit from local experts</p>
                <!-- <div class="block-17 my-4">
                    <form action="search2.php" method="GET" class="d-block d-flex">
                        <div class="fields d-block d-flex">
                        
                            <div class="select-wrap one-third" style="height:70px;">
                            <input class=" form-control" type="text" name="searchbar" style="text-align: left;color:grey;font-weight:500;" placeholder="Search here">
                                 <div class="icon"><span class="ion-ios-arrow-down"></span></div> 
                               
                              
                            </div>
                        </div>
                        <button type="text" name="searchbar" id="searchbar" class="search-submit btn btn-primary" value="search">Search</button>
                    </form>
                </div> -->
                
                <div class="block-17 my-4">
    <form action="search2.php" method="GET" class="d-block d-flex">
        <div class="fields d-block d-flex">
            <div class="select-wrap one-third" style="height:70px;">
                <input class="form-control" type="text" name="searchbar" style="text-align: left; color: grey; font-weight: 500;" placeholder="Search here" value="<?php echo isset($_GET['searchbar']) ? htmlspecialchars($_GET['searchbar']) : ''; ?>">
            </div>
        </div>
        <input type="submit" class="search-submit btn btn-primary" value="Search">
    </form>
</div>

            </div>
        </div>
    </div>
</div>



<?php
include "includes/footer.php";
?>