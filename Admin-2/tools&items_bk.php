<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "travelapp";
$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $activity = $_POST['activity'];
    $content = $_POST['content'];

    // Use mysqli_real_escape_string for non-prepared statements
    // $content = mysqli_real_escape_string($conn, $content);

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO ckeditor (content, activity) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters with proper data types (s for string)
    $stmt->bind_param('ss', $content, $activity);

    if ($stmt->execute()) {
        echo "Data uploaded successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
