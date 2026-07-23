<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_kundali</title>
    <style>
        .userdata {
            margin-top: 30px;
            margin-left: 43%;
            font-size: x-large;
            justify-content: center;
        }

        .userdata input {
            width: 200px;
            height: 20px;
        }

        .kundali_container {
            height: 430px;
            width: 690px;
            background-color: antiquewhite;
            outline: solid 1px #9f2800;
            margin: 50px;
            margin-left: 27%;
        }

        .kundaliimg {
            background-image: url('image_search_1735113876436.png');
            background-repeat: no-repeat;
            position: relative;
            height: 100%;
            width: 100%;
        }


        .position_one {
            position: absolute;
            left: 49%;
            top: 14%;
            color: #9f2800;
        }


        .position_two {
            position: absolute;
            left: 18%;
            top: 5%;
            color: #9f2800;
        }


        .position_three {
            position: absolute;
            left: 4%;
            top: 20%;
            color: #9f2800;
        }

        .four {
            position: absolute;
            left: 45%;
            top: 47%;
        }

        .position_four {
            position: absolute;
            left: 18%;
            top: 47%;
            color: #9f2800;
        }

        .five {
            position: absolute;
            left: 22%;
            top: 71%;
        }

        .position_five {
            position: absolute;
            left: 4%;
            top: 67%;

            color: #9f2800;
        }

        .six {
            position: absolute;
            left: 25%;
            top: 77%;
        }

        .position_six {
            position: absolute;
            left: 18%;
            top: 85%;
            color: #9f2800;
        }

        .seven {
            position: absolute;
            left: 49%;
            top: 53%;
        }

        .position_seven {
            position: absolute;
            left: 49%;
            top: 70%;
            color: #9f2800;
        }

        .eight {
            position: absolute;
            right: 25%;
            top: 77%;
        }

        .position_eight {
            position: absolute;
            right: 25%;
            top: 85%;
            color: #9f2800;
        }

        .nine {
            position: absolute;
            right: 20%;
            top: 71%;
        }

        .position_nine {
            position: absolute;
            right: 5%;
            top: 70%;
            color: #9f2800;
        }

        .ten {
            position: absolute;
            right: 45%;
            top: 47%;
        }

        .position_ten {
            position: absolute;
            right: 25%;
            top: 47%;
            color: #9f2800;
        }

        .position_eleven {
            position: absolute;
            right: 5%;
            top: 21%;
            color: #9f2800;
        }

        .twelve {
            position: absolute;
            right: 25%;
            top: 18%;
        }

        .position_twelve {
            position: absolute;
            right: 25%;
            top: 5%;
            color: #9f2800;
        }
    </style>
</head>

