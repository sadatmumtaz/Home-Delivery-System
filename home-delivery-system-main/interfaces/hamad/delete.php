<?php
include "Connection.php";
$sql = "DELETE FROM orders WHERE customer_id = " . $_GET['delete'];
mysqli_query($conn, $sql);
$sql = "DELETE FROM customers WHERE user_id = ".$_GET['delete'];
$delet=mysqli_query($conn,$sql);
$sql = "DELETE FROM users WHERE user_id = ".$_GET['user_id'];
$result=mysqli_query($conn,$sql);
if($result)
{
   header("Location:admin.php");  
}
?>