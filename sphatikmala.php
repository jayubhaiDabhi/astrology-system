<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "pro_astro");
if (!$conn) {
    die("fail to connect");
}

if (isset($_POST["buy"])) {
    $in = "insert into buy values(1,'jaydip','botad',2,'sphatikmala.jpeg','sphatikmala',1,2149,2149)";
    $in = mysqli_query($conn, $in);
    if (!$in) {
        echo "Not insert";
    } else {
        echo "sucessfully buy";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
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
            margin-left: 26px;
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

        div {
            display: block;
            unicode-bidi: isolate;
        }

        body {
            color: #581e00;
            background: #d57e2f;
        }


        .shoptitle {
            color: #9f2800;
            text-align: center;
            font-size: xx-large;
            padding: 40px;
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
            margin-left: 300px;
            margin-right: 300px;
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
            font-size: 1.2rem;
        }

        .button-1,
        .button-2,
        .button-3,
        .button-4,
        .btncart {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            border-radius: 5px;
            height: 30px;
            width: 150px;
        }

        .btnbuy,
        .btnct {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
        }

        .info-1,
        .info-2,
        .info-3,
        .info-4 {

            background-color: #d57e2f;
            padding: 20px;
            border: 1px solid #9f2800;
            display: none;
            text-align: center;
        }

        .info {
            background-color: #d57e2f;
            padding: 20px;
            border: 1px solid #9f2800;
            display: none;
        }

        .button {
            background-color: #9f2800;
            color: #d57e2f;
            height: 50px;
            width: 50px;
            border: none;
            margin-top: 1px;
            font-size: xx-large;
        }

        #info-container {
            margin-top: 50px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px #9f2800;
            height: auto;
            width: 90%;
            margin-left: 5%;
            margin-bottom: 50px;
        }

        .spahtikmala {
            text-align: center;
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
            <a href="cart.php"><button class="button"><i class="fa-solid fa-cart-shopping"></i></button></a>
            <div class="clock"><?php include 'clock.php' ?></div>
        </div>
    </div>

    <!-- main section -->

    <div class="main">
        <?php
        $query = mysqli_query($conn, "SELECT * FROM additem");

        if (mysqli_num_rows($query) > 0) {
            while ($data = mysqli_fetch_assoc($query)) {
                echo '
        
        <div class="spahtikmala">
            <h2>' . $data["name"] . '</h2><br><br>
            <img height="90px" width="90px" src="' . $data["img"] . '"><br><br><br>
            <p><span>
                    
                    

                             
                                ' . $data["info"] . '
                             
                     
                </span>
            <h3><b>Price : </b>' . $data["price"] . '
                <br>(delivery in 3-7 days)
            </h3>
            <br><br>';
           // echo "sdf".$_SESSION["username"];
                IF(!isset($_SESSION["username"]))
                {
                   // header("location:home.php");
                   ECHO '<form method="post" action="log.php"><input class="btncart" style="text-align:center; margin-left:45.5%;" type="submit" name="Login" value="Login"></form>
                   ';
                }
                else
                {
                     ECHO '<form method="post"><input class="btncart" style="text-align:center; margin-left:45.5%;" type="submit" name="buy" value="buy now"></form>
                ';
                }
            }
        }

        ?>
        </p>
    </div>


    <!-- <div class="block singleblock">
            <div class="blockimg">
                <div class="dpcontainer dpratio">
                    <img src="images\tulsimala.webp" class="dpcontainerimg">
                </div>
            </div>

            <div class="blocktitle">tulshi mala
                <button class="button-1">info</button>
                <button class="btncart">add to cart</button>
            </div> 

        </div>-->

    <!-- <div class="block singleblock">
            <div class="blockimg">
                <div class="dpcontainer dpratio">
                    <img src="images\sphatikmala.jpeg" class="dpcontainerimg">
                </div>
            </div>

            <div class="blocktitle">sphatik mala
                <button class="button-2">info</button>
                <form method="post"><input class="btncart" type="submit" name="sphatikmala" value="add to cart"></form>
            </div>
        </div> -->


    </div>
    <!-- 
    <div id="info-container">
        <div class="info-1" style="display: none;">
            <h2>tulshi mala</h2><br><br>
            <img height="90px" width="90px" src="images\tulsimala.webp"><br><br><br>
            <p>
                <b>Tulsi Mala</b>
                <br><br>Tulsi ( Tulashi ) mala or rosary made of pure tulsi beads. the plant of Tulsi is believed to be the incarnation of the Divine itself. The Tulsi Mala is made of the wood or the seeds of Tulsi and is used for name chanting and worship.The Tulsi Mala is known to please Lord Vishnu Lord Rama and Krishna. Commonly used by those dedicated to worshipping Krishna and chanting the mantra "Hare Rama Hare Krishna, Hare Krishna Hare Hare". Use of this mala brings purification of consciousness or atma shuddhi. Atma shuddhi is the self purification. It is made of 108 beads wound around a strong string, with a 109th bead called the Sumeru. . Depending on the type of the Tulsi plant, our Tulsi Mala is available in various colors like black, brown or sandalwood color. Wearing the Tulsi Mala is supposed to bring good luck and has great spiritual and healing properties. Order Now ! and see miraculous changes in life.
                <br><br><b>AstroSage Guarantee:</b>
                100% Genuine and Authentic
                <br><br><b>Divine Connection:</b>
                Lord Vishnu, Lord Ram & Lord Krishna
                <br><br><b>Derived From:</b>
                Made of pure Tulsi beads
                <br><br><b>Derived From:</b>
                Made of pure Tulsi beads

                <br><br>
            <h3><b>Price : </b>499
                <br>(delivery into 3-7 days)
            </h3>
            <br><br>
            <button class="btnbuy">buy now</button><br><br>
            <form method="post">
                <input class="btnct" type="text" name="quantity" placeholder="enter quantity"><br><br>
                <input class="btnct" type="submit" name="tulshi" value="add to cart"><br>

            </form>
            </p>
            <?php

            //$conn = mysqli_connect("localhost", "root", "");
            //if (!$conn) {
            //    die("fail to connect");
            //}
            // if (isset($_POST['tulshi'])) {
            //     $q = 1;
            //     $q = $_POST['quantity'];
            //     $t = 499 * $q;
            //     $q1 = "INSERT INTO `cart` ( `no` , `img` , `name` , `price` , `quantity` , `total` )VALUES ('1', '', 'tulshimala', '499', '1', '499');";
            //     $sql = mysqli_query($conn, $q1);
            //     if (!$sql) {
            //         echo "not inserted into cart";
            //     } else {
            //         echo "inserted into cart sucessfully";
            //     }
            // }
            ?>
        </div> -->

    <!-- 
    <div class="info-3" style="display: none;">
        <h2>Button 3 Information</h2>
        <p>This is some information about Button 3.</p>
    </div>

    <div class="info-4" style="display: none;">
        <h2>Button 4 Information</h2>
        <p>This is some information about Button 4.</p>
    </div>


    <div class="info" style="display: none;">
        <h2>Button 3 Information</h2>
        <p>This is some information about Button 3.</p>
    </div>
    </div>

 -->
    <!--footer part-->

    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>
<!-- 
<script>
    const button = document.querySelector('.button');
    const button1 = document.querySelector('.button-1');
    const button2 = document.querySelector('.button-2');
    const button3 = document.querySelector('.button-3');
    const button4 = document.querySelector('.button-4');

    const info = document.querySelector('.info');
    const info1 = document.querySelector('.info-1');
    const info2 = document.querySelector('.info-2');
    const info3 = document.querySelector('.info-3');
    const info4 = document.querySelector('.info-4');


    button.addEventListener('click', () => {
        info.style.display = 'block';
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'none';
    });

    button1.addEventListener('click', () => {
        info.style.display = 'none';
        info1.style.display = 'block';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'none';
    });

    button2.addEventListener('click', () => {
        info.style.display = 'none';
        info1.style.display = 'none';
        info2.style.display = 'block';
        info3.style.display = 'none';
        info4.style.display = 'none';
    });

    button3.addEventListener('click', () => {
        info.style.display = 'none';
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'block';
        info4.style.display = 'none';
    });

    button4.addEventListener('click', () => {
        info.style.display = 'none';
        info1.style.display = 'none';
        info2.style.display = 'none';
        info3.style.display = 'none';
        info4.style.display = 'block';
    });
</script> -->