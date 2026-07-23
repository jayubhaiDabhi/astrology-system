<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leo horscope</title>
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

        .signaries {
            margin-left: 47%;
            margin-top: 30px;
            text-align: center;
            height: 150px;
            width: 100px;
            margin-bottom: 20px;

        }

        .signaries img {
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
    <div class="signaries">

        <img src="leo.avif" width="150px" height="150px" alt="capricorn"><br>
    </div>
    <div class="headersign">
        <b>
            <h1>LEO SIGN HOROSCOPE</h1>
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
                    $sql = "select leo from zodiacsign";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['leo'];
                    ?>

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            सूर्य | Sun</td>
                        <td><b>Rashi Letters</b><br>
                            म, ट | Ma, Ta</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            मा, मी, मू, मे, मो, टा, टी, टू, टे
                            Maa, Mee, Moo, Me, Mo, Taa, Tee, Too, Te</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री विष्णु नारायण
                            Shri Vishnu Narayan</td>
                        <td><b>Favourable Color</b><br>
                            सुनहरा | Golden</td>
                        <td><b>Favourable Number</b><br>
                            5</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            पूर्व | East</td>
                        <td><b>Rashi Metal</b><br>
                            तांबा, सोना | Copper, Gold</td>
                        <td><b>Rashi Stone</b><br>
                            माणिक्य | Ruby</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            माणिक्य, मूंगा, पुखराज
                            Ruby, Red Coral and Yellow Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            रविवार, मगंलवार तथा बृहस्पतिवार
                            Sunday, Tuesday and Thursday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            अग्नि | Fire</td>
                        <td><b>Rashi Nature</b><br>
                            पित्त | Bile</td>
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
                    $sql = "select leo from weeklyprediction";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['leo'];
                    ?>

                    <br><b>Auspicious Prediction:</b> This week new sources of income will be created. Your marital relationship will improve. You will get an opportunity to recognize your strengths and abilities. You will be interested in challenging tasks. You may have to travel to a distant country. You will enjoy your married life to the fullest. You may get a share in ancestral property. You may plan business with your friends. You will be satisfied with the quality of your work. Share your thoughts with your life partner. This will remove your dilemmas. You may have huge profits in business on Wednesday and Friday.

                    <br><b>Inauspicious Prediction: </b>You will be worried about your reputation. You may have an acidity problem. You should avoid intervening in matters of others. You have many opportunities in front of you at this time but due to confusion in your mind, you will not be able to decide the priority. Diseases like migraine may trouble you. Pay attention to the studies of your children. You may be worried about the health of your mother. Sunday and Monday may be unfavorable days.

                    <br><b>Remedies:</b> Offer complete makeup including Chunari and vermillion in the temple of Goddess Durga.

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            सूर्य | Sun</td>
                        <td><b>Rashi Letters</b><br>
                            म, ट | Ma, Ta</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            मा, मी, मू, मे, मो, टा, टी, टू, टे
                            Maa, Mee, Moo, Me, Mo, Taa, Tee, Too, Te</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री विष्णु नारायण
                            Shri Vishnu Narayan</td>
                        <td><b>Favourable Color</b><br>
                            सुनहरा | Golden</td>
                        <td><b>Favourable Number</b><br>
                            5</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            पूर्व | East</td>
                        <td><b>Rashi Metal</b><br>
                            तांबा, सोना | Copper, Gold</td>
                        <td><b>Rashi Stone</b><br>
                            माणिक्य | Ruby</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            माणिक्य, मूंगा, पुखराज
                            Ruby, Red Coral and Yellow Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            रविवार, मगंलवार तथा बृहस्पतिवार
                            Sunday, Tuesday and Thursday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            अग्नि | Fire</td>
                        <td><b>Rashi Nature</b><br>
                            पित्त | Bile</td>
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
                    $sql = "select leo from monthlyprediction";
                    $result = mysqli_query($conn, $sql);
                    $record = mysqli_fetch_assoc($result);
                    echo $record['leo'];
                    ?>

                    <br><b>Rashi Auspicious Days</b>
                    1,2,4,10,11,13,16,17,21,22,30,31
                    <br><b>Rashi Inauspicious Days</b>
                    6,7,9,14,15,24,25,27<br>
                    You may try new things in business. You will spend a lot of good time with your family. Profit conditions will be strong in the profession related to import-export. Your popularity will increase among the public. There will be peace and happiness at your home. Long pending works may start again. There will be progress in the lives of your siblings. You will get great results in agriculture related works. The second half of the month will be excellent. You should strengthen your relations with senior officials. Students of technical field will have to face problems.


                    Due to Mercury being in Capricorn till 24th January, there will be a lot of work pressure on you. This may also disrupt your daily routine. During this time, there is a possibility of failure in competitive interviews. Businessmen may get trapped in tax related complications. Your money may get stuck in the effort to expand the business. You will be inclined towards immoral activities. Don't eat heavy food. In the second week, due to cold, there may be problems like pain and stiffness in hands and feet.

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            सूर्य | Sun</td>
                        <td><b>Rashi Letters</b><br>
                            म, ट | Ma, Ta</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            मा, मी, मू, मे, मो, टा, टी, टू, टे
                            Maa, Mee, Moo, Me, Mo, Taa, Tee, Too, Te</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री विष्णु नारायण
                            Shri Vishnu Narayan</td>
                        <td><b>Favourable Color</b><br>
                            सुनहरा | Golden</td>
                        <td><b>Favourable Number</b><br>
                            5</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            पूर्व | East</td>
                        <td><b>Rashi Metal</b><br>
                            तांबा, सोना | Copper, Gold</td>
                        <td><b>Rashi Stone</b><br>
                            माणिक्य | Ruby</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            माणिक्य, मूंगा, पुखराज
                            Ruby, Red Coral and Yellow Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            रविवार, मगंलवार तथा बृहस्पतिवार
                            Sunday, Tuesday and Thursday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            अग्नि | Fire</td>
                        <td><b>Rashi Nature</b><br>
                            पित्त | Bile</td>
                        <td></td>
                    </tr>
                    <tr></tr>
                </table>
                </p>
            </div>

            <div class="info-4" style="display: none;">
                <h2>yearly</h2>
                <p>

                    <br><b>Health: </b>Your health will remain quite normal in the year 2025. The initial part of the year from January to April will require you to take care of your health. Diabetic patients may have health problems. That is why you should pay a lot of attention to your diet. On March 29, Saturn will aspect your fifth house, due to which there are chances of gastric and digestive problems in the stomach. Your immunity will be good. But around November and December, you may complain of fatigue and pain in the body. Make sure to include beneficial and nutritious elements in your food instead of taste.

                    <br><b>Financial Condition:</b> This year you will get an opportunity to expand your work. People will be eager to help you. For which you may also take a loan. After April, you may get relief from an old loan. But this year is highly favorable for those who are not yet financially stable. They may get a lot of respect in the workplace. But still do business agreements carefully. The time between July and September will not be favorable for new investments. You may face some problems during February and March regarding tax and property rent, etc.

                    <br><b>Family and Social Life:</b> Take care of the health of your parents this year. Your children may get great opportunities in their career. Do share your problems with friends. You may have some disagreements with friends during June and mid-September. Which you will resolve through conversation. You will have to keep paying attention to your family. Even small things will affect you a lot. Due to which you may get angry. In such a situation, choose your words carefully. Trusting your friends too much may prove harmful to you.

                    <br><b>Love Life:</b> The first half of the year will not be favorable for love marriage. But the last months of the year will prove to be favorable for it. This year you will be lucky regarding marital relationship. Closeness will increase with your life partner. But for those whose marriage is not fixed, the family will face some inconvenience in finding a bride or groom. The year will be normal for love relationships. Around the month of May and June, there may be discord between love mates due to some reason.

                    <br><b>Education and Career:</b> The year will begin on a positive note for education and career. You will be engaged in taking your work forward with a lot of aggression. Advanced use of technology will also bring success in your efficiency and results. Due to the effect of Saturn's Sade Sati, government employees should be careful about disputes between April and July this year. Your hidden enemies will try to trouble you in the workplace. Don't take hasty decisions regarding career. Students preparing for competitive exams may get great success in the month of May.

                    <br><b>Suggestion:</b> Light a Ghee Diya in temple of Lord Hanuman on Tuesday. And recite Hanuman Chalisa every day.

                    <br><br>
                <table>
                    <tr>
                        <td><b>Rashi Lord</b><br>
                            सूर्य | Sun</td>
                        <td><b>Rashi Letters</b><br>
                            म, ट | Ma, Ta</td>
                        <td><b>Nakshatra Charana Letters</b><br>
                            मा, मी, मू, मे, मो, टा, टी, टू, टे
                            Maa, Mee, Moo, Me, Mo, Taa, Tee, Too, Te</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Adorable God</b><br>
                            श्री विष्णु नारायण
                            Shri Vishnu Narayan</td>
                        <td><b>Favourable Color</b><br>
                            सुनहरा | Golden</td>
                        <td><b>Favourable Number</b><br>
                            5</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Favourable Direction</b><br>
                            पूर्व | East</td>
                        <td><b>Rashi Metal</b><br>
                            तांबा, सोना | Copper, Gold</td>
                        <td><b>Rashi Stone</b><br>
                            माणिक्य | Ruby</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Favourable Stone</b><br>
                            माणिक्य, मूंगा, पुखराज
                            Ruby, Red Coral and Yellow Sapphire</td>
                        <td><b>Rashi Favourable Weekdays</b><br>
                            रविवार, मगंलवार तथा बृहस्पतिवार
                            Sunday, Tuesday and Thursday</td>
                        <td><b>Rashi Temperament</b><br>
                            स्थिर | Stable</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Rashi Element</b><br>
                            अग्नि | Fire</td>
                        <td><b>Rashi Nature</b><br>
                            पित्त | Bile</td>
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