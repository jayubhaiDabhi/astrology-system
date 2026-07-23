<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Birth Chart Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0px;
            background: #d57e2f;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: rgb(240, 175, 114);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background: #9f2800;
            color: #d57e2f;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            border: 1px solid #000;
            background: #d57e2f;
            color: #9f2800;
        }

        .birth-details {
            margin: 20px 0;
            padding: 15px;
            background: rgb(240, 178, 120);
            border-radius: 4px;
        }

        .chart {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2px;
            margin: 20px 0;
        }

        .house {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
            min-height: 100px;
            background: #fff;
        }

        .house-number {
            font-weight: bold;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #9f2800;
            color: #d57e2f;
        }

        .planet-symbol {
            font-weight: bold;
            margin-right: 5px;
        }

        h2,
        h3 {
            color: #9f2800;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
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

        /* 
        *{
            margin: 0;
            padding: 0;
        } */
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

    <div class="container">
        <h2>Birth Chart</h2>

        <form method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birth_date">Birth Date:</label>
                <input type="date" id="birth_date" name="birth_date" required>
            </div>

            <div class="form-group">
                <label for="birth_time">Birth Time:</label>
                <input type="time" id="birth_time" name="birth_time" required>
            </div>

            <div class="form-group">
                <label>Location: Botad, Gujarat (22.1704°N, 71.6684°E)</label>
            </div>

            <button type="submit">Generate Chart</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $chart = new BirthChart(
                $_POST['name'],
                $_POST['gender'],
                $_POST['birth_date'],
                $_POST['birth_time']
            );

            $positions = $chart->getPlanetaryPositions();
        ?>

            <div class="birth-details">
                <h3>Birth Details</h3>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
                <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
                <p><strong>Date:</strong> <?php echo date('d-m-Y', strtotime($_POST['birth_date'])); ?></p>
                <p><strong>Time:</strong> <?php echo $_POST['birth_time']; ?></p>
                <p><strong>Place:</strong> Botad, Gujarat</p>
            </div>

            <h3>Planetary Positions</h3>
            <table>
                <thead>
                    <tr>
                        <th>Planet</th>
                        <th>Rashi</th>
                        <th>Degree</th>
                        <th>House</th>
                        <th>Nakshatra</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($positions as $planet => $data): ?>
                        <tr>
                            <td><?php echo $planet; ?></td>
                            <td><?php echo $data['rashi']; ?></td>
                            <td><?php echo number_format($data['degree'], 2); ?>°</td>
                            <td><?php echo $data['house']; ?></td>
                            <td><?php echo $data['nakshatra']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h3>South Indian Style Chart</h3>
            <div class="chart">
                <?php
                $chart_order = array(4, 3, 2, 1, 5, 0, 9, 6, 7, 8, 11, 10);
                foreach ($chart_order as $i) {
                    echo "<div class='house'>";
                    echo "<div class='house-number'>House " . ($i == 0 ? '' : ($i + 1)) . "</div>";
                    foreach ($positions as $planet => $data) {
                        if ($data['house'] == $i + 1) {
                            echo "<div class='planet'>";
                            echo "<span class='planet-symbol'>$planet</span>";
                            echo number_format($data['degree'], 1) . "°";
                            echo "</div>";
                        }
                    }
                    echo "</div>";
                }
                ?>
            </div>
            <br><br>
            <h3>General Prediction </h3>
            <div class="prediction">

                <?php foreach ($positions as $planet => $data): ?>

                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "pro_astro");
                    if (!$conn) {
                        die("fail to connect");
                    }
                
                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Sun') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["sun"];
                                }
                            }
                        }
                    }
            

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Moon') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["moon"];
                                }
                            }
                        }
                    }
                    

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Mars') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mars"];
                                }
                            }
                        }
                    }
                   
                    

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Mercury') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["mercury"];
                                }
                            }
                        }
                    }
                   
                    

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Jupiter') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["jupiter"];
                                }
                            }
                        }
                    }
                   
                

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Venus') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["venus"];
                                }
                            }
                        }
                    }
                   
                

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Saturn') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["saturn"];
                                }
                            }
                        }
                    }
                   
                    

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Ketu') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["ketu"];
                                }
                            }
                        }
                    }
                   
                    

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'मीन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 12");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }


                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'मकर') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 10");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'कुंभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 11");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'धनु') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 9");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'वृश्चिक') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 8");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'तुला') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 7");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'कन्या') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 6");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'सिंह') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'कर्क') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 4");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'मिथुन') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 3");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }

                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'वृषभ') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 2");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }
                    
                    if ($planet == 'Rahu') {
                        if ($data['rashi'] == 'मेष') {
                            $query = mysqli_query($conn, "SELECT * FROM kundali_prediction where sign = 1");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo $data["rahu"];
                                }
                            }
                        }
                    }
                   

                    ?>

                <?php endforeach; ?>
            </div>
        <?php } ?>
    </div>

    <script>
        // Set default date and time to current
        document.addEventListener('DOMContentLoaded', function() {
            var now = new Date();
            document.getElementById('birth_date').value = now.toISOString().split('T')[0];
            document.getElementById('birth_time').value = now.toTimeString().slice(0, 5);
        });
    </script>
