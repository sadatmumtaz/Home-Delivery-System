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
            <li><a href="#home" data-after="Home">Home</a></li>
            <li><a href="#services-container" data-after="Service">Services</a></li>
            <li><a href="pr.php" data-after="Profile">Profile</a></li>
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

<?php 
if(isset($_POST['logout'])) {
  session_destroy();
 echo "<script>window.location = '../index.php'</script>";
}
?>
  <!-- home Section  -->
  <section id="home">
   
      <h1 class="heading">Welcome to Food For You</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        voluptatibus numquam id dolorem maxime, dolores similique
         quae ducimus non nisi!</p>
    
  </section>
  <!-- End Hero Section  -->
   <h1 class="h-primary center">Welcome <?php echo $_SESSION['first_name']; ?></h1>
         <!-- Service -->
         <section id="services-container">
          <h1 class="h-primary center">Our Services</h1>
          <div id="services">
              <div class="box">
                  <img src="img/pizza.jpg" alt="">
                  <h2 class="h-secondary center">Pizza RS:800</h2>
                  <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                      sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                      voluptas beatae facilis labore, omnis sint quae eum.</p>
  
              </div>
              <div class="box">
                  <img src="img/burger.jpg" alt="">
                  <h2 class="h-secondary center">Burger RS:350</h2>
                  <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.
  
                      sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                      voluptas beatae facilis labore, omnis sint quae eum.</p>

              </div>
              <div class="box">
                  <img src="img/shawarma.jpg" alt="">
                  <h2 class="h-secondary center">Shawarma RS:250</h2>
                  <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                      sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                      voluptas beatae facilis labore, omnis sint quae eum.</p>
              </div>
          </div>
      </section>
      <!-- order table -->
      <section id="order">
     <form action="" method="post" name="Registor_Form" id="form">
     <div class="sq">
     <select name="foods">
            <option value="1">Burger</option>
            <option value="2">Shawarma</option>
            <option value="3" selected="selected">Pizza</option>
          </select>
          <input type="number" name="quantity" min='1' placeholder="Quantity">
          <br>
          </div>
          <input type="Submit" name="Submit" value="Order" class="btn btn-primary">
      </form>
    </section>

 

  
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
 
include 'connection.php';

if(isset($_POST['Submit'])) { 
  $foodid=$_POST['foods'];
  $quantity=$_POST['quantity'];
  

$insertquery = "insert into orders (order_id,food_id,customer_id,quantity,status) 
values (DEFAULT,'$foodid'," . $_SESSION['customer_id'] . ",$quantity,'no')";
     $res= mysqli_query($con,$insertquery); 
     if($res) 
     {
        ?>
        <script>
         alert('Your Order has been placed Successfully')
        </script> 
        <?php
     } 
    }
     
   ?>