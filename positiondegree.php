<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php

// moon degree calculation

$datemo = strtotime('2025-02-03 23:16:00');
//echo "lastday = ".$datemo."<br>"; 
$today = strtotime(date('Y-m-d H:i:s'));
//echo date('Y n d');
//echo "today = ".$datetomo."<br>";
$difmo = abs($today - $datemo);

$diffddmo = floor($difmo / (60 * 60 * 24));
$diffhhmo = floor(($difmo % (60 * 60 * 24)) / (60 * 60));
//$diffmmmo = floor(($dif % (60*60)) / 60);
//$diffssmo = floor($dif % 60);
//echo "day mo = ".$diffdaymo."<br>";
$degddmo = 13.18 * $diffddmo;
$deghhmo = 0.55 * $diffhhmo;
$degmo = $degddmo + $deghhmo;
//echo "deg mo = ".$degmo."<br>";
while ($degmo > 360) {
    $degmo = $degmo / 360;
}

//sun deree calculate

$sunlastdate = strtotime('2024-04-13 21:16:00');
$todaysu = strtotime(date('Y-m-d H:i:s'));
$diffsu = abs($todaysu - $sunlastdate);
//echo "diff su = ".$diffsu."<br>";
$diffddsu = floor($diffsu / (60 * 60 * 24));
//echo "day su = ".$diffddsu."<br>";
$diffhhsu = floor(($diffsu % (60 * 60 * 24)) / (60 * 60));
//echo "hh su = ".$diffhhsu."<br>";
$diffmmsu = floor(($diffsu % (60 * 60)) / 60);
$degddsu = 0.98 * $diffddsu;
$deghhsu = 0.033 * $diffhhsu;
$degmmsu = 0.0417 * $diffmmsu;
$degsu = $degddsu + $deghhsu + $degmmsu;

while ($degsu > 360) {
    $degsu = $degsu / 360 * 100;
}
//echo "deg su = ".$degsu."<br>";

//mars deree calculate

$marslastdate = strtotime('2024-06-01 16:16:00');
$todayma = strtotime(date('Y-m-d H:i:s'));
$diffma = abs($todayma - $marslastdate);
//echo "diff su = ".$diffsu."<br>";
$diffddma = floor($diffma / (60 * 60 * 24));
//echo "day ma = ".$diffddma."<br>";
$diffhhma = floor(($diffma % (60 * 60 * 24)) / (60 * 60));
//echo "hh su = ".$diffhhsu."<br>";
//$diffmmma = floor(($diffma % (60*60)) / 60);
$degddma = 0.326 * $diffddma;
$deghhma = 0.014 * $diffhhma;
//$degmmma = 0.0417 * $diffmmma;
$degma = $degddma + $deghhma; //+ $degmmma;

while ($degma > 360) {
    $degma = $degma / 360 * 100;
}
//echo "deg ma = ".$degma."<br>";

//mercury deree calculate

$mercurylastdate = strtotime('2024-05-10 19:04:00');
$todayme = strtotime(date('Y-m-d H:i:s'));
$diffme = abs($todayme - $mercurylastdate);
$diffddme = floor($diffme / (60 * 60 * 24));
//echo "day me = ".$diffddme."<br>";
$diffhhme = floor(($diffme % (60 * 60 * 24)) / (60 * 60));
//echo "hh su = ".$diffhhsu."<br>";
$diffmmme = floor(($diffme % (60 * 60)) / 60);
$degddme = 1.08 * $diffddme;
$deghhme = 0.03 * $diffhhme;
$degmmme = 0.03 * $diffmmme;
$degme = $degddme + $deghhme + $degmmme;

while ($degme > 360) {
    $degme = $degme / 360 * 100;
}
//echo "deg me = ".$degme."<br>";

//jupital deree calculate

$jupitallastdate = strtotime('2023-04-22 07:04:00');
$todayju = strtotime(date('Y-m-d H:i:s'));
$diffju = abs($todayju - $jupitallastdate);
$diffddju = floor($diffju / (60 * 60 * 24));
//echo "day ju = ".$diffddju."<br>";
$diffhhju = floor(($diffju % (60 * 60 * 24)) / (60 * 60));
//echo "hh su = ".$diffhhsu."<br>";
$diffmmju = floor(($diffju % (60 * 60)) / 60);
$degddju = 0.071 * $diffddju;
$deghhju = 0.007 * $diffhhju;
$degmmju = 0.0027 * $diffmmju;
$degju = $degddju + $deghhju + $degmmju;

