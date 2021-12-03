<?php
session_start();
$link = mysqli_connect('localhost', 'root', '07018351733', 'vscode');

$name_result = "";
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $mysqli_check = "SELECT * FROM login_page WHERE username = '$username'";
    $name_query = mysqli_query($link, $mysqli_check);

    while($name_check = mysqli_fetch_assoc($name_query)){
        $name_result = $name_check['name'];
    }
    if($name_result != ""){
        echo "<script>alert('$username is already registered!')</script>";
    } else {
        $mysqli_insert = "INSERT INTO login_page (name, address, email, username, password) VALUES ('$name', '$address', '$email', '$username', '$password')";
        $insert_query = mysqli_query($link, $mysqli_insert);
        printf("Errormessage: %s\n", mysqli_error($link));

        $_SESSION['stored'] = $name_result;



        if($mysqli_insert == true){
            echo $_SESSION['store_login'] = "<script>alert('$name You have Successfully registered. Thank you!')</script>";
            header("location: home2.php");
        } else{
            echo "<script>alert('There is a Problem. Please Contact admin.')</script>";
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xfince SignUp</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="loginbox shadow">
        <form action="signup.php" method="post" name="signup">
            <h1 class="">SignUp</h1>
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name" maxlength="20" required>
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter Address" maxlength="20" required>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" maxlength="20" required>
            <p>Username</p>
            <input type="text" name="username" placeholder="Choose a Username" maxlength="20" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Choose a Password" maxlength="20" required>
            <input type="submit" name="signup" value="SignUp">
            <a href="login.php">Have an account?</a>
        </form>
        
    </div>

    <script src="plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/wow/wow.min.js"></script>
</body>
</html>