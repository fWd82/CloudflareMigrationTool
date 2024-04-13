<?php
echo "<title>List of Videos</title>";


$authKey = $_GET['X-Auth-Key'];
$authEmail = $_GET['X-Auth-Email'];
$account_id = $_GET['account_id'];


echo "<pre>";
print_r($authKey . " : " . $authEmail . ": " . $account_id);
echo "</pre>";

// die();
// exit();

// // Your Cloudflare credentials
// $authEmail = 'fwd82@live.com'; // Replace with your actual X-Auth-Email
// $authKey = '1eab14593a06d3722782f30526a779378a58e'; // Replace with your actual X-Auth-Key
// $account_id = '2590b14a48271988be21c06479697c88';

# Load environment variables
// $env = parse_ini_file('.env');
// $authEmail = $env["X-Auth-Email"];
// $authKey = $env["X-Auth-Key"];
// $account_id = $env["account_id"];


// Cloudflare API URL
$url = "https://api.cloudflare.com/client/v4/accounts/$account_id/stream";

// Your Cloudflare credentials
// $authEmail = 'fwd82@live.com'; // Replace with your actual X-Auth-Email
// $authKey = '1eab14593a06d3722782f30526a779378a58e'; // Replace with your actual X-Auth-Key

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    "X-Auth-Email: $authEmail",
    "X-Auth-Key: $authKey"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Decode JSON response
$responseData = json_decode($response, true);

// Check for success
if ($responseData && $responseData['success']) {
    $hlsLinks = [];
    foreach ($responseData['result'] as $video) {
        if (isset($video['playback']['hls'])) {
            $hlsLinks[] = $video['playback']['hls'];
        }
    }

    $count = 0;
    // Output HLS links
    echo "<h2>Cloudflare Videos Links</h2>";
    echo "<p>Links feteched from Cloudflare</p>";

    echo "<ol>"; //todo: You can remove the styles to display numbers.
    foreach ($hlsLinks as $link) {
        echo "<li>$link</li>";
        // echo "<li>\"$link\",</li>";
        $count++;
    }
    echo "</ol>";

    echo "<h2>Total Links: $count</h2>";
} else {
    // Handle errors or unsuccessful response
    echo "Failed to fetch HLS links. Check your credentials and account permissions.<br />";
}

?>
