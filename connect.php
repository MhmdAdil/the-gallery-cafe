<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli(localhost, root,"", test);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // If the connection is successful, output to the JavaScript console
    echo "<script>console.log('Database connection successful');</script>";
}
?>
