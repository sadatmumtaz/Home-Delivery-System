<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'in_style.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
     <?php include 'profile_style.php'?>
    <title>Food deliver System</title>
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
                    <li><a href="index.php" data-after="Home">Home</a></li>
                    <li><a href="#services-container" data-after="Service">Services</a></li>
                    <li><a href="#projects" data-after="Profile">Profile</a></li>
                    <li><form action="" method="POST">
                        <input type="hidden" value="t">
                        <input type="submit" name="logout" value="Logout">
                        </form>
                  </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- End Header -->
 <!-- home Section  -->
 <section id="home">
<?php
 if(isset($_POST['logout'])) {
  session_destroy();
 echo "<script>window.location = '../index.php'</script>";
}
?>

<h1 class="heading">Welcome to Food For You</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
    voluptatibus numquam id dolorem maxime, dolores similique
    quae ducimus non nisi!</p>

</section>
<br><br><br>
<!-- End home Section  -->
<?php
include 'connection.php';
$selectquery="SELECT   `first_name`, `last_name`,`email`, `password` FROM `users` WHERE `user_id`=" . $_SESSION['user_id'] . "";
$query= mysqli_query($con,$selectquery) ; 
$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query))
{
?>
<div class="container">
<div class="title">Update Your Profile</div>
<div class="content">
<form action="" method="post">
<div class="user-details">
  <div class="input-box">
    <span class="details">First name</span>
    <input type="text" name="first_name" value="<?php echo $res ['first_name']; ?> " required>
  </div>
  <div class="input-box">
    <span class="details">last name</span>
    <input type="text" name="last_name" value="<?php echo $res ['last_name']; ?>"  required>
  </div>
  <div class="input-box">
    <span class="details">Email</span>
    <input type="email" name="email" value="<?php echo $res ['email']; ?> " required>
  </div>
  <div class="input-box">
    <span class="details">Password</span>
    <input type="password" name="password" name="password" value="<?php echo $res ['password']; ?> " required>
  </div>
</div>   
<div class="button">
  <input type="Submit" name="Submit" value="Update">
</div>
</form>
</div>
</div>

<?php
}
?>


<br><br><br>
<!-- Footer -->

<footer id="footer">
<div class="footer-div">
    <h2>Social Medial Account</h2>
    <div class="social-icon">
        <a href="#"><img src="img/facebook.png" /></a>
        <a href="#"><img src="img/instagram.png" /></a>
        <a href="#"><img src="img/twitter.png" /></a>
    </div>
</div>
</footer>

</body>
</html>
<?php
if(isset($_POST['Submit'])) { 
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $updatequery = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', password='$password' WHERE `user_id`=" . $_SESSION['user_id'] . "";
    $ress= mysqli_query($con,$updatequery); 
    if($ress) 
    {
      echo "record update succesfuly";
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
          
          mysqli_close($con);
 
  }

  ?>