<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
    }

    div {
        display: block;
        unicode-bidi: isolate;
    }

    body {
        color: #581e00;
        background: #d57e2f;
    }

    .dptitlecon {
        margin-left: auto;
        margin-right: auto;
        font-size: 1.6rem;
        margin: 6px auto;
        line-height: 1.3;
        font-weight: 600;
        padding: 6px 6px 0;
    }

    .separatorline {
        height: 1px;
        margin-bottom: 15px;
        background: linear-gradient(to right, #eaac5b, #781e00, #eaac5b);
    }

    .main {
        padding-top: 15px;
        padding-bottom: 15px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .block {
        color: #781e00;
        background: #efb86f;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
        width: 170px;
        border-radius: 5px;
        text-align: center;
        margin: 3px;
        line-height: 1.3;
    }

    .singleblock {
        cursor: pointer;
        transition: transform .2s ease-in-out;
    }

    a {
        text-decoration: none;
        color: #581e00;
    }

    .blockimg {
        margin: 0 auto;
        padding: 20px 30px;
        border-radius: 4px 4px 0 0;
    }

    .dpcontainer {
        height: 0;
        overflow: hidden;
        position: relative;
    }

    .dpratio {
        padding-bottom: 100%;
    }

    .dpcontainerimg {
        border-radius: 4px 4px 0 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }

    .blocktitle {
        border-top: 1px solid rgba(0, 0, 0, .1);
        font-weight: 500;
        padding: 10px 6px;
        position: relative;
        font-size: 1rem;
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

    <h2 class="dptitlecon" style="text-align:center;">Lyrics</h2>

    <div class="separatorline"></div>

    <div class="main">

        <div class="block singleblock">
            <a href="aarti.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\aarti.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Aarti</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="chalisa.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\chalisa.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">chalisa</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="mantra.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\mantra.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Mantra</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="namavali.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\namavali.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Namavali</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="hanumanbahuk.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\hanuman1.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Hanuman Bahuk</div>
            </a>
        </div>

    </div>

    <h2 class="dptitlecon" style="text-align:center;">Ramayana Lyrics</h2>

    <div class="separatorline"></div>

    <div class="main">

        <div class="block singleblock">
            <a href="Nama_Ramayanam.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\rama.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Nama Ramayanam</div>
            </a>
        </div>

        <div class="block singleblock">
            <a href="Eka_Shloki_Ramayana.php">
                <div class="blockimg">
                    <div class="dpcontainer dpratio">
                        <img src="img\rama.png" class="dpcontainerimg">
                    </div>
                </div>

                <div class="blocktitle">Eka Shloki Ramayana</div>
            </a>
        </div>

    </div>

    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>