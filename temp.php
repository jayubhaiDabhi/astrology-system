
<?php
$conn = new mysqli("localhost", "root", "","pro_astro");
$moontemp1 ="select mo from pos_planets";
$query=mysqli_query($conn,$moontemp1);
$raw=mysqli_fetch_assoc($query);
if (!$conn) 
{
  echo "Not Connect";
}

// if (!isset($_SESSION['last_visit'])) 
// {
//   $_SESSION['last_visit']=date('Y-m-d H:i:s'); //expire in 30 days
// } else {
//   $lastvisit = $_SESSION['last_visit'];
//   $_SESSION['last_visit']=date('Y-m-d H:i:s');//update the cookie
// }

if (isset($lastvisit)) {
  $currentdate = time();

  $differentdate = abs($currentdate - $lastvisit);

  $days = floor($differentdate / (60 * 60 * 24));

  $hours = floor(($differentdate % (60 * 60 * 24)) / (60 * 60));

  $minutes = floor(($differentdate % (60 * 60)) / 60);

  $seconds = floor($differentdate % 60);

  echo "$days days,$hours hours,$minutes minutes,$seconds seconds";
}



// $sql = "select mo from pos_planets";
// $moontemp = $conn->query($sql);

// if($moontemp->num_rows>0)
// {
//     while($row = $moontemp->fetch_assoc())
//     {
//       echo $row["column1"]."".$row["column2"]."<br>";
//     }
// }
// else
// {
//   echo "0 results";
// }

$moontemp = $raw ['mo'];


$moondeg = $moontemp;
if ($moondeg == 360) {
  $moondeg = 0;
}
echo "<br>before $moondeg days";
while ($days > 0) {
  $moondeg = $moondeg + 13.176;
}
echo "<br>after $moondeg days";
if ($hours > 0) {
  $moondeg = $moondeg + (0.54984 * $hours);
}
echo "<br>after $moondeg hours";
if ($minutes > 0) {
  $moondeg = $moondeg + (0.00916 * $minutes);
}
echo "<br>after $moondeg minutes";
if ($seconds > 0) {
  $moondeg = $moondeg + (0.0001527 * $seconds);
}
echo "<br>after $moondeg seconds";
$up = "update pos_planets set mo=$moondeg";

$moontemp = $moondeg;

// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

</body>

</html>
<script>

</script>
