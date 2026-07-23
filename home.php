<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="homestyles.css">
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

  <section id="sec">
    <!-- zodiac all sign -->
    <div class="zodicallsign">
      <div class="sign">

        <a href="aries.php"><img src="aries.jpg" width="60px" height="60px" alt="aries"><br><b>aries</b></a>
      </div>
      <div class="sign">

        <a href="taurus.php"><img src="taurus.png" width="60px" height="60px" alt="taurus"><br><b>taurus</b></a>
      </div>
      <div class="sign">

        <a href="gemini.php"><img src="gemini.jpg" width="60px" height="60px" alt="gemini"><br><b>gemini</b></a>
      </div>
      <div class="sign">

        <a href="cancer.php"><img src="cancer.jpg" width="60px" height="60px" alt="cancer"><br><b>cancer</b></a>
      </div>
      <div class="sign">

        <a href="leo.php"><img src="leo.avif" width="60px" height="60px" alt="leo"><br><b>leo</b></a>
      </div>
      <div class="sign">

        <a href="virgo.php"><img src="virgo.avif" width="60px" height="60px" alt="virgo"><br><b>virgo</b></a>
      </div>
      <div class="sign">

        <a href="libra.php"><img src="libra.png" width="60px" height="60px" alt="libra"><br><b>libra</b></a>
      </div>
      <div class="sign">

        <a href="scorpio.php"><img src="scorpio.avif" width="60px" height="60px" alt="scorpio"><br><b>scorpio</b></a>
      </div>
      <div class="sign">

        <a href="sagittarius.php"><img src="sagittarius.png" width="60px" height="60px" alt="sagittarius"><br><b>sagittarius</b></a>
      </div>
      <div class="sign">

        <a href="capricorn.php"><img src="capricorn.jpg" width="60px" height="60px" alt="capricorn"><br><b>capricorn</b></a>
      </div>
      <div class="sign">

        <a href="aquarius.php"><img src="aquarius.jpg" width="60px" height="60px" alt="aquarius"><br><b>aquarius</b></a>
      </div>
      <div class="sign">

        <a href="piseces.php"><img src="piseces.jpg" width="60px" height="60px" alt="piseces"><br><b>piseces</b></a>
      </div>

    </div>
  </section>
  <!--container part-->
  <div class="container">

    <div class="ad">
      <video autoplay loop muted src="animation.mp4"></video>
    </div>
    <!--header detail-->
    <div class="header_sec">

      <div class="left">
        <?php

        function getLunarDay($timestamp)
        {

          $synodicmonth = 29.53058867;
          $newmoon = strtotime("2025-4-27 15:27:00");

          $dayssincenewmoon = ($timestamp - $newmoon) / (24 * 60 * 60);

          $lunarAge = $dayssincenewmoon % $synodicmonth;

          $lunarDay = floor($lunarAge) + 1;

          return $lunarDay;
        }

        $timestamp = time();
        $lunarDay = getLunarDay($timestamp);
        $monthcount = 2;

        if ($lunarDay == 30) {
          $monthcount = $monthcount + 1;
          if ($monthcount > 12) {
            $monthcount = 1;
          }
        }

        if ($monthcount == 1) {
          $gujratiMonth = "magha";
        }

        if ($monthcount == 2) {
          $gujratiMonth = "phalguna";
        }

        if ($monthcount == 3) {
          $gujratiMonth = "chaitra";
        }

        if ($monthcount == 4) {
          $gujratiMonth = "vaishakha";
        }

        if ($monthcount == 5) {
          $gujratiMonth = "jaishtha";
        }

        if ($monthcount == 6) {
          $gujratiMonth = "ashadha";
        }

        if ($monthcount == 7) {
          $gujratiMonth = "shravana";
        }

        if ($monthcount == 8) {
          $gujratiMonth = "bhadrapada";
        }

        if ($monthcount == 9) {
          $gujratiMonth = "ashvina";
        }

        if ($monthcount == 10) {
          $gujratiMonth = "kartika";
        }

        if ($monthcount == 11) {
          $gujratiMonth = "margshirsha";
        }

        if ($monthcount == 12) {
          $gujratiMonth = "pausha";
        }

        $gujratiSamvant = 2081;

        if ($gujratiMonth == 10) {
          $gujratiSamvant++;
        }

        echo '<div class="chandraimg">';

        if ($lunarDay == 1) {
          echo '<img src="images\moon1.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 2) {
          echo '<img src="images\moon2.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 3) {
          echo '<img src="images\moon3.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 4) {
          echo '<img src="images\moon4.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 5) {
          echo '<img src="images\moon5.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 6) {
          echo '<img src="images\moon6.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 7) {
          echo '<img src="images\moon7.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 8) {
          echo '<img src="images\moon8.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 9) {
          echo '<img src="images\moon9.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 10) {
          echo '<img src="images\moon10.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 11) {
          echo '<img src="images\moon11.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 12) {
          echo '<img src="images\moon12.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 13) {
          echo '<img src="images\moon13.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 14) {
          echo '<img src="images\moon14.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 15) {
          echo '<img src="images\moon15.jpg" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 16) {
          echo '<img src="images\moon16.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 17) {
          echo '<img src="images\moon17.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 18) {
          echo '<img src="images\moon18.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 19) {
          echo '<img src="images\moon19.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 20) {
          echo '<img src="images\moon20.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 21) {
          echo '<img src="images\moon21.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 22) {
          echo '<img src="images\moon22.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 23) {
          echo '<img src="images\moon23.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 24) {
          echo '<img src="images\moon24.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 25) {
          echo '<img src="images\moon25.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 26) {
          echo '<img src="images\moon26.webp" width="60px" height="60px" alt="lunarday">';
        }

        if ($lunarDay == 27) {
          echo '<img src="images\moon27.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 28) {
          echo '<img src="images\moon28.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 29) {
          echo '<img src="images\moon29.webp" width="60px" height="60px" alt="piseces">';
        }

        if ($lunarDay == 30) {
          echo '<img src="images\moon30.png" width="60px" height="60px" alt="piseces">';
        }

        echo "</div>";

        if ($lunarDay > 15) {
          $lunarDay = $lunarDay - 15;
          echo "<b> $lunarDay ,$gujratiMonth </b><br>krishna paksha<br>$gujratiSamvant gujrati samvant";
          $paksha = "k";
        } else {
          echo "<b>" . $lunarDay . ",$gujratiMonth</b><br>shukla paksha<br>$gujratiSamvant gujrati samvant";
          $paksha = "s";
        }

        ?>
      </div>

      <div class="right"><?php echo date("<b>d</b></br>");
                          echo "<br>";
                          echo date("F Y<br>");
                          echo "<br>";
                          echo date("D<br>");
                          ?>
      </div>
    </div>

    <div class="event">
      <p>
        <?php
        $tempmonth = $gujratiMonth;
        $date = date('d');
        $month = date('m');
        //echo $month;
        $conn = mysqli_connect("localhost", "root", "", "pro_astro");
        if (!$conn) {
          die("fail to connect");
        }

        $query = mysqli_query($conn, "SELECT * FROM calendartithi");
        if (mysqli_num_rows($query) > 0) {
          while ($data = mysqli_fetch_assoc($query)) {
            if ($data['tithi'] == $lunarDay && $data['paksha'] == $paksha && $data['month'] == $tempmonth) {
              echo $data['info'];
            }
          }
        }

        $query = mysqli_query($conn, "SELECT * FROM calendardate");
        if (mysqli_num_rows($query) > 0) {
          while ($data = mysqli_fetch_assoc($query)) {
            if ($data['date'] == $date && $data['month'] == $month) {
              echo $data['info'];
            }
          }
        }

        ?>
      </p>
    </div>

    <!-- kundali chart -->
    <div class="userkundali">
      <a href="userkundali.php"><br>Open Kundali</a>
    </div>

    <div class="kundali_container">

      <div class="kundali_image">

        <span class="one"></span>
        <div class="position_one"><?php include 'position_one.php' ?></div>


        <span class="two"></span>
        <div class="position_two"><?php include 'position_two.php' ?></div>


        <span class="three"></span>
        <div class="position_three"><?php include 'position_three.php' ?></div>


        <span class="four"></span>
        <div class="position_four"><?php include 'position_four.php' ?> </div>


        <span class="five"></span>
        <div class="position_five"><?php include 'position_five.php' ?></div>


        <span class="six"></span>
        <div class="position_six"><?php include 'position_six.php' ?></div>


        <span class="seven"></span>
        <div class="position_seven"><?php include 'position_seven.php' ?></div>


        <span class="eight"></span>
        <div class="position_eight"><?php include 'position_eight.php' ?></div>


        <span class="nine"></span>
        <div class="position_nine"><?php include 'position_nine.php' ?></div>


        <span class="ten"></span>
        <div class="position_ten"><?php include 'position_ten.php' ?></div>


        <span class="eleven"></span>
        <div class="position_eleven"><?php include 'position_eleven.php' ?></div>


        <span class="twelve"></span>
        <div class="position_twelve"><?php include 'position_twelve.php' ?></div>

      </div>

    </div>

    <table>
      <tr>
        <th>rashi</th>
        <th>residents</th>
        <th>owner</th>
        <th>degree</th>
      </tr>
      <tr>
        <td>1</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 0 && $moondeg <= 30.9999) {
            echo "moon ";
          }

          if ($sundeg >= 0 && $sundeg <= 30.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 0 && $marsdeg <= 30.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 0 && $mercurydeg <= 30.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 0 && $jupitaldeg <= 30.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 0 && $venusdeg <= 30.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 0 && $saturndeg <= 30.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 331 && $rahudeg <= 360) {
            echo "rahu ";
          }

          if ($ketudeg >= 331 && $ketudeg <= 360) {
            echo "ketu ";
          }

          ?>
        </td>
        <td>mars</td>
        <td>
          <?php
          if ($moondeg >= 0 && $moondeg <= 30.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 0 && $sundeg <= 30.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 0 && $marsdeg <= 30.9999) {
            echo " ma:" . round($marsdeg, 2);
          }

          if ($mercurydeg >= 0 && $mercurydeg <= 30.9999) {
            echo " me:" . round($mercurydeg, 2);
          }

          if ($jupitaldeg >= 0 && $jupitaldeg <= 30.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 0 && $venusdeg <= 30.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 0 && $saturndeg <= 30.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 331 && $rahudeg <= 360) {
            $rahudeg = $rahudeg - 330;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 331 && $ketudeg <= 360) {
            $ketudeg = $ketudeg - 330;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 31 && $moondeg <= 60.9999) {
            echo "moon ";
          }

          if ($sundeg >= 31 && $sundeg <= 60.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 31 && $marsdeg <= 60.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 31 && $mercurydeg <= 60.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 31 && $jupitaldeg <= 60.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 31 && $venusdeg <= 60.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 31 && $saturndeg <= 60.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 301 && $rahudeg <= 330.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 301 && $ketudeg <= 330.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>venus</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 31 && $moondeg <= 60.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 31 && $sundeg <= 60.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 31 && $marsdeg <= 60.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 31 && $mercurydeg <= 60.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 31 && $jupitaldeg <= 60.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 31 && $venusdeg <= 60.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 31 && $saturndeg <= 60.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 301 && $rahudeg <= 330.9999) {
            $rahudeg = $rahudeg - 270;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 301 && $ketudeg <= 330.9999) {
            $ketudeg = $ketudeg - 270;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 61 && $moondeg <= 90.9999) {
            echo "moon ";
          }

          if ($sundeg >= 61 && $sundeg <= 90.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 61 && $marsdeg <= 90.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 61 && $mercurydeg <= 90.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 61 && $jupitaldeg <= 90.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 61 && $venusdeg <= 90.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 61 && $saturndeg <= 90.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 271 && $rahudeg <= 300.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 271 && $ketudeg <= 300.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>mercury</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 61 && $moondeg <= 90.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 61 && $sundeg <= 90.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 61 && $marsdeg <= 90.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 61 && $mercurydeg <= 90.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 61 && $jupitaldeg <= 90.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 61 && $venusdeg <= 90.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 61 && $saturndeg <= 90.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 271 && $rahudeg <= 300.9999) {
            $rahudeg = $rahudeg - 210;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 271 && $ketudeg <= 330.9999) {
            $ketudeg = $ketudeg - 210;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 91 && $moondeg <= 120.9999) {
            echo "moon ";
          }

          if ($sundeg >= 91 && $sundeg <= 120.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 91 && $marsdeg <= 120.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 91 && $mercurydeg <= 120.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 91 && $jupitaldeg <= 120.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 91 && $venusdeg <= 120.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 91 && $saturndeg <= 120.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 241 && $rahudeg <= 270.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 241 && $ketudeg <= 270.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>moon</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 91 && $moondeg <= 120.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 91 && $sundeg <= 120.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 91 && $marsdeg <= 120.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 91 && $mercurydeg <= 120.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 91 && $jupitaldeg <= 120.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 91 && $venusdeg <= 120.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 91 && $saturndeg <= 120.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 241 && $rahudeg <= 270.9999) {
            $rahudeg = $rahudeg - 150;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 241 && $ketudeg <= 270.9999) {
            $ketudeg = $ketudeg - 150;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 121 && $moondeg <= 150.9999) {
            echo "moon ";
          }

          if ($sundeg >= 121 && $sundeg <= 150.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 121 && $marsdeg <= 150.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 121 && $mercurydeg <= 150.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 121 && $jupitaldeg <= 150.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 121 && $venusdeg <= 150.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 121 && $saturndeg <= 150.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 211 && $rahudeg <= 240.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 211 && $ketudeg <= 240.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>sun</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 121 && $moondeg <= 150.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 121 && $sundeg <= 150.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 121 && $marsdeg <= 150.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 121 && $mercurydeg <= 150.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 121 && $jupitaldeg <= 150.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 121 && $venusdeg <= 150.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 121 && $saturndeg <= 150.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 211 && $rahudeg <= 240.9999) {
            $rahudeg = $rahudeg - 90;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 211 && $ketudeg <= 240.9999) {
            $ketudeg = $ketudeg - 90;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>6</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 151 && $moondeg <= 180.9999) {
            echo "moon ";
          }

          if ($sundeg >= 151 && $sundeg <= 180.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 151 && $marsdeg <= 180.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 151 && $mercurydeg <= 180.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 151 && $jupitaldeg <= 180.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 151 && $venusdeg <= 180.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 151 && $saturndeg <= 180.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 181 && $rahudeg <= 210.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 181 && $ketudeg <= 210.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>mercury</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 151 && $moondeg <= 180.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 151 && $sundeg <= 180.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 151 && $marsdeg <= 180.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 151 && $mercurydeg <= 180.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 151 && $jupitaldeg <= 180.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 151 && $venusdeg <= 180.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 151 && $saturndeg <= 180.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 181 && $rahudeg <= 210.9999) {
            $rahudeg = $rahudeg - 30;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 181 && $ketudeg <= 210.9999) {
            $ketudeg = $ketudeg - 30;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>7</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 181 && $moondeg <= 210.9999) {
            echo "moon ";
          }

          if ($sundeg >= 181 && $sundeg <= 210.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 181 && $marsdeg <= 210.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 181 && $mercurydeg <= 210.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 181 && $jupitaldeg <= 210.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 181 && $venusdeg <= 210.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 181 && $saturndeg <= 210.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 151 && $rahudeg <= 180.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 151 && $ketudeg <= 180.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>venus</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 181 && $moondeg <= 210.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 181 && $sundeg <= 210.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 181 && $marsdeg <= 210.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 181 && $mercurydeg <= 210.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 181 && $jupitaldeg <= 210.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 181 && $venusdeg <= 210.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 181 && $saturndeg <= 210.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 151 && $rahudeg <= 180.9999) {
            $rahudeg = $rahudeg + 30;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 151 && $ketudeg <= 180.9999) {
            $ketudeg = $ketudeg + 30;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>8</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 211 && $moondeg <= 240.9999) {
            echo "moon ";
          }

          if ($sundeg >= 211 && $sundeg <= 240.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 211 && $marsdeg <= 240.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 211 && $mercurydeg <= 240.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 211 && $jupitaldeg <= 240.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 211 && $venusdeg <= 240.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 211 && $saturndeg <= 240.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 121 && $rahudeg <= 150.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 121 && $ketudeg <= 150.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>mars</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 211 && $moondeg <= 240.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 211 && $sundeg <= 240.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 211 && $marsdeg <= 240.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 211 && $mercurydeg <= 240.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 211 && $jupitaldeg <= 240.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 211 && $venusdeg <= 240.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 211 && $saturndeg <= 240.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 121 && $rahudeg <= 150.9999) {
            $rahudeg = $rahudeg + 90;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 121 && $ketudeg <= 150.9999) {
            $ketudeg = $ketudeg + 90;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>9</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 241 && $moondeg <= 270.9999) {
            echo "moon ";
          }

          if ($sundeg >= 241 && $sundeg <= 270.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 241 && $marsdeg <= 270.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 241 && $mercurydeg <= 270.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 241 && $jupitaldeg <= 270.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 241 && $venusdeg <= 270.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 241 && $saturndeg <= 270.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 91 && $rahudeg <= 120.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 91 && $ketudeg <= 120.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>jupital</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 241 && $moondeg <= 270.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 241 && $sundeg <= 270.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 241 && $marsdeg <= 270.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 241 && $mercurydeg <= 270.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 241 && $jupitaldeg <= 270.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 241 && $venusdeg <= 270.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 241 && $saturndeg <= 270.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 91 && $rahudeg <= 120.9999) {
            $rahudeg = $rahudeg + 150;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 91 && $ketudeg <= 120.9999) {
            $ketudeg = $ketudeg + 150;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>10</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 271 && $moondeg <= 300.9999) {
            echo "moon ";
          }

          if ($sundeg >= 271 && $sundeg <= 300.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 271 && $marsdeg <= 300.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 271 && $mercurydeg <= 300.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 271 && $jupitaldeg <= 300.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 271 && $venusdeg <= 300.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 271 && $saturndeg <= 300.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 61 && $rahudeg <= 90.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 61 && $ketudeg <= 90.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>saturn</td>
        <td>

          <?php include 'ascendant.php';

          if ($moondeg >= 271 && $moondeg <= 300.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 271 && $sundeg <= 300.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 271 && $marsdeg <= 300.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 271 && $mercurydeg <= 300.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 271 && $jupitaldeg <= 300.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 271 && $venusdeg <= 300.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 271 && $saturndeg <= 300.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 61 && $rahudeg <= 90.9999) {
            $rahudeg = $rahudeg + 210;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 61 && $ketudeg <= 90.9999) {
            $ketudeg = $ketudeg + 210;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>11</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 301 && $moondeg <= 330.9999) {
            echo "moon ";
          }

          if ($sundeg >= 301 && $sundeg <= 330.9999) {
            echo "sun ";
          }

          if ($marsdeg >= 301 && $marsdeg <= 330.9999) {
            echo "mars";
          }

          if ($mercurydeg >= 301 && $mercurydeg <= 330.9999) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 301 && $jupitaldeg <= 330.9999) {
            echo "jupiter ";
          }

          if ($venusdeg >= 301 && $venusdeg <= 330.9999) {
            echo "venus ";
          }

          if ($saturndeg >= 301 && $saturndeg <= 330.9999) {
            echo "saturn ";
          }

          if ($rahudeg >= 31 && $rahudeg <= 60.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 31 && $ketudeg <= 60.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>saturn</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 301 && $moondeg <= 330.9999) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 301 && $sundeg <= 330.9999) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 301 && $marsdeg <= 330.9999) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 301 && $mercurydeg <= 330.9999) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 301 && $jupitaldeg <= 330.9999) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 301 && $venusdeg <= 330.9999) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 301 && $saturndeg <= 330.9999) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 31 && $rahudeg <= 60.9999) {
            $rahudeg = $rahudeg + 270;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 31 && $ketudeg <= 60.9999) {
            $ketudeg = $ketudeg + 270;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>12</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 331 && $moondeg <= 360) {
            echo "moon ";
          }

          if ($sundeg >= 331 && $sundeg <= 360) {
            echo "sun ";
          }

          if ($marsdeg >= 331 && $marsdeg <= 360) {
            echo "mars";
          }

          if ($mercurydeg >= 331 && $mercurydeg <= 360) {
            echo "mercury ";
          }

          if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
            echo "jupiter ";
          }

          if ($venusdeg >= 331 && $venusdeg <= 360) {
            echo "venus ";
          }

          if ($saturndeg >= 331 && $saturndeg <= 360) {
            echo "saturn ";
          }

          if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
            echo "rahu ";
          }

          if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
            echo "ketu ";
          }
          ?>
        </td>
        <td>jupiter</td>
        <td>
          <?php include 'ascendant.php';

          if ($moondeg >= 331 && $moondeg <= 360) {
            echo " mo:" . round($moondeg, 2);
          }

          if ($sundeg >= 331 && $sundeg <= 360) {
            echo " su:" . round($sundeg, 2);
          }

          if ($marsdeg >= 331 && $marsdeg <= 360) {
            echo " ma:" . round($marsdeg);
          }

          if ($mercurydeg >= 331 && $mercurydeg <= 360) {
            echo " me:" . round($mercurydeg);
          }

          if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
            echo " ju:" . round($jupitaldeg, 2);
          }

          if ($venusdeg >= 331 && $venusdeg <= 360) {
            echo " ve:" . round($venusdeg, 2);
          }

          if ($saturndeg >= 331 && $saturndeg <= 360) {
            echo " sa:" . round($saturndeg, 2);
          }

          if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
            $rahudeg = $rahudeg + 330;
            echo " ra:" . round($rahudeg, 2);
          }

          if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
            $ketudeg = $ketudeg + 330;
            echo " ke:" . round($ketudeg, 2);
          }
          ?>
        </td>
      </tr>
    </table>

    <div class="allblock">
      <div class="sectionblock">
        <div class="headblock">Numerology</div>
        <a href="numerology.php"><i class="fa-solid fa-1"></i> Numerology</a>

      </div>

      <div class="sectionblock">
        <div class="headblock">Panchang</div>
        <a href="panchang.php"><i class="fa-solid fa-moon"></i> Panchang</a>
      </div>

      <div class="sectionblock">
        <div class="headblock">Celendar</div>
        <a href="celendar.php"><i class="fa-regular fa-calendar-days"></i> Celendar</a>
      </div>


      <div class="sectionblock">
        <div class="headblock">Festival</div>
        <a href="festival.php"><i class="fa-solid fa-f"></i> Festival</a>
      </div>

      <div class="sectionblock">
        <div class="headblock">Jyotish</div>
        <a href="learn_astro.php"><i class="fa-solid fa-hand"></i> Jyotish</a>
      </div>

      <div class="sectionblock">
        <div class="headblock">Planets</div>
        <a href="planets\planets.php"><i class="fa-solid fa-earth-africa "></i> Planets</a>
      </div>

      <div class="sectionblock">
        <div class="headblock">Lyrics</div>
        <a href="lyrics\lyric.php"><i class="fa-solid fa-om "></i> Lyrics</a>
      </div>

      <div class="sectionblock">
        <div class="headblock">Gallery</div>
        <a href="gallery.php"><i class="fa-solid fa-image "></i> Gallery</a>
      </div>

      <div class="sectionblock">
        <div class="headblock">Shop</div>
        <a href="shop.php"><i class="fa-solid fa-cart-shopping "></i> Shop</a>
      </div>

      <div class="sectionblock">
        <div class="headblock">Contact Us</div>
        <a href="contect1.php"><i class="fa-solid fa-envelope "></i> Contact us</a>
      </div>

    </div>
  </div>


  <!-- comment section -->
  <?php

  // Debug session
  // echo "<pre>"; print_r($_SESSION); echo "</pre>";

  // Check if user is logged in by checking uid in session
  $is_logged_in = isset($_SESSION['uid']) && !empty($_SESSION['uid']);
  ?>


  <div class="comment-box" style="margin-top: 100px; margin-left:20%;">
    <?php if ($is_logged_in) { ?>
      <!-- Show comment form for logged in users -->
      <div class="reply-box" >
        <form method="POST" action="">
          <textarea name="comment_text" placeholder="Write a comment..." required ></textarea>
          <button type="submit" name="submit_comment" style="padding: 10px 20px; background-color: #4CAF50; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Post Comment</button>
        </form>
      </div>
    <?php } else { ?>
      <!-- Show login message for non-logged in users -->
      <div class="login-message" style="text-align: center; padding: 20px; background-color: #f8d7da; border-radius: 8px; color: #721c24; border: 1px solid #f5c6cb;">
        <p>Please <a href="log.php" style="color: #004085; text-decoration: none;">login</a> to comment</p>
      </div>
    <?php } ?>

    <!-- Display all comments -->
    <div class="comments-list" style="margin-top: 30px;">
      <?php
      // Fetch and display comments
      $query = "SELECT comments.*, register.us as username 
                     FROM comments 
                     JOIN register ON comments.uid = register.uid 
                     ORDER BY comments.created_at DESC";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='comment' style='padding: 15px; margin-bottom: 15px; background-color: #fff; border: 1px solid #9f2800; border-radius: 8px;'>
                            <strong style='font-size: 18px; color: #333;'>{$row['username']}</strong>
                            <p style='font-size: 16px; color: #555;'>{$row['comment_text']}</p>
                            <small style='font-size: 14px; color: #888;'>Posted on: {$row['created_at']}</small>
                          </div>";
        }
      } else {
        echo "<div class='no-comments' style='text-align: center; font-size: 18px; color: #888;'>No comments yet. Be the first to comment!</div>";
      }
      ?>
    </div>
  </div>



  <?php
  // Handle comment submission
  if (isset($_POST['submit_comment'])) {
    if (!isset($_SESSION['uid'])) {
      echo "<script>
                  alert('Please login to comment!');
                  window.location.href = 'log.php';
                </script>";
      exit();
    }

    $comment_text = mysqli_real_escape_string($conn, $_POST['comment_text']);
    $uid = $_SESSION['uid'];

    $sql = "INSERT INTO comments (uid, comment_text) VALUES ('$uid', '$comment_text')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>
                  alert('Comment posted successfully!');
                  window.location.href = window.location.href;
                </script>";
    } else {
      echo "<script>alert('Error posting comment!');</script>";
    }
  }
  ?>

  <!--footer part-->
  <div class="foot" style="margin-top: 100px;">
    <?php include 'footer.php'; ?>
  </div>

