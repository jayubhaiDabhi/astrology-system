<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    echo "Not Connect";
}
$db = mysqli_select_db($conn, "pro_astro");
if (!$db) {
    echo "No select database";
}
if (isset($_POST["Register"])) {
    $name = $_POST["user"];
    $email = $_POST["email"];
    $phone = $_POST["number"];
    $pass = $_POST["password"];
    $cpass = $_POST["cpassword"];
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;
    $select = mysqli_query($conn, "select * from register where em='$email' AND pass='$pass'");
    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exist !!!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched !!!';
        } elseif ($image_size > 2000000) {
            $message[] = 'image sized is too large !!!';
        } else {
            $insert = mysqli_query($conn, "insert into register(us,em,num,pass,image) 
            values('$name','$email','$phone','$pass','$image')") or die('query insert failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'register succesfully !!!';
                header('location:log.php');
            } else {
                $message[] = 'registeration failed !!!';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>register</title>
</head>

<body>
    <div class="wrapper">

        <form method="post" enctype="multipart/form-data">
            <h1>Register</h1>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <div class="input-box">
                <input type="text" id="user" name="user" placeholder="Full Name" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <i class="bx bxs-envelope"></i>
            </div>

            <div class="input-box">
                <input type="text" id="number" name="number" placeholder="Phone Number" required>
                <i class="bx bxs-phone"></i>
            </div>

            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="password" id="password" name="cpassword" placeholder="confirm Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp" required><br>
            </div>


            <button type='submit' class="btn" name="Register">Register</button>

            <div class="register-link">
                <p>If you have an account ?..<a href='log.php'>Login</a></p>
            </div>
        </form>
    </div>

</body>

</html>