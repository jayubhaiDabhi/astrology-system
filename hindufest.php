<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="rangolis.css">
    <title>Many Rangolis</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;

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
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
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




    <h2 class="dptitlecon" style="text-align:center;">Hindu Festival Images</h2>

    <div class="separatorline"></div>

    <div class="main">

        <div class="block singleblock">
            <a href="hinchaturthi.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\chaturthi1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Ganesha Chaturthi Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hindiwali.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\diwali1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Diwali Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hindurga.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\durga1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Durga Puja Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hinhanuman.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\hanuman1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Hanuman Jayanti Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hinkrishna.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\krishna1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Krishna Janmashtami Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hinnavratri.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\navratri1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Navratri Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hinrakhi.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\rakhi1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Rakhi Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hinsankranti.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\sankranti1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Makar Sankranti Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hinshivaratri.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\shivaratri1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Maha Shivaratri Images</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hinvasant.php">
                <div class="dpcontainerfest dpratiogan">
                    <img src="img\hindu\vasant1.png" class="dpcontainerimg1">
                </div>
                <div class="blocktitleg">Vasant Panchami Images</div>
            </a>
        </div>

    </div>


    <!--footer part-->
    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>