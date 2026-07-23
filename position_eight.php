<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #moon {
            color: aqua;
            font-size: 20px;
        }

        #sun {
            color: yellow;
            font-size: 20px;
        }

        #mar {
            color: red;
            font-size: 20px;
        }

        #mer {
            color: green;
            font-size: 20px;
        }

        #jup {
            color: salmon;
            font-size: 20px;
        }

        #ven {
            color: blue;
            font-size: 20px;
        }

        #sat {
            color: black;
            font-size: 20px;
        }
    </style>
</head>

<body>

</body>

</html>

<?php

include 'ascendant.php';

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


?>