<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numerology</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    /* navbar */
    .class_navbar {
        height: 60px;
        width: 100%;
        background-color: #9f2800;
        display: flex;
        flex-wrap: wrap;
        height: 70px;
    }

    .class_clock {
        margin-left: 1000px;
        color: #d57e2f;
        margin-top: 5px;
        display: flex;
    }

    .class_clock a {
        font-size: 40px;
        margin-left: 35px;
        margin-top: 10px;
        color: #d57e2f;
    }

    .clock {
        font-size: 20px;
        margin-left: 35px;
    }

    .sidebar {
        position: fixed;
        left: -250px;
        width: 250px;
        height: 100%;
        background: #d57e2f;
        transition: all .5s ease;
        box-shadow: 0 0 10px rgb(0, 0, 0, 0.3);

    }

    .sidebar header {
        font-size: 22px;
        color: #d57e2f;
        text-align: center;
        line-height: 70px;
        background: #9f2800;
        user-select: none;
    }

    .sidebar ul a {
        display: block;
        height: 100%;
        width: 100%;
        line-height: 50px;
        font-size: 20px;
        color: #9f2800;
        padding-left: 40px;
        box-sizing: border-box;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        transition: .4s;
        text-decoration: none;
    }

    ul li:hover a {
        padding-left: 50px;
        color: #d57e2f;
        background: #9f2800;
    }

    .sidebar ul a i {
        margin-right: 16px;

    }

    #check {
        display: none;
    }

    label #btn,
    label #cancel {
        position: absolute;
        cursor: pointer;
        background: #d57e2f;
        border-radius: 3px;

    }

    label #btn {
        left: 20px;
        top: 15px;
        font-size: 30px;
        color: #9f2800;
        padding: 6px 12px;
        transition: all .5s;
    }

    label #cancel {
        z-index: 1111;
        left: -40px;
        top: 17px;
        font-size: 30px;
        color: #9f2800;
        padding: 4px 9px;
        transition: all .5s ease;
    }

    #check:checked~.sidebar {
        left: 0;
    }

    #check:checked~label #btn {
        left: 250px;
        opacity: 0;
        pointer-events: none;

    }

    #check:checked~label #cancel {
        left: 40px;

    }

    /* main container */
    .body_numerology {
        height: 900px;
        width: 100%;
    }

    .date {
        display: flex;
        flex-wrap: wrap;
    }

    #date {
        width: 76px;
    }


    #datem {
        width: 76px;
        margin-left: 10px;
        margin-right: 10px;
    }

    #nm {
        height: 30px;
    }

    .detail_numerology {
        height: 170px;
        width: 250px;
        margin-left: 650px;
        color: #9f2800;
        margin-top: 50px;

    }

    .numerology_container {
        height: 700px;
        width: 90%;
        background-color: antiquewhite;
        margin-left: 60px;
        color: #9f2800;
        font-size: 40px;
    }

    .subcontainer {
        height: 510px;
        background-color: antiquewhite;
        color: #9f2800;
        font-size: 40px;
        overflow: hidden;
        overflow-y: scroll;
    }

    input {
        width: 100%;
        color: #9f2800;
        border-color: #9f2800;
    }

    .numerologyheader {
        background-color: #9f2800;
        color: #d57e2f;
        width: 100%;
        height: 100px;
        font-size: 50px;
        text-align: center;
        justify-content: center;
        margin-top: 10px;
    }

    h2{
        text-align: center;
    }


    .subheader {
        margin-top: 10px;
    }

    .top-buttons {
        top: 70px;
        right: 20px;
        display: flex;
        justify-content: space-between;
        width: 100%;
        background-color: #9f2800;
        color: #d57e2f;
        margin-bottom: 10px;
    }

    .button-1,
    .button-2,
    .button-3,
    .button-4,
    .button-5 {
        background-color: #9f2800;
        color: #d57e2f;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-right: 80px;
        margin-left: 50px;
        border: 1px solid #d57e2f;
        font-size: x-large;
        height: 50px;
    }

    .button-1:hover,
    .button-2:hover,
    .button-3:hover,
    .button-4:hover,
    .button-5:hover {
        background-color: #d57e2f;
        color: #9f2800;
        padding: 10px 20px;
        border: 1px solid #9f2800;
        cursor: pointer;
        margin-right: 80px;
        margin-left: 50px;
        font-size: x-large;
    }

    .info-1,
    .info-2,
    .info-3,
    .info-4,
    .info-5 {
        top: 60px;
        right: 20px;
        color: #9f2800;
        background-color: antiquewhite;
        padding: 20px;
        border: 1px solid #ddd;
        display: none;
        height: 550px;
    }

    .loshugrid {
        height: 500px;
        width: 500px;
        background-color: white;
        color: black;
        margin-left: 28%;
        display: flex;
        flex-wrap: wrap;
    }


    .loshugrid div {
        width: calc(99%/3);
        height: calc(99%/3);
        text-align: center;
        border: 1px solid black;
    }

    .top1 {

        background-color: turquoise;

    }

    .top2 {

        background-color: red;
    }

    .top3 {

        background-color: white;
    }

    .middle1 {
        background-color: blue;
    }

    .middle2 {
        background-color: green;
    }

    .middle3 {
        background-color: yellowgreen;
    }

    .bottom1 {
        background-color: purple;
    }

    .bottom2 {
        background-color: yellow;
    }

    .bottom3 {
        background-color: pink;
    }

    .rajyog {
        font-size: 20px;
        color: #9f2800;

    }

    body {
        background-color: #d57e2f;
    }

    /* footer */
    .footer {
        background-color: #9f2800;
        width: 100%;
        height: 100px;
        margin-top: 150px;
    }
</style>

