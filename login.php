<?php
include('config.php');  
$username = $_POST['username'];  
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

if($count == 1){
    header("Location: index.php");
}else{
    echo "<script>alert('Invalid Username or Password!');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Media/favicon.svg">
    <link rel="stylesheet" href="login.css">
    <title>Log In</title>
</head>
<body>
        <form class="login" id="login" action="login.php" method="POST" onsubmit="return validate()" autocomplete="off">
            <div class="heading">Log In</div>
            <hr>
            <div class="error" id="error"></div>
            <input name="username" class="input" id="username" type="text" placeholder="Username"></input>
            <br>
            <div class="password-div"> <!--password div starts-->
            <input name="password" class="input" id="password" type="password" placeholder="Password"><!--password field-->
                <span class="toggle" onclick="visibility()">
                <i class="fa-sharp fa-solid fa-eye-slash" id="closed-eye"></i>
                <i class="fa-solid fa-eye" id="open-eye"></i>
                </span>
            </div> <!--password div ends-->
            <button type="submit" class="signin" name="signin">Log In</button>
            <div class="footer">New User? <a href="signup.php">Sign Up</a></div>
        </form>

<script src="https://kit.fontawesome.com/146a70a82f.js" crossorigin="anonymous"></script>
<script src="login.js"></script>
</body>
</html>