<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress - Migration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            padding-top: 2px;
            padding-bottom: 30px;
        }
        .update-message {
            word-wrap: break-word;
        }
        .error {
            color: #dc3545; /* Bootstrap danger color */
        }
        .success {
            color: #28a745; /* Bootstrap success color */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="mt-5" style="color:#fc5e03;">Renaming VOD files</h3>
        </div>

        <div class="class">
            <div class="card" style="width: rem;"> 
                <div class="card-body">
                    <h5 class="card-title">Progress </h5>
                    <p class="card-text">Please wait, until all process completed: <code></code></p>
                

<?php

require_once "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Vod\V1\Model\ListAssetListRequest;
use HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetMetaRequest;
use HuaweiCloud\SDK\Vod\V1\Model\UpdateAssetMetaReq;
use HuaweiCloud\SDK\Vod\V1\VodClient;
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;

// Load environment variables
$env = parse_ini_file('.env');
$ak = $env["CLOUD_SDK_AK"];
$sk = $env["CLOUD_SDK_SK"];
$endpoint = $env["END_POINT"];
$projectId = $env["PROJECT_ID"];

// $endpoint = "https://vod.ap-southeast-3.myhuaweicloud.com";
// $projectId = "31e2da1575cc47048f26be2a2b5c6ec9";

// Setting up credentials for HuaweiCloud
$credentials = new BasicCredentials($ak, $sk, $projectId);
$config = HttpConfig::getDefaultConfig()->setIgnoreSslVerification(true);

// Initializing the VOD client with the credentials
$client = VodClient::newBuilder()
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($credentials)
    ->build();

// Specify the path to your Excel file
$filePath = "cleaned_data-2024-04-01-09-52-02.xlsx";

// Loading the Excel file
$reader = new Xlsx();
if ($reader->canRead($filePath)) {
    $spreadsheet = $reader->load($filePath);
} else {
    $reader = new Xls();
    $spreadsheet = $reader->load($filePath);
}

$sheet = $spreadsheet->getActiveSheet();
$highestRow = $sheet->getHighestRow();

$totalVideos = 0; // Counter for the total number of videos processed
$renamedCount = 0; // Counter for the number of videos renamed


// Iterating through each row to process video titles
for ($row = 2; $row <= $highestRow; $row++) {
    $videoIdCell = 'A' . $row; // Assuming video IDs are in column A
    $videoId = $sheet->getCell($videoIdCell)->getValue();
    
    // Preparing the request to fetch video details
    $request = new ListAssetListRequest();
    $listRequestAssetId = array($videoId);
    $request->setAssetId($listRequestAssetId);
    
    try {
        $response = $client->listAssetList($request);
        $assets = json_decode($response)->assets;
        $totalVideos++;

        foreach ($assets as $asset) {
            if ($asset->asset_status !== "DELETED" && property_exists($asset, 'title')) {
                $title = $asset->title;
                
                // Check for titles needing renaming
                if (strpos($title, "default.mp4?filename=") !== false) {
                    $newTitle = str_replace("default.mp4?filename=", "", $title);
                    
                    // Preparing the update request
                    $updateRequest = new UpdateAssetMetaRequest();
                    $updateBody = new UpdateAssetMetaReq();
                    $updateBody->setAssetId($asset->asset_id);
                    $updateBody->setTitle($newTitle);
                    $updateRequest->setBody($updateBody);
                    
                    // Attempt to update the video title
                    $updateResponse = $client->updateAssetMeta($updateRequest);
                    echo "Video ID: <code>" . $asset->asset_id . "</code> Title changed from <code>'" . $title . "'</code> to <code>'" . $newTitle . "'</code><br />";
                    $renamedCount++;
                }
            }
        }
    } catch (Exception $e) {
        echo "Error processing video ID:<code> $videoId. </code> Error: " . $e->getMessage() . "<br />";
    }
}


echo "Total number of videos processed: <code>" . $totalVideos . "</code><br />";
echo "Total number of videos renamed: <code>" . $renamedCount . "</code><br />";


?>

        </div>
    </div>
    <br>
</div>
<br>

        <!-- Closing PHP tag here if necessary -->
        </div> <!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>