<?php
$servername = "localhost";
$username = "bibliotekarz";
$password = "biblioteka123";
$db = "Biblioteka";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>