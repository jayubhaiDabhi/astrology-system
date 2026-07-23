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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic PHP Calendar with Festivals</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: antiquewhite;
        }

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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            width: 14%;
            padding: 15px;
            text-align: center;
            border: 1px solid #d57e2f;
        }

        th {
            background-color: #9f2800;
            color: #d57e2f;
        }

        td {
            background-color: rgb(246, 183, 125);
            color: #333;
            font-size: 16px;
            cursor: pointer;
        }

        td:hover {
            background-color: #ff9800;
        }

        .today {
            background-color: rgb(230, 61, 5) !important;
            color: white;
            font-weight: bold;
            border-radius: 5%;
        }

        .festival {
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

        /* slide bar */
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

        .sidebar ul li:hover a {
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
            left: -195px;
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
            left: 195px;

        }

        #check:checked~section {
            margin-left: 500px;
        }

        section {
            background-position: center;
            background-size: cover;
            transition: all 0.5s;
            height: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <!--navbar part-->
    <div class="class_navbar">

        <!-- slidebar -->

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
                <li><a href="learn_astro.php"><i class="fa-solid fa-hand"></i>jyotish</a></li>
                <li><a href="planets\planets.php"><i class="fa-solid fa-earth-africa"></i>planets</a></li>
                <li><a href="lyrics\lyric.php"><i class="fa-solid fa-om"></i>lyrics</a></li>
                <li><a href="gallery.php"><i class="fa-solid fa-image"></i>gallery</a></li>
                <li><a href="shop.php"><i class="fa-solid fa-cart-shopping"></i>shop</a></li>
                <li><a href="contect1.php"><i class="fa-solid fa-envelope"></i>contact us</a></li>
                <img src="images\proicon.png" style="height: 50px; width: 50px; background-color : #9f2800; border-radius : 50%; margin-left:37%; margin-top : 5%;">
            </ul>
        </div>
        <div class="iconimg">

        </div>

        <div class="class_clock">
            <a href="home.php"><i class="fas fa-home"></i></a>
            <!-- <a href="setting.php"><i class="fa-solid fa-gear"></i></a> -->
            <a href="user.php"><i class="fa-solid fa-circle-user"></i></a>
            <div class="clock"><?php include 'clock.php' ?></div>
        </div>
    </div>

    <div class="calendar-container">
        <div>
            <a href="?month=<?php echo $month - 1; ?>&year=<?php echo $year; ?>" class="nav-btn">◀ Previous</a>
            <a href="?month=<?php echo date('m'); ?>&year=<?php echo date('Y'); ?>" class="nav-btn">Current Month</a>
            <a href="?month=<?php echo $month + 1; ?>&year=<?php echo $year; ?>" class="nav-btn">Next ▶</a>
        </div>

        <h2><?php echo date('F Y', strtotime("$year-$month-01")); ?></h2>

        <table>
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
</body>

</html>