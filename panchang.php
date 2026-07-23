<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pro_astro";
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panchang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

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

        /* panchang body part */
        .body_panchang {
            height: 650px;
            width: 100%;
            margin-top: 1px;
            background-color: antiquewhite;
        }

        .scroll {
            overflow: hidden;
            overflow-y: scroll;
            background: antiquewhite;
        }

        .top-buttons {
            right: 20px;
            display: flex;
            justify-content: space-between;
            height: 50px;
            width: 100%;
            background-color: #9f2800;
            color: #d57e2f;
            border: 1px solid black;
        }

        .button-1,
        .button-2,
        .button-3,
        .button-4 {
            background-color: #9f2800;
            color: #d57e2f;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-right: 100px;
            margin-left: 70px;
            border: 1px solid #d57e2f;
            font-size: x-large;
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
            margin-right: 100px;
            margin-left: 70px;
            font-size: x-large;
        }

        .info-1,
        .info-2,
        .info-3,
        .info-4 {

            right: 20px;
            color: #9f2800;
            background-color: antiquewhite;
            padding: 20px;
            border: 1px solid #ddd;
            display: none;
            height: 550px;
        }

        /* calander css */

        
        .calendar-container {
            width: 50%;
            margin: 20px auto;
            background: #d57e2f;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2 {
            margin-bottom: 20px;
            color: #9f2800;
            margin-top: 10px;
        }

        .tablecal {
            width: 100%;
            border-collapse: collapse;
        }

        .tablecal th,
        td {
            width: 14%;
            padding: 15px;
            text-align: center;
            border: 1px solid #d57e2f;
        }

        .tablecal th {
            background-color: #9f2800;
            color: #d57e2f;
        }

        .tablecal td {
            background-color: rgb(246, 183, 125);
            color: #333;
            font-size: 16px;
            cursor: pointer;
        }

        .tablecal td:hover {
            background-color: #ff9800;
        }

        .today {
            background-color: rgb(230, 61, 5) !important;
            color: white;
            font-weight: bold;
            border-radius: 5%;
        }

        .tablecal .festival {
            background-color: #ff9800;
            font-weight: bold;
        }

        .nav-btn {
            text-decoration: none;
            padding: 10px;
            background: #9f2800;
            color: #d57e2f;
            border-radius: 5px;
            margin: 5px;
            display: inline-block;
        }


        table td {
            border: 1px solid black;

        }

        .calander {
            height: 500px;
            width: 100%;
            background: #d57e2f;
            border: 1px solid black;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .cal_head {
            height: 10%;
            width: 13%;
            border: 1px solid black;
            color: #d57e2f;
            background: #9f2800;
            text-align: center;
        }


        .cal_block {
            height: 17%;
            width: 13%;
            border: 1px solid black;

        }

        /* button 1 style */
        .tab {
            background-color: rgb(250, 165, 86);
            color: red;
            width: 80%;
            height: 90%;
            margin-left: 10%;
            border: 1px solid #9f2800;
        }

        #headingtab {
            background-color: #9f2800;
            color: #ddd;
        }

        .tab tr {
            /* margin-left: 100px; */
            text-align: center;
            height: 50px;
        }

        h2 {
            text-align: center;
            font-size: xx-large;
        }

        /* footer */
        .footer {
            background-color: #9f2800;
            width: 100%;
            height: 100px;
            margin-top: 0px;
        }
    </style>
