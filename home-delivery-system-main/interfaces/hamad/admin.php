<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <!-- CSS only -->
    <title>Admin</title>
    <style>
      .btn-danger{
        height:40px;
	width:80px;


 }
    </style>
</head>
<body>
     <!-- Header -->
  <header id="header">
    <div class="nav-bar">
      <div class="brand">
          <img src="img/logo.png" alt="">
      </div>
      <div class="nav-list">
        <ul>
          <li><a href="#home" data-after="Home">Home</a></li>
          <li><a href="#services-container" data-after="Service">Services</a></li>
          <li><a href="#projects" data-after="Profile">Profile</a></li>
          <li><form action="" method="POST">
              <input type="hidden" value="t">
              <input type="submit" name="logout" value="Logout">
                </form>
            </li>
<?php 
if(isset($_POST['logout'])) {
  session_destroy();
 echo "<script>window.location = '../index.php'</script>";
}
?>
        </ul>
    </div>
  </div>
</header>
<!-- End Header -->


<!-- home Section  -->
<section id="home">
 
    <h1 class="heading">Welcome to Food For You</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      voluptatibus numquam id dolorem maxime, dolores similique
       quae ducimus non nisi!</p>
  
</section>
<div class="h-primary2">
  <h1>Admin Page</h1>
</div>

<form action=""method='post'>
<input type="submit"id name="Customer" value="Customer"class="btn btn-primary"><br>
<input type="submit"id name="Driver" value="Driver"class="btn btn-primary"> 
</form>
<button class='btn btn-primary'><a href='addDriver.php'
   class='text-light'>Add driver</a></button>;
<?php

if(isset($_POST["Customer"]))
{
include "Connection.php";


$sql = "SELECT user_id, user_type,first_name,last_name,email,password,address_id FROM users where user_type='Customer'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  
  <table class="table table-bordered table-condensed" >
    <thead><tr><th>User_ID</th><th>user_type</th><th>Name</th><th>email</th><th>password</th>
  <th>address_id</th></tr></thead>
    <?php
  while($row = mysqli_fetch_assoc($result)) {
    $id=$row['user_id'];
    $name=$row['first_name'].$row['last_name'];
    $type=$row['user_type'];
    $email=$row['email'];
    $pass=$row['password'];
    $address=$row['address_id'];
    
    print "<tr>
    <td>".$id."</td>
    <td>".$type."</td>
    <td>".$name."</td>
    
    <td> ".$email."</td>
    <td>".$pass."</td>
    <td>".$address."</td>
   <td>
   <button class='btn btn-danger'><a href='delete.php?delete=".$id."&user_id=".$row['user_id']."'
   class='text-light'>Delete</a></button>
   </td>
   </tr>";
  }
  ?>
  <br>
  </table>
  <?php
} else {
  echo "0 results";
}
mysqli_close($conn);
}

?>

</body>
</html>
<?php

if(isset($_POST["Driver"]))
{
include "Connection.php";


$sql = "SELECT user_id,user_type,first_name,last_name,email,password,address_id FROM users where user_type='Driver'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  
  <table class="table table-bordered table-condensed" >
    <thead><tr><th>User_ID</th><th>user_type</th><th>Name</th><th>email</th></tr></thead>
    <?php
  while($row = mysqli_fetch_assoc($result)) {
    $id=$row['user_id'];
    $name=$row['first_name'].$row['last_name'];
    $type=$row['user_type'];
    $email=$row['email'];

    $sql_internal = "SELECT driver_id FROM drivers WHERE user_id = " . $row['user_id'];
    $interal_result = mysqli_query($conn, $sql_internal);
    $row_internal = mysqli_fetch_assoc($interal_result);
    $driver_id = $row_internal['driver_id'];
    
    print "<tr>
    <td>".$id."</td>
    <td>".$type."</td>
    <td>".$name."</td>
    
    <td> ".$email."</td>
   <td>
   <button class='btn btn-danger'><a href='delete.php?delete=".$id."&user_id=".$driver_id."'
   class='text-light'>Delete</a></button>
   </td>
   </tr>";
  }
  ?>
  <br>
  </table>
  
  <button class='btn btn-primary'><a href='addDriver.php'
   class='text-light'>Add</a></button>;
   <br>
  <?php
} else {
  echo "0 results";
}
mysqli_close($conn);
}

?>