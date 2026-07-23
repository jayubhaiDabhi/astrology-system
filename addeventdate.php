<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pro_astro";
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$date = $_POST["date"];
$month = $_POST["month"];
$event = $_POST["info"];

$sql = "INSERT INTO calendardate ( `date` , `month` , `info` ) VALUES ('$date','$month', '$event');";

if (mysqli_query($conn, $sql)) {
    $message[] = "Record inserted successfully !!!";
} else {
    $message[] = "Error inserting record !!!";
    mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addevent</title>
</head>

<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        margin-top: 150px;
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
        width: 40%;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(30px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
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
            <!-- <span>add tithi :</span><textarea class="allsign" name="tithi"></textarea><br>
        <span>add paksha :</span><textarea class="allsign" name="paksha"></textarea><br>
        <span>add month :</span><textarea class="allsign" name="month"></textarea><br>
        <span>add event :</span><textarea class="allsign" name="event"></textarea><br>

        <input type="submit" value="add event" name="addevent"><br> -->



            <h1>Add Event Date</h1>

            <div class="input-box">
                <textarea placeholder="Add Date" name="date"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Add Month" name="month"></textarea>
            </div>
            <div class="input-box">
                <textarea placeholder="Add Info" name="info"></textarea>
            </div>

            <button type='submit' class="btn" value="add event" name="addevent">Add Event</button>


        </form>
    </div>
</body>

</html>