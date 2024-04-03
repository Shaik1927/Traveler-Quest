
<?php
include "includes/header.php";
?>
<div class=loction style="margin-top:60px;">




<?php


// if (isset($_GET['place'])) {
//     $place = strtolower($_GET['place']);
 


// // Fetch the destination address from your database, assuming you have a variable $destinationAddress

// $sourceAddress =  'saveetha medical college';
// $destinationAddress = $place;
// // Create the Google Maps URL with the source and destination
// $googleMapsURL = "https://www.google.com/maps/dir/" . urlencode($sourceAddress) . "/" . urlencode($destinationAddress);

// // Redirect the user to the Google Maps URL
// header("Location: $googleMapsURL");
// exit; // End the script

// }

if (isset($_GET['place'])) {
    $place = strtolower($_GET['place']);
    
    // Get the user's current location using JavaScript
    echo '<script>
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    var currentLocation = latitude + "," + longitude;
                    
                    // Redirect the user to Google Maps with the current location
                    window.location.href = "https://www.google.com/maps/dir/" + currentLocation + "/" + encodeURIComponent("' . $place . '");
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
          </script>';
    exit; // End the script
}

?>
</div>
<?php
    include "includes/footer.php";
?>