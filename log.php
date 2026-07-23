<?php

session_start();

if (isset($_SESSION["username"])) {
    header('location:home.php');
    exit;
}

include("logcon.php");


if (isset($_POST["login"])) {
    $name = $_POST["user"];
    $pass = $_POST["password"];
    $sql = "select * from register where us='$name' and pass='$pass'";
    $sql1 = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($sql1);
    if (mysqli_num_rows($sql1) == 1) {

       $_SESSION["username"] = $name;
       //exit;
       // $_SESSION["password"] = $pass;
        header("Location: user.php");
        $_SESSION['log1']='login';
        $_SESSION['uid']=$row['uid'];
        exit;
    } 
    else {
        $message[] = "Not Valid Username and password";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>login</title>
</head>

<body>
    <div class="wrapper">

        <form action="" method="post" enctype="multipart/form-data">
            <h1>Login</h1>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <div class="input-box">
                <input type="text" name="user" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
<!-- 
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password</a>
            </div> -->

            <button type='submit' class="btn" name="login">Login</button>

            <div class="register-link">
                <p>If you have no account ?..<a href='reg.php'>Register</a></p>
            </div>
        </form>
    </div>

</body>

</html>