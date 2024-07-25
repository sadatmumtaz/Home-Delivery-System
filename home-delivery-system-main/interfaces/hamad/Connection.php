<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  
  echo("Connection failed: " . $conn->connect_error);
  
    
}

?>

