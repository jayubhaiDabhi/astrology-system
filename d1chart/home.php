<?php
date_default_timezone_set('UTC');

require __DIR__ . '/assets/functions.php';

$ephePath = __DIR__ . '/ephe';
$swWrapperAutoload = __DIR__ . '/sweph/vendor/autoload.php';
if (!file_exists($swWrapperAutoload)) {
    $swWrapperAutoload = __DIR__ . '/sweph/autoload.php';
}
$sw = null;
if (file_exists($swWrapperAutoload)) {
    require_once $swWrapperAutoload;
    if (class_exists('SwissEphemeris\SwissEphemeris')) {
        $sw = new SwissEphemeris\SwissEphemeris($ephePath);
    } elseif (class_exists('SwissEph')) {
        $sw = new SwissEph($ephePath);
    }
}

$defaultPlace = [
    'name' => 'Ahmedabad, India',
    'lat' => 23.0225,
    'lon' => 72.5714,
    'tz' => 5.5
];

$input = [
    'date' => $_REQUEST['date'] ?? '',
    'time' => $_REQUEST['time'] ?? '',
    'place' => $_REQUEST['place'] ?? $defaultPlace['name'],
    'lat' => $_REQUEST['lat'] ?? $defaultPlace['lat'],
    'lon' => $_REQUEST['lon'] ?? $defaultPlace['lon'],
    'tz' => $_REQUEST['tz'] ?? $defaultPlace['tz'],
    'lang' => $_REQUEST['lang'] ?? 'en'
];

$lang = $input['lang'] === 'sa' ? 'sa' : 'en';

$planetNames = [
    'en' => ['Sun' => 'Sun', 'Moon' => 'Moon', 'Mars' => 'Mars', 'Mercury' => 'Mercury', 'Jupiter' => 'Jupiter', 'Venus' => 'Venus', 'Saturn' => 'Saturn', 'Rahu' => 'Rahu', 'Ketu' => 'Ketu', 'Lagna' => 'Ascendant'],
    'sa' => ['Sun' => 'सूर्य', 'Moon' => 'चन्द्र', 'Mars' => 'मंगल', 'Mercury' => 'बुध', 'Jupiter' => 'बृहस्पति', 'Venus' => 'शुक्र', 'Saturn' => 'शनि', 'Rahu' => 'राहु', 'Ketu' => 'केतु', 'Lagna' => 'लग्न']
];

$zodiacSigns = [
    'en' => ['Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn', 'Aquarius', 'Pisces'],
    'sa' => ['मेष', 'वृषभ', 'मिथुन', 'कर्कट', 'सिंह', 'कन्या', 'तुला', 'वृश्चिक', 'धनु', 'मकर', 'कुम्भ', 'मीन']
];

function getPlanetLongitude($sw, $year, $month, $day, $hourUTC, $planetName)
{
    try {
        if (method_exists($sw, 'calcUt')) {
            $res = $sw->calcUt($year, $month, $day, $hourUTC, $planetName);
            $lon = $res['longitude'] ?? $res[0] ?? 0;
            return fmod($lon + 360, 360);
        }
    } catch (Exception $e) {
        return 0;
    }
    return 0;
}

function computePositions($sw, $year, $month, $day, $hourUTC, $lat, $lon)
{
    global $zodiacSigns;
    $signs = $zodiacSigns['en'];

    $planets = ['Sun', 'Moon', 'Mercury', 'Venus', 'Mars', 'Jupiter', 'Saturn', 'Rahu', 'Ketu'];
    $result = [];

    foreach ($planets as $planet) {
        $longitude = getPlanetLongitude($sw, $year, $month, $day, $hourUTC, $planet);
        $signIndex = floor($longitude / 30);
        $degInSign = $longitude - ($signIndex * 30);
        $result[$planet] = ['longitude' => $longitude, 'sign' => $signs[$signIndex], 'degree' => round($degInSign, 2)];
    }

    if ($sw && method_exists($sw, 'ascendant')) {
        $asc = $sw->ascendant($year, $month, $day, $hourUTC, $lat, $lon);
        $ascLon = $asc['longitude'] ?? $result['Sun']['longitude'];
    } else {
        $ascLon = $result['Sun']['longitude'];
    }
    $signIndex = floor($ascLon / 30);
    $degInSign = $ascLon - ($signIndex * 30);
    $result['Lagna'] = ['longitude' => $ascLon, 'sign' => $signs[$signIndex], 'degree' => round($degInSign, 2)];

    return $result;
}

function planetHouse($planetLon, $ascLon)
{
    $diff = fmod(($planetLon - $ascLon + 360), 360);
    $house = floor($diff / 30) + 1;
    return ($house > 12) ? $house - 12 : $house;
}

