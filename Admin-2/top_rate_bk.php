<?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'travelapp';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the directory to save uploaded files
$uploadDirectory = __DIR__ . '/uploads/'; // Assuming a directory named 'uploads' in the same directory as this script

// Check if the directory exists, and create it if it doesn't
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}

// File upload handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
     $activity = $_POST['activity'];
     $rating = $_POST['rating'];

     $url = $_POST['url'];

    $image = file_get_contents($_FILES['image']['tmp_name']);

    $imagename = $_FILES['image']['name'];

   
    $sql = "INSERT INTO home (activity,image,imagename,rating,url) VALUES ( ?, ?,?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $activity,$image,$imagename,$rating,$url);
    // $stmt->bind_param('ssssss', $categeory, $activity, $locations, $description,$image,$imagename);


    if ($stmt->execute()) {
        // Move the uploaded file to the specified directory
        $uploadedFilePath = $uploadDirectory . $imagename;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath);

        echo "Image uploaded successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>