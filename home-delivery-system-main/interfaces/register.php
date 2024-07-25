

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="login_register_style.css">
</head>

<body>
<h1 style="text-align: center; color: white;">Food Delivery System</h1>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form style="margin-top: 50px;" action="" method="POST">
        <h3>Register</h3>

        <label for="firstName">First name</label>
        <input type="text" placeholder="First Name" name="first_name">
        <label for="lastName">Last name</label>
        <input type="text" placeholder="Last Name" name="last_name">
        <label for="email">Email</label>
        <input type="text" placeholder="Email " name="email">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <!-- <label for="password">User type</label>
        <input type="text" placeholder="User type" name="usertype"> -->
        <input type="submit" value="Register" class="btn btn-primary" name="submit">
        <div style="display: flex; justify-content: center; align-items: center;">
        <a style="margin-top: 25px;" href="index.php" class="btn btn-danger">Login</a>
    </form>



    <?php

    if (isset($_POST["submit"])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ds";

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_password = $_POST['password'];
        $email = $_POST['email'];
      //  $user_type = $_POST['usertype'];
        
        $conn = mysqli_connect($servername, $username, $password, $database);

        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); 
        }

      
$sql = sprintf("INSERT INTO users (user_id, user_type, first_name, last_name, email, password) VALUES (DEFAULT, 'customer', '%s', '%s', '%s', '%s');", $first_name, $last_name, $email, $user_password);
$sql .= "INSERT INTO customers (customer_id, user_id, totalSpent) VALUES (DEFAULT, last_insert_id(), 0);";

mysqli_multi_query($conn, $sql);

// } else if ($user_type == 'driver') {
//     $sql = sprintf("INSERT INTO users (user_id, user_type, first_name, last_name, email, password) VALUES (DEFAULT, 'driver', '%s', '%s', '%s', '%s');
//     INSERT INTO drivers (driver_id, user_id) VALUES (DEFAULT, last_insert_id());", $first_name, $last_name, $email, $user_password);
//     mysqli_query($conn, $sql);
// }
    echo "<script>alert('Registered');</script>"; 
    }
    ?>
</body>

</html>