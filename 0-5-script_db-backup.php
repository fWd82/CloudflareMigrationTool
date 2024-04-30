<?php
require 'vendor/autoload.php';

ini_set('max_input_vars', '2000');

// Input from POST for security
$db_host = $_POST["db_host"];
$db_username = $_POST["db_username"];
$db_password = $_POST["db_password"];
$db_name = $_POST["db_name"];
$db_table_name = $_POST["db_table_name"];
$db_table_column = $_POST["db_table_column"];
$assetid_and_url = $_POST["assetid_and_url"]; // Receiving "assetid_and_url" here

// Initialize response array
$response = [];

try {
    // Set up the PDO connection
    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Process each video ID and URL from POST data
    foreach ($assetid_and_url as $item) {
        $videoId = $item['huaweiCloudVideoId'];
        $newVideoLink = $item['huaweiCloudVideoUrl'];

        // Prepare the SQL statement
        $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :newVideoLink WHERE {$db_table_column} LIKE :videoId";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bindParam(':newVideoLink', $newVideoLink);
        $stmt->bindParam(':videoId', $videoId);

        // Execute the statement and check for errors
        if ($stmt->execute()) {
            // Success, add to response array
            $response[] = [
                'videoId' => $videoId,
                'status' => 'success',
                'message' => 'Update successful'
            ];
        } else {
            // Failure, retrieve error information and add to response array
            $errorInfo = $stmt->errorInfo();
            $response[] = [
                'videoId' => $videoId,
                'status' => 'failed',
                'message' => 'Update failed: ' . $errorInfo[2]
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

// Output or return the response
echo json_encode($response);
 





 
// // Assuming the array is assigned to a variable $data
// $assetid_and_url = array(
//     "huaweiCloudVideoId" => "ac26ff3a3dfeffc2fc6dc76b976ca140",
//     "huaweiCloudVideoUrl" => "https://vod.fawadiqbal.me/asset/ac26ff3a3dfeffc2fc6dc76b976ca140/play_video/index.m3u8"
// );

// Printing both keys and their values
// echo "Huawei Cloud Video ID: " . $data['huaweiCloudVideoId'] . "<br>";
// echo "Huawei Cloud Video URL: " . $data['huaweiCloudVideoUrl'];
  
// print_r($assetid_and_url[0]['huaweiCloudVideoId'] );
// print_r($assetid_and_url[0]['huaweiCloudVideoUrl'] );
// exit();

// $db_host = "localhost";
// $db_username = "root";
// $db_password = "";
// $db_name = "MyDB";
// $db_table_name = "videos";
// $db_table_column = "video_links";
// $assetid_and_url = ...

// print_r($db_host ." : ". $db_username ." : ". $db_password ." : ". $db_name ." : ". $db_table_name ." : ". $db_table_column);

// exit();

// Establish database connection
// try {
//     $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password);
// } catch (PDOException $e) {
//     echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $e->getMessage()]);
//     exit;
// }

// // Load the Excel file
// // $reader = new Xlsx();
// // $spreadsheet = $reader->load("cleaned_data-2024-04-01-09-52-02.xlsx");

// // $worksheet = $spreadsheet->getActiveSheet();
// // $rows = $worksheet->toArray();
// $response = [];


// // $sql = `UPDATE $db_table_name SET $db_table_column = :newVideoLink WHERE $db_table_column LIKE :videoId`;
// // print_r($sql);
// // exit();

// foreach ($assetid_and_url as $item) {
//     $videoId = $item['huaweiCloudVideoId'];
//     $newVideoLink = $item['huaweiCloudVideoUrl'];

//     // $sql = "UPDATE videos SET video_links = :newVideoLink WHERE video_links LIKE :videoId";
//     // $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :newVideoLink WHERE {$db_table_column} LIKE :videoId";
//     // $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :{$newVideoLink} WHERE {$db_table_column} LIKE :{$videoId}";

//     $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :newVideoLink WHERE {$db_table_column} LIKE :videoId";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':newVideoLink', $newVideoLink);
//     $stmt->bindParam(':videoId', $videoId);
    


//     // print_r($sql);
//     // exit();
//     // $stmt = $pdo->prepare($sql);
    
//     // if (!$stmt) {
//     //     $errorInfo = $pdo->errorInfo();
//     //     $response[] = ['videoId' => $videoId, 'status' => 'failed', 'message' => 'Prepare failed: ' . $errorInfo[2]];
//     //     continue;
//     // }

//     if ($stmt->execute()) {
//         // Update successful, handle as needed
//         $errorInfo = $pdo->errorInfo();
//         $response[] = ['videoId' => $videoId, 'status' => 'success', 'message' => 'Prepare Success: ' . $errorInfo[2]];
//         continue;
//     } else {
//         $errorInfo = $stmt->errorInfo();
//         $response[] = ['videoId' => $videoId, 'status' => 'failed', 'message' => 'Update failed: ' . $errorInfo[2]];
//     }
    










    
//     $result = $stmt->execute([
//         ':newVideoLink' => $newVideoLink,
//         ':videoId' => "%{$videoId}%",
//     ]);

//     if ($result) {
//         $response[] = ['videoId' => $videoId, 'status' => 'success', 'message' => 'Update successful'];
//     } else {
//         $errorInfo = $stmt->errorInfo();
//         $response[] = ['videoId' => $videoId, 'status' => 'failed', 'message' => 'Update failed: ' . $errorInfo[2]];
//     }
// }

// echo json_encode($response); // Make sure $response is structured as an array
// exit;

?>
