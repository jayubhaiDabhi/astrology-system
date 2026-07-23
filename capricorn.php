<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>capricorn horoscope</title>
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

        table {
            border: 1px solid #9f2800;
            margin-top: 5px;

        }

        table tr td {
            padding: 5px;
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

        .signcapricorn {
            margin-left: 47%;
            margin-top: 30px;
            text-align: center;
            height: 150px;
            width: 100px;
            margin-bottom: 20px;

        }

        .signcapricorn img {
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

    <div class="signcapricorn">

        <img src="capricorn.jpg" width="150px" height="150px" alt="capricorn"><br>
    </div>
    <div class="headersign">
        <b>
            <h1>CAPRICORN SIGN HOROSCOPE</h1>
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
                    $sql = "select capricorn from zodiacsign";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['capricorn'];
                    ?>

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शनि | Saturn</td>
                        <td><b>Rashi Letters</b><br>
                            ख, ज | Kha, Ja</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            भो, जा, जी, खी, खू, खे, खो, गा, गी
                            Bho, Jaa, Jee, Khee, Khoo, Gaa, Gee</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            शिव जी
                            Shiv Ji</td>
                        <td><b>Favourable Color</b><br>
                            आसमानी | Cyan</td>
                        <td><b>Favourable Number</b><br>
                            10, 11</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण | South</td>
                        <td><b>Rashi Metal</b><br>
                            चाँदी, लोहा | Silver, Iron</td>
                        <td><b>Rashi Stone</b><br>
                            नीलम | Blue Sapphire</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            नीलम, पन्ना तथा हीरा
                            Blue Sapphire, Emerald and Diamond</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शनिवार, बुधवार तथा शुक्रवार
                            Saturday, Wednesday and Friday</td>
                        <td><b>Rashi Temperament</b><br>
                            चर | Movable</td>
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
                    $sql = "select capricorn from weeklyprediction";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['capricorn'];
                    ?>

                    <br><b>Auspicious Prediction: </b> beginning of the week will be excellent. Your marital relationship will be very romantic. You will be very cautious about your health. You may get many orders at once in business. You will find solutions to many problems with the influence of positive thinking. Your enthusiasm for a new job or business will increase. Those associated with teaching may get promotion. You will complete the pending work easily. Wholesale traders may get the best deal. You will get auspicious results in family life. Sunday and Monday will be most favorable days.

                    <br><b>Inauspicious Prediction:</b> Be a little cautious about your love relationship. Students may face some obstacles in their education. You will be worried about your image. You may have some inconvenience during travel. There will be more pressure on those who work from home. Make sure to take out time for your life partner. Don't underestimate the importance of the health of your life partner. Take care of the purity of food. Don't be careless about food. There may be deceit in the behavior of friends. You may have to listen to the rebuke of officers in the workplace during the weekend. There may be some fatigue in your body.

                    <br><b>Remedies:</b> Donate a vessel filled with black sesame seeds.

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शनि | Saturn</td>
                        <td><b>Rashi Letters</b><br>
                            ख, ज | Kha, Ja</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            भो, जा, जी, खी, खू, खे, खो, गा, गी
                            Bho, Jaa, Jee, Khee, Khoo, Gaa, Gee</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            शिव जी
                            Shiv Ji</td>
                        <td><b>Favourable Color</b><br>
                            आसमानी | Cyan</td>
                        <td><b>Favourable Number</b><br>
                            10, 11</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण | South</td>
                        <td><b>Rashi Metal</b><br>
                            चाँदी, लोहा | Silver, Iron</td>
                        <td><b>Rashi Stone</b><br>
                            नीलम | Blue Sapphire</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            नीलम, पन्ना तथा हीरा
                            Blue Sapphire, Emerald and Diamond</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शनिवार, बुधवार तथा शुक्रवार
                            Saturday, Wednesday and Friday</td>
                        <td><b>Rashi Temperament</b><br>
                            चर | Movable</td>
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
                    $sql = "select capricorn from monthlyprediction";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['capricorn'];
                    ?>

                    <br><b>Rashi Auspicious Days</b>
                    1,2,6,7,12,14,15,20,24,25,28
                    <br><b>Rashi Inauspicious Days</b>
                    3,4,9,11,16,17,26,27,31
                    <br>At the beginning of the month, you may buy new things for your home. This is a excellent time to earn money. The auspicious position of Saturn, the lord of the zodiac, seems to be a factor of progress for those associated with media and engineering sector. Pay attention to the activities of children. Love and devotion towards the love mate will increase. If you are planning to have a love marriage, then your family may support you. The health of your parents will be good. Matters related to property may be resolved. Unemployed people may get jobs. The suggestions given by you will get a lot of importance.


                    Your enemies will try to affect your business interests. You should react only after thinking. There may be discords in the workplace due to your aggressive nature. Although there will be no decrease in your reputation and valor. Still, you will have to limit your relations with partners. You should not interact much with strangers. Take care that your time is not wasted in fun and frolic. Due to the adverse effect of Mercury, skin and stomach diseases may trouble you. You may have a discord with your life partner in the latter half of the month.

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शनि | Saturn</td>
                        <td><b>Rashi Letters</b><br>
                            ख, ज | Kha, Ja</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            भो, जा, जी, खी, खू, खे, खो, गा, गी
                            Bho, Jaa, Jee, Khee, Khoo, Gaa, Gee</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            शिव जी
                            Shiv Ji</td>
                        <td><b>Favourable Color</b><br>
                            आसमानी | Cyan</td>
                        <td><b>Favourable Number</b><br>
                            10, 11</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण | South</td>
                        <td><b>Rashi Metal</b><br>
                            चाँदी, लोहा | Silver, Iron</td>
                        <td><b>Rashi Stone</b><br>
                            नीलम | Blue Sapphire</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            नीलम, पन्ना तथा हीरा
                            Blue Sapphire, Emerald and Diamond</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शनिवार, बुधवार तथा शुक्रवार
                            Saturday, Wednesday and Friday</td>
                        <td><b>Rashi Temperament</b><br>
                            चर | Movable</td>
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
                    <br><b>Health:</b> Your health will be fine at the beginning of the year. If you are undergoing treatment for any disease for a long time, then its treatment will be beneficial between January and April. The third aspect of Saturn will have a bad effect on the fourth house from your zodiac sign. Due to which people who consume too much alcohol may have serious problems in the lungs. You should avoid alcohol and non-vegetarian food after the month of April. Problems like acidity may trouble you badly between July and September. If you are stressed about work, then definitely take a rest.

                    <br><b>Financial Condition:</b> The year will begin on a positive note for you from a financial perspective. You will gain money through new projects. You will be very cautious about your savings. However, due to Saturn transiting in the second house, you may gain money through mutual funds and insurance. The three months from April to June will be favorable. In the latter half of the year, you may think of investing in property. Rahu transiting in your second house in the month of May can inspire you to earn money through the wrong means, which may prove very harmful to you.

                    <br><b>Family and Social Life:</b> The initial months of the year will be favorable for you. Due to the aspect of Jupiter in the second house, everything will be fine in the family. Your popularity will increase in the society. After May, there may be some property divisions in the family. People will exaggerate your statements. There will be many things said against you in the family. There may be tension regarding the marriage of your marriageable children. But this year, your social contacts will also be very strong. Maintain good relations with your siblings. Between August and December, any member of the family may have health problems.

                    <br><b>Love Life:</b> The beginning of the year is going to be very good. There will be sweetness in mutual relations. In the month of May, due to some reason, a situation of dispute may arise in your love relationship. You need to be truthful. Rahu may make you speak falsely and harshly, which will not be good for personal relationships. Try to learn from your mistakes. Unmarried girls should be careful about new relationships this year. The time between January and April is like an opportunity for couples who have no children. You may also take the advice of your life partner in the business and workplace. This will benefit you a lot. The months of July and August will not be favorable for your marital relationship. There is a possibility of marital problems getting resolved at the end of the year.

                    <br><b>Education and Career:</b> The beginning of the year will be very good for your studies. If you are serious about higher education, then the time till March will be great. Getting good results in exams may get you enrolled in prominent and reputed institutes. Your Boss will be very impressed with you. After 18 May, as a result of Jupiter's transit in Gemini, you may get job opportunities from abroad. It is also possible that you settle abroad. You may get great achievements in the workplace. Those pursuing legal education will have to struggle a bit. The time between September and December is not favorable for experimenting in your career.

                    <br><b>Suggestion:</b> Recite Vishnu Sahasranama Stotram on every Thursday.

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            शनि | Saturn</td>
                        <td><b>Rashi Letters</b><br>
                            ख, ज | Kha, Ja</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            भो, जा, जी, खी, खू, खे, खो, गा, गी
                            Bho, Jaa, Jee, Khee, Khoo, Gaa, Gee</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            शिव जी
                            Shiv Ji</td>
                        <td><b>Favourable Color</b><br>
                            आसमानी | Cyan</td>
                        <td><b>Favourable Number</b><br>
                            10, 11</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            दक्षिण | South</td>
                        <td><b>Rashi Metal</b><br>
                            चाँदी, लोहा | Silver, Iron</td>
                        <td><b>Rashi Stone</b><br>
                            नीलम | Blue Sapphire</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            नीलम, पन्ना तथा हीरा
                            Blue Sapphire, Emerald and Diamond</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            शनिवार, बुधवार तथा शुक्रवार
                            Saturday, Wednesday and Friday</td>
                        <td><b>Rashi Temperament</b><br>
                            चर | Movable</td>
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