<?php
session_start();

echo $_SESSION['driver_id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE orders SET driver_id = " . $_SESSION['driver_id'] . " WHERE order_id = " . $_GET['order_id'] . ";";
$conn->query($sql);
$conn->close();

header("Location: driver.php");
?>