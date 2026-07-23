<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        div {
            unicode-bidi: isolate;
        }

        body {
            color: #581e00;
            background: #d57e2f;
        }

        .main {
            padding-bottom: 15px;
        }

        .dpflex {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .dpblock {
            color: #781e00;
            background: #efb86f;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.48);
            margin: 6px;
            width: 300px;
            position: relative;
            padding-bottom: 6px;
            border-radius: 10px;
        }

        .dpimage {
            height: 0;
            overflow: hidden;
            position: relative;
            border-radius: 10px;
        }

        .dpimg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .dpratio {
            padding-bottom: 68.9%;
        }

        .dptitle {
            font-weight: 500;
            padding: 10px 6px;
            font-size: 1.5rem;
        }

        .dptitle1 {
            padding: 0 6px;
            text-align: left;
            color: #a00;
        }

        .dpcontent {
            border-top: 1px solid rgba(0, 0, 0, .03);
            font-size: 1.4rem;
            text-align: left;
            padding: 8px 12px;
        }

        .dplink {
            pointer-events: auto;
            color: #781e00;
            text-decoration: underline;
        }

        .king {
            height: auto;
            margin: 0 auto;
            padding: 0 100px 20px;
            background-color: #d57e2f;
        }

        /*  
        background-image: url(border_pattern.svg);
        max-width: 1070px;
        background-size: 20px;
        background-position: 0 0,100% 0;
        background-repeat: repeat-Y , repeat-Y;
        position: relative; */

        /* Paragraph */


        .dptitlecon {
            margin-left: auto;
            margin-right: auto;
            font-size: 1.6rem;
            margin: 6px auto;
            line-height: 1.3;
            font-weight: 600;
            padding: 6px 6px 0;
        }

        .dpcontentpara {
            margin-left: auto;
            margin-right: auto;
            margin: 6px auto;
            text-align: left;
            font-size: 1.5rem;
            word-wrap: break-word;
            padding: 0 6px 10px;
        }

        .separatorline {
            height: 1px;
            margin-bottom: 15px;
            background: linear-gradient(to right, #eaac5b, #781e00, #eaac5b);
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
    <div class="king">

        <div>
            <h2 class="dptitlecon"> Hindu Festivals</h2>
            <p class="dpcontentpara">The list of Hindu festivals given on this page has been created after analyzing the traffic received during the all Hindu festivals for the last couple of years. This list can also be used as the latest trend on the popularity of traditional festivals in modern India.</p>
        </div>
        <h2 class="dptitlecon" style="text-align:center;">Popular Hindu Festivals</h2>

        <div class="separatorline"></div>

        <div class="main dpflex">

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\diwali.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Diwali</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecdiwali.php" class="dplink">About Diwali</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\holi.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Holi</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecholi.php" class="dplink">About Holi</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\rakhi.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Rakhi</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecrakhi.php" class="dplink">About Rakhi</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\dussehra.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Dussehra</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecdussehra.php" class="dplink">About Dussehra</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\duragapuja.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Durga Puja</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecdurgapuja.php" class="dplink">About Durga Puja</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\navratri.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Navratri</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecnavratri.php" class="dplink">About Navratri</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\ganesha.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Ganesha Chaturthi</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecganesha.php" class="dplink">About Ganesha Chaturthi</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\ramnavami.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Rama Navami</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecramnavami.php" class="dplink">About Rama Navami</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\janmashtami.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Janmashtami</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecjanmashtami.php" class="dplink">About Janmashtami</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\shivratri.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Maha Shivaratri</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecshivaratri.php" class="dplink">About Maha Shivaratri</a>
                </p>
            </div>

            <div class="dpblock">
                <div class="dpimage dpratio">
                    <img src="img\sankranti.jpg" class="dpimg">
                </div>

                <div class="dptitle">
                    <div class="dptitle1">Makar Sankranti</div>
                </div>

                <p class="dpcontent">
                    <a href="redirecsankranti.php" class="dplink">About Makar Sankranti</a>
                </p>
            </div>

        </div>

        <div class="separatorline"></div>

        <div>
            <h2 class="dptitlecon">Top Hindu Festivals</h2>
            <p class="dpcontentpara">There are numerous Vrat, Upvas, Tyohar and Parva in Hinduism. The fasting and festivities go hand-in-hand. Hence many times it becomes difficult to differentiate them. The number of fast and festivals exceeds the number of days in the year.</p>
            <p class="dpcontentpara">When we talk about top Hindu festivals then we should also mention that top Hindu festivals are also tied with caste based hierarchy existed since ancient time. The caste system in Hinduism exists since Vedic time. In modern India, the caste system has been diluted. However, the traditional notion of society being divided into four major castes still prevails. Most text books in North Indian schools would mention top 4 Hindu festivals as Deepavali, Holi, Raksha Bandhan and Dasara. At the same time it is also mentioned that Rakhi is the most significant festival for Brahmin Varna i.e. Brahmin community, Diwali is the most significant festival for Vaishya Varna, Dasara is the most significant festival for Kshatriya Varna and Holi is the most significant festival for Shudra Varna.</p>
        </div>

    </div>


    <!--footer part-->
    <div class="foot">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>