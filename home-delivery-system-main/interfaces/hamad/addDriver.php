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
 tr {
width: 30%;
height:20px;                // <-- the rows height 
}

table{
 height:300px;              // <-- Select the height of the table
 display: -moz-groupbox;    // For firefox bad effect
}
tbody{
  overflow-y: scroll;      
  height: 200px;            //  <-- Select the height of the body
  width: 100%;
}
td{
    font-size:25px;
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

<body>
    
<!-- home Section  -->
<section id="home">
 
    <h1 class="heading">Welcome to Food For You</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      voluptatibus numquam id dolorem maxime, dolores similique
       quae ducimus non nisi!</p>
  
</section><center>
<form action="" method="POST">
        <h3><center><b> ADD DRIVER</b></center></h3>
        <center>
        <table border=3px solid black class="table">
        <tr>
            <td><label for="firstName">First name</label></td>
            <td> <input type="text" placeholder="First Name" name="first_name"><br></td>
        </tr>
        <tr>
            <td><label for="lastName">Last name</label></td>
            <td><input type="text" placeholder="Last Name" name="last_name"></td>
        </tr>
        <tr>
            <td><label for="email  ">Email</label></td>
            <td><input type="email" placeholder="Email " name="email"></td>
        </tr>
       <tr>
        <td><label for="password">Password</label></td>
        <td><input type="password" placeholder="Password" name="password"></td>
       </tr>
        <tr>
            <td><input type="submit" value="Register" class="btn btn-primary" name="submit"></td>
        </tr>
        
        
    </table>
    </center>

    </form></center>
    
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $user_password = $_POST['password'];
    $email=$_POST['email'];
         include "Connection.php";
         $sql = sprintf("INSERT INTO users (user_id, user_type, first_name, last_name, email, password) VALUES (DEFAULT, 'driver', '%s', '%s', '%s', '%s');", $first_name, $last_name, $email, $user_password);
         $sql .= "INSERT INTO drivers (driver_id, user_id) VALUES (DEFAULT, last_insert_id());";
         echo $sql;
         $result = mysqli_multi_query($conn, $sql);
        if($result){
            header("Location:admin.php");
        }

    }
