
onmouseover="this.style.cursor='hand'" onclick="return StartIM('l00655445', 'Li Sanqi 00655445')" onload="if(typeof(OneSpaceStatsCtrl)!='undefined'&&$.isFunction(OneSpaceStatsCtrl)) OneSpaceStatsCtrl('l00655445','李三奇','Li Sanqi 00655445',this)"

//////////////

Old DB update script: 
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
        // $videoId =          $item['huaweiCloudVideoId'];
        $videoTitle =       $item['huaweiCloudVideoTitle']; // even though the name is title, but this is the ID of Cloudflare that we need to search and replace
        $newVideoLink =     $item['huaweiCloudVideoUrl'];

        // Modify the WHERE clause to match any part of the URL that includes the video ID
        $sql = "UPDATE {$db_table_name} SET {$db_table_column} = :newVideoLink WHERE {$db_table_column} LIKE CONCAT('%', :videoId, '%')";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters to the statement
        // $stmt->bindParam(':videoId', $videoId);
        // $stmt->bindParam(':videoTitle', $videoTitle);
        $stmt->bindParam(':videoId', $videoTitle);
        $stmt->bindParam(':newVideoLink', $newVideoLink);

        // Execute the statement and check for rows affected
        $stmt->execute();
        $rowsAffected = $stmt->rowCount();

        if ($rowsAffected > 0) {
            $updateCounter++; // Increment the update counter
            $response[] = [
                'recordNumber' => $recordCounter,
                // 'videoId' => $videoId,
                'videoTitle' => $videoTitle,
                'videoLink' => $newVideoLink,
                'status' => 'success',
                'message' => 'Record updated'
            ];
        } else {
            $noChangeCounter++; // Increment the no change counter
            $response[] = [
                'recordNumber' => $recordCounter,
                // 'videoId' => $videoId,
                'videoTitle' => $videoTitle,
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









////////////

git rm -r one-of-the-directories // This deletes from filesystem
git commit . -m "Remove duplicated directory"
git push origin <your-git-branch> (typically 'master', but not always)

https://support.huaweicloud.com/api-iam/iam_17_0002.html
https://support.huaweicloud.com/iam_faq/iam_01_034.html
https://console.huaweicloud.com/apiexplorer/#/openapi/IAM/doc?api=KeystoneCreateUserTokenByPassword
https://console-intl.huaweicloud.com/apiexplorer/#/openapi/IAM/debug?api=KeystoneCreateUserTokenByPassword
https://support.huaweicloud.com/api-iam/iam_30_0001.html#section4
https://support.huaweicloud.com/intl/en-us/api-vod/vod_04_0197.html
https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/sdk?api=UploadMetaDataByUrl










I have one excel sheet named: "cleaned_data-2024-04-01-09-52-02.xlsx"
The excel sheet has two columns, "video_id" and "videos_links"

I want you to read the file with PHP by importing below library: 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

Once you get the records from the excel sheet, I want you to search title of videos from below API. 

The API response is like this: 
{
  "total": 1,
  "assets": [
   {
    "asset_id": "7d1282d9b62e6b07c057b351d10c640e",
    "title": "default.mp4?filename=23412342",
    "duration": 9,
    "size": 4527498,
    "original_url": "https://vod.fawadiqbal.me/asset/7d1282d9b62e6b07c057b351d10c640e/404ef653853dc038cc37f90644a90cea.mp4",
    "category": "Other",
    "covers": [
     {
      "cover_url": "https://vod.fawadiqbal.me/asset/7d1282d9b62e6b07c057b351d10c640e/cover/Cover0.jpg"
     }
    ],
    "create_time": "20240405081625",
    "asset_status": "PUBLISHED",
    "transcode_status": "TRANSCODE_SUCCEED",
    "thumbnail_status": "UN_THUMBNAIL",
    "review_status": "REVIEW_PASSED",
    "exec_desc": "asset_exec_desc:Asset meta is published;transcode_exec_desc:Transcode success;",
    "media_type": "MP4",
    "subtitle_repackage_status": "UN_REPACKAGE"
   }
  ]
 }

 Here is the API: 
 <?php
namespace HuaweiCloud\SDK\Vod\V1\Model;
require_once "vendor/autoload.php";
use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
use HuaweiCloud\SDK\Vod\V1\VodClient; 

$ak = getenv('CLOUD_SDK_AK');
$sk = getenv('CLOUD_SDK_SK');
$endpoint = "https://vod.ap-southeast-3.myhuaweicloud.com";
$projectId = "31e2da1575cc47048f26be2a2b5c6ec9";
$credentials = new BasicCredentials($ak,$sk,$projectId);
$config = HttpConfig::getDefaultConfig();
$config->setIgnoreSslVerification(true);

$client = VodClient::newBuilder(new VodClient)
  ->withHttpConfig($config)
  ->withEndpoint($endpoint)
  ->withCredentials($credentials)
  ->build();
$request = new ListAssetListRequest();
$listRequestAssetId = array();
array_push($listRequestAssetId,"7d1282d9b62e6b07c057b351d10c640e");
$request->setAssetId($listRequestAssetId);

try {
  $response = $client->ListAssetList($request);
  echo "\n";
  echo $response;
} catch (ConnectionException $e) {
  $msg = $e->getMessage();
  echo "\n". $msg ."\n";
} catch (RequestTimeoutException $e) {
  $msg = $e->getMessage();
  echo "\n". $msg ."\n";
} catch (ServiceResponseException $e) {
  echo "\n";
  echo $e->getHttpStatusCode(). "\n";
  echo $e->getRequestId(). "\n";
  echo $e->getErrorCode() . "\n";
  echo $e->getErrorMsg() . "\n";
}


So just loop through all the records from Excel Sheet, search against video_id and display all the titles.






/////////////////////////////////
I have two API's. 
One is for search and then other is to rename the file. I want to loop through all the video titles, and see if it has name something like: "default.mp4?filename=99e2a588443399b4a184c815709065c6", so I want to rename it and remove the "default.mp4?filename=" while leaving "99e2a588443399b4a184c815709065c6".

For searching: I have one excel sheet named: "cleaned_data-2024-04-01-09-52-02.xlsx"
The excel sheet has two columns, "video_id" and "videos_links"

I want you to read the file with PHP by importing below library: 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

Once you get the records from the excel sheet, I want you to search "video_id" with below API. if the name  of the file is something like: "default.mp4?filename=99e2a588443399b4a184c815709065c6", so just remove the "default.mp4?filename=" and leave the id as the video name. 
We can use something like this: 
// $string = "default.mp4?filename=99e2a588443399b4a184c815709065c6";
// $parts = explode("?filename=", $string);

I am pasting two API's below: 
Just merge them with above scenario:


<?php
namespace HuaweiCloud\SDK\Vod\V1\Model;
 
require_once "vendor/autoload.php";
use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
use HuaweiCloud\SDK\Vod\V1\VodClient;

$env = parse_ini_file('.env'); 
$ak = $env["CLOUD_SDK_AK"];
$sk = $env["CLOUD_SDK_SK"]; 

print("AK is: " . $ak . "<br />");  
print("SK is:  " . $sk . "<br />");  
print("<br />");

 
$endpoint = "https://vod.ap-southeast-3.myhuaweicloud.com";
$projectId = "31e2da1575cc47048f26be2a2b5c6ec9";
$credentials = new BasicCredentials($ak,$sk,$projectId);
$config = HttpConfig::getDefaultConfig();
$config->setIgnoreSslVerification(true);
 
$client = VodClient::newBuilder(new VodClient)
  ->withHttpConfig($config)
  ->withEndpoint($endpoint)
  ->withCredentials($credentials)
  ->build();

Once you get "video_id" then search for the name if it has that "default.mp4?filename=" portion. 
The API to search for specific video is as below: 


$request = new ListAssetListRequest();
$listRequestAssetId = array();
array_push($listRequestAssetId,"7d1282d9b62e6b07c057b351d10c640e");
$request->setAssetId($listRequestAssetId);


Below is the reponse from ListAssetList:


{
  "total": 1,
  "assets": [
   {
    "asset_id": "7d1282d9b62e6b07c057b351d10c640e",
    "title": "default.mp4?filename=23412342",
    "duration": 9,
    "size": 4527498,
    "original_url": "https://vod.fawadiqbal.me/asset/7d1282d9b62e6b07c057b351d10c640e/404ef653853dc038cc37f90644a90cea.mp4",
    "category": "Other",
    "covers": [
     {
      "cover_url": "https://vod.fawadiqbal.me/asset/7d1282d9b62e6b07c057b351d10c640e/cover/Cover0.jpg"
     }
    ],
    "create_time": "20240405081625",
    "asset_status": "PUBLISHED",
    "transcode_status": "TRANSCODE_SUCCEED",
    "thumbnail_status": "UN_THUMBNAIL",
    "review_status": "REVIEW_PASSED",
    "exec_desc": "asset_exec_desc:Asset meta is published;transcode_exec_desc:Transcode success;",
    "media_type": "MP4",
    "subtitle_repackage_status": "UN_REPACKAGE"
   }
  ]
 }



So we will search for "title" if title has something like "default.mp4?filename=" then we will remove it with the help of below API:

Now below is the code, for renaming the video, incorporate above scenario in below code: 


  <?php
  namespace HuaweiCloud\SDK\Vod\V1\Model;
  require_once "vendor/autoload.php";
  use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
  use HuaweiCloud\SDK\Core\Http\HttpConfig;
  use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
  use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
  use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
  use HuaweiCloud\SDK\Vod\V1\VodClient;

  $ak = getenv('CLOUD_SDK_AK');
  $sk = getenv('CLOUD_SDK_SK');
  $endpoint = "https://vod.ap-southeast-3.myhuaweicloud.com";
  $projectId = "31e2da1575cc47048f26be2a2b5c6ec9";
  $credentials = new BasicCredentials($ak,$sk,$projectId);
  $config = HttpConfig::getDefaultConfig();
  $config->setIgnoreSslVerification(true);
  
  $client = VodClient::newBuilder(new VodClient)
    ->withHttpConfig($config)
    ->withEndpoint($endpoint)
    ->withCredentials($credentials)
    ->build();
  $request = new UpdateAssetMetaRequest();
  
  $body = new UpdateAssetMetaReq();
  $request->setBody($body);
  try {
    $response = $client->UpdateAssetMeta($request);
    echo "\n";
    echo $response;
  } catch (ConnectionException $e) {
    $msg = $e->getMessage();
    echo "\n". $msg ."\n";
  } catch (RequestTimeoutException $e) {
    $msg = $e->getMessage();
    echo "\n". $msg ."\n";
  } catch (ServiceResponseException $e) {
    echo "\n";
    echo $e->getHttpStatusCode(). "\n";
    echo $e->getRequestId(). "\n";
    echo $e->getErrorCode() . "\n";
    echo $e->getErrorMsg() . "\n";
  }
  