<?php
// List of zodiac signs
$signs = [
    "aries", "taurus", "gemini", "cancer", "leo", "virgo",
    "libra", "scorpio", "sagittarius", "capricorn", "aquarius", "pisces"
];

// API endpoint
$apiUrl = "https://aztro.sameerkumar.website?day=today";

// Variable to store all predictions
$predictions = [];

foreach ($signs as $sign) {
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $apiUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query(["sign" => $sign]),
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        $data = json_decode($response, true);
        $predictions[$sign] = $data; // Store in array
    } else {
        $predictions[$sign] = ["error" => "Failed to fetch data"];
    }
}

// Now $predictions contains all zodiac sign predictions for today
// Example usage:
echo "<pre>";
print_r($predictions); // To see the whole data
echo "</pre>";

// Example: show Aries description only
echo "Aries prediction: " . $predictions["aries"]["description"];
?>
