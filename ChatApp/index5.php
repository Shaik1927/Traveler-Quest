<?php
include "includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true" >
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to start adventures or visit from local experts</p>
                <div class="block-17 my-4">
                    <form action="" method="post" class="d-block d-flex">
                        <div class="fields d-block d-flex">
                        
                            <div class="select-wrap one-third" style="height:70px;">
                            <p class="status form-control" style="text-align: left;color:grey;font-weight:500;margin-top: 8px;">Location</p>
                            <!-- <input class="status form-control" style="text-align: left;color:grey;font-weight:500;margin-top: 8px;"> -->
                                <!-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> -->
                                <!-- <select name=""  id="" class="form-control" placeholder="Keyword search">
                                    <option  value="">Where</option>
                                    <option value="">San Francisco USA</option>
                                    <option value="">Berlin Germany</option>
                                    <option value="">Lodon United Kingdom</option>
                                    <option value="">Paris Italy</option>
                                </select> -->
                            </div>
                        </div>
                        <input type="button" id="searchbar" class="search-submit btn btn-primary" value="Find Locations">
                    </form>
                </div>
                <p>Or choose your adventures</p>

            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section bg-light" >
    <div class="container" >
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate" onclick="window.location.href='mountains.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <img src="images/mountains.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-guarantee"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2" >
                        <h3 class="heading mb-3" >Mountains</h3>
                        <p>Mountains beckon adventurers with rugged terrain and breathtaking vistas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate" onclick="window.location.href='hills.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/hills.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-like"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Hills</h3>
                        <p>The gentle siblings of grand mountains, offer adventurers a captivating terrain.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate" onclick="window.location.href='Forests.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/forest.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-detective"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Forest</h3>
                        <p>Forests, vast and mysterious, beckon adventurers with untamed wonders. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate"    onclick="window.location.href='Desert.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/desert.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-support"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Desert</h3>
                        <p>Deserts, vast and arid landscapes, offer unique adventure opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate" onclick="window.location.href='Canyons.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/canyon.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-guarantee"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Canyons</h3>
                        <p>Canyons are nature's thrilling adventure courses, carved by erosive forces.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate"  onclick="window.location.href='Moraine.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/morse.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-like"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Moraine</h3>
                        <p>Moraine are deposits of rock and sediment left from a former or receding glacier</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate"  onclick="window.location.href='Swamps.php'" >
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/swamp.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-detective"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Swamps</h3>
                        <p>Swamps, mysterious and enchanting, form captivating adventure settings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate"  onclick="window.location.href='Seas.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/sea.jpg" style="width:200px;" alt="">
                    
                        <!-- <div class="icon"><span class="flaticon-support"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Seas</h3>
                        <p>Seas beckon intrepid explorers with their vast, mysterious expanses.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate"  onclick="window.location.href='Terrains.php'" >
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/terrains.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-guarantee"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Terrains</h3>
                        <p>Terrain presents unique challenges, demanding a blend of skill and courage.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate"    onclick="window.location.href='Ponds.php'" >
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/pond.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-like"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Ponds</h3>
                        <p>Ponds, though seemingly tranquil, harbor hidden adventure.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate"   onclick="window.location.href='Rivers.php'" >
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/rivers.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-detective"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Rivers</h3>
                        <p>Rivers, nature's liquid pathways, beckon adventurers with thrilling beauty.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate" onclick="window.location.href='Amusement Parks.php'">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                    <img src="images/amusement.jpg" style="width:200px;" alt="">
                        <!-- <div class="icon"><span class="flaticon-support"></span></div> -->
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Amusement Parks</h3>
                        <p>Amusement parks are thrilling adventure zones, brimming with various rides.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- scroll bar  -->
<section class="ftco-section ftco-destination">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Trending</span>
                <h2 class="mb-4"><strong>Top Rated</strong> Adventures</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="destination-slider owl-carousel ftco-animate">

                <?php
// Your database connection code (e.g., $conn = new mysqli("localhost", "username", "password", "database");)

