<?php
$result = "";
$error  = "";

if (isset($_POST['pdate'])) {

    $date = $_POST['pdate']; // YYYY-MM-DD

    // Location (Ahmedabad)
    $lat = 23.0225;
    $lon = 72.5714;
    $tz  = 5.5;

    $timestamp = strtotime($date);

    // 🔹 FreeAstrologyAPI Endpoint
    $api_url = "https://api.freeastrologyapi.com/panchang";

    // 🔹 Your API KEY only
    $api_key = "0aN7m3sxPw2etfIoHAULe70TGEgUaDZZ2X4r0aGS";

    // 🔹 Payload
    $payload = json_encode([
        "day"   => (int)date('d', $timestamp),
        "month" => (int)date('m', $timestamp),
        "year"  => (int)date('Y', $timestamp),
        "hour"  => 12,
        "min"   => 0,
        "lat"   => $lat,
        "lon"   => $lon,
        "tzone" => $tz
    ]);

    // 🔹 Headers (ONLY API KEY)
    $headers = [
        "Content-Type: application/json",
        "x-api-key: $api_key"
    ];

    // 🔹 cURL request
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $error = "cURL Error: " . curl_error($ch);
    }

    curl_close($ch);

    // Decode JSON
    $data = json_decode($response, true);

    if (isset($data['tithi'])) {

        $tithi  = $data['tithi']['name'];
        $paksha = $data['paksha'];
        $month  = $data['hindu_month']['purnimanta'];
        $samvat = $data['vikram_samvat'];

        $result = "
        <h2>ગુજરાતી પંચાંગ</h2>
        <table border='1' cellpadding='8'>
            <tr><th>તારીખ</th><td>$date</td></tr>
            <tr><th>તિથિ</th><td>$tithi</td></tr>
            <tr><th>પક્ષ</th><td>$paksha</td></tr>
            <tr><th>માસ</th><td>$month</td></tr>
            <tr><th>વિક્રમ સંવત</th><td>$samvat</td></tr>
        </table>
        ";
    } else {
        $error = "API response error or daily limit exceeded.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gujarati Panchang</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .box {
            width: 420px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th {
            background: #ffe0b2;
            text-align: left;
        }
        button {
            padding: 7px 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Gujarati Panchang</h2>

    <form method="post">
        <input type="date" name="pdate" required>
        <br><br>
        <button type="submit">Get Panchang</button>
    </form>

    <?php
        if ($error) echo "<p style='color:red;'>$error</p>";
        echo $result;
    ?>
</div>

</body>
</html>
