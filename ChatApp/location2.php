<?php

if (isset($_GET['place'])) {
    $place = strtolower($_GET['place']);
 // Database connection
 $db_host = 'localhost';
 $db_user = 'root';
 $db_pass = '';
 $db_name = 'travelapp';

 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 // Query to select all images from the table
 $sql = "SELECT * FROM geolocation  ";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {   
     while ($row = $result->fetch_assoc()) {
         // Retrieve the image data
         
         

         
     }
 } else {
     echo 'No data found...';
 }


// Fetch the destination address from your database, assuming you have a variable $destinationAddress

$sourceAddress = $place; // Your source address
$destinationAddress = $row['advlocation'];
// Create the Google Maps URL with the source and destination
$googleMapsURL = "https://www.google.com/maps/dir/" . urlencode($sourceAddress) . "/" . urlencode($destinationAddress);

// Redirect the user to the Google Maps URL
header("Location: $googleMapsURL");
exit; // End the script
// $conn->close();
}
?>