<body>
    <!--navbar part-->
    <div class="class_navbar">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header><b>MENU</b></header>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i>home</a></li>
                <li><a href="numerology.php"><i class="fa-solid fa-1"></i>numerology</a></li>
                <li><a href="panchang.php"><i class="fa-solid fa-moon"></i>panchang</a></li>
                <li><a href="celendar.php"><i class="fa-regular fa-calendar-days"></i>celendar</a></li>
                <li><a href="festival.php"><i class="fa-solid fa-f"></i>festival</a></li>
                <li><a href="jyotish.php"><i class="fa-solid fa-hand"></i>jyotish</a></li>
                <li><a href="planets.php"><i class="fa-solid fa-earth-africa"></i>planets</a></li>
                <li><a href="lyrics.php"><i class="fa-solid fa-om"></i>lyrics</a></li>
                <li><a href="gallery.php"><i class="fa-solid fa-image"></i>gallery</a></li>
                <li><a href="shop.php"><i class="fa-solid fa-cart-shopping"></i>shop</a></li>
            </ul>
        </div>


        <div class="class_clock">
            <a href="home.php"><i class="fas fa-home"></i></a>
            <!-- <a href="setting.php"><i class="fa-solid fa-gear"></i></a> -->
            <a href="user.php"><i class="fa-solid fa-circle-user"></i></a>
            <div class="clock"><?php include 'clock.php' ?></div>
        </div>
    </div>

    <!-- container for user detail -->
    <div class="body_numerology">
        <form name="numerology_form" method="post">
            <div class="detail_numerology">
                <input type="text" name="nm" id="nm" placeholder="Enter Your Name"><br><br>
                <div class="date">
                    <input id="date" type="text" name="birthday" placeholder="  Date"><br><br>
                    <input id="datem" type="text" name="birthmonth" placeholder="  Month"><br><br>
                    <input id="date" type="text" name="birthyear" placeholder="  Year"><br><br>
                </div>
                <br><input id="nm" type="submit" name="submit">
            </div>
        </form>

        <!-- main container -->
        <div class="numerology_container">
            <!-- container header detail -->
            <div class="numerologyheader">
                <?php
                if (isset($_POST["submit"])) {
                    $name = $_POST["nm"];
                    $birthday = $_POST["birthday"];
                    $birthmonth = $_POST["birthmonth"];
                    $birthyear = $_POST["birthyear"];
                    $day = $birthday;
                    $month = $birthmonth;
                    $year = $birthyear;
                    $nno = $name;
                    $namelength = strlen($nno);
                    $nn = 0;
                    $nnc = 0;
                    $daysum = $dsum = 0;
                    $monthsum = 0;
                    $yearsum = 0;
                    $allsum = 0;
                    $pd1 = 0;
                    $pd2 = 0;
                    $pm1 = 0;
                    $pm2 = 0;
                    $py1 = 0;
                    $py2 = 0;
                    $py3 = 0;
                    $py4 = 0;
                    $one = $two = $three = $four = $five = $six = $seven = $eight = $nine = 0;
                    $count = 10;

                    for ($i = 1; $i <= 2; $i++) {
                        $r = $day % 10;
                        if ($i == 1) {
                            $pd2 = $r;
                        }
                        if ($i == 2) {
                            $pd1 = $r;
                        }
                        $day = $day / 10;
                    }


                    for ($i = 1; $i <= 2; $i++) {
                        $r = $month % 10;
                        if ($i == 1) {
                            $pm2 = $r;
                        }
                        if ($i == 2) {
                            $pm1 = $r;
                        }
                        $month = $month / 10;
                    }

                    for ($i = 1; $i <= 4; $i++) {
                        $r = $year % 10;
                        if ($i == 1) {
                            $py4 = $r;
                        }
                        if ($i == 2) {
                            $py3 = $r;
                        }
                        if ($i == 3) {
                            $py2 = $r;
                        }
                        if ($i == 4) {
                            $py1 = $r;
                        }
                        $year = $year / 10;
                    }

                    $day = $birthday;
                    $month = $birthmonth;
                    $year = $birthyear;

                    while ($day > 0) {
                        $r = $day % 10;
                        $daysum = $daysum + $r;
                        $day = $day / 10;
                    }
                    while ($month > 0) {
                        $r = $month % 10;
                        $monthsum = $monthsum + $r;
                        $month = $month / 10;
                    }
                    while ($year > 0) {
                        $r = $year % 10;
                        $yearsum = $yearsum + $r;
                        $year = $year / 10;
                    }

                    $sum = $daysum + $monthsum + $yearsum;

                    while ($sum > 0) {
                        $r = $sum % 10;
                        $allsum = $allsum + $r;
                        $sum = $sum / 10;
                    }

                    $sum = $allsum;

                    while ($daysum > 0) {
                        $r = $daysum % 10;
                        $dsum = $dsum + $r;
                        $daysum = $daysum / 10;
                    }

                    $daysum = $dsum;

                    if ($sum >= 10) {
                        $allsum = 0;
                        while ($sum > 0) {
                            $r = $sum % 10;
                            $allsum = $allsum + $r;
                            $sum = $sum / 10;
                        }
                    }

                    if ($daysum >= 10) {
                        $dsum = 0;
                        while ($daysum > 0) {
                            $r = $daysum % 10;
                            $dsum = $dsum + $r;
                            $daysum = $daysum / 10;
                        }
                    }


                    if ($pd1 == 1) {
                        $one += 1;
                    }
                    if ($pd2 == 1) {
                        $one += 1;
                    }
                    if ($pm1 == 1) {
                        $one += 1;
                    }
                    if ($pm2 == 1) {
                        $one += 1;
                    }
                    if ($py1 == 1) {
                        $one += 1;
                    }
                    if ($py2 == 1) {
                        $one += 1;
                    }
                    if ($py3 == 1) {
                        $one += 1;
                    }
                    if ($py4 == 1) {
                        $one += 1;
                    }
                    if ($dsum == 1) {
                        $one += 1;
                    }
                    if ($allsum == 1) {
                        $one += 1;
                    }

                    if ($pd1 == 2) {
                        $two += 1;
                    }
                    if ($pd2 == 2) {
                        $two += 1;
                    }
                    if ($pm1 == 2) {
                        $two += 1;
                    }
                    if ($pm2 == 2) {
                        $two += 1;
                    }
                    if ($py1 == 2) {
                        $two += 1;
                    }
                    if ($py2 == 2) {
                        $two += 1;
                    }
                    if ($py3 == 2) {
                        $two += 1;
                    }
                    if ($py4 == 2) {
                        $two += 1;
                    }
                    if ($dsum == 2) {
                        $two += 1;
                    }
                    if ($allsum == 2) {
                        $two += 1;
                    }

                    if ($pd1 == 3) {
                        $three += 1;
                    }
                    if ($pd2 == 3) {
                        $three += 1;
                    }
                    if ($pm1 == 3) {
                        $three += 1;
                    }
                    if ($pm2 == 3) {
                        $three += 1;
                    }
                    if ($py1 == 3) {
                        $three += 1;
                    }
                    if ($py2 == 3) {
                        $three += 1;
                    }
                    if ($py3 == 3) {
                        $three += 1;
                    }
                    if ($py4 == 3) {
                        $three += 1;
                    }
                    if ($dsum == 3) {
                        $three += 1;
                    }
                    if ($allsum == 3) {
                        $three += 1;
                    }

                    if ($pd1 == 4) {
                        $four += 1;
                    }
                    if ($pd2 == 4) {
                        $four += 1;
                    }
                    if ($pm1 == 4) {
                        $four += 1;
                    }
                    if ($pm2 == 4) {
                        $four += 1;
                    }
                    if ($py1 == 4) {
                        $four += 1;
                    }
                    if ($py2 == 4) {
                        $four += 1;
                    }
                    if ($py3 == 4) {
                        $four += 1;
                    }
                    if ($py4 == 4) {
                        $four += 1;
                    }
                    if ($dsum == 4) {
                        $four += 1;
                    }
                    if ($allsum == 4) {
                        $four += 1;
                    }

                    if ($pd1 == 5) {
                        $five += 1;
                    }
                    if ($pd2 == 5) {
                        $five += 1;
                    }
                    if ($pm1 == 5) {
                        $five += 1;
                    }
                    if ($pm2 == 5) {
                        $five += 1;
                    }
                    if ($py1 == 5) {
                        $five += 1;
                    }
                    if ($py2 == 5) {
                        $five += 1;
                    }
                    if ($py3 == 5) {
                        $five += 1;
                    }
                    if ($py4 == 5) {
                        $five += 1;
                    }
                    if ($dsum == 5) {
                        $five += 1;
                    }
                    if ($allsum == 5) {
                        $five += 1;
                    }

                    if ($pd1 == 6) {
                        $six += 1;
                    }
                    if ($pd2 == 6) {
                        $six += 1;
                    }
                    if ($pm1 == 6) {
                        $six += 1;
                    }
                    if ($pm2 == 6) {
                        $six += 1;
                    }
                    if ($py1 == 6) {
                        $six += 1;
                    }
                    if ($py2 == 6) {
                        $six += 1;
                    }
                    if ($py3 == 6) {
                        $six += 1;
                    }
                    if ($py4 == 6) {
                        $six += 1;
                    }
                    if ($dsum == 6) {
                        $six += 1;
                    }
                    if ($allsum == 6) {
                        $six += 1;
                    }

                    if ($pd1 == 7) {
                        $seven += 1;
                    }
                    if ($pd2 == 7) {
                        $seven += 1;
                    }
                    if ($pm1 == 7) {
                        $seven += 1;
                    }
                    if ($pm2 == 7) {
                        $seven += 1;
                    }
                    if ($py1 == 7) {
                        $seven += 1;
                    }
                    if ($py2 == 7) {
                        $seven += 1;
                    }
                    if ($py3 == 7) {
                        $seven += 1;
                    }
                    if ($py4 == 7) {
                        $seven += 1;
                    }
                    if ($dsum == 7) {
                        $seven += 1;
                    }
                    if ($allsum == 7) {
                        $seven += 1;
                    }

                    if ($pd1 == 8) {
                        $eight += 1;
                    }
                    if ($pd2 == 8) {
                        $eight += 1;
                    }
                    if ($pm1 == 8) {
                        $eight += 1;
                    }
                    if ($pm2 == 8) {
                        $eight += 1;
                    }
                    if ($py1 == 8) {
                        $eight += 1;
                    }
                    if ($py2 == 8) {
                        $eight += 1;
                    }
                    if ($py3 == 8) {
                        $eight += 1;
                    }
                    if ($py4 == 8) {
                        $eight += 1;
                    }
                    if ($dsum == 8) {
                        $eight += 1;
                    }
                    if ($allsum == 8) {
                        $eight += 1;
                    }

                    if ($pd1 == 9) {
                        $nine += 1;
                    }
                    if ($pd2 == 9) {
                        $nine += 1;
                    }
                    if ($pm1 == 9) {
                        $nine += 1;
                    }
                    if ($pm2 == 9) {
                        $nine += 1;
                    }
                    if ($py1 == 9) {
                        $nine += 1;
                    }
                    if ($py2 == 9) {
                        $nine += 1;
                    }
                    if ($py3 == 9) {
                        $nine += 1;
                    }
                    if ($py4 == 9) {
                        $nine += 1;
                    }
                    if ($dsum == 9) {
                        $nine += 1;
                    }
                    if ($allsum == 9) {
                        $nine += 1;
                    }


                    for ($i = ($namelength - 1); $i >= 0; $i--) {
                        if ($nno[$i] == 'a' || $nno[$i] == 'i' || $nno[$i] == 'j' || $nno[$i] == 'q' || $nno[$i] == 'y' || $nno[$i] == 'A' || $nno[$i] == 'I' || $nno[$i] == 'J' || $nno[$i] == 'Q' || $nno[$i] == 'Y') {
                            $nn += 1;
                        } elseif ($nno[$i] == 'b' || $nno[$i] == 'k' || $nno[$i] == 'r' || $nno[$i] == 'B' || $nno[$i] == 'K' || $nno[$i] == 'R') {
                            $nn += 2;
                        } elseif ($nno[$i] == 'c' || $nno[$i] == 'g' || $nno[$i] == 'l' || $nno[$i] == 's' || $nno[$i] == 'C' || $nno[$i] == 'G' || $nno[$i] == 'L' || $nno[$i] == 'S') {
                            $nn += 3;
                        } elseif ($nno[$i] == 'd' || $nno[$i] == 'm' || $nno[$i] == 't' || $nno[$i] == 'D' || $nno[$i] == 'M' || $nno[$i] == 'T') {
                            $nn += 4;
                        } elseif ($nno[$i] == 'e' || $nno[$i] == 'h' || $nno[$i] == 'n' || $nno[$i] == 'x' || $nno[$i] == 'E' || $nno[$i] == 'H' || $nno[$i] == 'N' || $nno[$i] == 'X') {
                            $nn += 5;
                        } elseif ($nno[$i] == 'u' || $nno[$i] == 'v' || $nno[$i] == 'w' || $nno[$i] == 'U' || $nno[$i] == 'V' || $nno[$i] == 'W') {
                            $nn += 6;
                        } elseif ($nno[$i] == 'o' || $nno[$i] == 'z' || $nno[$i] == 'O' || $nno[$i] == 'Z') {
                            $nn += 7;
                        } elseif ($nno[$i] == 'f' || $nno[$i] == 'p' || $nno[$i] == 'F' || $nno[$i] == 'P') {
                            $nn += 8;
                        } else {
                            $nn += 0;
                        }
                    }

                    while ($nn > 0) {
                        $r = $nn % 10;
                        $nnn = $nnn + $r;
                        $nn = $nn / 10;
                    }
                    echo "mulank $dsum   ";
                    echo "bhagyank $allsum   ";
                    echo "birthdate $birthday-$birthmonth-$birthyear  ";
                    echo "name number $nnn";
                }
                ?>
            </div>

            <div class="subhesder">
                <div class="top-buttons">
                    <button class="button-1">Home</button>
                    <button class="button-2">Mulank</button>
                    <button class="button-3">Bhagyank</button>
                    <button class="button-4">Namank</button>
                    <button class="button-5">Lo Shu Grid</button>
                </div>
            </div>
            <div class="subcontainer">

                <div class="info-1" style="display: block;">
                    <h2>Home</h2>
                    <p><?php
                        echo "<br>";
                        echo "<br>Name        :    $name <br><br>";
                        echo "Mulank      :    $dsum   <br><br>";
                        echo "Bhagyank    :    $allsum  <br><br> ";
                        echo "Namank : $nnn<br><br>";
                        echo "Birthdate   :    $pd1$pd2 $pm1$pm2 $py1$py2$py3$py4<br><br>";
                        if ($dsum == 1) {
                            echo "Ruling Planet: SUN<br><br>";
                        }
                        if ($dsum == 2) {
                            echo "Ruling Planet: MOON<br><br>";
                        }
                        if ($dsum == 3) {
                            echo "Ruling Planet: JUPITER<br><br>";
                        }
                        if ($dsum == 4) {
                            echo "Ruling Planet: URANUS OR RAHU<br><br>";
                        }
                        if ($dsum == 5) {
                            echo "Ruling Planet: MERCURY<br><br>";
                        }
                        if ($dsum == 6) {
                            echo "Ruling Planet: VENUS<br><br>";
                        }
                        if ($dsum == 7) {
                            echo "Ruling Planet: NEPTUNE OR KETU<br><br>";
                        }
                        if ($dsum == 8) {
                            echo "Ruling Planet: SATURN<br><br>";
                        }
                        if ($dsum == 9) {
                            echo "Ruling Planet: MARS<br><br>";
                        }

                        if ($dsum == 1) {
                            echo "Auspicious Colour : YELLOW<br><br>";
                        }
                        if ($dsum == 2) {
                            echo "Auspicious Colour : WHITE<br><br>";
                        }
                        if ($dsum == 3) {
                            echo "Auspicious Colour : BLUE<br><br>";
                        }
                        if ($dsum == 4) {
                            echo "Auspicious Colour : TURQUOISE<br><br>";
                        }
                        if ($dsum == 5) {
                            echo "Auspicious Colour : GREEN<br><br>";
                        }
                        if ($dsum == 6) {
                            echo "Auspicious Colour : PINK<br><br>";
                        }
                        if ($dsum == 7) {
                            echo "Auspicious Colour : SEA GREEN<br><br>";
                        }
                        if ($dsum == 8) {
                            echo "Auspicious Colour : PURPLE<br><br>";
                        }
                        if ($dsum == 9) {
                            echo "Auspicious Colour : RED<br><br>";
                        }

                        ?></p>
                </div>

                <div class="info-2" style="display: none;">
                    <h2>Mulank</h2>
                    <?php
                    if ($dsum == 1) {
                        echo "
                                     <p>$name , your most important number in Numerology is the date of the month on which you were born.
                                     This number can identify important elements of your character, personality, and individuality. This number determines
                                     the core elements of your overall being. Things like whether you are domineering or shy, a leader or a follower.
                                     The reason for this is because each number has its own nature and personal vibration. After careful analysis, we have
                                     worked out your numerology birth number as follows: Your Radical Number is $dsum   <br><br>.

                                     Since you were born under the radical number or mulank : $dsum   <br><br> ,
                                     you are rather ambitious, and dislike any restrictions imposed upon you by others. Instead, getting others to work and
                                     leading them is your first quality. You have the divine grace of Lord Sun with you. Having a stable ideology, you remain
                                     firm and determined in your decisions. You stay in any relationship for a long time, whether love affairs or friendship.
                                     A kind person and someone who always helps others, you are someone who desires for respect more. You earn good name on the
                                     basis of your hard work while your performance in the government sector is commendable. You get more attracted towards the
                                     opposite sex people and because of this, they often cheat. You have special experience in social service, politics, job, or
                                     religion related areas.
                                 
                            
                    
                    ";
                    }
                    if ($dsum == 2) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 2.

                          As you are majorly influenced by the Moon, you are quite sensitive and prefer to work on your tasks 
                          with someone. You need a partner in every aspect of life. Often, you begin working on several tasks 
                          together, but end up changing your mind in the middle, and leave them all, incomplete as a result, and 
                          then you have to suffer losses. An art-lover and creative person, you love people. You can be a skilled 
                          lover and are devoted to your family. However, you may lack patience. In addition to having a good social
                          status, you are popular in society as well. Not only are you a good friend but you have a tendency to explore. 
                          There are many ups and downs in your life and many plans of yours get stuck in the middle. You must strengthen 
                          your self-confidence.           
                            
                        ";
                    }
                    if ($dsum == 3) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 3.

                          Born under the radical number 3 and influenced by the planet Jupiter, you are a soft-hearted, truthful, and peace-loving person. You are ambitious and do well in most government jobs. However, often a dictatorship nature can be seen within you. A disciplinarian, you can often be rather hard on your subordinates. Full of intuitive knowledge, you enjoy learning and teaching both, which is why you can attain several achievements in the field of intellect. You are mentally strong and your reasoning and knowledge power is quite good. Your love for charity and philanthropic works is great, however, you can sometimes follow a topic doggedly which makes you an aggressive person. Yet, it is true that you are self-respecting.        
                            
                        ";
                    }
                    if ($dsum == 4) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 4.

                          You are mainly affected by the planet Harshal or Rahu. As a result, you have an out of the box thinking and can do something new and innovative. Since your opinion does not easily match other people’s beliefs, thus, many often oppose you. Wealth accumulation is not something you are fond of, and rather prefer being happy and immersed in your fun. You think ahead of your time and openly express your disagreements. However, you have an unpredictable nature that cannot be easily identified by anyone. In the same vein, nobody can know what you do next, and this attribute of yours, makes you more special. You are the life of the party. While you have a habit of doing good work, however, you also want people to praise this goodness of yours. You are quite sensitive and often yourself lonely. The number of your friends may be low but they are all very honest and loyal.
                            
                        ";
                    }
                    if ($dsum == 5) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 5.

                          Being born under the radical number 5, and the influence of Mercury, you are a person with lots of friends. You have a passion for friendship, there are many people in your friend circle. All attributes of being a good business person are present, naturally, within you. You are often attracted towards profit and hence do many things in haste, but you then have to suffer for the same. You have an amazing agility within you. In the same vein, you do not stay stuck on something for long and therefore do not remain upset for too long. You give more preference to business than job. There is a good possibility of hastiness, quick temper, and irritability being within you. However, on the flip side, your arguments are good and your speech is also effective. You are fickle at heart and often attain success in works related to brains and wit. Additionally, you prefer intellectual work, more than any physical exertions. Your ability to come out of any difficulty, quickly is one of your greatest attributes. However, you should avoid misusing your mental strength.
                            
                        ";
                    }
                    if ($dsum == 6) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 6.

                          Being born with the influence of Venus over you, you are most attracted to beauty. Not only that, you are also inclined towards any type of art, including, entertainment, literature, clothing, and music. You love makeup, decoration, and things related to the same which is why you complete all your tasks beautifully. The owner of a magnetic personality, you effortlessly attract others towards you. However, you can often be rather stubborn or jealous due to which you can also face some problems. You cannot tolerate excessive resistance. As a person, you can easily befriend someone, and the art of being a host is unparalleled in you. However, you can sometimes feel guilty and struggle with mental stress. Your inclination towards the opposite gender is quite high. Your ability of winning people’s heart is your best attribute.
                            
                        ";
                    }
                    if ($dsum == 7) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 7.

                          As you were born under the radical number 7, the influence of Ketu or Neptune is majorly on you. Religiousness naturally exists within you, and you can be rather hardcore in matters related to it. You enjoy poetry and painting. Your intuitiveness is your biggest strength and you are skilled at understanding others. However, on the other hand, it is not so easy for other people to understand you. You enjoy travelling, going on excursions and trips, and vacations. There can be a lack of worldly pleasures and amenities in your life. You earn money on the basis of your fundamental ideas and do charity work as well. You worry about the future, therefore enjoy doing good work. Imagination is good within you and you have the speciality of attracting people towards you. All the good qualities and thoughts of being a good business person are within you, and on making good use of the same, you can rise as a successful entrepreneur. The art of influencing others is your greatest attribute.
                            
                        ";
                    }
                    if ($dsum == 8) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 8.

                          You are quite diligent and hardworking in nature, and the secret behind this is Shani (Saturn), the lord of your radical number, 8. You are the most important link in any institute but often people underestimate your hard work. Loneliness and depression can often bother you. Though you progress slowly in life, but this growth is certain. Showing off is something that you do not incorporate within you much, due to which people often do not understand your importance. You mind your own business and rest only after completing it. A very ambitious, you do not retreat from the prospect of working hard to achieve the same. You are very kind and passionate, and a believer in fate as well as of religious nature to a certain level. You often reach high positions and are always ready to make any sacrifices. Often, you accomplish such tasks that keep you alive in the memories of people even when you are not there. You will be either very successful in life or highly unsuccessful, and this depends entirely on how optimistic you can be.
                            
                        ";
                    }
                    if ($dsum == 9) {
                        echo "

                          $name, your most important number in Numerology is the date of the month on which you were born. 
                          This number can identify important elements of your character, personality, and individuality. 
                          This number determines the core elements of your overall being. Things like whether you are
                          domineering or shy, a leader or a follower. The reason for this is because each number has its 
                          own nature and personal vibration. After careful analysis, we have worked out your numerology birth 
                          number as follows: Your Radical Number is 9.

                          Due to being born under this number, you get your energy and powers from Mars, the lord of radical number 9, which makes you brave and unafraid of difficulties. You have mastered the art of governance or leadership of the people. However, you can have a short temper, because of which you can often face adverse conditions. Agility and hastiness is within you. Your life is full of struggles and the number of your enemies is also high. However, you can face all these by the virtue of your courage. You prefer being independent and are not easily influenced by others. It is advised that you remain wary of smarmy people. While you can go to all ends, in order to get love and sympathy, however, you cannot tolerate your criticism. Hence, you should try to control yourself because you can go to any extent in extreme anger. If you are successful in controlling your temper, then you will be very fortunate and successful in life.
                            
                        ";
                    }


                    ?>

                    </p>
                </div>

                <div class="info-3" style="display: none;">
                    <h2>Destiny Number</h2>
                    <p>
                        <?php
                        if ($allsum == 1) {
                            echo "
                            
                                You are an ambitious person with great leadership skills. As a result, you get along well with people, attain their support, and are capable of fulfilling your goals. You dislike being limited and have many friends who will always be there for your help. Economically, you will prosper, but you also enjoy and love luxuries and regal living. Success in the field of politics is probable for you and there is also a good possibility of getting benefits from the government sector. Being born under the destiny number 1, you wish to receive respect from people and you will get it too. However, you should avoid excessive spending as well as getting into gambling or betting. Exercise caution in utilizing your independence, do not take too much risk, and follow your morals and ethics.

                            ";
                        }
                        if ($allsum == 2) {
                            echo "
                            
                                You are a very gentle, affable, and well-liked person, who likes to work in partnership. An imaginative, romantic as well as a creative person, you always respect women. However, you often experience a lack of strong mental ability due to which, you can usually leave your tasks unfinished. Physically, you are a little weak, and others take advantage of you easily. Hence, you need to learn to handle yourself and maintain your self-confidence. In the same vein, complete all the tasks that you take in hand and remain calm in the face of problems. In addition to that, you also need to be wary of smarmy people surrounding you.

                            ";
                        }

                        if ($allsum == 3) {
                            echo "
                            
                                You are an inspiration for others and your communication skills is your best attribute. Versatile talents are incorporated within you, and maybe that is why you do not like to be someone's assistant. You are disciplined and intelligent, your love pure, and you always favor justice. In addition to all this, you are a visionary person, who has a good sense of humor, and a practical perspective. You should avoid excessive spending, try to avoid being of an envious nature, and do not rush into anything to become wealthy or wise. Moreover, you will need to control your anger and dualistic personality, as well as stay away from the wrong company because they will prove to be harmful for you.

                            ";
                        }
                        if ($allsum == 4) {
                            echo "
                            
                                There are a lot of ups and downs in your life, and many sudden incidents occur as well, bringing with them both good and bad results for you. You can easily reach the great heights of success in your life, but on the other hand conspiracies can bring you down too. Your perspective is different from others making you the centre of attraction anywhere. A rebellious person, you oppose the persisting laws and customs, and are constantly trying to create new rules. You are an intelligent person with a sharp mind, and therefore should avoid being too sensitive and emotional, as well as keep away from pessimistic thinking. Not only do you need to learn to recognize opportunities, but need to keep your aggressiveness under control as well.

                            ";
                        }
                        if ($allsum == 5) {
                            echo "
                            
                                A good friend and a mentally strong person, you can have an interest in betting, markets, gambling, and trading, and you can run a business quite successfully too. You have a habit of talking which helps you persuade others and get your tasks done. However, you can also turn a blind eye towards your ethics in order to earn money. You should focus on utilizing your energy for the good and keep yourself away from any unhappy environment. Your financial status will be excellent due to your intelligence and cleverness, and you will especially progress in any business endeavours.

                            ";
                        }
                        if ($allsum == 6) {
                            echo "
                            
                                Being born under the destiny number 6, you are the apple of the eye of everyone and the virtue of cordiality is within you. A compassionate person, you love to take care of others and in addition to being artistic, you are creative as well. You are attractive in versatile ways, however, sometimes you are not devoted towards your work, due to which you have to suffer too. Romantic from birth, you have a love for beautiful things and entertainment. However, you should refrain from having a blind faith in someone or ever acting hastily. Moreover, stay away from alcohol and intoxicants and do not show excessive interest in social activities.

                            ";
                        }
                        if ($allsum == 7) {
                            echo "
                            
                                You can be quite spiritual and are someone who goes on a search for the truth and analyze any work. Being the owner of a divine vision, you can easily understand and therefore help others. You can work towards explaining the values of life to others and can also travel to various nice places and countries. With an atmosphere of positive energy surrounding you, you are able to greatly influence others. However, you need to work on avoiding feeling restless and thinking too deeply about anything. It is not appropriate for you to not be indifferent towards materialistic pleasures and you need to be active in your work and thinking.

                            ";
                        }
                        if ($allsum == 8) {
                            echo "
                            
                                There is a good balance in the physical and spiritual aspects of your life. The master of powerful ambition, you are forgiving as well as visionary. You have a big heart but you often find yourself sad and lonely, and as a result, you are highly sensitive too. In this life, being born under the destiny number 8, you will either be highly successful or extremely unsuccessful. A self-righteous person, the virtue of dedication is a major accomplishment for you. While you do not bend the knee in front of stress, you should also express yourself frankly, in matters related to your work. Yet, always bring stuck on your point only can also be wrong. Listen to others as well, and if you think that you are at fault anywhere, acknowledge it. Get rid of all pessimistic thoughts concerning your future and stay away from situations leading to loneliness.

                            ";
                        }
                        if ($allsum == 9) {
                            echo "
                            
                                While you may have to face difficulties in the beginning of your life, but you can also come out to be a good politician. You can be quite artistic and of free thinking, and you work in haste as well. While you have great organizational skills and power, but rashness in anything is not right either. You often get an inclination or intuition about things about to happen, early on. Though you are helpful and generous in nature, however, you need to keep your anger in check. Additionally, ensure that you do not bother your senior officials. You will prosper financially, but you still need to always be prepared to avoid or face adverse conditions.

                            ";
                        }

                        ?>
                    </p>
                </div>

                <div class="info-4" style="display: none;">
                    <h2>Name Number</h2>
                    <p><?php
                        if ($nnn == 1) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.
                                An Analysis of your name $name, suggests that your Namank or Name Number is 1. Let us take you through some basic characteristics of Name Number 1.


                                If your birth number is 1 then according to numerology you are an energetic, active, egoistic, person with a passion for art. As a Birth Number 1 person, you generally don't like following but prefer to take the lead instead. Your intuitive powers are always at work. Honest by nature, you gracefully accept your mistakes. Grounded in spirituality by nature you are happy, always smiling, and are very optimistic regarding your life plans.

                                Career: You are more inclined towards mental work than psychical. You knowledge is through travel and observations. Birth Number 1 people make good writers and can be good reporters. They are blessed with an active and creative mind.
                            
                            ";
                        }

                        if ($nnn == 2) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 2. Let us take you through some basic characteristics of Name Number 2.

                            ";
                        }

                        if ($nnn == 3) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 3. Let us take you through some basic characteristics of Name Number 3.


                            ";
                        }

                        if ($nnn == 4) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 4. Let us take you through some basic characteristics of Name Number 4.


                            ";
                        }

                        if ($nnn == 5) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 5. Let us take you through some basic characteristics of Name Number 5.


                            ";
                        }

                        if ($nnn == 6) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 6. Let us take you through some basic characteristics of Name Number 6.


                            ";
                        }

                        if ($nnn == 7) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 7. Let us take you through some basic characteristics of Name Number 7.


                            ";
                        }

                        if ($nnn == 8) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 8. Let us take you through some basic characteristics of Name Number 8.


                            ";
                        }


                        if ($nnn == 9) {
                            echo "
                            
                                $name, cosmic forces determine an individual's life structure considering your name number. Namank or Name Number is derived from all of the letters in your FULL BIRTH NAME. They all together, make up what is called the Expression or Name Number. This is the number that describes the talents and attitudes at your disposal in this lifetime, if you choose to develop and use them. Your name is your true vibration, the melody of your soul as it passed through that door in time and entered this world.

                                An Analysis of your name $name, suggests that your Namank or Name Number is 9. Let us take you through some basic characteristics of Name Number 9.
                            ";
                        }

                        ?></p>
                </div>

                <div class="info-5" style="display: none;">
                    <h2>Lo Shu Grid</h2>
                    <p>
                        <br><br><br>
                    <div class="loshugrid">
                        <div class="top1">
                            <?php
                            if ($dsum == 4 || $allsum == 4 || $pd1 == 4 || $pd2 == 4 || $pm1 == 4 || $pm2 == 4 || $py1 == 4 || $py2 == 4 || $py3 == 4 || $py4 == 4) {
                                echo "<br>";
                                for ($i = 1; $i <= $four; $i++) {
                                    echo "4";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>rahu";

                            ?>
                        </div>
                        <div class="top2">
                            <?php
                            if ($dsum == 9 || $allsum == 9 || $pd1 == 9 || $pd2 == 9 || $pm1 == 9 || $pm2 == 9 || $py1 == 9 || $py2 == 9 || $py3 == 9 || $py4 == 9) {
                                echo "<br>";
                                for ($i = 1; $i <= $nine; $i++) {
                                    echo "9";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>mars";

                            ?>
                        </div>
                        <div class="top3">
                            <?php
                            if ($dsum == 2 || $allsum == 2 || $pd1 == 2 || $pd2 == 2 || $pm1 == 2 || $pm2 == 2 || $py1 == 2 || $py2 == 2 || $py3 == 2 || $py4 == 2) {
                                echo "<br>";
                                for ($i = 1; $i <= $two; $i++) {
                                    echo "2";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>moon";

                            ?>
                        </div>
                        <div class="middle1">
                            <?php
                            if ($dsum == 3 || $allsum == 3 || $pd1 == 3 || $pd2 == 3 || $pm1 == 3 || $pm2 == 3 || $py1 == 3 || $py2 == 3 || $py3 == 3 || $py4 == 3) {
                                echo "<br>";
                                for ($i = 1; $i <= $three; $i++) {
                                    echo "3";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>jupiter";

                            ?>
                        </div>
                        <div class="middle2">
                            <?php
                            if ($dsum == 5 || $allsum == 5 || $pd1 == 5 || $pd2 == 5 || $pm1 == 5 || $pm2 == 5 || $py1 == 5 || $py2 == 5 || $py3 == 5 || $py4 == 5) {
                                echo "<br>";
                                for ($i = 1; $i <= $five; $i++) {
                                    echo "5";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>mercury";

                            ?>
                        </div>
                        <div class="middle3">
                            <?php
                            if ($dsum == 7 || $allsum == 7 || $pd1 == 7 || $pd2 == 7 || $pm1 == 7 || $pm2 == 7 || $py1 == 7 || $py2 == 7 || $py3 == 7 || $py4 == 7) {
                                echo "<br>";
                                for ($i = 1; $i <= $seven; $i++) {
                                    echo "7";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>ketu";

                            ?>
                        </div>
                        <div class="bottom1">
                            <?php
                            if ($dsum == 8 || $allsum == 8 || $pd1 == 8 || $pd2 == 8 || $pm1 == 8 || $pm2 == 8 || $py1 == 8 || $py2 == 8 || $py3 == 8 || $py4 == 8) {
                                echo "<br>";
                                for ($i = 1; $i <= $eight; $i++) {
                                    echo "8";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>saturn";

                            ?>
                        </div>
                        <div class="bottom2">
                            <?php
                            if ($dsum == 1 || $allsum == 1 || $pd1 == 1 || $pd2 == 1 || $pm1 == 1 || $pm2 == 1 || $py1 == 1 || $py2 == 1 || $py3 == 1 || $py4 == 1) {

                                echo "<br>";
                                for ($i = 1; $i <= $one; $i++) {
                                    echo "1";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>sun";

                            ?>
                        </div>
                        <div class="bottom3">
                            <?php
                            if ($dsum == 6 || $allsum == 6 || $pd1 == 6 || $pd2 == 6 || $pm1 == 6 || $pm2 == 6 || $py1 == 6 || $py2 == 6 || $py3 == 6 || $py4 == 6) {
                                echo "<br>";
                                for ($i = 1; $i <= $six; $i++) {
                                    echo "6";
                                }
                            } else {
                                echo "<br>X";
                            }
                            echo "<br>venus";

                            ?>
                        </div>


                    </div>
                    <br><br><br>
                    <div class="rajyog">
                        <p>
                            <?php
                            if ($one > 0 && $eight > 0 && $six > 0) {
                                echo "<br><br>";
                                echo "rajyog-practical plane : available<br><br>";
                            } else {
                                echo "rajyog-practical plane : not-available<br><br>";
                            }

                            if ($three > 0 && $five > 0 && $seven > 0) {
                                echo "rajyog-emotional plane : available<br><br>";
                            } else {
                                echo "rajyog-emotional plane : not-available<br><br>";
                            }

                            if ($four > 0 && $nine > 0 && $two > 0) {
                                echo "rajyog-mental plane : available<br><br>";
                            } else {
                                echo "rajyog-mental plane : not-available<br><br>";
                            }

                            if ($four > 0 && $three > 0 && $eight > 0) {
                                echo "rajyog-thought plane : available<br><br>";
                            } else {
                                echo "rajyog-thought plane : not-available<br><br>";
                            }

                            if ($five > 0 && $nine > 0 && $one > 0) {
                                echo "rajyog-will plane : available<br><br>";
                            } else {
                                echo "rajyog-will plane : not-available<br><br>";
                            }

                            if ($seven > 0 && $six > 0 && $two > 0) {
                                echo "rajyog-action plane : available<br><br>";
                            } else {
                                echo "rajyog-action plane : not-available<br><br>";
                            }

                            if ($four > 0 && $five > 0 && $six > 0) {
                                echo "rajyog-fame or golden plane : available<br><br>";
                            } else {
                                echo "rajyog-fame or golden plane : not-available<br><br>";
                            }

                            if ($eight > 0 && $five > 0 && $two > 0) {
                                echo "rajyog-willpower plane : available<br><br>";
                            } else {
                                echo "rajyog-willpower plane : not-available<br><br>";
                            }
                            ?>
                        </p>
                    </div>
                    </p>
                </div>

            </div>

        </div>

    </div>
    <!--footer part-->
    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>
<script>
    const button1 = document.querySelector('.button-1');
    const button2 = document.querySelector('.button-2');
    const button3 = document.querySelector('.button-3');
    const button4 = document.querySelector('.button-4');
    const button5 = document.querySelector('.button-5');

    const info1 = document.querySelector('.info-1');
    const info2 = document.querySelector('.info-2');
    const info3 = document.querySelector('.info-3');
    const info4 = document.querySelector('.info-4');
    const info5 = document.querySelector('.info-5');

    button1.addEventListener('click', () => {
        info1.style.display = 'block';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'none';
        info5.style.display = 'none';
    });

    button2.addEventListener('click', () => {
        info1.style.display = 'none';
        info2.style.display = 'block';
        info3.style.display = 'none';
        info4.style.display = 'none';
        info5.style.display = 'none';
    });

    button3.addEventListener('click', () => {
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'block';
        info4.style.display = 'none';
        info5.style.display = 'none';
    });

    button4.addEventListener('click', () => {
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'block';
        info5.style.display = 'none';
    });

    button5.addEventListener('click', () => {
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'none';
        info5.style.display = 'block';
    });
</script>