</body>

</html>

<script>
  window.onload = function() {
    loadComments();
    updateTimeAgo();
  };

  function addComment() {
    const commentInput = document.getElementById('comment-input');
    const userId = document.getElementById('user-id').value;
    const username = document.getElementById('username').value;
    const commentText = commentInput.value.trim();

    if (!commentText) {
      alert('Please write a comment first');
      return;
    }

    // Send comment to server
    fetch('add_comment.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          uid: userId,
          comment: commentText
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          // Add new comment to the page
          const commentSection = document.getElementById('comment-section');
          const newComment = `
                <div class="comment">
                    <div class="comment-header">
                        <img src="bgimg.jpg" alt="User Avatar" class="avatar small">
                        <span class="username">${username}</span>
                    </div>
                    <div class="comment-content">
                        <p>${commentText}</p>
                    </div>
                </div>
            `;
          commentSection.insertAdjacentHTML('afterbegin', newComment);

          // Clear input
          commentInput.value = '';
        } else {
          alert('Error posting comment. Please try again.');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Error posting comment. Please try again.');
      });
  }

  function loadComments() {
    const commentSection = document.getElementById("comment-section");
    commentSection.innerHTML = "";

    let comments = JSON.parse(localStorage.getItem("comments")) || [];
    comments.forEach(comment => {
      const newComment = document.createElement("div");
      newComment.classList.add("comment");

      newComment.innerHTML = `
                    <div class="user-info">
                        <img src="bg.jpeg" alt="User Avatar" class="avatar">
                        <span class="username">New User</span>
                        <span class="time" data-time="${comment.time}">${getTimeAgo(comment.time)}</span>
                    </div>
                    <p class="comment-text">${comment.text}</p>

                    <!-- Like & Dislike Section -->
                                <div class="like-dislike">
                    <div>
                        <span class="like-btn" onclick="toggleLike(${comment.id})">
                            <i class="fa fa-thumbs-up"></i> <span id="like-count-${comment.id}">${comment.likes}</span>
                        </span>
                        <span class="dislike-btn" onclick="toggleDislike(${comment.id})">
                            <i class="fa fa-thumbs-down"></i> <span id="dislike-count-${comment.id}">${comment.dislikes}</span>
                        </span>
                         
                    </div>
                    
                </div>

                `;

      // <button class="delete-btn" onclick="deleteComment(${comment.id})">Delete</button>  


      commentSection.prepend(newComment);
    });

    updateTimeAgo();
  }

  function toggleLike(commentId) {
    let comments = JSON.parse(localStorage.getItem("comments")) || [];
    comments = comments.map(comment => {
      if (comment.id === commentId) {
        comment.likes = comment.likes === 0 ? 1 : 0;
        comment.dislikes = 0;
      }
      return comment;
    });

    localStorage.setItem("comments", JSON.stringify(comments));
    loadComments();
  }

  function toggleDislike(commentId) {
    let comments = JSON.parse(localStorage.getItem("comments")) || [];
    comments = comments.map(comment => {
      if (comment.id === commentId) {
        comment.dislikes = comment.dislikes === 0 ? 1 : 0;
        comment.likes = 0;
      }
      return comment;
    });

    localStorage.setItem("comments", JSON.stringify(comments));
    loadComments();
  }

  function deleteComment(commentId) {
    let comments = JSON.parse(localStorage.getItem("comments")) || [];
    comments = comments.filter(comment => comment.id !== commentId);
    localStorage.setItem("comments", JSON.stringify(comments));
    loadComments();
  }

  function updateTimeAgo() {
    const timeElements = document.querySelectorAll(".time");
    timeElements.forEach(el => {
      let timestamp = parseInt(el.getAttribute("data-time"));
      el.textContent = getTimeAgo(timestamp);
    });
  }

  function getTimeAgo(timestamp) {
    let currentTime = Date.now();
    let timeDifference = Math.floor((currentTime - timestamp) / 1000);

    if (timeDifference < 60) return "Just now";
    if (timeDifference < 3600) return `${Math.floor(timeDifference / 60)} minutes ago`;
    if (timeDifference < 86400) return `${Math.floor(timeDifference / 3600)} hours ago`;
    return `${Math.floor(timeDifference / 86400)} days ago`;
  }

  setInterval(updateTimeAgo, 60 * 1000);
