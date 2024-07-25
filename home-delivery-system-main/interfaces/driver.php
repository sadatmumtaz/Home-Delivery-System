<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="index _style.css">
  <!-- CSS only -->
  <title>Driver</title>
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
          <li><a href="#projects" data-after="Profile">Profile</a></li>
          <li><a href="login.html" data-after="Logout">Logout</a></li>
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
  <!-- End home Section  -->
  <!-- start driver  -->
  <br>

<h1>Welcome back <?php echo $_SESSION['first_name'] ?></h1>

  <a href=""><input type="button" value="View Assigned Orders"></a>

  <br>
  <!-- End driver  -->
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