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

// Receiving "assetid_and_url" here
$assetid_and_url = $_POST["assetid_and_url"];

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

        // Prepare the SQL statement using the correct column name for video ID
        $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :newVideoLink WHERE video_links = :videoId";
        $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :newVideoLink WHERE {$db_table_column} LIKE :videoId";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bindParam(':newVideoLink', $newVideoLink);
        $stmt->bindParam(':videoId', $videoId);

        // Execute the statement and check for rows affected
        $stmt->execute();
        $rowsAffected = $stmt->rowCount();

        if ($rowsAffected > 0) {
            // Rows were updated, add to response array
            $response[] = [
                'videoId' => $videoId,
                'videoLink' => $newVideoLink,
                'status' => 'success',
                'message' => 'Record updated'
            ];
        } else {
            // No rows updated, check if the new link matches the current link in the database
            $checkSql = "SELECT {$db_table_column} FROM {$db_table_name} WHERE {$db_table_column} = :newVideoLink AND video_links = :videoId";
            $checkStmt = $pdo->prepare($checkSql);
            $checkStmt->bindParam(':newVideoLink', $newVideoLink);
            $checkStmt->bindParam(':videoId', $videoId);
            $checkStmt->execute();

            if ($checkStmt->rowCount() > 0) {
                // No update needed
                $response[] = [
                    'videoId' => $videoId,
                    'videoLink' => $newVideoLink,
                    'status' => 'no change needed',
                    'message' => 'No update required, record already up-to-date'
                ];
            } else {
                // Update failed
                $response[] = [
                    'videoId' => $videoId,
                    'videoLink' => $newVideoLink,
                    'status' => 'failed',
                    'message' => 'Update failed, no matching records found'
                ];
            }
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
?>
