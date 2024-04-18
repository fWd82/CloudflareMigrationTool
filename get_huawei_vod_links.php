<?php
namespace HuaweiCloud\SDK\Vod\V1\Model;
require_once "vendor/autoload.php";
use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
use HuaweiCloud\SDK\Vod\V1\VodClient;


// Uncomment these values. 
$ak =               $_POST["ak"];
$sk =               $_POST["sk"];
$endpoint =         $_POST["endpoint"];
$projectId =        $_POST["projectId"];
$listAssetPageNo =  $_POST["listAssetPageNo"];

// Comment below hard coded values
// $ak = "9NW1ATJF9UAHZY5XXESS";
// $sk = "JNN9sdlnzGosaHjuccAUNAR9nzWspMGj2v30czW0";
// $endpoint = "https://vod.ap-southeast-3.myhuaweicloud.com";
// $projectId = "31e2da1575cc47048f26be2a2b5c6ec9";
// $listAssetPageNo = 0;


$credentials = new BasicCredentials($ak,$sk,$projectId);
$config = HttpConfig::getDefaultConfig();
$config->setIgnoreSslVerification(true);

$client = VodClient::newBuilder(new VodClient)
  ->withHttpConfig($config)
  ->withEndpoint($endpoint)
  ->withCredentials($credentials)
  ->build();
  // https://console-intl.huaweicloud.com/apiexplorer/#/openapi/VOD/sdk?api=ListAssetList
$request = new ListAssetListRequest();
$request->setSize(100); // Huawei Cloud's ListAssetList fetch only 10 records by default, but we have to pass 100 and page number as well. 
$request->setPage($listAssetPageNo);

try {
  $response = $client->ListAssetList($request);
  echo "\n";
  echo $response;
  // echo json_encode($response);

} catch (ConnectionException $e) {
  $msg = $e->getMessage();
  // echo json_encode($msg);
  echo "\n". $msg ."\n";
} catch (RequestTimeoutException $e) {
  $msg = $e->getMessage();
  echo "\n". $msg ."\n";
  // echo json_encode($msg);
} catch (ServiceResponseException $e) {
  echo "\n";
  echo $e->getHttpStatusCode(). "\n";
  echo $e->getRequestId(). "\n";
  echo $e->getErrorCode() . "\n";
  echo $e->getErrorMsg() . "\n";
}
