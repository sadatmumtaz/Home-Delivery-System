 <?php
include "Connection.php";

$sql = "DELETE FROM orders WHERE driver_id = " . $_GET['driverid'];
mysqli_query($conn, $sql);
$sql = "DELETE FROM drivers WHERE driver_id = ".$_GET['driverid'] . ";";
$result=mysqli_query($conn,$sql);
$sql = "DELETE FROM users WHERE user_id=".$_GET['user_id'].";";
mysqli_query($conn,$sql);
if($result)
{
   header("Location:admin.php");  
}
 ?>