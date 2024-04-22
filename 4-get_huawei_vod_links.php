<?php
namespace HuaweiCloud\SDK\Vod\V1\Model;
require_once "vendor/autoload.php";

// Enabling error reporting
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
use HuaweiCloud\SDK\Core\Exceptions\RequestTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ServiceResponseException;
use HuaweiCloud\SDK\Vod\V1\VodClient;

// Uncomment these values for production.
$ak = $_POST["ak"];
$sk = $_POST["sk"];
$endpoint = $_POST["endpoint"];
$projectId = $_POST["projectId"];
$listAssetPageNo = $_POST["listAssetPageNo"];

// Use hardcoded values for testing.
// $ak = "9NW1ATJF9UAHZY5XXESS";
// $sk = "JNN9sdlnzGosaHjuccAUNAR9nzWspMGj2v30czW0";
// $endpoint = "https://vod.ap-southeast-3.myhuaweicloud.com";
// $projectId = "31e2da1575cc47048f26be2a2b5c6ec9";
// $listAssetPageNo = 0;

// echo "Setting credentials and configuration.\n";
$credentials = new BasicCredentials($ak, $sk, $projectId);
$config = HttpConfig::getDefaultConfig();
$config->setIgnoreSslVerification(true);

try {
    // echo "Building the VOD client.\n";
    $client = VodClient::newBuilder(new VodClient)
      ->withHttpConfig($config)
      ->withEndpoint($endpoint)
      ->withCredentials($credentials)
      ->build();

    // echo "Creating request.\n";
    $request = new ListAssetListRequest();
    $request->setStatus(['PUBLISHED']);
    $request->setSize(100);
    $request->setPage($listAssetPageNo);
    $request->setOrder("desc");

    // echo "Sending request.\n";
    $response = $client->listAssetList($request);
    // echo "Response received.\n";
    // print_r($response);
    echo "\n";
    echo $response;

// } catch (ConnectionException $e) {
//     echo "Error connecting to the server: " . $e->getMessage();
// } catch (RequestTimeoutException $e) {
//     echo "Request to server timed out: " . $e->getMessage();
// } catch (ServiceResponseException $e) {
//     echo "Server responded with an error: " . $e->getMessage();
// } catch (\Exception $e) {
//     // echo $e->getMessage();
//     echo "An unexpected error occurred: " . $e->getMessage();
// }
// Let convert all errors to Arrays

} catch (ConnectionException $e) {
  $errorDetails = [
      "error" => "Error connecting to the server: " . $e->getMessage()
  ];
  echo json_encode($errorDetails);
} catch (RequestTimeoutException $e) {
  $errorDetails = [
      "error" => "Request to server timed out: " . $e->getMessage()
  ];
  echo json_encode($errorDetails);
} catch (ServiceResponseException $e) {
  $errorDetails = [
      "error" => "Server responded with an error: " . $e->getMessage()
  ];
  echo json_encode($errorDetails);
} catch (\Exception $e) {
  $errorDetails = [
      "error" => "An unexpected error occurred: " . $e->getMessage()
  ];
  echo json_encode($errorDetails);
}

// curl -v https://vod.ap-southeast-3.myhuaweicloud.com

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>