<?php
namespace HuaweiCloud\SDK\Vod\V1\Model;
require_once "vendor/autoload.php";
use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
use HuaweiCloud\SDK\Vod\V1\VodClient;

// The AK and SK used for authentication are hard-coded or stored in plaintext, which has great security risks. It is recommended that the AK and SK be stored in ciphertext in configuration files or environment variables and decrypted during use to ensure security.
// In this example, AK and SK are stored in environment variables for authentication. Before running this example, set environment variables CLOUD_SDK_AK and CLOUD_SDK_SK in the local environment

// if(!isset($_GET["ak"]) || !isset($_GET["sk"]) || !isset($_GET["endpoint"]) || !isset($_GET["projectId"]) || !isset($_GET["videoType"]) || !isset($_GET["videoTitle"]) || !isset($_GET["videoUrl"]) || !isset($_GET["videoTemplateGroupName"])){
//     $msg = "Some thing is missing in request body. Please check all the values...";
//     echo "\n". $msg ."\n";
//     // echo $ak . $sk . $endpoint . $projectId . $videoType . $videoUrl . $videoTitle . $videoTemplateGroupName;
//     exit();
// }

// Comment below hard coded values
$ak = $_GET["ak"];
$sk = $_GET["sk"];
$endpoint = $_GET["endpoint"];
$projectId = $_GET["projectId"];

$videoType = $_GET["videoType"];
$videoTitle = $_GET["videoTitle"];
$videoUrl = $_GET["videoUrl"];
$videoTemplateGroupName = $_GET["videoTemplateGroupName"];

///////////////////

// Comment below hard coded values
// $ak = "9NW1ATJF9UAHZY5XXESS";
// $sk = "JNN9sdlnzGosaHjuccAUNAR9nzWspMGj2v30czW0";
// $endpoint = "https://vod.ap-southeast-3.myhuaweicloud.com";
// $projectId = "31e2da1575cc47048f26be2a2b5c6ec9";
// $videoType = "MP4";
// $videoTitle = "NewAimalNow";
// $videoUrl = "https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/352efaaf3f1b2add74821cd0287bfedd/downloads/default.mp4?filename=352efaaf3f1b2add74821cd0287bfedd.mp4";
// $videoUrl = "https://example.com";
// $videoUrl = "";
// $videoUrl = "['https://customer-0rjknk9n0a2sedbnABC.cloudflarestream.com/cab130695b6d4c2b131a69fdec02af6e/downloads/default.mp4?filename=cab130695b6d4c2b131a69fdec02af6e.mp4', 'https://customer-0rjknk9n0a2sedbnABC.cloudflarestream.com/cab130695b6d4c2b131a69fdec02af6e/downloads/default.mp4?filename=cab130695b6d4c2b131a69fdec02af6e.mp4'";
// $videoTemplateGroupName = "";


$credentials = new BasicCredentials($ak,$sk,$projectId);
$config = HttpConfig::getDefaultConfig();
$config->setIgnoreSslVerification(true);
// $config->setHeader('X-Language', 'en-us');
// $config->X-Language("en-us");

$client = VodClient::newBuilder(new VodClient)
  ->withHttpConfig($config)
  ->withEndpoint($endpoint)
  ->withCredentials($credentials)
  // ->withHeader('X-Language', 'en-us')
  ->build();
$request = new UploadMetaDataByUrlRequest();

$body = new UploadMetaDataByUrlReq();
$listbodyUploadMetadatas = array();
array_push($listbodyUploadMetadatas,(new UploadMetaDataByUrl())
    ->setVideoType($videoType)
    ->setTitle($videoTitle)
    ->setUrl($videoUrl)
    // ->setxLanguage('en-us')
    ->setTemplateGroupName($videoTemplateGroupName)
 );
$body->setUploadMetadatas($listbodyUploadMetadatas);
$request->setBody($body);
try {
  $response = $client->UploadMetaDataByUrl($request);
  echo "\n";
  echo $response;
    // echo json_encode($response);
} catch (ConnectionException $e) {
  $msg = $e->getMessage();
  echo "\n". $msg ."\n";
  // echo json_encode($msg);
} catch (RequestTimeoutException $e) {
  $msg = $e->getMessage();
  echo "\n". $msg ."\n";
  // echo json_encode($msg);
// } catch (ServiceResponseException $e) {
//   echo "\n";
//   echo $e->getHttpStatusCode(). "\n"; 
//   echo $e->getRequestId(). "\n"; 
//   echo $e->getErrorCode() . "\n"; 
//   echo $e->getErrorMsg() . "\n"; 
// } 
// Because the error we are getting is not in JSON but sucessful response is in JSON already. This is why it was hard to handle it on frontend. 
// 
// After reading, PHP SDK does not support custom request headers, which is not supported by customers. - chenweixing(00518270)
// So the requests we will be getting will always be in Chinese. We have to manually handle it by looking into errorCode and then display the translated message.
// https://support.huaweicloud.com/intl/en-us/api-vod/ErrorCode.html

} catch (ServiceResponseException $e) {
  $errorDetails = [
    "httpStatusCode" => $e->getHttpStatusCode(),
    "requestId" => $e->getRequestId(),
    "errorCode" => $e->getErrorCode(),
    "errorMessage" => $e->getErrorMsg()
  ];
  echo json_encode($errorDetails);
}