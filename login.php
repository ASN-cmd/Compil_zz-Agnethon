<?php
$login = false;
include 'partials/connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    // Check if passwords match
  
        // Insert user into database
        $sql = "Select * from registration where username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_query($result);
        if ($num == 1){
            $login = true;
        }
     else {
        $showError = "Invalid credentials";
    }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css" class="rel">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php
if($login){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success</strong> You have been successfully Logged in!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';  

}
?>
    <div class="wrapper">
        <form action="">
            <h1>LOGIN</h1>
            <div class="input-box">
                <input type="text" placeholder="Username">
                <i class='bx bxs-user-circle' ></i>
            </div>
            <div class="input-box">
                <input type="Password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me </label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Want An Account!!!  <a href="/registration.php">  Register</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>