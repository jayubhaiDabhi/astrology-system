<?php
session_start();
include("logcon.php");
$usernm = $_SESSION["username"];
$userpw = $_SESSION["password"];
if (!isset($usernm)) {
    header('location:reg.php');
    exit;
}

if(isset($_GET['logout']))
{
    unset($usernm);
    session_destroy();
    header('location:log.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        margin-top: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100px;
        background: url('log.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        margin-bottom: 15px;
    }

    .container {
        width: 420px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
    }

    .container .profile {
        box-shadow: var(--box-shadow);
        text-align: center;
        border-radius: 5px;
        height: 350px;
    }

    .container .profile img {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 5px;
    }

    .container .btn {
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }

    .btn {
        padding: 5px 10px;
        border: none;
        outline: none;
        color: #fff;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 40px;
        text-decoration: none;
        width: 100%;
    }

    .container .profile h3{
        margin: 5px 0;
        font-size: 20px;
    }

    .container .profile p{
        margin-top: 15px;
        font-size: 20px;

    }
    
    .container .profile p a{
        color: var(--red);
        margin-bottom: 20px;
    }

    .container .profile p a:hover{
        text-decoration: underline;

    }

</style>

<body>
    <div class="container">
        <div class="profile">
            <?php
            $select = "select * from register where us='$usernm' and pass='$userpw'";
            $sql = mysqli_query($conn, $select);
            if (mysqli_num_rows($sql) > 0) {
                $fetch = mysqli_fetch_assoc($sql);
            }
            if ($fetch['image'] == '') {
                echo '<img class="avatarimg" src="images\default-avatar.png">';
            } else {
                echo '<img class="avatarimg" src="uploaded_img/' . $fetch['image'] . '">';
            }
            ?>
            <h3><?php echo $fetch['us']; ?></h3><br>
            <a href="updateprofile.php" class="btn">update profile</a><br><br>
            <a href="home.php" class="btn">home</a><br><br>
            <a href="user.php?logout=<?php echo $usernm; ?>" class="btn">logout</a><br><br>
            <!-- <p>new <a href="log.php">login</a> or <a href="reg.php">register</a></p> -->
        </div>
    </div>
</body>

</html>