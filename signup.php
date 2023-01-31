<?php
if(isset($_POST["signup"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];

        require_once "config.php";
        $res=mysqli_query($conn, "SELECT * FROM users WHERE Email='$email'");
        $rows=mysqli_num_rows($res);
        if($rows>0){
            //echo "<script>document.getElementById('error').innerHTML='Another account already exists with this mail*';
            //document.getElementById('error').style.display='flex';
            //</script>";
            echo "<script>alert('Another account already exists with this mail!');</script>";
        }else{
            $stmt=mysqli_stmt_init($conn);
            $preparestmt=mysqli_stmt_prepare($stmt, "INSERT INTO users (Username, Email, Password) VALUES (?, ?, ?)");
            if($preparestmt){
                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                mysqli_stmt_execute($stmt);
                header("Location: index.php");
            }
            else{
                echo "<script>alert('Something went wrong!');</script>";
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
    <link rel="icon" type="image/x-icon" href="./Media/favicon.svg">
    <link rel="stylesheet" href="signup.css">
    <title>Sign Up</title>
</head>
<body>
        <form class="register" id="register" action="signup.php" method="POST" onsubmit="return validate()" autocomplete="off">
            <div class="heading">Sign Up</div>
            <hr>
            <div class="error" id="error"></div>
            <input name="username" class="input" id="username" type="text" placeholder="Username"></input>
            <br>
            <input name="email" class="input" id="email" type="email" placeholder="Email"></input>
            <br>
            <div class="password-div"> <!--password div starts-->
            <input name="password" class="input" id="password" type="password" placeholder="Password"><!--password field-->
                <span class="toggle" onclick="visibility()">
                <i class="fa-sharp fa-solid fa-eye-slash" id="closed-eye"></i>
                <i class="fa-solid fa-eye" id="open-eye"></i>
                </span>
            </div> <!--password div ends-->
            <button type="submit" class="signup" name="signup">Sign Up</button>
            <div class="footer">Already a User? <a href="login.php">Sign in</a></div>
        </form>

<script src="https://kit.fontawesome.com/146a70a82f.js" crossorigin="anonymous"></script>
<script src="signup.js"></script>
</body>
</html>