</script>

<style>
  .commentsection {
    max-width: 800px;
    margin: 20px auto;
    padding: 15px;
  }

  .comment-box {
    background:rgb(167, 50, 11);
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-height: 560px;
  }

  .reply-box form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 100%;
  }

  .reply-box textarea {
    width: 100%;
    min-height: 50px;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    resize: vertical;
    font-family: inherit;
  }

  .reply-box button {
    padding: 10px 20px;
    background: #9f2800;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    align-self: flex-end;
    transition: background 0.3s ease;
  }

  .reply-box button:hover {
    background: #d57e2f;
  }

  .login-message {
    text-align: center;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 6px;
  }

  .login-message a {
    color: #9f2800;
    text-decoration: none;
    font-weight: bold;
  }

  .login-message a:hover {
    text-decoration: underline;
  }

  .comments-list {
    margin-top: 20px;
  }

  .comment {
    padding: 15px;
    border-bottom: 1px solid #eee;
  }

  .comment:last-child {
    border-bottom: none;
  }

  .comment strong {
    color: #333;
    display: block;
    margin-bottom: 5px;
  }

  .comment p {
    color: #666;
    margin: 5px 0;
  }

  .comment small {
    color: #999;
    font-size: 0.85em;
  }

  .no-comments {
    text-align: center;
    padding: 20px;
    color: #666;
    font-style: italic;
  }
</style>