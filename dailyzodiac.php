<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pro_astro";
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$aries = $_POST['aries'];
$taurus = $_POST['taurus'];
$gemini = $_POST['gemini'];
$cancer = $_POST['cancer'];
$leo = $_POST['leo'];
$virgo = $_POST['virgo'];
$libra = $_POST['libra'];
$scorpio = $_POST['scorpio'];
$sagittarius = $_POST['sagittarius'];
$capricorn = $_POST['capricorn'];
$aquarius = $_POST['aquarius'];
$pisces = $_POST['pisces'];

if (isset($_POST["dailyprediction"])) {
    $sql = "update zodiacsign set aries='$aries',taurus='$taurus',gemini='$gemini',cancer='$cancer',leo='$leo',
    virgo='$virgo',libra='$libra',scorpio='$scorpio',sagittarius='$sagittarius',capricorn='$capricorn',aquarius='$aquarius',pisces='$pisces'";

    if (mysqli_query($conn, $sql)) {
        $message[] = "Record updated successfully !!!";
    } else {
        $message[] = "Error updating record !!!";
        mysqli_error($conn);
    }
}

if (isset($_POST["weeklyprediction"])) {
    $sql = "update weeklyprediction set aries='$aries',taurus='$taurus',gemini='$gemini',cancer='$cancer',leo='$leo',
    virgo='$virgo',libra='$libra',scorpio='$scorpio',sagittarius='$sagittarius',capricorn='$capricorn',aquarius='$aquarius',pisces='$pisces'";

    if (mysqli_query($conn, $sql)) {
        $message[] = "Record updated successfully !!!";
    } else {
        $message[] = "Error updating record !!!";
        mysqli_error($conn);
    }
}

if (isset($_POST["monthlyprediction"])) {
    $sql = "update monthlyprediction set aries='$aries',taurus='$taurus',gemini='$gemini',cancer='$cancer',leo='$leo',
    virgo='$virgo',libra='$libra',scorpio='$scorpio',sagittarius='$sagittarius',capricorn='$capricorn',aquarius='$aquarius',pisces='$pisces'";

    if (mysqli_query($conn, $sql)) {
        $message[] = "Record updated successfully !!!";
    } else {
        $message[] = "Error updating record !!!";
        mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prediction</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100px;
        background: url('bgimg.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        margin-bottom: 15px;
    }

    .wrapper {
        width: 50%;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(30px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
        column-count: 1;
    }

    .wrapper h1 {
        font-size: 35px;
        text-align: center;
        padding: 10px;
        background: linear-gradient(to right, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #ff00c8, #ff0000);
        background-size: 200%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: animate-gradient 5.5s linear infinite;
    }

    @keyframes animate-gradient {
        to {
            background-position: 200%;
        }
    }

    .wrapper .input-box {
        position: relative;
        width: 100%;
        height: 40px;
        margin: 0px 5px 20px 0px;
    }

    .input-box textarea {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 5px;
        font-size: 15px;
        color: #fff;
        padding: 15px 15px 15px 50px;
    }

    .input-box textarea::placeholder {
        color: #fff;
    }

    /* Button */

    .wrapper .btn {
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
        padding: 15px 40px;
        border: none;
        outline: none;
        color: #fff;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 40px;
        margin: 5px;
    }

    .btn::after {
        content: "";
        z-index: -1;
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: white;
        left: 0;
        top: 0;
        border-radius: 40px;
    }

    .btn::before {
        content: "";
        background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #ff00c8, #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 600%;
        z-index: -1;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        filter: blur(10px);
        animation: glowing 15s linear infinite;
        transition: opacity .3s ease-in-out;
        border-radius: 40px;
        opacity: 0;
    }

    @keyframes glowing {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .btn:hover::before {
        opacity: 1;
    }

    .btn:active:after {
        background: transparent;
    }

    .btn:active {
        color: #000;
        font-weight: bold;
    }
</style>

<body>
    <div class="wrapper">
        <form method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>

            <h1>Sign(Rashi) prediction</h1>

            <div class="input-box">
                <textarea placeholder="Aries Sign" name="aries"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Taurus Sign" name="taurus"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Gemini Sign" name="gemini"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Cancer Sign" name="cancer"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Leo Sign" name="leo"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Virgo Sign" name="virgo"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Libra Sign" name="libra"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Scorpio Sign" name="scorpio"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Sagittarius Sign" name="sagittarius"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Capricorn Sign" name="capricorn"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Aquarius Sign" name="aquarius"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Pisces Sign" name="pisces"></textarea>
            </div>

            <button type='submit' class="btn" value="daily prediction" name="dailyprediction">Daily Prediction</button>
            <button type='submit' class="btn" value="weekly prediction" name="weeklyprediction">Weekly Prediction</button>
            <button type='submit' class="btn" value="Monthly prediction" name="monthlyprediction">Monthly Prediction</button>



        </form>

    </div>
</body>

</html>