while ($degju > 360) {
    $degju = $degju / 360 * 100;
}
//echo "deg ju = ".$degju."<br>";

//saturn deree calculate

$saturnlastdate = strtotime('1998-04-18 00:00:00');
$todaysa = strtotime(date('Y-m-d H:i:s'));
$diffsa = abs($todaysa - $saturnlastdate);
$diffddsa = floor($diffsa / (60 * 60 * 24));
//echo "day sa = ".$diffddsa."<br>";
$diffhhsa = floor(($diffsa % (60 * 60 * 24)) / (60 * 60));
//echo "hh su = ".$diffhhsu."<br>";
$diffmmsa = floor(($diffsa % (60 * 60)) / 60);
$degddsa = 0.033 * $diffddsa;
$deghhsa = 0.005 * $diffhhsa;
$degmmsa = 0.001 * $diffmmsa;
$degsa = $degddsa + $deghhsa + $degmmsa;

while ($degsa > 360) {
    $degsa = $degsa / 360 * 100;
}
//echo "deg sa = ".$degsa."<br>";

//venus deree calculate

$venuslastdate = strtotime('2024-04-25 00:08:00');
$todayve = strtotime(date('Y-m-d H:i:s'));
$diffve = abs($todayve - $venuslastdate);
$diffddve = floor($diffve / (60 * 60 * 24));
//echo "day ve = ".$diffddve."<br>";
$diffhhve = floor(($diffve % (60 * 60 * 24)) / (60 * 60));
//echo "hh su = ".$diffhhsu."<br>";
$diffmmve = floor(($diffve % (60 * 60)) / 60);
$degddve = 1.165 * $diffddve;
$deghhve = 0.02 * $diffhhve;
$degmmve = 0.01 * $diffmmve;
$degve = $degddve + $deghhve + $degmmve;

while ($degve > 360) {
    $degve = $degve / 360 * 100;
}
//echo "deg ve = ".$degve."<br>";

//rahu deree calculate

$rahulastdate = strtotime('2025-04-30 00:08:00');
$todayra = strtotime(date('Y-m-d H:i:s'));
$diffra = abs($todayra - $rahulastdate);
$diffddra = floor($diffra / (60 * 60 * 24));
//echo "day ra = ".$diffddra."<br>";
$diffhhra = floor(($diffra % (60 * 60 * 24)) / (60 * 60));
//echo "hh su = ".$diffhhsu."<br>";
$diffmmra = floor(($diffra % (60 * 60)) / 60);
$degddra = 0.066 * $diffddra;
$deghhra = 0.003 * $diffhhra;
$degmmra = 0.001 * $diffmmra;
$degra = $degddra + $deghhra + $degmmra;
//echo "deg ra = ".$degra."<br>";
while ($degra > 360) {
    $degra = $degra / 360 * 100;
}

//ketu deree calculate

if ($degra >= 180) {
    $degke = $degra - 180;
}

if ($degra <= 180) {
    $degke = $degra + 180;
}

// $ketulastdate = strtotime('2024-04-25 00:08:00');
// $todayke = strtotime(date('Y-m-d H:i:s'));
// $diffke = abs($todayke-$ketulastdate);
// $diffddke = floor($diffke/(60*60*24));
// //echo "day ke = ".$diffddke."<br>";
// $diffhhke = floor(($diffke % (60*60*24)) / (60 * 60));
// //echo "hh su = ".$diffhhsu."<br>";
// $diffmmke = floor(($diffke % (60*60)) / 60);
// $degddke = 0.066 * $diffddke;
// $deghhke = 0.003 * $diffhhke;
// $degmmke = 0.01 * $diffmmke;
// $degke = $degddke + $deghhke + $degmmke;

// while($degke>360)
// {
//     $degke=$degke/360*100;
// }
// //echo "deg ke = ".$degke."<br>";


$sundeg = $degsu;
$moondeg = $degmo;
$marsdeg = $degma;
$mercurydeg = $degme;
$jupitaldeg = $degju;
$venusdeg = $degve;
$saturndeg = $degsa;
$rahudeg = $degra;
$ketudeg = $degke;

date_default_timezone_set("Asia/Calcutta");
$h = date("H");
//echo ' h= '.$h.' ';
$m = date("i");
//echo ' m= '.$m.' ';
$ash = 10;
$asm = 39;

$dh = $h - $ash;
$as = $dh * 15;
//echo ' as= '.$as.' ';

?>