<body>
    <div class="userdata">
        <form name="numerology_form" method="post">
            <div class="detail_kundali">
                <input type="text" name="nm" id="nm" placeholder="enter your name"><br><br>
                <input type="date" name="birthdate" placeholder="birthdate"><br><br>
                <input type="time" name="birthtime" placeholder="hh:mm:ss"><br>

                <br><input type="submit" name="submit">
            </div>
        </form>

        <?php
        //include 'ascendant.php';

        if (isset($_POST['submit'])) {
            $username = $_POST['nm'];
            $userbirthdate = $_POST['birthdate'];
            $userbirthtime = $_POST['birthtime'];
            $time = $userbirthtime;
            echo "birthdate = " . $userbirthdate . "  ";
            echo "birthtime = " . $userbirthtime . "  ";
            $userbirthdate = strtotime($userbirthdate);
            $userbirthtime = strtotime($userbirthtime);
            //echo "userstr = " . $userbirthdate . "  ";
            //echo "userstr = " . $userbirthdate . "  ";


            $todaydate = strtotime(date('Y-m-d'));
            $todaytime = strtotime(date('H:i'));
            //echo "todaystr = " . $todaydate . "  ";
            //echo "todaytimestr = " . $todaytime . "  ";
            $diffdate = abs($todaydate - $userbirthdate);
            $difftime = abs($todaytime - $userbirthtime);

            $diffinday = floor($diffdate / (60 * 60 * 24));
            $diffintime = floor(($difftime % (60 * 60 * 24)) / (60 * 60));
            // //$diffinday = $diffinday * -1;
            // echo "diffday-" . $diffinday;
            // echo "difftime-" . $diffintime;

            $date1 = strtotime('2000-01-01');
            $datetime1 = strtotime('00:00');
            $date2 = strtotime('2005-01-01');

            if ($userbirthdate >= $date1) {

                $diffdate = abs($date1 - $userbirthdate);
                $difftime = abs($datetime1 - $userbirthtime);

                $diffinday = floor($diffdate / (60 * 60 * 24));
                $diffintime = floor(($difftime % (60 * 60 * 24)) / (60 * 60));
                //$diffinday = $diffinday * -1;
                echo "diffday-" . $diffinday;
                echo "difftime-" . $diffintime;


                $servername = "localhost";
                $username = "root";
                $password = "";
                $db_name = "pro_astro";
                $conn = new mysqli($servername, $username, $password, $db_name);
                if ($conn->connect_error) {
                    die("connection failed" . $conn->connect_error);
                }

                // Select all records
                $sql = "SELECT * FROM userkundali where date='2000-01-01'";
                $result = $conn->query($sql);

                // Store records in another variable
                $records = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $udegsu = $row['sun'];
                        $udegmo = $row['moon'];
                        $udegma = $row['mars'];
                        $udegme = $row['mercury'];
                        $udegju = $row['jupiter'];
                        $udegve = $row['venus'];
                        $udegsa = $row['saturn'];
                    }
                }

                echo " modata".$udegmo;

                // $mom = 0.18 * $diffinday;
                // echo " bmom".$mom;
                // $mom = $mom / 60;
                // echo " mom".$mom;
                // $udegmo += $mom;
                $udegmo += 13.18 * $diffinday;
                $udegmo += 0.55 * $diffintime;

                echo "before modeg-" . $udegmo;

                while ($udegmo > 360) {
                    $udegmo = $udegmo - 360;
                }

                echo "umodeg-" . $udegmo;


                // sun calculation

                $udegsu += 0.98 * $diffinday;
                $udegsu += 0.25 * $diffintime;

                //echo "before sudeg-" . $udegsu;

                while ($udegsu >= 360) {
                    $udegsu = $udegsu - 360;
                }

                //echo "usudeg-" . $udegsu;


                // mars calculation

                $udegma += 0.55 * $diffinday;
                $udegma += 0.02 * $diffintime;

                //echo "before madeg-" . $udegma;

                while ($udegma >= 360) {
                    $udegma = $udegma - 360;
                }

                //echo "umadeg-" . $udegma;


                // mercury calculation

                $udegme += 1.17 * $diffinday;
                $udegme += 0.03 * $diffintime;

                //echo "before medeg-" . $udegme;

                while ($udegme > 360) {
                    $udegme = $udegme - 360;
                }

                //echo "umedeg-" . $udegme;



                // jupiter calculation

                $udegju += 0.045 * $diffinday;
                $udegju += 0.007 * $diffintiju + $udegju;

                //echo "before judeg-" . $udegju;

                while ($udegju > 360) {
                    $udegju = $udegju - 360;
                }

                //echo "ujudeg-" . $udegju;



                // venus calculation

                $udegve += 1.18 * $diffinday;
                $udegve += 0.02 * $diffintive;

                //echo "before vedeg-" . $udegve;

                while ($udegve > 360) {
                    $udegve = $udegve - 360;
                }

                //echo "uvedeg-" . $udegve;


                // saturn calculation

                //echo "before sadeg-" . $udegsa;
                //echo "sadifday-".$diffintisa;
                $udegsa += 0.042 * $diffinday;
                $udegsa += 0.005 * $diffintisa;
                //echo "before sadeg-" . $udegsa;
                

                while ($udegsa >= 360) {
                    $udegsa = $udegsa - 360;
                }

                //echo "usadeg-" . $udegsa;



                // rahu calculation

                $udegra = 0.066 * $diffinday;
                $udegra = 0.003 * $diffintira + $udegra;

                //echo "before radeg-" . $udegra;

                while ($udegra > 360) {
                    $udegra = $udegra - 360;
                }

                //echo "uradeg-" . $udegra;


                // ketu calculation

                $udegke = 0.066 * $diffinday;
                $udegke = 0.003 * $diffintike + $udegke;

                //echo "before kedeg-" . $udegke;

                while ($udegke > 360) {
                    $udegke = $udegke - 360;
                }

                //echo "ukedeg-" . $udegke;


                  echo "<br><br>ukedeg-" . $udegke;
                  echo "<br>uradeg-" . $udegra;
                  echo "<br>usadeg-" . $udegsa;
                  echo "<br>uvedeg-" . $udegve;
                  echo "<br>ujudeg-" . $udegju;
                  echo "<br>umedeg-" . $udegme;
                  echo "<br>umadeg-" . $udegma;
                  echo "<br>umodeg-" . $udegmo;
                  echo "<br>usudeg-" . $udegsu;

                $sundeg = $udegsu;
                $moondeg = $udegmo;
                $marsdeg = $udegma;
                $mercurydeg = $udegme;
                $jupitaldeg = $udegju;
                $venusdeg = $udegve;
                $saturndeg = $udegsa;
                $rahudeg = $udegra;
                $ketudeg = $udegke;


                date_default_timezone_set("Asia/Calcutta");
                //echo "time=".$time;
                $part = explode(':', $time);

                $h = intval($part[0]);
                $m = intval($part[1]);


                // echo ' h= '.$h.' ';
                // echo ' m= '.$m.' ';
                $ash = 9;
                $asm = 30;

                $dh = $h + $ash;
                $as = $dh * 15;
                //echo ' as= '.$as.' ';

                if ($as < 0) {
                    $as = $as - ($as * 2);
                }
            }

            if ($userbirthdate >= $date1) {

                $diffdate = abs($date1 - $userbirthdate);
                $difftime = abs($datetime1 - $userbirthtime);

                $diffinday = floor($diffdate / (60 * 60 * 24));
                $diffintime = floor(($difftime % (60 * 60 * 24)) / (60 * 60));
                //$diffinday = $diffinday * -1;
                echo "diffday-" . $diffinday;
                echo "difftime-" . $diffintime;


                $servername = "localhost";
                $username = "root";
                $password = "";
                $db_name = "pro_astro";
                $conn = new mysqli($servername, $username, $password, $db_name);
                if ($conn->connect_error) {
                    die("connection failed" . $conn->connect_error);
                }

                // Select all records
                $sql = "SELECT * FROM userkundali where date='2010-01-01'";
                $result = $conn->query($sql);

                // Store records in another variable
                $records = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $udegsu = $row['sun'];
                        $udegmo = $row['moon'];
                        $udegma = $row['mars'];
                        $udegme = $row['mercury'];
                        $udegju = $row['jupiter'];
                        $udegve = $row['venus'];
                        $udegsa = $row['saturn'];
                    }
                }

                echo " modata".$udegmo;

                // $mom = 0.18 * $diffinday;
                // echo " bmom".$mom;
                // $mom = $mom / 60;
                // echo " mom".$mom;
                // $udegmo += $mom;
                $udegmo += 13.18 * $diffinday;
                $udegmo += 0.55 * $diffintime;

                echo "before modeg-" . $udegmo;

                while ($udegmo > 360) {
                    $udegmo = $udegmo - 360;
                }

                echo "umodeg-" . $udegmo;


                // sun calculation

                $udegsu += 0.98 * $diffinday;
                $udegsu += 0.25 * $diffintime;

                //echo "before sudeg-" . $udegsu;

                while ($udegsu >= 360) {
                    $udegsu = $udegsu - 360;
                }

                //echo "usudeg-" . $udegsu;


                // mars calculation

                $udegma += 0.55 * $diffinday;
                $udegma += 0.02 * $diffintime;

                //echo "before madeg-" . $udegma;

                while ($udegma >= 360) {
                    $udegma = $udegma - 360;
                }

                //echo "umadeg-" . $udegma;


                // mercury calculation

                $udegme += 1.17 * $diffinday;
                $udegme += 0.03 * $diffintime;

                //echo "before medeg-" . $udegme;

                while ($udegme > 360) {
                    $udegme = $udegme - 360;
                }

                //echo "umedeg-" . $udegme;



                // jupiter calculation

                $udegju += 0.045 * $diffinday;
                $udegju += 0.007 * $diffintiju + $udegju;

                //echo "before judeg-" . $udegju;

                while ($udegju > 360) {
                    $udegju = $udegju - 360;
                }

                //echo "ujudeg-" . $udegju;



                // venus calculation

                $udegve += 1.18 * $diffinday;
                $udegve += 0.02 * $diffintive;

                //echo "before vedeg-" . $udegve;

                while ($udegve > 360) {
                    $udegve = $udegve - 360;
                }

                //echo "uvedeg-" . $udegve;


                // saturn calculation

                //echo "before sadeg-" . $udegsa;
                //echo "sadifday-".$diffintisa;
                $udegsa += 0.042 * $diffinday;
                $udegsa += 0.005 * $diffintisa;
                //echo "before sadeg-" . $udegsa;
                

                while ($udegsa >= 360) {
                    $udegsa = $udegsa - 360;
                }

                //echo "usadeg-" . $udegsa;



                // rahu calculation

                $udegra = 0.066 * $diffinday;
                $udegra = 0.003 * $diffintira + $udegra;

                //echo "before radeg-" . $udegra;

                while ($udegra > 360) {
                    $udegra = $udegra - 360;
                }

                //echo "uradeg-" . $udegra;


                // ketu calculation

                $udegke = 0.066 * $diffinday;
                $udegke = 0.003 * $diffintike + $udegke;

                //echo "before kedeg-" . $udegke;

                while ($udegke > 360) {
                    $udegke = $udegke - 360;
                }

                //echo "ukedeg-" . $udegke;


                  echo "<br><br>ukedeg-" . $udegke;
                  echo "<br>uradeg-" . $udegra;
                  echo "<br>usadeg-" . $udegsa;
                  echo "<br>uvedeg-" . $udegve;
                  echo "<br>ujudeg-" . $udegju;
                  echo "<br>umedeg-" . $udegme;
                  echo "<br>umadeg-" . $udegma;
                  echo "<br>umodeg-" . $udegmo;
                  echo "<br>usudeg-" . $udegsu;

                $sundeg = $udegsu;
                $moondeg = $udegmo;
                $marsdeg = $udegma;
                $mercurydeg = $udegme;
                $jupitaldeg = $udegju;
                $venusdeg = $udegve;
                $saturndeg = $udegsa;
                $rahudeg = $udegra;
                $ketudeg = $udegke;


                date_default_timezone_set("Asia/Calcutta");
                //echo "time=".$time;
                $part = explode(':', $time);

                $h = intval($part[0]);
                $m = intval($part[1]);


                // echo ' h= '.$h.' ';
                // echo ' m= '.$m.' ';
                $ash = 9;
                $asm = 30;

                $dh = $h + $ash;
                $as = $dh * 15;
                //echo ' as= '.$as.' ';

                if ($as < 0) {
                    $as = $as - ($as * 2);
                }
            }
        }

        ?>
    </div>

    <div class="kundali_container">
        <div class="kundaliimg">

            <span class="one"></span>
            <div class="position_one"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "1";
                                            if ($moondeg >= 0 && $moondeg <= 30.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "2";
                                            if ($moondeg >= 31 && $moondeg <= 60.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "3";
                                            if ($moondeg >= 61 && $moondeg <= 90.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "4";
                                            if ($moondeg >= 91 && $moondeg <= 120.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "5";
                                            if ($moondeg >= 121 && $moondeg <= 150.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "6";
                                            if ($moondeg >= 151 && $moondeg <= 180.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "7";
                                            if ($moondeg >= 181 && $moondeg <= 210.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "8";
                                            if ($moondeg >= 211 && $moondeg <= 240.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "9";
                                            if ($moondeg >= 241 && $moondeg <= 270.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "10";
                                            if ($moondeg >= 271 && $moondeg <= 300.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "11";
                                            if ($moondeg >= 301 && $moondeg <= 330.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "12";
                                            if ($moondeg >= 331 && $moondeg <= 360.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }
                                        ?></div>


            <span class="two"></span>
            <div class="position_two"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        ?></div>


            <span class="three"></span>
            <div class="position_three"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        ?></div>


            <span class="four"></span>
            <div class="position_four"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        } ?> </div>


            <span class="five"></span>
            <div class="position_five"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120.9999) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120.9999) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120.9999) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120.9999) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120.9999) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120.9999) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120.9999) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }
                                        ?></div>


            <span class="six"></span>
            <div class="position_six"><?php if ($as >= 0 && $as <= 29) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }


                                        ?></div>


            <span class="seven"></span>
            <div class="position_seven"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        ?></div>


            <span class="eight"></span>
            <div class="position_eight"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        ?></div>


            <span class="nine"></span>
            <div class="position_nine"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        ?></div>


            <span class="ten"></span>
            <div class="position_ten"><?php
                                        if ($as >= 0 && $as <= 29) {
                                            echo "10<br>";
                                            if ($moondeg >= 271 && $moondeg <= 300) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 271 && $sundeg <= 300) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 30 && $as <= 59) {
                                            echo "11<br>";
                                            if ($moondeg >= 301 && $moondeg <= 330) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 301 && $sundeg <= 330) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 60 && $as <= 89) {
                                            echo "12<br>";
                                            if ($moondeg >= 331 && $moondeg <= 360) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 331 && $sundeg <= 360) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 90 && $as <= 119) {
                                            echo "1<br>";
                                            if ($moondeg >= 0 && $moondeg <= 30) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 0 && $sundeg <= 30) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 0 && $marsdeg <= 30) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 0 && $mercurydeg <= 30) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 0 && $jupitaldeg <= 30) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 0 && $venusdeg <= 30) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 0 && $saturndeg <= 30) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 120 && $as <= 149) {
                                            echo "2<br>";
                                            if ($moondeg >= 31 && $moondeg <= 60) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 31 && $sundeg <= 60) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 150 && $as <= 179) {
                                            echo "3<br>";
                                            if ($moondeg >= 61 && $moondeg <= 90) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 61 && $sundeg <= 90) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 180 && $as <= 209) {
                                            echo "4<br>";
                                            if ($moondeg >= 91 && $moondeg <= 120) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 91 && $sundeg <= 120) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 210 && $as <= 239) {
                                            echo "5<br>";
                                            if ($moondeg >= 121 && $moondeg <= 150) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 121 && $sundeg <= 150) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 240 && $as <= 269) {
                                            echo "6<br>";
                                            if ($moondeg >= 151 && $moondeg <= 180) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 151 && $sundeg <= 180) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 270 && $as <= 299) {
                                            echo "7<br>";
                                            if ($moondeg >= 181 && $moondeg <= 210) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 181 && $sundeg <= 210) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 300 && $as <= 329) {
                                            echo "8<br>";
                                            if ($moondeg >= 211 && $moondeg <= 240) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 211 && $sundeg <= 240) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }

                                        if ($as >= 330 && $as <= 359) {
                                            echo "9<br>";
                                            if ($moondeg >= 241 && $moondeg <= 270) {
                                                echo "<span id='mo'>mo</span> ";
                                            }
                                            if ($sundeg >= 241 && $sundeg <= 270) {
                                                echo "<span id='su'>su</span> ";
                                            }
                                            if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                echo "<span id='ma'>ma</span> ";
                                            }
                                            if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                echo "<span id='me'>me</span> ";
                                            }
                                            if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                echo "<span id='ju'>ju</span> ";
                                            }
                                            if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                echo "<span id='ve'>ve</span> ";
                                            }
                                            if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                echo "<span id='sa'>sa</span> ";
                                            }
                                            if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                echo "<span id='ra'>ra</span> ";
                                            }
                                            if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                echo "<span id='ke'>ke</span> ";
                                            }
                                        }
                                        ?></div>


            <span class="eleven"></span>
            <div class="position_eleven"><?php
                                            if ($as >= 0 && $as <= 29) {
                                                echo "11<br>";
                                                if ($moondeg >= 301 && $moondeg <= 330) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 301 && $sundeg <= 330) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 30 && $as <= 59) {
                                                echo "12<br>";
                                                if ($moondeg >= 331 && $moondeg <= 360) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 331 && $sundeg <= 360) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 60 && $as <= 89) {
                                                echo "1<br>";
                                                if ($moondeg >= 0 && $moondeg <= 30.9999) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 0 && $sundeg <= 30.9999) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 0 && $marsdeg <= 30.9999) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 0 && $mercurydeg <= 30.9999) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 0 && $jupitaldeg <= 30.9999) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 0 && $venusdeg <= 30.9999) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 0 && $saturndeg <= 30.9999) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 90 && $as <= 119) {
                                                echo "2<br>";
                                                if ($moondeg >= 31 && $moondeg <= 60.9999) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 31 && $sundeg <= 60.9999) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 31 && $marsdeg <= 60.9999) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 31 && $mercurydeg <= 60.9999) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 31 && $jupitaldeg <= 60.9999) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 31 && $venusdeg <= 60.9999) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 31 && $saturndeg <= 60.9999) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 120 && $as <= 149) {
                                                echo "3<br>";
                                                if ($moondeg >= 61 && $moondeg <= 90) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 61 && $sundeg <= 90) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 150 && $as <= 179) {
                                                echo "4<br>";
                                                if ($moondeg >= 91 && $moondeg <= 120) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 91 && $sundeg <= 120) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 180 && $as <= 209) {
                                                echo "5<br>";
                                                if ($moondeg >= 121 && $moondeg <= 150) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 121 && $sundeg <= 150) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 210 && $as <= 239) {
                                                echo "6<br>";
                                                if ($moondeg >= 151 && $moondeg <= 180) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 151 && $sundeg <= 180) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 240 && $as <= 269) {
                                                echo "7<br>";
                                                if ($moondeg >= 181 && $moondeg <= 210) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 181 && $sundeg <= 210) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 270 && $as <= 299) {
                                                echo "8<br>";
                                                if ($moondeg >= 211 && $moondeg <= 240) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 211 && $sundeg <= 240) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 300 && $as <= 329) {
                                                echo "9<br>";
                                                if ($moondeg >= 241 && $moondeg <= 270) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 241 && $sundeg <= 270) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 330 && $as <= 359) {
                                                echo "10<br>";
                                                if ($moondeg >= 271 && $moondeg <= 300) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 271 && $sundeg <= 300) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            ?></div>


            <span class="twelve"></span>
            <div class="position_twelve"><?php
                                            if ($as >= 0 && $as <= 29) {
                                                echo "12<br>";
                                                if ($moondeg >= 331 && $moondeg <= 360) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 331 && $sundeg <= 360) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 331 && $marsdeg <= 360) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 331 && $mercurydeg <= 360) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 331 && $venusdeg <= 360) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 331 && $saturndeg <= 360) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 30 && $as <= 59) {
                                                echo "1<br>";
                                                if ($moondeg >= 1 && $moondeg <= 30) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 1 && $sundeg <= 30) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 1 && $marsdeg <= 30) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 1 && $mercurydeg <= 30) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 1 && $jupitaldeg <= 30) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 1 && $venusdeg <= 30) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 1 && $saturndeg <= 30) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 331 && $rahudeg <= 360) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 331 && $ketudeg <= 360) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 60 && $as <= 89) {
                                                echo "2<br>";
                                                if ($moondeg >= 31 && $moondeg <= 60) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 31 && $sundeg <= 60) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 31 && $marsdeg <= 60) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 31 && $mercurydeg <= 60) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 31 && $jupitaldeg <= 60) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 31 && $venusdeg <= 60) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 31 && $saturndeg <= 60) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 300 && $rahudeg <= 330.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 300 && $ketudeg <= 330.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 90 && $as <= 119) {
                                                echo "3<br>";
                                                if ($moondeg >= 61 && $moondeg <= 90) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 61 && $sundeg <= 90) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 61 && $marsdeg <= 90) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 61 && $mercurydeg <= 90) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 61 && $jupitaldeg <= 90) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 61 && $venusdeg <= 90) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 61 && $saturndeg <= 90) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 270 && $rahudeg <= 300.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 270 && $ketudeg <= 300.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 120 && $as <= 149) {
                                                echo "4<br>";
                                                if ($moondeg >= 91 && $moondeg <= 120) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 91 && $sundeg <= 120) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 91 && $marsdeg <= 120) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 91 && $mercurydeg <= 120) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 91 && $jupitaldeg <= 120) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 91 && $venusdeg <= 120) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 91 && $saturndeg <= 120) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 240 && $rahudeg <= 270.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 240 && $ketudeg <= 270.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 150 && $as <= 179) {
                                                echo "5<br>";
                                                if ($moondeg >= 121 && $moondeg <= 150) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 121 && $sundeg <= 150) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 121 && $marsdeg <= 150) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 121 && $mercurydeg <= 150) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 121 && $jupitaldeg <= 150) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 121 && $venusdeg <= 150) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 121 && $saturndeg <= 150) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 210 && $rahudeg <= 240.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 210 && $ketudeg <= 240.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 180 && $as <= 209) {
                                                echo "6<br>";
                                                if ($moondeg >= 151 && $moondeg <= 180) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 151 && $sundeg <= 180) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 151 && $marsdeg <= 180) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 151 && $mercurydeg <= 180) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 151 && $jupitaldeg <= 180) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 151 && $venusdeg <= 180) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 151 && $saturndeg <= 180) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 180 && $rahudeg <= 210.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 180 && $ketudeg <= 210.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 210 && $as <= 239) {
                                                echo "7<br>";
                                                if ($moondeg >= 181 && $moondeg <= 210) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 181 && $sundeg <= 210) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 181 && $marsdeg <= 210) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 181 && $mercurydeg <= 210) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 181 && $jupitaldeg <= 210) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 181 && $venusdeg <= 210) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 181 && $saturndeg <= 210) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 150 && $rahudeg <= 180.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 150 && $ketudeg <= 180.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 240 && $as <= 269) {
                                                echo "8<br>";
                                                if ($moondeg >= 211 && $moondeg <= 240) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 211 && $sundeg <= 240) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 211 && $marsdeg <= 240) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 211 && $mercurydeg <= 240) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 211 && $jupitaldeg <= 240) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 211 && $venusdeg <= 240) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 211 && $saturndeg <= 240) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 120 && $rahudeg <= 150.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 120 && $ketudeg <= 150.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 270 && $as <= 299) {
                                                echo "9<br>";
                                                if ($moondeg >= 241 && $moondeg <= 270) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 241 && $sundeg <= 270) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 241 && $marsdeg <= 270) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 241 && $mercurydeg <= 270) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 241 && $jupitaldeg <= 270) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 241 && $venusdeg <= 270) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 241 && $saturndeg <= 270) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 90 && $rahudeg <= 120.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 90 && $ketudeg <= 120.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 300 && $as <= 329) {
                                                echo "10<br>";
                                                if ($moondeg >= 271 && $moondeg <= 300) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 271 && $sundeg <= 300) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 271 && $marsdeg <= 300) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 271 && $mercurydeg <= 300) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 271 && $jupitaldeg <= 300) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 271 && $venusdeg <= 300) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 271 && $saturndeg <= 300) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 60 && $rahudeg <= 90.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 60 && $ketudeg <= 90.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }

                                            if ($as >= 330 && $as <= 359) {
                                                echo "11<br>";
                                                if ($moondeg >= 301 && $moondeg <= 330) {
                                                    echo "<span id='mo'>mo</span> ";
                                                }
                                                if ($sundeg >= 301 && $sundeg <= 330) {
                                                    echo "<span id='su'>su</span> ";
                                                }
                                                if ($marsdeg >= 301 && $marsdeg <= 330) {
                                                    echo "<span id='ma'>ma</span> ";
                                                }
                                                if ($mercurydeg >= 301 && $mercurydeg <= 330) {
                                                    echo "<span id='me'>me</span> ";
                                                }
                                                if ($jupitaldeg >= 301 && $jupitaldeg <= 330) {
                                                    echo "<span id='ju'>ju</span> ";
                                                }
                                                if ($venusdeg >= 301 && $venusdeg <= 330) {
                                                    echo "<span id='ve'>ve</span> ";
                                                }
                                                if ($saturndeg >= 301 && $saturndeg <= 330) {
                                                    echo "<span id='sa'>sa</span> ";
                                                }
                                                if ($rahudeg >= 30 && $rahudeg <= 60.9999) {
                                                    echo "<span id='ra'>ra</span> ";
                                                }
                                                if ($ketudeg >= 30 && $ketudeg <= 60.9999) {
                                                    echo "<span id='ke'>ke</span> ";
                                                }
                                            }
                                            ?></div>

        </div>
    </div>

</body>

</html>