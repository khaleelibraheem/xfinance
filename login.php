<?php
session_start();
$link = mysqli_connect('localhost', 'root', '07018351733', 'vscode');

$fetch_username = $fetch_password = "";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['stored'] = $username;

    $details_check = "SELECT * FROM login_page WHERE username = '$username' AND password = '$password'";
    $name_query = mysqli_query($link, $details_check);

    while($row = mysqli_fetch_assoc($name_query)){
        $fetch_username = $row['username'];
        $fetch_password = $row['password'];
    }

    if( $fetch_username == "" ||  $fetch_password == "" ){
        echo "<script>alert('Login Details Wrong!')</script>";
    } else{
        $_SESSION['store_message'] = "<script>alert('Welcome back $username!')</script>";
        header("location: home2.php");

    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xfince LogIn</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="loginbox shadow">
        <form action="login.php" method="post" name="login">
            <h1>Login Here</h1>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" maxlength="20" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" maxlength="20" required>
            <input type="submit" name="login" value="Login">
        </form>
        <a href="#">Lost your password</a><br>
        <a href="signup.php">Don't have an account?</a>


    </div>
    <script src="plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>