</body>

</html>
<?php
class BirthChart
{
    private $name;
    private $gender;
    private $birth_date;
    private $birth_time;
    private $latitude = 22.1704;  // Botad default
    private $longitude = 71.6684; // Botad default
    private $jd; // Julian Day number



    public function __construct($name, $gender, $date, $time)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->birth_date = $date;
        $this->birth_time = $time;
        $this->calculateJulianDay();
    }

    private function calculateJulianDay()
    {
        // Convert birth date and time to UTC
        $timestamp = strtotime($this->birth_date . ' ' . $this->birth_time);
        $utc_timestamp = $timestamp - (5.5 * 3600); // IST to UTC

        $year = intval(date('Y', $utc_timestamp));
        $month = intval(date('m', $utc_timestamp));
        $day = intval(date('d', $utc_timestamp));
        $hour = intval(date('H', $utc_timestamp));
        $minute = intval(date('i', $utc_timestamp));
        $second = intval(date('s', $utc_timestamp));

        if ($month <= 2) {
            $year -= 1;
            $month += 12;
        }

        $a = floor($year / 100);
        $b = 2 - $a + floor($a / 4);

        $jd = floor(365.25 * ($year + 4716)) + floor(30.6001 * ($month + 1)) +
            $day + ($hour + $minute / 60 + $second / 3600) / 24 + $b - 1524.5;

        $this->jd = $jd;
    }

    public function getPlanetaryPositions()
    {
        $ayanamsa = $this->calculateAyanamsa();
        $positions = array();

        // Calculate Lagna (Ascendant)
        $lagna = $this->calculateLagna();
        $positions['Lagna'] = array(
            'longitude' => $lagna,
            'rashi' => $this->getRashi($lagna),
            'degree' => $this->getDegreePart($lagna),
            'house' => 1,
            'nakshatra' => $this->getNakshatra($lagna)
        );

        // Calculate Sun
        $sun_long = $this->calculateSun();
        $sunsign = $this->getRashi($sun_long);
        //echo "sun".$sun_long;
        $positions['Sun'] = array(
            'longitude' => $sun_long,
            'rashi' => $this->getRashi($sun_long),
            'degree' => $this->getDegreePart($sun_long),
            'house' => $this->calculateHouse($sun_long, $lagna),
            'nakshatra' => $this->getNakshatra($sun_long)
        );

        // Calculate Moon
        $moon_long = $this->calculateMoon();
        $moonsign = $this->getRashi($moon_long);
        $positions['Moon'] = array(
            'longitude' => $moon_long,
            'rashi' => $this->getRashi($moon_long),
            'degree' => $this->getDegreePart($moon_long),
            'house' => $this->calculateHouse($moon_long, $lagna),
            'nakshatra' => $this->getNakshatra($moon_long)
        );

        $T = ($this->jd - 2451545.0) / 36525;

        // Calculate specific planets with improved accuracy
        $mercury_long = $this->calculateMercury($T);
        $mercurysign = $this->getRashi($mercury_long);
        $positions['Mercury'] = array(
            'longitude' => $mercury_long,
            'rashi' => $this->getRashi($mercury_long),
            'degree' => $this->getDegreePart($mercury_long),
            'house' => $this->calculateHouse($mercury_long, $lagna),
            'nakshatra' => $this->getNakshatra($mercury_long)
        );

        $venus_long = $this->calculateVenus($T);
        $venussign = $this->getRashi($venus_long);
        $positions['Venus'] = array(
            'longitude' => $venus_long,
            'rashi' => $this->getRashi($venus_long),
            'degree' => $this->getDegreePart($venus_long),
            'house' => $this->calculateHouse($venus_long, $lagna),
            'nakshatra' => $this->getNakshatra($venus_long)
        );

        $mars_long = $this->calculateMars($T);
        $marssign = $this->getRashi($mars_long);
        //echo "marssign".$marssign;
        //echo "marslong".$mars_long;
        $positions['Mars'] = array(
            'longitude' => $mars_long,
            'rashi' => $this->getRashi($mars_long),
            'degree' => $this->getDegreePart($mars_long),
            'house' => $this->calculateHouse($mars_long, $lagna),
            'nakshatra' => $this->getNakshatra($mars_long)
        );

        // Add other planets
        $planets = array('Jupiter', 'Saturn', 'Rahu', 'Ketu');

        $jupiter_long = $this->calculatePlanetLongitude('Jupiter');
        $jupitersign = $this->getRashi($jupiter_long);
        //echo "jupiter".$jupiter_long;
        //echo "jupiter".$jupitersign;

        $saturn_long = $this->calculatePlanetLongitude('Saturn');
        $saturnsign = $this->getRashi($saturn_long);
        //echo "saturn".$saturn_long;

        $rahu_long = $this->calculatePlanetLongitude('Rahu');
        $rahusign = $this->getRashi($rahu_long);
        //echo "rahu".$rahu_long;

        $ketu_long = $this->calculatePlanetLongitude('Ketu');
        $ketusign = $this->getRashi($ketu_long);
        //echo "ketu".$ketu_long;

        foreach ($planets as $planet) {
            $long = $this->calculatePlanetLongitude($planet);
            $positions[$planet] = array(
                'longitude' => $long,
                'rashi' => $this->getRashi($long),
                'degree' => $this->getDegreePart($long),
                'house' => $this->calculateHouse($long, $lagna),
                'nakshatra' => $this->getNakshatra($long)
            );
        }

        return $positions;
    }



    private function calculateAyanamsa()
    {
        $T = ($this->jd - 2451545.0) / 36525;
        return 23.85 + 0.0137 * $T; // Lahiri ayanamsa
    }

    private function calculateLagna()
    {
        $T = ($this->jd - 2451545.0) / 36525;

        // Sidereal time calculation
        $sidereal = 280.46061837 + 360.98564736629 * ($this->jd - 2451545.0) +
            $this->longitude;

        // Local sidereal time
        $LST = $this->normalizeDegree($sidereal);

        // Obliquity of ecliptic
        $eps = 23.43929111 - 0.013004167 * $T;

        // Calculate ascendant
        $tanL = -cos(deg2rad($LST)) /
            (sin(deg2rad($eps)) * tan(deg2rad($this->latitude)) -
                cos(deg2rad($eps)) * sin(deg2rad($LST)));

        $L = rad2deg(atan($tanL));

        // Adjust quadrant
        if (cos(deg2rad($LST)) > 0) {
            $L += 180;
        }
        if ($L < 0) {
            $L += 360;
        }

        // Apply ayanamsa correction
        return $this->normalizeDegree($L - $this->calculateAyanamsa());
    }

    private function calculateSun()
    {
        $T = ($this->jd - 2451545.0) / 36525;

        // Mean elements
        $L0 = 280.46646 + 36000.76983 * $T + 0.0003032 * $T * $T;
        $M = 357.52911 + 35999.05029 * $T - 0.0001537 * $T * $T;

        // Equation of center
        $C = (1.914602 - 0.004817 * $T - 0.000014 * $T * $T) * sin(deg2rad($M))
            + (0.019993 - 0.000101 * $T) * sin(deg2rad(2 * $M))
            + 0.000289 * sin(deg2rad(3 * $M));

        // Sun's true longitude
        $L = $L0 + $C;

        return $this->normalizeDegree($L - $this->calculateAyanamsa());
    }

    private function calculateMoon()
    {
        $T = ($this->jd - 2451545.0) / 36525;

        // Mean elements
        $Lp = 218.3164477 + 481267.88123421 * $T;
        $D = 297.8501921 + 445267.1114034 * $T;
        $M = 357.5291092 + 35999.0502909 * $T;
        $Mp = 134.9633964 + 477198.8675055 * $T;

        // Simplified perturbations
        $dL = 6288.06 * sin(deg2rad($Mp))
            + 1274.02 * sin(deg2rad(2 * $D - $Mp))
            + 658.45 * sin(deg2rad(2 * $D));

        $L = $Lp + $dL / 1000000;

        return $this->normalizeDegree($L - $this->calculateAyanamsa());
    }


    private function calculateMercury($T)
    {
        // Mercury's orbital elements
        $L = 252.25084 + 149472.67410 * $T + 0.00006 * $T * $T;
        $M = 49.95089 + 149472.51529 * $T - 0.00021 * $T * $T;//48
        $e = 0.205635 + 0.000020 * $T;
        $a = 0.387098;
        $i = 7.00487 - 0.00339 * $T;
        $node = 48.33089 - 0.12534 * $T;
        $pi = 77.45645 + 0.16047 * $T;

        // Venus' mean anomaly
        $Mv = 76.67992 + 58517.80827 * $T;

        // Perturbations
        $dL = 0.00204 * sin(deg2rad(5 * $Mv - 2 * $M - 67.6))
            + 0.00103 * sin(deg2rad(2 * $Mv - $M - 18.21))
            + 0.00091 * sin(deg2rad(3 * $Mv - $M - 221.11));

        // Equation of center
        $E = $this->iterateKepler($M, $e);

        // True anomaly
        $v = 2 * rad2deg(atan(sqrt((1 + $e) / (1 - $e)) * tan($E / 2)));

        // Heliocentric longitude
        $L = $v + $pi + $dL;

        // Convert to geocentric
        $R = $a * (1 - $e * cos(deg2rad($E)));
        $x = $R * cos(deg2rad($L));
        $y = $R * sin(deg2rad($L)) * cos(deg2rad($i));
        $z = $R * sin(deg2rad($L)) * sin(deg2rad($i));

        $lambda = rad2deg(atan2($y, $x));

        return $this->normalizeDegree($lambda - $this->calculateAyanamsa());
    }


    // Helper method for Kepler's equation
    private function iterateKepler($M, $e)
    {
        $M = deg2rad($M);
        $E = $M;
        $delta = 1;
        $iterations = 0;

        while (abs($delta) > 1e-6 && $iterations < 10) {
            $delta = $E - $e * sin($E) - $M;
            $E = $E - $delta / (1 - $e * cos($E));
            $iterations++;
        }

        return rad2deg($E);
    }

    private function calculateVenus($T)
    {
        // Venus' orbital elements
        $L = 181.97973 + 58517.81539 * $T + 0.00031 * $T * $T;
        $M = 45.53992 + 58517.80827 * $T + 0.00011 * $T * $T;
        $e = 0.006773 - 0.000048 * $T;
        $a = 0.723332;
        $i = 3.39471 - 0.00078 * $T;
        $node = 76.67992 + 0.90086 * $T;
        $pi = 131.56305 + 0.28306 * $T;

        // Earth's mean anomaly
        $Me = 357.52911 + 35999.05029 * $T;

        // Perturbations
        $dL = 0.00313 * sin(deg2rad(2 * $Me - 2 * $M - 148.225))
            + 0.00198 * sin(deg2rad(3 * $Me - 3 * $M + 2.565))
            + 0.00136 * sin(deg2rad($Me - $M - 119.107));

        // Equation of center
        $E = $this->iterateKepler($M, $e);

        // True anomaly
        $v = 2 * rad2deg(atan(sqrt((1 + $e) / (1 - $e)) * tan($E / 2)));

        // Heliocentric longitude
        $L = $v + $pi + $dL;

        // Convert to geocentric
        $R = $a * (1 - $e * cos(deg2rad($E)));
        $x = $R * cos(deg2rad($L));
        $y = $R * sin(deg2rad($L)) * cos(deg2rad($i));
        $z = $R * sin(deg2rad($L)) * sin(deg2rad($i));

        $lambda = rad2deg(atan2($y, $x));

        return $this->normalizeDegree($lambda - $this->calculateAyanamsa());
    }

    private function calculateMars($T)
    {
        // Mars' orbital elements
        $L = 355.43332 + 19141.69551 * $T + 0.00003 * $T * $T;
        $M = 50.77644 + 19139.85475 * $T - 0.00015 * $T * $T;
        $e = 0.093405 + 0.000092 * $T;
        $a = 1.523679;
        $i = 1.85061 - 0.00806 * $T;
        $node = 49.57854 - 0.29529 * $T;
        $pi = 336.04084 + 0.45224 * $T;

        // Perturbations from Jupiter
        $Mj = 19.89500 + 3034.69202 * $T; // Jupiter's mean anomaly
        $dL = 0.00705 * sin(deg2rad($M - $Mj - 48.958))
            + 0.00607 * sin(deg2rad(2 * $M - $Mj - 188.350))
            + 0.00445 * sin(deg2rad(2 * $M - 2 * $Mj - 191.897));

        // Equation of center
        $E = $M + $e * sin(deg2rad($M)) * (1.0 + $e * cos(deg2rad($M)));
        $E = $this->iterateKepler($M, $e);

        // True anomaly
        $v = 2 * rad2deg(atan(sqrt((1 + $e) / (1 - $e)) * tan($E / 2)));

        // Heliocentric longitude
        $L = $v + $pi + $dL;

        // Convert to geocentric
        $R = $a * (1 - $e * cos(deg2rad($E)));
        $x = $R * cos(deg2rad($L));
        $y = $R * sin(deg2rad($L)) * cos(deg2rad($i));
        $z = $R * sin(deg2rad($L)) * sin(deg2rad($i));

        $lambda = rad2deg(atan2($y, $x));

        return $this->normalizeDegree($lambda - $this->calculateAyanamsa());
    }


    private function calculatePlanetLongitude($planet)
    {
        $T = ($this->jd - 2451545.0) / 36525;

        switch ($planet) {

            case 'Jupiter':
                $L = 34.35669 + 3034.74612 * $T;
                $M = 27.34585 + 3034.69202 * $T;
                return $this->normalizeDegree($L + 1.201 * sin(deg2rad($M)) - $this->calculateAyanamsa());

            case 'Saturn':
                $L = 50.07744 + 1222.11494 * $T;
                $M = 50.07744 + 1222.11494 * $T;
                return $this->normalizeDegree($L + 6.389 * sin(deg2rad($M)) - $this->calculateAyanamsa());

            case 'Rahu':
                $L = 125.044555 - 1934.136261 * $T;
                return $this->normalizeDegree($L - $this->calculateAyanamsa());

            case 'Ketu':
                $L = $this->normalizeDegree(125.044555 - 1934.136261 * $T + 180);
                return $this->normalizeDegree($L - $this->calculateAyanamsa());
        }
        return 0;
    }




    function calculate_sun()
    {

        $T = ($this->jd - 2451545.0) / 36525;

        // Mean elements
        $L0 = 280.46646 + 36000.76983 * $T + 0.0003032 * $T * $T;
        $M = 357.52911 + 35999.05029 * $T - 0.0001537 * $T * $T;

        // Equation of center
        $C = (1.914602 - 0.004817 * $T - 0.000014 * $T * $T) * sin(deg2rad($M))
            + (0.019993 - 0.000101 * $T) * sin(deg2rad(2 * $M))
            + 0.000289 * sin(deg2rad(3 * $M));

        // Sun's true longitude
        $L = $L0 + $C;

        return $this->normalizeDegree($L - $this->calculateAyanamsa());
    }

    private function calculateHouse($longitude, $lagna)
    {
        $house = floor(($longitude - $lagna) / 30) + 1;
        if ($house <= 0) $house += 12;
        return $house;
    }

    private function normalizeDegree($deg)
    {
        $deg = fmod($deg, 360);
        return $deg < 0 ? $deg + 360 : $deg;
    }

    private function getDegreePart($longitude)
    {
        $deg = floor($longitude % 30);
        $min = floor(($longitude * 60) % 60);
        $sec = floor(($longitude * 3600) % 60);
        return sprintf("%d°%d'%d\"", $deg, $min, $sec);
    }

    private function getRashi($longitude)
    {
        $rashis = array(
            'मेष',
            'वृषभ',
            'मिथुन',
            'कर्क',
            'सिंह',
            'कन्या',
            'तुला',
            'वृश्चिक',
            'धनु',
            'मकर',
            'कुंभ',
            'मीन'
        );
        return $rashis[floor($longitude / 30)];
    }

    private function getNakshatra($longitude)
    {
        $nakshatras = array(
            'अश्विनी',
            'भरणी',
            'कृत्तिका',
            'रोहिणी',
            'मृगशीर्ष',
            'आर्द्रा',
            'पुनर्वसु',
            'पुष्य',
            'आश्लेषा',
            'मघा',
            'पूर्वफाल्गुनी',
            'उत्तरफाल्गुनी',
            'हस्त',
            'चित्रा',
            'स्वाति',
            'विशाखा',
            'अनुराधा',
            'ज्येष्ठा',
            'मूल',
            'पूर्वाषाढा',
            'उत्तराषाढा',
            'श्रवण',
            'धनिष्ठा',
            'शतभिषा',
            'पूर्वभाद्रपद',
            'उत्तरभाद्रपद',
            'रेवती'
        );
        return $nakshatras[floor($longitude * 27 / 360)];
    }
}


// ... [Rest of the HTML and form code remains the same] ...
?>