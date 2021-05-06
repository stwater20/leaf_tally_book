<?php
$servername = "localhost";
$username = "leaf";
$password = "eyes123456";
$database = "tally_book";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>