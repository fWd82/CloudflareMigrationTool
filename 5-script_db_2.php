<?php
require 'vendor/autoload.php'; 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
// header('Content-Type: application/json'); // Send JSON response

// Input from POST for security
// $db_host = $_POST["db_host"];
// $db_name = $_POST["db_name"];
// $db_username = $_POST["db_username"];
// $db_password = $_POST["db_password"];

$db_host = "localhost";
$db_name = "MyDB";
$db_username = "root";
$db_password = "";

// Establish database connection
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $e->getMessage()]);
    exit;
}

// Load the Excel file
$reader = new Xlsx();
$spreadsheet = $reader->load("cleaned_data-2024-04-01-09-52-02.xlsx");

$worksheet = $spreadsheet->getActiveSheet();
$rows = $worksheet->toArray();
$response = [];

foreach ($rows as $row) {
    $videoId = $row[0];
    $newVideoLink = $row[1];

    $sql = "UPDATE videos SET video_links = :newVideoLink WHERE video_links LIKE :videoId";
    $stmt = $pdo->prepare($sql);
    
    if (!$stmt) {
        $errorInfo = $pdo->errorInfo();
        $response[] = ['videoId' => $videoId, 'status' => 'failed', 'message' => 'Prepare failed: ' . $errorInfo[2]];
        continue;
    }
    
    $result = $stmt->execute([
        ':newVideoLink' => $newVideoLink,
        ':videoId' => "%{$videoId}%",
    ]);

    if ($result) {
        $response[] = ['videoId' => $videoId, 'status' => 'success', 'message' => 'Update successful'];
    } else {
        $errorInfo = $stmt->errorInfo();
        $response[] = ['videoId' => $videoId, 'status' => 'failed', 'message' => 'Update failed: ' . $errorInfo[2]];
    }
}

echo json_encode($response); // Make sure $response is structured as an array
exit;

?>