</head>

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


    <!-- body part of panchang -->
    <div class="body_panchang">
        <div class="allbutton">
            <div class="top-buttons">
                <button class="button-1">Today Panchang</button>
                <button class="button-2">Muhurt</button>
                <button class="button-3">Calendar</button>
                <button class="button-4">Choghadiya(Fortnight)</button>
            </div>
        </div>

        <div class="scroll">
            <div class="info-1" style="display: block;">
                <h2>Today Panchang</h2>
                <p><?php
                    include 'ascendant.php';

                    function getLunarDay($timestamp)
                    {
                        // Constants
                        $synodicMonth = 29.53058867; // Average length of a synodic month in days
                        $newMoon = strtotime("2025-1-29 18:05:00"); // Known new moon date
                        // echo "$newMoon new moon<br>";
                        // Calculate the number of days since the known new moon
                        $daysSinceNewMoon = ($timestamp - $newMoon) / (24 * 60 * 60);
                        // echo "$daysSinceNewMoon since new moon<br>";
                        // Calculate the lunar age
                        $lunarAge = $daysSinceNewMoon % $synodicMonth;
                        // echo "lunarage $lunarAge<br>";
                        $lunarDay = floor($lunarAge) + 1;

                        return $lunarDay;
                    }

                    // Example usage
                    $timestamp = time(); // Current timestamp
                    // echo "$timestamp timestamp<br>";
                    $lunarDay = getLunarDay($timestamp);
                    echo "<br>";
                    if ($lunarDay > 15) {
                        $lunarDay = $lunarDay - 15;
                        $paksha = "krishana paksha";
                    } else {
                        $paksha = "shukla paksha";
                    }

                    $yogadeg = $moondeg + $sundeg;
                    //echo "$yogadeg";
                    // echo "mo".$moondeg;
                    // echo "su".$sundeg;
                    if ($yogadeg > 360) {
                        $yogadeg = $yogadeg - 360;
                    }
                    //echo "$yogadeg";

                    if ($yogadeg >= 0 && $yogadeg <= 13.20) {
                        $yoga = "Vishkambha";
                        $yogigrah = "Saturn";
                    }

                    if ($yogadeg >= 13.21 && $yogadeg <= 26.40) {
                        $yoga = "Priti";
                        $yogigrah = "Mercury";
                    }

                    if ($yogadeg >= 26.41 && $yogadeg <= 40.9999) {
                        $yoga = "Ayushman";
                        $yogigrah = "Ketu";
                    }

                    if ($yogadeg >= 41 && $yogadeg <= 53.20) {
                        $yoga = "Soubhagya";
                        $yogigrah = "Venus";
                    }

                    if ($yogadeg >= 53.21 && $yogadeg <= 66.40) {
                        $yoga = "Sobhana";
                        $yogigrah = "Sun";
                    }

                    if ($yogadeg >= 66.41 && $yogadeg <= 80.9999) {
                        $yoga = "Atiganda";
                        $yogigrah = "Moon";
                    }

                    if ($yogadeg >= 81 && $yogadeg <= 93.20) {
                        $yoga = "Sukarman";
                        $yogigrah = "Mars";
                    }

                    if ($yogadeg >= 93.21 && $yogadeg <= 106.40) {
                        $yoga = "Dhriti";
                        $yogigrah = "Rahu";
                    }

                    if ($yogadeg >= 106.41 && $yogadeg <= 120.9999) {
                        $yoga = "Soola";
                        $yogigrah = "Jupiter";
                    }

                    if ($yogadeg >= 121 && $yogadeg <= 133.20) {
                        $yoga = "Ganda";
                        $yogigrah = "Saturn";
                    }

                    if ($yogadeg >= 133.21 && $yogadeg <= 146.40) {
                        $yoga = "Vriddhi";
                        $yogigrah = "Mercury";
                    }

                    if ($yogadeg >= 146.41 && $yogadeg <= 160.9999) {
                        $yoga = "Dhruva";
                        $yogigrah = "Ketu";
                    }

                    if ($yogadeg >= 161 && $yogadeg <= 173.20) {
                        $yoga = "Vyaghata";
                        $yogigrah = "Venus";
                    }

                    if ($yogadeg >= 173.21 && $yogadeg <= 186.40) {
                        $yoga = "Harshana";
                        $yogigrah = "Sun";
                    }

                    if ($yogadeg >= 186.41 && $yogadeg <= 200.9999) {
                        $yoga = "Vajra";
                        $yogigrah = "Moon";
                    }

                    if ($yogadeg >= 201 && $yogadeg <= 213.20) {
                        $yoga = "Siddhi";
                        $yogigrah = "Mars";
                    }

                    if ($yogadeg >= 213.21 && $yogadeg <= 226.40) {
                        $yoga = "vyatipata";
                        $yogigrah = "Rahu";
                    }

                    if ($yogadeg >= 226.41 && $yogadeg <= 240.9999) {
                        $yoga = "Variyan";
                        $yogigrah = "Jupiter";
                    }

                    if ($yogadeg >= 241 && $yogadeg <= 253.20) {
                        $yoga = "Parigha";
                        $yogigrah = "Saturn";
                    }

                    if ($yogadeg >= 253.21 && $yogadeg <= 266.40) {
                        $yoga = "Siva";
                        $yogigrah = "Mercury";
                    }

                    if ($yogadeg >= 266.41 && $yogadeg <= 280.9999) {
                        $yoga = "Siddha";
                        $yogigrah = "Ketu";
                    }

                    if ($yogadeg >= 281 && $yogadeg <= 293.20) {
                        $yoga = "Sadhya";
                        $yogigrah = "Venus";
                    }

                    if ($yogadeg >= 293.21 && $yogadeg <= 306.40) {
                        $yoga = "Subha";
                        $yogigrah = "Sun";
                    }

                    if ($yogadeg >= 306.41 && $yogadeg <= 320.9999) {
                        $yoga = "Sukla";
                        $yogigrah = "Moon";
                    }

                    if ($yogadeg >= 321 && $yogadeg <= 333.20) {
                        $yoga = "Brahma";
                        $yogigrah = "Mars";
                    }

                    if ($yogadeg >= 333.21 && $yogadeg <= 346.40) {
                        $yoga = "Indra";
                        $yogigrah = "Rahu";
                    }

                    if ($yogadeg >= 346.41 && $yogadeg <= 360) {
                        $yoga = "Vaidhriti";
                        $yogigrah = "Jupiter";
                    }

                    // avyogi grah calculate

                    if ($yogigrah == "Saturn") {
                        $avyogigrah = "Moon";
                    }

                    if ($yogigrah == "Mercury") {
                        $avyogigrah = "Mars";
                    }

                    if ($yogigrah == "Ketu") {
                        $avyogigrah = "Rahu";
                    }

                    if ($yogigrah == "Venus") {
                        $avyogigrah = "Jupiter";
                    }

                    if ($yogigrah == "Sun") {
                        $avyogigrah = "Saturn";
                    }

                    if ($yogigrah == "Moon") {
                        $avyogigrah = "Mercury";
                    }

                    if ($yogigrah == "Mars") {
                        $avyogigrah = "Ketu";
                    }

                    if ($yogigrah == "Rahu") {
                        $avyogigrah = "Sun";
                    }

                    if ($yogigrah == "Jupiter") {
                        $avyogigrah = "Sun";
                    }

                    // karana calculate

                    if ($lunarDay == 1 && $paksha == "krishana paksha") {
                        $karana = "Balava Kaulava";
                        $karanalord = "Brahma Mitra";
                        $karanaanimal = "Tiger Pig";
                    }
                    if ($lunarDay == 2 && $paksha == "krishana paksha") {
                        $karana = "Taitula Garija";
                        $karanalord = "Vishwakarma Bhoomi";
                        $karanaanimal = "Donkey Elephant";
                    }
                    if ($lunarDay == 3 && $paksha == "krishana paksha") {
                        $karana = "Vanija Vishti";
                        $karanalord = "Lakshmi Yama(kura)";
                        $karanaanimal = "Cow&Bull Cock";
                    }
                    if ($lunarDay == 4 && $paksha == "krishana paksha") {
                        $karana = "Bava Balava";
                        $karanalord = "Indra Brahma";
                        $karanaanimal = "Lion Tiger";
                    }
                    if ($lunarDay == 5 && $paksha == "krishana paksha") {
                        $karana = "Kaulava Taitula";
                        $karanalord = "Mitra Vishwakarma";
                        $karanaanimal = "Pig Donkey";
                    }
                    if ($lunarDay == 6 && $paksha == "krishana paksha") {
                        $karana = "Garija Vanija";
                        $karanalord = "Vishwakarma Lakshmi";
                        $karanaanimal = "Elephant Cow&Bull";
                    }
                    if ($lunarDay == 7 && $paksha == "krishana paksha") {
                        $karana = "Vishti Bava";
                        $karanalord = "Yama(kura) Indra";
                        $karanaanimal = "Cock Lion";
                    }
                    if ($lunarDay == 8 && $paksha == "krishana paksha") {
                        $karana = "Balava Kaulava";
                        $karanalord = "Brahma Mitra";
                        $karanaanimal = "Tiger Pig";
                    }
                    if ($lunarDay == 9 && $paksha == "krishana paksha") {
                        $karana = "Taitula Garija";
                        $karanalord = "Vishwakarma Bhoomi";
                        $karanaanimal = "Donkey Elephant";
                    }
                    if ($lunarDay == 10 && $paksha == "krishana paksha") {
                        $karana = "Vanija Vishti";
                        $karanalord = "Lakshmi Yama(kura)";
                        $karanaanimal = "Cow&Bull Cock";
                    }
                    if ($lunarDay == 11 && $paksha == "krishana paksha") {
                        $karana = "Bava Balava";
                        $karanalord = "Indra Brahma";
                        $karanaanimal = "Lion Tiger";
                    }
                    if ($lunarDay == 12 && $paksha == "krishana paksha") {
                        $karana = "Kaulava Taitula";
                        $karanalord = "Mitra Vishwakarma";
                        $karanaanimal = "Pig Donkey";
                    }
                    if ($lunarDay == 13 && $paksha == "krishana paksha") {
                        $karana = "Garija Vanija";
                        $karanalord = "Vishwakarma Lakshmi";
                        $karanaanimal = "Elephant Cow&Bull";
                    }
                    if ($lunarDay == 14 && $paksha == "krishana paksha") {
                        $karana = "Vishti Sakuni(fixed)";
                        $karanalord = "Yama(kura) Kali(kura)";
                        $karanaanimal = "Cock Crow(In Day)&Owl(In Night)";
                    }
                    if ($lunarDay == 15 && $paksha == "krishana paksha") {
                        $karana = "Chatushpada(fixed) Naga(fixed)";
                        $karanalord = "Rudra(kura) Naga(kura)";
                        $karanaanimal = "Dog Snake";
                    }
                    if ($lunarDay == 1 && $paksha == "shukla paksha") {
                        $karana = "Kimstughna(fixed) Bava";
                        $karanalord = "Maaruta(kura) Indra";
                        $karanaanimal = "Worm Lion";
                    }
                    if ($lunarDay == 2 && $paksha == "shukla paksha") {
                        $karana = "Balava Kaulava";
                        $karanalord = "Brahma Mitra";
                        $karanaanimal = "Tiger Pig";
                    }
                    if ($lunarDay == 3 && $paksha == "shukla paksha") {
                        $karana = "Taitula Garija";
                        $karanalord = "Vishwakarma Bhoomi";
                        $karanaanimal = "Donkey Elephant";
                    }
                    if ($lunarDay == 4 && $paksha == "shukla paksha") {
                        $karana = "Vanija Vishti";
                        $karanalord = "Lakshmi Yama(kura)";
                        $karanaanimal = "Cow&Bull Cock";
                    }
                    if ($lunarDay == 5 && $paksha == "shukla paksha") {
                        $karana = "Bava Balava";
                        $karanalord = "Indra Brahma";
                        $karanaanimal = "Lion Tiger";
                    }
                    if ($lunarDay == 6 && $paksha == "shukla paksha") {
                        $karana = "Kaulava Taitula";
                        $karanalord = "Mitra Vishwakarma";
                        $karanaanimal = "Pig Donkey";
                    }
                    if ($lunarDay == 7 && $paksha == "shukla paksha") {
                        $karana = "Garija Vanija";
                        $karanalord = "Vishwakarma Lakshmi";
                        $karanaanimal = "Elephant Cow&Bull";
                    }
                    if ($lunarDay == 8 && $paksha == "shukla paksha") {
                        $karana = "Vishti Bava";
                        $karanalord = "Yama(kura) Indra";
                        $karanaanimal = "Cock Lion";
                    }
                    if ($lunarDay == 9 && $paksha == "shukla paksha") {
                        $karana = "Balava Kaulava";
                        $karanalord = "Brahma Mitra";
                        $karanaanimal = "Tiger Pig";
                    }
                    if ($lunarDay == 10 && $paksha == "shukla paksha") {
                        $karana = "Taitula Garija";
                        $karanalord = "Vishwakarma Bhoomi";
                        $karanaanimal = "Donkey Elephant";
                    }
                    if ($lunarDay == 11 && $paksha == "shukla paksha") {
                        $karana = "Vanija Vishti";
                        $karanalord = "Lakshmi Yama(kura)";
                        $karanaanimal = "Cow&Bull Cock";
                    }
                    if ($lunarDay == 12 && $paksha == "shukla paksha") {
                        $karana = "Bava Balava";
                        $karanalord = "Indra Brahma";
                        $karanaanimal = "Lion Tiger";
                    }
                    if ($lunarDay == 13 && $paksha == "shukla paksha") {
                        $karana = "Kaulava Taitula";
                        $karanalord = "Mitra Vishwakarma";
                        $karanaanimal = "Pig Donkey";
                    }
                    if ($lunarDay == 14 && $paksha == "shukla paksha") {
                        $karana = "Garija Vanija";
                        $karanalord = "Vishwakarma Lakshmi";
                        $karanaanimal = "Elephant Cow&Bull";
                    }
                    if ($lunarDay == 15 && $paksha == "shukla paksha") {
                        $karana = "Vishti Bava";
                        $karanalord = "Yama(kura) Indra";
                        $karanaanimal = "Cock Lion";
                    }

                    $spacepos = strpos($karana, ' ');
                    //echo "$spacepos";
                    $karana1 = substr($karana, 0, $spacepos);
                    //echo $karana1;
                    $karana2 = substr($karana, $spacepos + 1);
                    //echo $karana2;

                    if ($karana1 == "Bava") {
                        $grahlord = "Mars";
                    }
                    if ($karana1 == "Balava") {
                        $grahlord = "Rahu";
                    }
                    if ($karana1 == "Kaulava") {
                        $grahlord = "Saturn";
                    }
                    if ($karana1 == "Taitula") {
                        $grahlord = "Venus";
                    }
                    if ($karana1 == "Garija") {
                        $grahlord = "Moon";
                    }
                    if ($karana1 == "Vanija") {
                        $grahlord = "Sun";
                    }
                    if ($karana1 == "Vishti") {
                        $grahlord = "Ketu";
                    }
                    if ($karana1 == "Sakuni") {
                        $grahlord = "Saturn";
                    }
                    if ($karana1 == "Chatushpada") {
                        $grahlord = "Jupiter";
                    }
                    if ($karana1 == "Naga") {
                        $grahlord = "Rahu";
                    }
                    if ($karana1 == "Kimstughna") {
                        $grahlord = "Mercury";
                    }

                    if ($karana2 == "Bava") {
                        $grahlord2 = "Mars";
                    }
                    if ($karana2 == "Balava") {
                        $grahlord2 = "Rahu";
                    }
                    if ($karana2 == "Kaulava") {
                        $grahlord2 = "Saturn";
                    }
                    if ($karana2 == "Taitula") {
                        $grahlord2 = "Venus";
                    }
                    if ($karana2 == "Garija") {
                        $grahlord2 = "Moon";
                    }
                    if ($karana2 == "Vanija") {
                        $grahlord2 = "Sun";
                    }
                    if ($karana2 == "Vishti") {
                        $grahlord2 = "Ketu";
                    }
                    if ($karana2 == "Sakuni") {
                        $grahlord2 = "Saturn";
                    }
                    if ($karana2 == "Chatushpada") {
                        $grahlord2 = "Jupiter";
                    }
                    if ($karana2 == "Naga") {
                        $grahlord2 = "Rahu";
                    }
                    if ($karana2 == "Kimstughna") {
                        $grahlord2 = "Mercury";
                    }


                    // nakshatra calculate

                    $modeg = $moondeg / 13.20;
                    $sudeg = $sundeg / 13.20;
                    $yogadeg = $moondeg + $sundeg;

                    while ($yogadeg > 360) {
                        $yogadeg = $yogadeg - 360;
                    }

                    //echo "moondeg : ".$modeg;
                    //echo "sundeg : ".$sudeg;
                    //echo "yogadeg : ".$yogadeg;


                    $modeg = ceil($modeg);
                    $sudeg = ceil($sudeg);

                    $sql = "select nakshtra,lord,ruling from nakshatra where no=$modeg";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $nakshatra = $row["nakshtra"];
                            $lord = $row["lord"];
                            $ruling = $row["ruling"];
                        }
                    }

                    $sql = "select nakshtra,lord,ruling from nakshatra where no=$sudeg";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $sunakshatra = $row["nakshtra"];
                        }
                    }

                    // sunrise sunset code

                    $sun = date_sun_info(time(), 71.6636, 22.1723);
                    //print_r($sun);
                    $sunrisehh = date('H', $sun['sunrise']);
                    $sunrisemm = date('i', $sun['sunrise']);
                    $sunsethh = date('H', $sun['sunset']);
                    //echo $sunsethh;
                    $sunsetmm = date('i', $sun['sunset']);

                    $sunrisemin = date("i", $sun['sunrise']);
                    //echo "sunrise-" . $sunrise;

                    // calculate sun time
                    $difhhsu = $sunsethh - $sunrisehh;
                    if ($sunsetmm > $sunrisemm) {
                        $difmmsu = $sunsetmm - $sunrisemm;
                    } else {
                        $difmmsu = $sunrisemm - $sunsetmm;
                    }

                    // echo $difhhsu;
                    // echo "mm".$difmmsu;

                    if ($difmmsu == 60) {
                        $ddhhsu = 24 - $difhhsu;
                        $ddmmsu = 0;
                    } else {
                        $ddhhsu = 23 - $difhhsu;
                        $ddmmsu = 60 - $difmmsu;
                    }
                    // echo $ddhhsu;
                    // echo "mm".$ddmmsu;



                    echo "<table class='tab'> ";
                    echo "<tr><td>Tithi <td>$lunarDay\n</tr>";
                    echo "<tr><td>paksha <td>$paksha\n";
                    echo "<tr><td>Day <td>" . date("l") . "\n</tr>";
                    echo "<tr><td>Chandra Month <td>Chaitra\n</tr>";


                    echo "<tr><td>Nakshatra <td>$nakshatra\n";
                    echo "<tr><td>Nakshatra lord <td>$lord\n";
                    echo "<tr><td>Nakshatra Ruling Deity <td>$ruling\n";

                    echo "<tr><td>Sun Rise <td>";
                    echo date("H:i:s", $sun['sunrise']);
                    echo "\n</tr>";
                    echo "<tr><td>Sun Set <td>";
                    echo date("H:i:s", $sun['sunset']);
                    echo "\n</tr>";
                    echo "<tr><td>Time Of Day <td>$ddhhsu:$ddmmsu hours\n</tr>";
                    echo "<tr><td>Time Of Night <td>$difhhsu:$difmmsu hours\n</tr>";
                    echo "<tr><td>Chandra Rashi <td>$mosign\n</tr>";
                    echo "<tr><td>Surya Rashi <td>$susign\n</tr>";
                    echo "<tr><td>Surya Nakshatra <td>$sunakshatra\n</tr>";


                    echo "<tr><td>Yoga <td>$yoga\n";
                    echo "<tr><td>Yogi Grah<td>$yogigrah\n";
                    echo "<tr><td>Avyogi Grah<td>$avyogigrah\n";

                    echo "<tr><td>Karana <td>$karana\n";
                    echo "<tr><td>Karana Lord <td>$karanalord\n";
                    echo "<tr><td>Karana Grah Lord(In South Indian) <td>$grahlord $grahlord2\n";
                    echo "<tr><td>Karana Animal <td>$karanaanimal\n";


                    echo "</table>";


                    ?>

                </p>
            </div>

            <div class="info-2" style="display: none;">
                <h2>Muhurt</h2>
                <p>
                    <?php

                    // abhijit muhurt calculate
                    $sunrise = date("H:i:s", $sun['sunrise']);
                    $sunset = date("H:i:s", $sun['sunset']);
                    //echo $sunset;

                    $abhijitmuhurtstart = strtotime($sunrise . '+' . (7 * 48) . 'minutes');
                    $abhijitmuhurtend = strtotime($sunrise . '+' . (8 * 48) . 'minutes');
                    $abhijitmuhurtstart = date('h:i A', $abhijitmuhurtstart);
                    $abhijitmuhurtend = date('h:i A', $abhijitmuhurtend);
                    //echo "abhi-".$abhijitmuhurtstart;


                    // calculate gulik kaal
                    $suntimedif = $sunset - $sunrise;
                    $gktime = $suntimedif / 8;
                    //echo $gktime;
                    $vaar = date("l");
                    //echo $vaar;
                    // $vaar="Monday";
                    if ($vaar == "Sunday") {
                        $gktime = 90 * 6;
                        $strgk = strtotime($sunrise . '+' . $gktime . 'minutes');
                        $strgkend = strtotime($sunrise . '+' . ($gktime + 90) . 'minutes');
                        $gulikkaalend = date('h:i A', $strgkend);
                        $gulikkaal = date('h:i A', $strgk);
                    }
                    if ($vaar == "Monday") {
                        $gktime = 90 * 7;
                        $strgk = strtotime($sunrise . '+' . $gktime . 'minutes');
                        $strgkend = strtotime($sunrise . '+' . ($gktime + 90) . 'minutes');
                        $gulikkaalend = date('h:i A', $strgkend);
                        $gulikkaal = date('h:i A', $strgk);
                    }
                    if ($vaar == "Tuesday") {
                        $gktime = 90 * 8;
                        $strgk = strtotime($sunrise . '+' . $gktime . 'minutes');
                        $strgkend = strtotime($sunrise . '+' . ($gktime + 90) . 'minutes');
                        $gulikkaalend = date('h:i A', $strgkend);
                        $gulikkaal = date('h:i A', $strgk);
                    }
                    if ($vaar == "Wednesday") {
                        $gktime = 90 * 5;
                        $strgk = strtotime($sunrise . '+' . $gktime . 'minutes');
                        $strgkend = strtotime($sunrise . '+' . ($gktime + 90) . 'minutes');
                        $gulikkaalend = date('h:i A', $strgkend);
                        $gulikkaal = date('h:i A', $strgk);
                    }
                    if ($vaar == "Thursday") {
                        $gktime = 90 * 4;
                        $strgk = strtotime($sunrise . '+' . $gktime . 'minutes');
                        $strgkend = strtotime($sunrise . '+' . ($gktime + 90) . 'minutes');
                        $gulikkaalend = date('h:i A', $strgkend);
                        $gulikkaal = date('h:i A', $strgk);
                    }
                    if ($vaar == "Friday") {
                        $gktime = 90 * 3;
                        $strgk = strtotime($sunrise . '+' . $gktime . 'minutes');
                        $strgkend = strtotime($sunrise . '+' . ($gktime + 90) . 'minutes');
                        $gulikkaalend = date('h:i A', $strgkend);
                        $gulikkaal = date('h:i A', $strgk);
                    }
                    if ($vaar == "Saturday") {
                        $gktime = 90 * 2;
                        $strgk = strtotime($sunrise . '+' . $gktime . 'minutes');
                        $strgkend = strtotime($sunrise . '+' . ($gktime + 90) . 'minutes');
                        $gulikkaalend = date('h:i A', $strgkend);
                        $gulikkaal = date('h:i A', $strgk);
                    }


                    // rahu kaalcalculate

                    //$vaar = "Monday";
                    $sunr = strtotime($sunrise);
                    if ($vaar == "Monday") {
                        $rahh = "1";
                        $ramm = "30";
                        $rahhend = "3";
                        $rammend = "00";
                        $rahukaal = strtotime("+$rahh hours +$ramm minutes", $sunr);
                        $rahukaalend = strtotime("+$rahhend hours +$rammend minutes", $sunr);
                    }
                    if ($vaar == "Tuesday") {
                        $rahh = "9";
                        $ramm = "00";
                        $rahhend = "10";
                        $rammend = "30";
                        $rahukaal = strtotime("+$rahh hours +$ramm minutes", $sunr);
                        $rahukaalend = strtotime("+$rahhend hours +$rammend minutes", $sunr);
                    }
                    if ($vaar == "Wednesday") {
                        $rahh = "6";
                        $ramm = "00";
                        $rahhend = "7";
                        $rammend = "30";
                        $rahukaal = strtotime("+$rahh hours +$ramm minutes", $sunr);
                        $rahukaalend = strtotime("+$rahhend hours +$rammend minutes", $sunr);
                    }
                    if ($vaar == "Thusrsday") {
                        $rahh = "7";
                        $ramm = "30";
                        $rahhend = "9";
                        $rammend = "00";
                        $rahukaal = strtotime("+$rahh hours +$ramm minutes", $sunr);
                        $rahukaalend = strtotime("+$rahhend hours +$rammend minutes", $sunr);
                    }
                    if ($vaar == "Friday") {
                        $rahh = "4";
                        $ramm = "30";
                        $rahhend = "6";
                        $rammend = "00";
                        $rahukaal = strtotime("+$rahh hours +$ramm minutes", $sunr);
                        $rahukaalend = strtotime("+$rahhend hours +$rammend minutes", $sunr);
                    }
                    if ($vaar == "Saturday") {
                        $rahh = "3";
                        $ramm = "00";
                        $rahhend = "4";
                        $rammend = "30";
                        $rahukaal = strtotime("+$rahh hours +$ramm minutes", $sunr);
                        $rahukaalend = strtotime("+$rahhend hours +$rammend minutes", $sunr);
                    }
                    if ($vaar == "Sunday") {
                        $rahh = "10";
                        $ramm = "00";
                        $rahhend = "11";
                        $rammend = "30";
                        $rahukaal = strtotime("+$rahh hours +$ramm minutes", $sunr);
                        $rahukaalend = strtotime("+$rahhend hours +$rammend minutes", $sunr);
                    }

                    // yamgand kaal calculate
                    $daytimesec = 24 * 3600;
                    $ymmuhurtsec = $daytimesec / 30;
                    $ymstart = $ymmuhurtsec * 2;
                    $ymend = $ymstart + $ymmuhurtsec;

                    function sectohour($seconds)
                    {
                        $hours = floor($seconds / 3600);
                        return $hours;
                    }


                    function sectomin($seconds)
                    {
                        $minutes = floor(($seconds % 3600) / 60);
                        return $minutes;
                    }
                    $sunsec = strtotime($sunrise) - strtotime('today');
                    $ymstart += $sunsec;
                    $ymend += $sunsec;
                    $ymstarthh = sectohour($ymstart);
                    $ymstartmm = sectomin($ymstart);
                    $ymendhh = sectohour($ymend);
                    $ymendmm = sectomin($ymend);

                    $sunri = strtotime($sunrise);
                    $ymstart = strtotime("+$ymstarthh hours +$ymstartmm minutes", $sunri);
                    $ymend = strtotime("+$ymendhh hours +$ymendmm minutes", $sunri);

                    // evening muhurt calculation

                    $ssstart = strtotime($sunset);
                    $ssdu = 73 * 60;
                    $ssend = $ssstart + $ssdu;
                    $ssend = date('H:i:s', $ssend);
                    $ssstart = date('H:i:s', $ssstart);

                    // morning muhurt calculation

                    $psstart = strtotime($sunrise);
                    $psdu = 73 * 60;
                    $psend = $psstart - $psdu;
                    $psend = date('H:i:s', $psend);
                    $psstart = date('H:i:s', $psstart);


                    // brahma muhurt calculation

                    $bmstart = strtotime($sunrise);
                    $bmdu = 48 * 60;
                    $bmend = $bmstart - $bmdu;
                    $bmstart = $bmend - 50 * 60;
                    $bmend = date('H:i:s', $bmend);
                    $bmstart = date('H:i:s', $bmstart);

                    // gudhuli muhurt calculation

                    $gdstart = strtotime($sunset);
                    $gddu = 144 * 60;
                    $gdend = $gdstart + $gddu;
                    $gdend = date('H:i:s', $gdend);
                    $gdstart = date('H:i:s', $gdstart);

                    // amrit kaal calculation
                    $daydu = strtotime($sunset) - strtotime($sunrise);
                    $amdu = $daydu / 8;
                    $amstart = strtotime($sunrise) + (10 * $amdu);
                    $amend = $amstart + $amdu;
                    $amend = date('H:i:s', $amend);
                    $amstart = date('H:i:s', $amstart);



                    echo "<table class='tab'> ";
                    echo "<tr id='headingtab'><td><b>Muhurt </b><td><b>Time</b>\n</tr>";
                    echo "<tr><td>Day <td>" . date("D,d F Y") . "\n</tr>";
                    echo "<tr><td>Brahma Muhurt <td>$bmstart-$bmend\n";
                    echo "<tr><td>Abhijit Muhurt <td>$abhijitmuhurtstart-$abhijitmuhurtend\n";
                    echo "<tr><td>Amrit Kaal <td>$amstart-$amend\n";
                    echo "<tr><td>Prata Sandhya(Morning Time) Muhurt <td>$psend-$psstart\n";
                    echo "<tr><td>Sayan Sandhya(Evening Time) Muhurt <td>$ssstart-$ssend\n";
                    echo "<tr><td>Godhuli Muhurt <td>$gdstart-$gdend\n";


                    echo "<tr><td>Rahu Kaal <td>";
                    echo date('H:i A', $rahukaal);
                    echo " - ";
                    echo date('H:i A', $rahukaalend);
                    "\n</tr>";
                    echo "<tr><td>Gulik Kaal <td>" . $gulikkaal . " - " . $gulikkaalend . "\n</tr>";
                    echo "<tr><td>Yamgand Kaal <td>";
                    echo date('H:i A', $ymstart);
                    echo " - ";
                    echo date('H:i A', $ymend);
                    "\n</tr>";



                    echo "</table>";


                    ?>

                </p>
            </div>

            <div class="info-3" style="display: none;">
                <h2>calander</h2>
                <p>
                    <?php
                    // Handle month and year navigation
                    $month = isset($_GET['month']) ? $_GET['month'] : date('m');
                    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');

                    // Adjust month/year when navigating
                    if ($month > 12) {
                        $month = 1;
                        $year++;
                    }
                    if ($month < 1) {
                        $month = 12;
                        $year--;
                    }

                    // Get first day of the month and total days
                    $firstDayOfMonth = date('N', strtotime("$year-$month-01"));
                    $totalDays = date('t', strtotime("$year-$month-01"));

                    // Weekday labels
                    $weekDays = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

                    // Indian Festivals Data
                    $festivals = array(
                        "2025-01-01" => "New Year’s Day",
                        "2025-01-14" => "Makar Sankranti / Pongal",
                        "2025-01-26" => "Republic Day",
                        "2025-01-29" => "Basant Panchami",
                        "2025-02-26" => "Maha Shivaratri",
                        "2025-03-10" => "Holika Dahan",
                        "2025-03-11" => "Holi",
                        "2025-04-06" => "Ram Navami",
                        "2025-04-14" => "Baisakhi / Ambedkar Jayanti",
                        "2025-04-12" => "Hanuman Jayanti",
                        "2025-04-18" => "Good Friday",
                        "2025-05-23" => "Buddha Purnima",
                        "2025-07-17" => "Rath Yatra",
                        "2025-08-12" => "Raksha Bandhan",
                        "2025-08-15" => "Independence Day",
                        "2025-08-19" => "Janmashtami",
                        "2025-08-29" => "Onam",
                        "2025-09-07" => "Ganesh Chaturthi",
                        "2025-10-02" => "Gandhi Jayanti",
                        "2025-10-12" => "Navratri Begins",
                        "2025-10-20" => "Dussehra",
                        "2025-10-31" => "Karwa Chauth",
                        "2025-11-01" => "Diwali",
                        "2025-11-03" => "Govardhan Puja",
                        "2025-11-04" => "Bhai Dooj",
                        "2025-11-07" => "Chhath Puja",
                        "2025-11-15" => "Guru Nanak Jayanti",
                        "2025-12-25" => "Christmas",
                    );
                    ?>
                <div class="calandercontainer">



                    <div class="calendar-container">
                        <div>
                            <a href="?month=<?php echo $month - 1; ?>&year=<?php echo $year; ?>" class="nav-btn">◀ Previous</a>
                            <a href="?month=<?php echo date('m'); ?>&year=<?php echo date('Y'); ?>" class="nav-btn">Current Month</a>
                            <a href="?month=<?php echo $month + 1; ?>&year=<?php echo $year; ?>" class="nav-btn">Next ▶</a>
                        </div>

                        <h2><?php echo date('F Y', strtotime("$year-$month-01")); ?></h2>

                        <table class="tablecal">
                            <tr>
                                <?php foreach ($weekDays as $day) {
                                    echo "<th>$day</th>";
                                } ?>
                            </tr>
                            <tr>
                                <?php
                                $dayCount = 1;
                                $currentDate = date('Y-m-d');
                                for ($i = 1; $i < $firstDayOfMonth; $i++) {
                                    echo "<td></td>";
                                }
                                for ($i = $firstDayOfMonth; $i <= 7; $i++) {
                                    $fullDate = "$year-$month-" . str_pad($dayCount, 2, "0", STR_PAD_LEFT);
                                    $class = ($fullDate == $currentDate) ? "today" : (isset($festivals[$fullDate]) ? "festival" : "");
                                    echo "<td class='$class' onclick='showFestival(\"$fullDate\")'>$dayCount</td>";
                                    $dayCount++;
                                }
                                echo "</tr>";
                                while ($dayCount <= $totalDays) {
                                    echo "<tr>";
                                    for ($i = 1; $i <= 7 && $dayCount <= $totalDays; $i++) {
                                        $fullDate = "$year-$month-" . str_pad($dayCount, 2, "0", STR_PAD_LEFT);
                                        $class = ($fullDate == $currentDate) ? "today" : (isset($festivals[$fullDate]) ? "festival" : "");
                                        echo "<td class='$class' onclick='showFestival(\"$fullDate\")'>$dayCount</td>";
                                        $dayCount++;
                                    }
                                    echo "</tr>";
                                }
                                ?>
                        </table>
                    </div>

                    <div id="festivalDisplay" style="margin-top: 20px;"></div>
                    <script>
                        function showFestival(date) {
                            var festivals = <?php echo json_encode($festivals); ?>;
                            var festivalDisplay = document.getElementById("festivalDisplay");
                            festivalDisplay.innerHTML = festivals[date] ? `<h3>Festival on ${date}:</h3><p>${festivals[date]}</p>` : `<h3>No festival on ${date}</h3>`;
                        }
                    </script>

                </div>
                </p>
            </div>

            <div class="info-4" style="display: none;">
                <br>
                <h2>Choghadiya(Fortnight)</h2><br><br>
                <p>
                    <?php

                    $sunrisech = date('H:i', $sun['sunrise']);
                    $chduration = 1.5 * 3600;
                    $chperiods = array();
                    $startch = strtotime($sunrisech);

                    for ($i = 0; $i < 17; $i++) {
                        $chperiods[$i] = date('H:i', $startch);
                        $startch += $chduration;
                    }

                    $conn = mysqli_connect("localhost", "root", "");
                    if (!$conn) {
                        echo "Not Connect";
                    }
                    $db = mysqli_select_db($conn, "pro_astro");
                    if (!$db) {
                        echo "No select database";
                    }

                    $year = date('Y');
                    //echo $year;
                    $select = "select * from choghadiya where year='$year' && vaar='$vaar' && day='day'";
                    $sql = $conn->query($select);
                    if ($sql->num_rows == 1) {
                        while ($rows = $sql->fetch_assoc()) {


                            echo "<table class='tab'> ";
                            echo "<tr id='headingtab'><td><b>Choghadiya Day </b><td><b>Sunrise - $sunrisehh:$sunrisemm</b>\n</tr>";
                            echo "<tr><td>" . $rows['ch1'] . "<td>" . $chperiods[0] . " - " . $chperiods[1] . "\n";
                            echo "<tr><td>" . $rows['ch2'] . "<td>" . $chperiods[1] . " - " . $chperiods[2] . "\n";
                            echo "<tr><td>" . $rows['ch3'] . "<td>" . $chperiods[2] . " - " . $chperiods[3] . "\n";
                            echo "<tr><td>" . $rows['ch4'] . "<td>" . $chperiods[3] . " - " . $chperiods[4] . "\n";
                            echo "<tr><td>" . $rows['ch5'] . "<td>" . $chperiods[4] . " - " . $chperiods[5] . "\n";
                            echo "<tr><td>" . $rows['ch6'] . "<td>" . $chperiods[5] . " - " . $chperiods[6] . "\n";
                            echo "<tr><td>" . $rows['ch7'] . "<td>" . $chperiods[6] . " - " . $chperiods[7] . "\n";
                            echo "<tr><td>" . $rows['ch8'] . "<td>" . $chperiods[7] . " - " . $chperiods[8] . "\n";

                            echo "</table>";
                        }
                    }

                    echo "<br><Br>";
                    $select = "select * from choghadiya where year='$year' && vaar='$vaar' && day='night'";
                    $sql = $conn->query($select);
                    if ($sql->num_rows == 1) {
                        while ($rows = $sql->fetch_assoc()) {


                            echo "<table class='tab'> ";
                            echo "<tr id='headingtab'><td><b>Choghadiya Night </b><td><b>Sunset - $chperiods[8]</b>\n</tr>";
                            echo "<tr><td>" . $rows['ch1'] . "<td>" . $chperiods[8] . " - " . $chperiods[9] . "\n";
                            echo "<tr><td>" . $rows['ch2'] . "<td>" . $chperiods[9] . " - " . $chperiods[10] . "\n";
                            echo "<tr><td>" . $rows['ch3'] . "<td>" . $chperiods[10] . " - " . $chperiods[11] . "\n";
                            echo "<tr><td>" . $rows['ch4'] . "<td>" . $chperiods[11] . " - " . $chperiods[12] . "\n";
                            echo "<tr><td>" . $rows['ch5'] . "<td>" . $chperiods[12] . " - " . $chperiods[13] . "\n";
                            echo "<tr><td>" . $rows['ch6'] . "<td>" . $chperiods[13] . " - " . $chperiods[14] . "\n";
                            echo "<tr><td>" . $rows['ch7'] . "<td>" . $chperiods[14] . " - " . $chperiods[15] . "\n";
                            echo "<tr><td>" . $rows['ch8'] . "<td>" . $chperiods[15] . " - " . $chperiods[16] . "\n";

                            echo "</table>";
                        }
                    }


                    ?>
                </p>
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

    const info1 = document.querySelector('.info-1');
    const info2 = document.querySelector('.info-2');
    const info3 = document.querySelector('.info-3');
    const info4 = document.querySelector('.info-4');

    button1.addEventListener('click', () => {
        info1.style.display = 'block';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'none';
    });

    button2.addEventListener('click', () => {
        info1.style.display = 'none';
        info2.style.display = 'block';
        info3.style.display = 'none';
        info4.style.display = 'none';
    });

    button3.addEventListener('click', () => {
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'block';
        info4.style.display = 'none';
    });

    button4.addEventListener('click', () => {
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'block';
    });
</script>