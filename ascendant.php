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
$degddmo = 13.19 * $diffddmo;
$deghhmo = 0.65 * $diffhhmo;
$degmo = $degddmo + $deghhmo;

while ($degmo > 360) {
  $degmo = $degmo - 360;
}
//echo "deg mo = ".$degmo."<br>";

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
$degddma = 0.3 * $diffddma;
$deghhma = 0.014 * $diffhhma;
//$degmmma = 0.0417 * $diffmmma;
$degma = $degddma + $deghhma; //+ $degmmma;

while ($degma > 360) {
  $degma = $degma - 360;
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
$degddme = 1.0 * $diffddme;
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
$degddsa = 0.0337 * $diffddsa;
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
$degddve = 1.99 * $diffddve;
$deghhve = 0.02 * $diffhhve;
$degmmve = 0.01 * $diffmmve;
$degve = $degddve + $deghhve + $degmmve;
//echo "deg ve = ".$degve."<br>";
while ($degve > 360) {
  $degve = $degve - 360;
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

while ($degra > 360) {
  $degra = $degra - 360;
}
// echo "deg ra = ".$degra."<br>";

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
$ash = 8;
$asm = 39;

$dh = $h - $ash;
$as = $dh * 15;
//echo ' as= '.$as.' ';

if($as<0){
  $as = $as - ($as * 2);
}

// date_default_timezone_set("Asia/Calcutta");
// $h = date("H");
// //echo ' h= '.$h.' ';
// $m = date("i");
// //echo ' m= '.$m.' ';
// $ash = 10;
// $asm = 39;

// if($m>=39)
// {
//     $dm = $m - $asm;
// }
// else{
//     $dm = $asm - $m;
// }
// if($h>=10)
// {
//     $dh = $h - $ash;
// }
// else
// {
//     $dh = $ash - $h;
// }



if ($moondeg >= 0 && $moondeg <= 30.9999) {
  $mosign = "aries";
}

if ($sundeg >= 0 && $sundeg <= 30.9999) {
  $susign = "aries";
}

if ($marsdeg >= 0 && $marsdeg <= 30.9999) {
  $masign = "aries";
}

if ($mercurydeg >= 0 && $mercurydeg <= 30.9999) {
  $mesign = "aries";
}

if ($jupitaldeg >= 0 && $jupitaldeg <= 30.9999) {
  $jusign = "aries";
}

if ($venusdeg >= 0 && $venusdeg <= 30.9999) {
  $vesign = "aries";
}

if ($saturndeg >= 0 && $saturndeg <= 30.9999) {
  $sasign = "aries";
}

if ($rahudeg >= 331 && $rahudeg <= 360) {
  $rasign = "aries";
}

if ($ketudeg >= 331 && $ketudeg <= 360) {
  $kesign = "aries";
}

if ($moondeg >= 31 && $moondeg <= 60.9999) {
  $mosign = "taurus";
}

if ($sundeg >= 31 && $sundeg <= 60.9999) {
  $susign = "taurus";
}

if ($marsdeg >= 31 && $marsdeg <= 60.9999) {
  $masign = "taurus";
}

if ($mercurydeg >= 31 && $mercurydeg <= 60.9999) {
  $mesign = "taurus";
}

if ($jupitaldeg >= 31 && $jupitaldeg <= 60.9999) {
  $jusign = "taurus";
}

if ($venusdeg >= 31 && $venusdeg <= 60.9999) {
  $vesign = "taurus";
}

if ($saturndeg >= 31 && $saturndeg <= 60.9999) {
  $sasign = "taurus";
}

if ($rahudeg >= 301 && $rahudeg <= 330.9999) {
  $rasign = "taurus";
}

if ($ketudeg >= 301 && $ketudeg <= 330.9999) {
  $kesign = "taurus";
}

if ($moondeg >= 61 && $moondeg <= 90.9999) {
  $mosign = "Gemini";
}

if ($sundeg >= 61 && $sundeg <= 90.9999) {
  $susign = "Gemini";
}

if ($marsdeg >= 61 && $marsdeg <= 90.9999) {
  $masign = "Gemini";
}

if ($mercurydeg >= 61 && $mercurydeg <= 90.9999) {
  $mesign = "Gemini";
}

if ($jupitaldeg >= 61 && $jupitaldeg <= 90.9999) {
  $jusign = "Gemini";
}

if ($venusdeg >= 61 && $venusdeg <= 90.9999) {
  $vesign = "Gemini";
}

if ($saturndeg >= 61 && $saturndeg <= 90.9999) {
  $sasign = "Gemini";
}

if ($rahudeg >= 271 && $rahudeg <= 300.9999) {
  $rasign = "Gemini";
}

if ($ketudeg >= 271 && $ketudeg <= 300.9999) {
  $kesign = "Gemini";
}

if ($moondeg >= 91 && $moondeg <= 120.9999) {
  $mosign = "Cancer";
}

if ($sundeg >= 91 && $sundeg <= 120.9999) {
  $susign = "Cancer";
}

if ($marsdeg >= 91 && $marsdeg <= 120.9999) {
  $masign = "Cancer";
}

if ($mercurydeg >= 91 && $mercurydeg <= 120.9999) {
  $mesign = "Cancer";
}

if ($jupitaldeg >= 91 && $jupitaldeg <= 120.9999) {
  $jusign = "Cancer";
}

if ($venusdeg >= 91 && $venusdeg <= 120.9999) {
  $vesign = "Cancer";
}

if ($saturndeg >= 91 && $saturndeg <= 120.9999) {
  $sasign = "Cancer";
}

if ($rahudeg >= 241 && $rahudeg <= 270.9999) {
  $rasign = "Cancer";
}

if ($ketudeg >= 241 && $ketudeg <= 270.9999) {
  $kesign = "Cancer";
}

if ($moondeg >= 121 && $moondeg <= 150.9999) {
  $mosign = "Leo";
}

if ($sundeg >= 121 && $sundeg <= 150.9999) {
  $susign = "Leo";
}

if ($marsdeg >= 121 && $marsdeg <= 150.9999) {
  $masign = "Leo";
}

if ($mercurydeg >= 121 && $mercurydeg <= 150.9999) {
  $mesign = "Leo";
}

if ($jupitaldeg >= 121 && $jupitaldeg <= 150.9999) {
  $jusign = "Leo";
}

if ($venusdeg >= 121 && $venusdeg <= 150.9999) {
  $vesign = "Leo";
}

if ($saturndeg >= 121 && $saturndeg <= 150.9999) {
  $sasign = "Leo";
}

if ($rahudeg >= 211 && $rahudeg <= 240.9999) {
  $rasign = "Leo";
}

if ($ketudeg >= 211 && $ketudeg <= 240.9999) {
  $kesign = "Leo";
}

if ($moondeg >= 151 && $moondeg <= 180.9999) {
  $mosign = "Virgo";
}

if ($sundeg >= 151 && $sundeg <= 180.9999) {
  $susign = "Virgo";
}

if ($marsdeg >= 151 && $marsdeg <= 180.9999) {
  $masign = "Virgo";
}

if ($mercurydeg >= 151 && $mercurydeg <= 180.9999) {
  $mesign = "Virgo";
}

if ($jupitaldeg >= 151 && $jupitaldeg <= 180.9999) {
  $jusign = "Virgo";
}

if ($venusdeg >= 151 && $venusdeg <= 180.9999) {
  $vesign = "Virgo";
}

if ($saturndeg >= 151 && $saturndeg <= 180.9999) {
  $sasign = "Virgo";
}

if ($rahudeg >= 181 && $rahudeg <= 210.9999) {
  $rasign = "Virgo";
}

if ($ketudeg >= 181 && $ketudeg <= 210.9999) {
  $kesign = "Virgo";
}

if ($moondeg >= 181 && $moondeg <= 210.9999) {
  $mosign = "Libra";
}

if ($sundeg >= 181 && $sundeg <= 210.9999) {
  $susign = "Libra";
}

if ($marsdeg >= 181 && $marsdeg <= 210.9999) {
  $masign = "Libra";
}

if ($mercurydeg >= 181 && $mercurydeg <= 210.9999) {
  $mesign = "Libra";
}

if ($jupitaldeg >= 181 && $jupitaldeg <= 210.9999) {
  $jusign = "Libra";
}

if ($venusdeg >= 181 && $venusdeg <= 210.9999) {
  $vesign = "Libra";
}

if ($saturndeg >= 181 && $saturndeg <= 210.9999) {
  $sasign = "Libra";
}

if ($rahudeg >= 151 && $rahudeg <= 180.9999) {
  $rasign = "Libra";
}

if ($ketudeg >= 151 && $ketudeg <= 180.9999) {
  $kesign = "Libra";
}

if ($moondeg >= 211 && $moondeg <= 240.9999) {
  $mosign = "Scorpio";
}

if ($sundeg >= 211 && $sundeg <= 240.9999) {
  $susign = "Scorpio";
}

if ($marsdeg >= 211 && $marsdeg <= 240.9999) {
  $masign = "Scorpio";
}

if ($mercurydeg >= 211 && $mercurydeg <= 240.9999) {
  $mesign = "Scorpio";
}

if ($jupitaldeg >= 211 && $jupitaldeg <= 240.9999) {
  $jusign = "Scorpio";
}

if ($venusdeg >= 211 && $venusdeg <= 240.9999) {
  $vesign = "Scorpio";
}

if ($saturndeg >= 211 && $saturndeg <= 240.9999) {
  $sasign = "Scorpio";
}

if ($rahudeg >= 121 && $rahudeg <= 150.9999) {
  $rasign = "Scorpio";
}

if ($ketudeg >= 121 && $ketudeg <= 150.9999) {
  $kesign = "Scorpio";
}

if ($moondeg >= 241 && $moondeg <= 270.9999) {
  $mosign = "Sagittarius";
}

if ($sundeg >= 241 && $sundeg <= 270.9999) {
  $susign = "Sagittarius";
}

if ($marsdeg >= 241 && $marsdeg <= 270.9999) {
  $masign = "Sagittarius";
}

if ($mercurydeg >= 241 && $mercurydeg <= 270.9999) {
  $mesign = "Sagittarius";
}

if ($jupitaldeg >= 241 && $jupitaldeg <= 270.9999) {
  $jusign = "Sagittarius";
}

if ($venusdeg >= 241 && $venusdeg <= 270.9999) {
  $vesign = "Sagittarius";
}

if ($saturndeg >= 241 && $saturndeg <= 270.9999) {
  $sasign = "Sagittarius";
}

if ($rahudeg >= 91 && $rahudeg <= 120.9999) {
  $rasign = "Sagittarius";
}

if ($ketudeg >= 91 && $ketudeg <= 120.9999) {
  $kesign = "Sagittarius";
}

if ($moondeg >= 271 && $moondeg <= 300.9999) {
  $mosign = "Capricorn";
}

if ($sundeg >= 271 && $sundeg <= 300.9999) {
  $susign = "Capricorn";
}

if ($marsdeg >= 271 && $marsdeg <= 300.9999) {
  $masign = "Capricorn";
}

if ($mercurydeg >= 271 && $mercurydeg <= 300.9999) {
  $mesign = "Capricorn";
}

if ($jupitaldeg >= 271 && $jupitaldeg <= 300.9999) {
  $jusign = "Capricorn";
}

if ($venusdeg >= 271 && $venusdeg <= 300.9999) {
  $vesign = "Capricorn";
}

if ($saturndeg >= 271 && $saturndeg <= 300.9999) {
  $sasign = "Capricorn";
}

if ($rahudeg >= 61 && $rahudeg <= 90.9999) {
  $rasign = "Capricorn";
}

if ($ketudeg >= 61 && $ketudeg <= 90.9999) {
  $kesign = "Capricorn";
}

if ($moondeg >= 301 && $moondeg <= 330.9999) {
  $mosign = "Aquarius";
}

if ($sundeg >= 301 && $sundeg <= 330.9999) {
  $susign = "Aquarius";
}

if ($marsdeg >= 301 && $marsdeg <= 330.9999) {
  $masign = "Aquarius";
}

if ($mercurydeg >= 301 && $mercurydeg <= 330.9999) {
  $mesign = "Aquarius";
}

if ($jupitaldeg >= 301 && $jupitaldeg <= 330.9999) {
  $jusign = "Aquarius";
}

if ($venusdeg >= 301 && $venusdeg <= 330.9999) {
  $vesign = "Aquarius";
}

if ($saturndeg >= 301 && $saturndeg <= 330.9999) {
  $sasign = "Aquarius";
}

if ($rahudeg >= 31 && $rahudeg <= 60.9999) {
  $rasign = "Aquarius";
}

if ($ketudeg >= 31 && $ketudeg <= 60.9999) {
  $kesign = "Aquarius";
}

if ($moondeg >= 331 && $moondeg <= 360) {
  $mosign = "Pisces";
}

if ($sundeg >= 331 && $sundeg <= 360) {
  $susign = "Pisces";
}

if ($marsdeg >= 331 && $marsdeg <= 360) {
  $masign = "Pisces";
}

if ($mercurydeg >= 331 && $mercurydeg <= 360) {
  $mesign = "Pisces";
}

if ($jupitaldeg >= 331 && $jupitaldeg <= 360) {
  $jusign = "Pisces";
}

if ($venusdeg >= 331 && $venusdeg <= 360) {
  $vesign = "Pisces";
}

if ($saturndeg >= 331 && $saturndeg <= 360) {
  $sasign = "Pisces";
}

if ($rahudeg >= 0 && $rahudeg <= 30.9999) {
  $rasign = "Pisces";
}

if ($ketudeg >= 0 && $ketudeg <= 30.9999) {
  $kesign = "Pisces";
}

 ?>
