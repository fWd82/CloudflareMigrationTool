<?php

// Cloudflare links: 
// https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/7a0e622c137a0ef824dbd32c10648a17/manifest/video.m3u8
// https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bea9ee8ea0cb2ad53489da1087aa0167/manifest/video.m3u8
// https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/4ee09ab0309152238e811da7d52ed25e/manifest/video.m3u8
// https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/9a9ff27616c634268282d679af38ede4/manifest/video.m3u8

// Huawei Cloud Links that should updated:
// 1: Title | Name: ac26ff3a3dfeffc2fc6dc76b976ca140
// URL: https://vod.fawadiqbal.me/asset/ac26ff3a3dfeffc2fc6dc76b976ca140/play_video/index.m3u8

// 2: Title | Name: bea9ee8ea0cb2ad53489da1087aa0167
// URL: https://vod.fawadiqbal.me/asset/bea9ee8ea0cb2ad53489da1087aa0167/play_video/index.m3u8

// 3: Title | Name: 4ee09ab0309152238e811da7d52ed25e
// URL: https://vod.fawadiqbal.me/asset/4ee09ab0309152238e811da7d52ed25e/play_video/index.m3u8

// 6: Title | Name: 9a9ff27616c634268282d679af38ede4
// URL: https://vod.fawadiqbal.me/asset/9a9ff27616c634268282d679af38ede4/play_video/index.m3u8

require 'vendor/autoload.php';
ini_set('max_input_vars', '2000');

$db_host = $_POST["db_host"];
$db_username = $_POST["db_username"];
$db_password = $_POST["db_password"];
$db_name = $_POST["db_name"];
$db_table_name = $_POST["db_table_name"];
$db_table_column = $_POST["db_table_column"];

// Receiving "assetid_and_url" here
$assetid_and_url = $_POST["assetid_and_url"];

// Initialize response array
$response = [];

// Initialize a counter for the records
$recordCounter = 0;
$updateCounter = 0;
$noChangeCounter = 0;

try {
    // Set up the PDO connection
    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Process each video ID and URL from POST data
    foreach ($assetid_and_url as $item) {
        $recordCounter++; // Increment the record counter for each iteration
        $videoId = $item['huaweiCloudVideoId'];
        $newVideoLink = $item['huaweiCloudVideoUrl'];

        // Modify the WHERE clause to match any part of the URL that includes the video ID
        $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :newVideoLink WHERE {$db_table_column} LIKE CONCAT('%', :videoId, '%')";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bindParam(':newVideoLink', $newVideoLink);
        $stmt->bindParam(':videoId', $videoId);

        // Execute the statement and check for rows affected
        $stmt->execute();
        $rowsAffected = $stmt->rowCount();

        if ($rowsAffected > 0) {
            $updateCounter++; // Increment the update counter
            $response[] = [
                'recordNumber' => $recordCounter,
                'videoId' => $videoId,
                'videoLink' => $newVideoLink,
                'status' => 'success',
                'message' => 'Record updated'
            ];
        } else {
            $noChangeCounter++; // Increment the no change counter
            $response[] = [
                'recordNumber' => $recordCounter,
                'videoId' => $videoId,
                'videoLink' => $newVideoLink,
                'status' => 'no change needed',
                'message' => 'No update required, no matching records found or already up-to-date'
            ];
        }
    }
} catch (PDOException $e) {
    // Handle PDO exception if connection fails
    $response[] = [
        'status' => 'failed',
        'message' => 'Database connection failed: ' . $e->getMessage()
    ];
} catch (Exception $e) {
    // Handle any other exceptions
    $response[] = [
        'status' => 'failed',
        'message' => 'Error: ' . $e->getMessage()
    ];
}

// Add totals to the response
$response['records'] = $response; // This will nest the individual records under 'records'
$response['totalRecords'] = $recordCounter;
$response['totalUpdates'] = $updateCounter;
$response['totalNoChange'] = $noChangeCounter;

// Output or return the response
echo json_encode($response);
?>
