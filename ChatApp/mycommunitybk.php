<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $fname = $_SESSION['fname']; 
    $activity = $_SESSION['activity'];
    // You can replace this with the fname's name

    // Include database connection code here
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'travelapp';
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $unique_id = $_SESSION["unique_id"];
    

    $sql = "INSERT INTO messages_grp (fname, message, unique_id, activity) VALUES ('$fname', '$message', '$unique_id', '$activity')";

    if (mysqli_query($conn, $sql)) {
   
        echo "<script type='text/javascript'>;window.location.href='mycommunity.php';</script>";
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}