// Query to select all images from the table
$sql = "SELECT * FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Retrieve other details
        $activity = $row['activity'];
        $rating = $row['rating'];
        $url = $row['url'];
        $image = $row['image']; // Assuming the image column stores the image path or filename

        echo '<div class="item">';
        echo ' <div class="destination">';
        echo '   <a href="' . $url . '" class="img d-flex justify-content-center align-items-center" style="background-image: url(uploads/' . $image . ');">';
        echo '  <div class="icon d-flex justify-content-center align-items-center">';
        echo '      <span class="icon-search2"></span>';
        echo '  </div>';
        echo '</a>';
        echo '<div class="text p-3">';
        echo '  <h3><a href="#">' . $activity . '</a></h3>';
        echo ' <p class="rate">';
        echo '   <i class="icon-star"></i>';
        echo '  <i class="icon-star"></i>';
        echo ' <i class="icon-star"></i>';
        echo '  <i class="icon-star"></i>';
        echo '  <i class="icon-star-o"></i>';
        echo '  <span>'.$rating.'</span>';
        echo ' </p>';
        echo '  <span class="listing">15 Listing</span>';
        echo ' </div>';
        echo ' </div>';
        echo '</div>';
    }
} else {
    echo 'No images found in the table.';
}

// Close the database connection
$conn->close();
?>



                    <!-- <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/trekking.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Trekking</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                                <span class="listing">15 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/paragliding.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Paragliding</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                                <span class="listing">20 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/scuba\ diving.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Scuba Diving</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                                <span class="listing">10 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/skydiving.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Sky Diving</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/bike\ trips.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Bike Trips</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/wakeboarding.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Wakeboarding </a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                    <span>7 Rating</span>
                                </p>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/paramotoring.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Paramotoring</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                    <span>7 Rating</span>
                                </p>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/hot\ air\ ballon.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Hot Air Balloon</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                    <span>7 Rating</span>
                                </p>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>




<!-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Special Offers</span>
                <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Paris, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$200</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Paris, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$200</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Paris, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$200</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Paris, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$200</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Paris, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$200</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Some fun facts</h2>
                <span class="subheading">More than 100,000 websites hosted</span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100000">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="40000">0</strong>
                                <span>Destination Places</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="87000">0</strong>
                                <span>Hotels</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="56400">0</strong>
                                <span>Restaurant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Special Offers</span>
                <h2 class="mb-4"><strong>Popular</strong> Hotels &amp; Rooms</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Hotel, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Hotel, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-3.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Hotel, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-4.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Hotel, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-5.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Hotel, Italy</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-5 heading-section ftco-animate">
                <span class="subheading">Best Directory Website</span>
                <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 heading-section ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
                                    </div>
                                    <div class="text ml-md-4">
                                        <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p class="name">Dennis Green</p>
                                        <span class="position">Guest from italy</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
                                    </div>
                                    <div class="text ml-md-4">
                                        <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p class="name">Dennis Green</p>
                                        <span class="position">Guest from London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
                                    </div>
                                    <div class="text ml-md-4">
                                        <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p class="name">Dennis Green</p>
                                        <span class="position">Guest from Philippines</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Adventures</span>
                <h2 class="mb-4"><strong>Types</strong> of  Adventures</h2>
            </div>
        </div>
        <div class="row2">
            <div class="col-md-6 col-lg-3 ftco-animate" onclick="window.location.href='Land-Adventures.php'" >
                <div class="destination" >
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Land\ advantures.png);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Land Adventures</a></h3>
                        
                        <p>Very very near, Be ready to explore the Lands and narture!!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate" onclick="window.location.href='Water-Adventures.php'">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/water\ adventures.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Water Adventures</a></h3>
                       
                        <p>Enjoy with the water, Get ready to wet yourselves!!</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate" onclick="window.location.href='Air-advantures.php'">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/air\ adventures.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Air Adventures</a></h3>
                        
                        <p>Experice the world from the high sky and Enjoy the thrill!!</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<!-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Recent Blog</span>
                <h2><strong>Tips</strong> &amp; Articles</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text p-4 d-block">
                        <span class="tag">Tips, Travel</span>
                        <h3 class="heading mt-3"><a href="#">8 Best homestay in Philippines that you don't miss out</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">August 12, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text p-4">
                        <span class="tag">Culture</span>
                        <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">August 12, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text p-4">
                        <span class="tag">Tips, Travel</span>
                        <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">August 12, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
                    </a>
                    <div class="text p-4">
                        <span class="tag">Tips, Travel</span>
                        <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">August 12, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  -->

<!-- <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Subcribe to our Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php
include "includes/footer.php";
?>
</body>
</html>