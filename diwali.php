<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="rangolis.css">
    <title>Diwali Rangolis</title>
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



    <h2 class="dptitlecon" style="text-align:center;">Diwali Rangoli Designs for Indian Festivals</h2>

    <div class="separatorline"></div>

    <div class="main">

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa1.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 1</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa2.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 2</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa3.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 3</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa4.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 4</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa5.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 5</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa6.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 6</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa7.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 7</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa8.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 8</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa9.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 9</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa10.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 10</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa11.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 11</div>
        </div>

        <div class="block singleblock">
            <div class="dpcontainer dpratio">
                <img src="img\rangoli\diwa12.png" class="dpcontainerimg">
            </div>
            <div class="blocktitle">Diwali Rangoli 12</div>
        </div>

    </div>

    <!--footer part-->
    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>