if (!empty($input['date']) && !empty($input['time'])) {
    list($y, $m, $d) = explode('-', $input['date']);
    list($H, $Min) = explode(':', $input['time']);
    $localHour = (int)$H + (int)$Min / 60.0;
    $utcHour = $localHour - floatval($input['tz']);
} else {
    $now = new DateTime('now', new DateTimeZone('UTC'));
    $y = (int)$now->format('Y');
    $m = (int)$now->format('n');
    $d = (int)$now->format('j');
    $H = (int)$now->format('G');
    $Min = (int)$now->format('i');
    $utcHour = $H + $Min / 60.0;
    $input['place'] = $defaultPlace['name'];
    $input['lat'] = $defaultPlace['lat'];
    $input['lon'] = $defaultPlace['lon'];
    $input['tz'] = $defaultPlace['tz'];
}

$positions = computePositions($sw, $y, $m, $d, $utcHour, floatval($input['lat']), floatval($input['lon']));
$ascLon = $positions['Lagna']['longitude'];

$houses = array_fill(1, 12, []);
foreach ($positions as $planet => $pos) {
    if ($planet === 'Lagna') continue;
    $houseNum = planetHouse($pos['longitude'], $ascLon);
    $houses[$houseNum][] = $planet;
}

if (isset($_REQUEST['ajax'])) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'positions' => $positions,
        'houses' => $houses,
        'planetNames' => $planetNames[$lang],
        'zodiacSigns' => $zodiacSigns[$lang],
        'displayLabel' => ($input['date'] && $input['time']) ?
            "Birth Chart for {$input['date']} {$input['time']} at {$input['place']}" :
            "Current planetary positions for {$input['place']}"
    ]);
    exit;
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>D1 Chart with Swiss Ephemeris</title>
    <link rel="stylesheet" href="assets/chart.css" />
</head>

<body>
    <div class="container">
        <h1>D1 Chart (North Indian)</h1>

        <form id="chartForm" method="post" autocomplete="off">
            <label>Date: <input type="date" name="date" value="<?php echo h($input['date']); ?>"></label>
            <label>Time: <input type="time" name="time" value="<?php echo h($input['time']); ?>"></label><br><br>
            <label>Place: <input type="text" name="place" value="<?php echo h($input['place']); ?>"></label>
            <label>Latitude: <input type="text" name="lat" value="<?php echo h($input['lat']); ?>"></label>
            <label>Longitude: <input type="text" name="lon" value="<?php echo h($input['lon']); ?>"></label>
            <label>Timezone: <input type="text" name="tz" value="<?php echo h($input['tz']); ?>"></label><br><br>

            <label>Language:
                <select name="lang" id="langSelect">
                    <option value="en" <?php if ($lang === 'en') echo 'selected'; ?>>English</option>
                    <option value="sa" <?php if ($lang === 'sa') echo 'selected'; ?>>Sanskrit</option>
                </select>
            </label><br><br>

            <button type="submit">Generate Chart</button>
            <button type="button" id="btnNow">Use Browser Time</button>
        </form>

        <div id="chartContainer" class="chart-container" style="margin-top:2em;"></div>
    </div>

    <script>
        function escapeHtml(text) {
            var div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        const form = document.getElementById('chartForm');
        const chartContainer = document.getElementById('chartContainer');
        const langSelect = document.getElementById('langSelect');

        function renderChart(data) {
            const planetNames = data.planetNames;
            const zodiacSigns = data.zodiacSigns;
            const positions = data.positions;
            const houses = data.houses;

            let html = `<h2>${escapeHtml(data.displayLabel)}</h2>`;

            for (let h = 1; h <= 12; h++) {
                html += `<p><strong>House ${h}:</strong> `;
                if (houses[h].length === 0) {
                    html += '—';
                } else {
                    const planets = houses[h].map(p => {
                        const pos = positions[p];
                        return `${planetNames[p]} (${pos.sign} ${pos.degree}°)`;
                    });
                    html += planets.join(', ');
                }
                html += '</p>';
            }
            chartContainer.innerHTML = html;
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            fetchChartData();
        });

        document.getElementById('btnNow').addEventListener('click', function() {
            const now = new Date();
            const tzOffset = -now.getTimezoneOffset() / 60;
            const dateStr = now.toISOString().slice(0, 10);
            const timeStr = now.toTimeString().slice(0, 5);

            form.date.value = dateStr;
            form.time.value = timeStr;
            form.tz.value = tzOffset.toFixed(1);

            fetchChartData();
        });

        langSelect.addEventListener('change', () => {
            fetchChartData();
        });

        function fetchChartData() {
            const formData = new FormData(form);
            formData.append('ajax', '1');

            fetch('home.php', {
                    method: 'POST',
                    body: formData
                })
                .then(resp => resp.json())
                .then(data => {
                    renderChart(data);
                })
                .catch(err => {
                    chartContainer.innerHTML = `<p style="color:red;">Error fetching chart data</p>`;
                    console.error(err);
                });
        }

        window.addEventListener('load', fetchChartData);
    </script>
</body>

</html>