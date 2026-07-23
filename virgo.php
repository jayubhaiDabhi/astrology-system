<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>virgo horoscope</title>
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

        body {
            background-color: #d57e2f;
        }

        /* body part */
        .headersign {
            background-color: #d57e2f;
            color: #9f2800;
            text-align: center;
            height: 90px;
        }

        .headersign h1 {
            margin-top: 48px;
        }

        .body {
            height: 650px;
            width: 90%;
            margin-left: 70px;
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

        /* zodiac all sign */
        .zodicallsign {
            width: 100%;
            height: 200px;
            background-color: #d57e2f;
            align-content: center;
            margin-top: 30px;
            display: flex;
        }

        .sign {
            margin-left: 30px;
            margin-top: 30px;
            text-align: center;
            height: 150px;
            width: 100px;
        }

        .signvirgo {
            margin-left: 47%;
            margin-top: 30px;
            text-align: center;
            height: 150px;
            width: 100px;
            margin-bottom: 20px;

        }

        .signvirgo img {
            border-radius: 50%;
        }

        .sign a {
            color: #9f2800;
            text-decoration: none;
            text-shadow: black;
            text-align: center;
        }

        .sign a img {
            margin-top: 10px;
        }

        .sign:hover {
            color: #d57e2f;
            background: #9f2800;
            text-decoration: none;
            text-shadow: black;
            text-align: center;
            font-size: large;
        }


        .sign a:hover {
            color: #d57e2f;
        }

        .sign img {
            border-radius: 50%;
        }

        /* footer */
        .footer {
            background-color: #9f2800;
            width: 100%;
            height: 100px;
            margin-top: 30px;
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


    <!-- body part -->
    <div class="signvirgo">

        <img src="virgo.avif" width="150px" height="150px" alt="capricorn"><br>
    </div>
    <div class="headersign">
        <b>
            <h1>VIRGO SIGN HOROSCOPE</h1>
        </b>
    </div>
    <div class="body">

        <div class="allbutton">
            <div class="top-buttons">
                <button class="button-1">daily</button>
                <button class="button-2">weekly</button>
                <button class="button-3">monthly</button>
                <button class="button-4">yearly</button>
            </div>
        </div>

        <div class="scroll">
            <div class="info-1" style="display: block;">
                <h2>daily</h2>
                <p>
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
                    <?php
                    $sql = "select virgo from zodiacsign";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['virgo'];
                    ?>

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शुक्र | Venus</td>
                        <td><b>Rashi Letters</b><br>
                            ब, व, उ | Ba, Va, U</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            ई, उ, ए, ओ, वा, वी, वू, वे, वो
                            Ee, U, E, O, Vaa, Vee, Vu, Ve, Vo</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री दुर्गा माता
                            Shri Durga Mata</td>
                        <td><b>Favourable Color</b><br>
                            सफेद | White</td>
                        <td><b>Favourable Number</b><br>
                            2, 7</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण, पश्चिम | South, West</td>
                        <td><b>Rashi Metal</b><br>
                            लोहा, सीसा | Iron, Lead</td>
                        <td><b>Rashi Stone</b><br>
                            हीरा | Diamond</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            हीरा, पन्ना, नीलम
                            Diamond, Emerald and Blue Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शुक्रवार, बुधवार तथा शनिवार
                            Friday, Wednesday and Saturday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            पृथ्वी | Earth</td>
                        <td><b>Rashi Nature</b><br>
                            वायु | Air</td>
                        <td></td>
                    </tr>
                    <tr></tr>
                </table>
                </p>
            </div>

            <div class="info-2" style="display: none;">
                <h2>weekly</h2>
                <p>
                    <?php
                    $sql = "select virgo from weeklyprediction";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['virgo'];
                    ?>
                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शुक्र | Venus</td>
                        <td><b>Rashi Letters</b><br>
                            ब, व, उ | Ba, Va, U</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            ई, उ, ए, ओ, वा, वी, वू, वे, वो
                            Ee, U, E, O, Vaa, Vee, Vu, Ve, Vo</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री दुर्गा माता
                            Shri Durga Mata</td>
                        <td><b>Favourable Color</b><br>
                            सफेद | White</td>
                        <td><b>Favourable Number</b><br>
                            2, 7</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण, पश्चिम | South, West</td>
                        <td><b>Rashi Metal</b><br>
                            लोहा, सीसा | Iron, Lead</td>
                        <td><b>Rashi Stone</b><br>
                            हीरा | Diamond</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            हीरा, पन्ना, नीलम
                            Diamond, Emerald and Blue Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शुक्रवार, बुधवार तथा शनिवार
                            Friday, Wednesday and Saturday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            पृथ्वी | Earth</td>
                        <td><b>Rashi Nature</b><br>
                            वायु | Air</td>
                        <td></td>
                    </tr>
                    <tr></tr>
                </table>
                </p>
            </div>

            <div class="info-3" style="display: none;">
                <h2>monthly</h2>
                <p>
                    <?php
                    $sql = "select virgo from monthlyprediction";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['virgo'];
                    ?>
                      <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शुक्र | Venus</td>
                        <td><b>Rashi Letters</b><br>
                            ब, व, उ | Ba, Va, U</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            ई, उ, ए, ओ, वा, वी, वू, वे, वो
                            Ee, U, E, O, Vaa, Vee, Vu, Ve, Vo</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री दुर्गा माता
                            Shri Durga Mata</td>
                        <td><b>Favourable Color</b><br>
                            सफेद | White</td>
                        <td><b>Favourable Number</b><br>
                            2, 7</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण, पश्चिम | South, West</td>
                        <td><b>Rashi Metal</b><br>
                            लोहा, सीसा | Iron, Lead</td>
                        <td><b>Rashi Stone</b><br>
                            हीरा | Diamond</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            हीरा, पन्ना, नीलम
                            Diamond, Emerald and Blue Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शुक्रवार, बुधवार तथा शनिवार
                            Friday, Wednesday and Saturday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            पृथ्वी | Earth</td>
                        <td><b>Rashi Nature</b><br>
                            वायु | Air</td>
                        <td></td>
                    </tr>
                    <tr></tr>
                </table>
                </p>
            </div>

            <div class="info-4" style="display: none;">
                <h2>yearly</h2>
                <p>


                <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शुक्र | Venus</td>
                        <td><b>Rashi Letters</b><br>
                            ब, व, उ | Ba, Va, U</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            ई, उ, ए, ओ, वा, वी, वू, वे, वो
                            Ee, U, E, O, Vaa, Vee, Vu, Ve, Vo</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री दुर्गा माता
                            Shri Durga Mata</td>
                        <td><b>Favourable Color</b><br>
                            सफेद | White</td>
                        <td><b>Favourable Number</b><br>
                            2, 7</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण, पश्चिम | South, West</td>
                        <td><b>Rashi Metal</b><br>
                            लोहा, सीसा | Iron, Lead</td>
                        <td><b>Rashi Stone</b><br>
                            हीरा | Diamond</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            हीरा, पन्ना, नीलम
                            Diamond, Emerald and Blue Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शुक्रवार, बुधवार तथा शनिवार
                            Friday, Wednesday and Saturday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            पृथ्वी | Earth</td>
                        <td><b>Rashi Nature</b><br>
                            वायु | Air</td>
                        <td></td>
                    </tr>
                    <tr></tr>
                </table>
                </p>
            </div>
        </div>

    </div>

    <div class="zodicallsign">
        <div class="sign">

            <a href="aries.php"><img src="aries.jpg" width="60px" height="100px" alt="aries"><br><b>aries</b></a>
        </div>
        <div class="sign">

            <a href="taurus.php"><img src="taurus.png" width="60px" height="100px" alt="taurus"><br><b>taurus</b></a>
        </div>
        <div class="sign">

            <a href="gemini.php"><img src="gemini.jpg" width="60px" height="100px" alt="gemini"><br><b>gemini</b></a>
        </div>
        <div class="sign">

            <a href="cancer.php"><img src="cancer.jpg" width="60px" height="100px" alt="cancer"><br><b>cancer</b></a>
        </div>
        <div class="sign">

            <a href="leo.php"><img src="leo.avif" width="60px" height="100px" alt="leo"><br><b>leo</b></a>
        </div>
        <div class="sign">

            <a href="virgo.php"><img src="virgo.avif" width="60px" height="100px" alt="virgo"><br><b>virgo</b></a>
        </div>
        <div class="sign">

            <a href="libra.php"><img src="libra.png" width="60px" height="100px" alt="libra"><br><b>libra</b></a>
        </div>
        <div class="sign">

            <a href="scorpio.php"><img src="scorpio.avif" width="60px" height="100px" alt="scorpio"><br><b>scorpio</b></a>
        </div>
        <div class="sign">

            <a href="sagittarius.php"><img src="sagittarius.png" width="60px" height="100px" alt="sagittarius"><br><b>sagittarius</b></a>
        </div>
        <div class="sign">

            <a href="capricorn.php"><img src="capricorn.jpg" width="60px" height="100px" alt="capricorn"><br><b>capricorn</b></a>
        </div>
        <div class="sign">

            <a href="aquarius.php"><img src="aquarius.jpg" width="60px" height="100px" alt="aquarius"><br><b>aquarius</b></a>
        </div>
        <div class="sign">

            <a href="piseces.php"><img src="piseces.jpg" width="60px" height="100px" alt="piseces"><br><b>piseces</b></a>
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