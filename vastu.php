<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitable Place</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #d57e2f;
            font-family: Arial, sans-serif;
        }

        /* FORM */
        .detailform {
            display: flex;
            justify-content: center;
            padding: 30px 10px;
        }

        #fm {
            width: 400px;
            border: 3px solid #9f2800;
            padding: 25px;
            text-align: center;
            color: #9f2800;
        }

        #fm input,
        #fm select {
            height: 35px;
            width: 100%;
            margin: 8px 0;
            padding: 5px;
            border: 1px solid #9f2800;
            color: #9f2800;
        }

        #submitbtn {
            padding: 10px;
            cursor: pointer;
            background-color: #d57e2f;
            color: #9f2800;
            border: 1px solid #9f2800;
        }

        #submitbtn:hover {
            background-color: #9f2800;
            color: #d57e2f;
        }

        /* RESULT */
        .userdetails {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #9f2800;
            color: #9f2800;
        }

        .userdetails h1 {
            background: #9f2800;
            color: #d57e2f;
            padding: 10px;
            text-align: center;
        }

        .userdetails h2 {
            background: white;
            color: #9f2800;
            padding: 8px;
            text-align: center;
            margin: 10px 0;
        }

        /* TABLE */
        .habitableplace {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        table {
            width: 70%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #9f2800;
            padding: 10px;
            text-align: center;
            background: white;
        }

        th {
            background: #9f2800;
            color: #d57e2f;
        }
    </style>
</head>

<body>
    
    <!--navbar part-->
    <?php include 'togglelinks.php'; ?>

    <?php
    $name = $city = $userfromcity_msg = "";
    $showResult = false;

    if (isset($_POST["submit"])) {

        $name = strtoupper(trim($_POST["name"]));
        $city = strtoupper(trim($_POST["city"]));
        $userzodiac = $_POST["userzodiac"];
        $cityzodiac = $_POST["cityzodiac"];

        if ($name && $city && $userzodiac && $cityzodiac) {

            $showResult = true;

            function getDetails($first, $firstTwo)
            {
                if ($first == "K" || $first == "C" || $first == "G")
                    return [2, "SOUTH-EAST", "CAT", "AGNIDEV", "VENUS"];
                elseif ($first == "J" || $firstTwo == "CH")
                    return [3, "SOUTH", "LION", "YAM", "MARS"];
                elseif ($first == "T" || $first == "D")
                    return [4, "SOUTH-WEST", "DOG", "NIRRITI", "RAHU AND KETU"];
                elseif ($firstTwo == "TH" || $firstTwo == "DH" || $first == "N")
                    return [5, "WEST", "SNAKE", "VARUNDEV", "SATURN"];
                elseif (in_array($first, ["P", "B", "F", "M"]))
                    return [6, "NORTH-WEST", "RAT", "VAYUDEV", "MOON"];
                elseif (in_array($first, ["Y", "R", "L", "V", "W"]))
                    return [7, "NORTH", "ELEPHANT", "KUBER", "MERCURY"];
                elseif ($first == "S" || $first == "Z" || $first == "H" || $firstTwo == "SH")
                    return [8, "NORTH-EAST", "RABBIT", "SHANKAR", "JUPITER"];
                else
                    return [1, "EAST", "EAGLE", "INDRADEV", "SUN"];
            }

            list($namevarg, $namedir, $nameanimalsign, $dirlord_name, $planetlord_name) = getDetails($name[0], substr($name, 0, 2));
            list($cityvarg, $citydir, $cityanimalsign, $dirlord_city, $planetlord_city) = getDetails($city[0], substr($city, 0, 2));

            $zodiacMap = [
                "ARIES" => 1,
                "TAURUS" => 2,
                "GEMINI" => 3,
                "CANCER" => 4,
                "LEO" => 5,
                "VIRGO" => 6,
                "LIBRA" => 7,
                "SCORPIO" => 8,
                "SAGITTARIUS" => 9,
                "CAPRICORN" => 10,
                "AQUARIUS" => 11,
                "PISCES" => 12
            ];

            $userzodiacno = $zodiacMap[$userzodiac];
            $cityzodiacno = $zodiacMap[$cityzodiac];

            $temp = $userzodiacno;
            $userfromcity = 1;

            while ($temp != $cityzodiacno) {
                $temp = ($temp % 12) + 1;
                $userfromcity++;
            }

            if (in_array($userfromcity, [2, 5, 9, 10, 11]))
                $userfromcity_msg = "can be Auspicious or Lucky for";
            elseif (in_array($userfromcity, [1, 7]))
                $userfromcity_msg = "can be Enmity or Hostility for";
            elseif (in_array($userfromcity, [3, 6]))
                $userfromcity_msg = "can be Loss for";
            else
                $userfromcity_msg = "can cause Disease or Suffering for";

            $labh = (($namevarg * 10) + $cityvarg) % 8;
            $hani = (($cityvarg * 10) + $namevarg) % 8;

            if ($labh > $hani) $habitableplace = "YES";
            elseif ($hani > $labh) $habitableplace = "NO";
            else $habitableplace = "EQUAL";
        }
    }
    ?>

    <div class="detailform">
        <form id="fm" method="post" onsubmit="return validateForm()">
            <h2>Details</h2>

            <input type="text" id="name" name="name" placeholder="Name">
            <input type="text" id="city" name="city" placeholder="Village/City">

            <select name="userzodiac" id="zodiac">
                <option value="">Choose User Zodiac</option>
                <option value="ARIES">Aries</option>
                <option value="TAURUS">Taurus</option>
                <option value="GEMINI">Gemini</option>
                <option value="CANCER">Cancer</option>
                <option value="LEO">Leo</option>
                <option value="VIRGO">Virgo</option>
                <option value="LIBRA">Libra</option>
                <option value="SCORPIO">Scorpio</option>
                <option value="SAGITTARIUS">Sagittarius</option>
                <option value="CAPRICORN">Capricorn</option>
                <option value="AQUARIUS">Aquarius</option>
                <option value="PISCES">Pisces</option>
            </select>

            <select name="cityzodiac" id="zodiaccity">
                <option value="">Choose City Zodiac</option>
                <option value="ARIES">Aries</option>
                <option value="TAURUS">Taurus</option>
                <option value="GEMINI">Gemini</option>
                <option value="CANCER">Cancer</option>
                <option value="LEO">Leo</option>
                <option value="VIRGO">Virgo</option>
                <option value="LIBRA">Libra</option>
                <option value="SCORPIO">Scorpio</option>
                <option value="SAGITTARIUS">Sagittarius</option>
                <option value="CAPRICORN">Capricorn</option>
                <option value="AQUARIUS">Aquarius</option>
                <option value="PISCES">Pisces</option>
            </select>

            <input type="submit" id="submitbtn" name="submit" value="SUBMIT">
        </form>
    </div>

    <?php if ($showResult): ?>
        <div class="userdetails">
            <h1>Habitable Place</h1>

            <h2>
                Habitable Place: <?= $habitableplace ?> |
                Profit: <?= $labh ?> |
                Loss: <?= $hani ?>
            </h2>

            <div class="habitableplace">
                <table>
                    <tr>
                        <th>*</th>
                        <th>Name</th>
                        <th>City</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?= $name ?></td>
                        <td><?= $city ?></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td><?= $namevarg ?></td>
                        <td><?= $cityvarg ?></td>
                    </tr>
                    <tr>
                        <td>Direction</td>
                        <td><?= $namedir ?></td>
                        <td><?= $citydir ?></td>
                    </tr>
                    <tr>
                        <td>Dir Lord</td>
                        <td><?= $dirlord_name ?></td>
                        <td><?= $dirlord_city ?></td>
                    </tr>
                    <tr>
                        <td>Planet</td>
                        <td><?= $planetlord_name ?></td>
                        <td><?= $planetlord_city ?></td>
                    </tr>
                    <tr>
                        <td>Animal</td>
                        <td><?= $nameanimalsign ?></td>
                        <td><?= $cityanimalsign ?></td>
                    </tr>
                    <tr>
                        <td>Zodiac</td>
                        <td><?= $userzodiac ?></td>
                        <td><?= $cityzodiac ?></td>
                    </tr>
                </table>
            </div>

            <h1>Relation Result</h1>
            <h2><?= "$city $userfromcity_msg $name" ?></h2>

        </div>
    <?php endif; ?>

    <script>
        function validateForm() {
            const name = document.getElementById("name").value.trim();
            const city = document.getElementById("city").value.trim();
            const namezodiac = document.getElementById("zodiac").value;
            const cityzodiac = document.getElementById("zodiaccity").value;

            if (name === "" || !/^[a-zA-Z\s]+$/.test(name)) {
                alert("Enter valid name");
                return false;
            }

            if (city === "" || !/^[a-zA-Z\s]+$/.test(city)) {
                alert("Enter valid city");
                return false;
            }

            if (namezodiac === "") {
                alert("Select user zodiac");
                return false;
            }

            if (cityzodiac === "") {
                alert("Select city zodiac");
                return false;
            }

            return true;
        }
    </script>

</body>

</html>