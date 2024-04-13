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
            <h3 class="mt-5" style="color:#fc5e03;">MIGRATION PROCESS</h3>
        </div>


        <div class="class">
            <div class="card" style="width: rem;"> 
                <div class="card-body">
                    <h5 class="card-title">First Step: </h5>
                    <p class="card-text">Please paste all your links in Excel Sheet: <code>videolinks.xlsx</code></p>

                    <!-- <textarea name="cloudstream-links" id="cloudstream-links" cols="30" rows="10"></textarea> -->

                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <br>
            <div class="card" style="width: rem;"> 
                <div class="card-body">
                    <h5 class="card-title">Second Step: </h5>
                    <p class="card-text">Go to <code>index.js</code> and add your information <code>X-Auth-Email</code> and <code>X-Auth-Key</code>, once done, save the file, install <code>NodeJS</code> and run these commands <code>npm -i</code> and <code>node index.js</code>, it will create one Excel Sheet <code>Output_06-57-27.xlsx</code>. Now this file has different <code>Video UID</code>,	<code>Link Status</code>, <code>Is Link Enabled</code>, <code>Default MP4 Link</code> and <code>MP4 LINK With File Name</code>
                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <br>
            <div class="card" style="width: rem;"> 
                <div class="card-body">
                    <h5 class="card-title">Third Step: </h5>
                    <p class="card-text">Now, go to <code>Huawei Cloud VOD > Upload Videos & Audio > Upload from URL</code> and paste links, to import videos to Huawei Cloud.
                </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <br>
            <div class="card" style="width: rem;"> 
                <div class="card-body">
                    <h5 class="card-title">Fourth Step: </h5>
                    <p class="card-text">Now, to change the links of Huawei Cloud VOD, select videos and click on <code>Export</code> button, the records will be download in Excel Sheet. You can copy the links to <code>4-videos.xlsx</code>. <br/>  
                    Now open <code>script_db.php</code> and change the configuration for <code>$host</code>, <code>$dbname</code>, <code>$username</code> and <code>$password</code>. That's it, just run the <code>script_db.php</code> and you database will be updated with new links</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                    <p class="card-text">
                        You can see progress below, if you have completed above steps correctly. 
                    </p>

                </div>
            </div>

        </div>

        <div class="text-center mb-4">
            <h3 class="mt-5" style="color:#fc5e03;">PROGRESS</h3>
        </div>

        <br>


 
<!-- ================================ -->
<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// Database configuration
$host = 'localhost';
$dbname = 'MyDB';
$username = 'root';
$password = '';

// Establish database connection
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

// Load the Excel file
$reader = new Xlsx();
$spreadsheet = $reader->load("4-videos.xlsx");

// Assuming your data starts from the first row and is in the first sheet
$worksheet = $spreadsheet->getActiveSheet();
$rows = $worksheet->toArray();

foreach ($rows as $row) {
    // Assuming the first column is video_id and the second is new_video_links
    $videoId = $row[0];
    $newVideoLink = $row[1];

    // Update the database
    $sql = "UPDATE videos SET video_links = :newVideoLink WHERE video_links LIKE :videoId";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([
        ':newVideoLink' => $newVideoLink,
        ':videoId' => "%{$videoId}%",
    ]);

    // Feedback based on the result
    if ($result) {
        echo '<div class="alert alert-success" role="alert">Updated <strong>' . $videoId . '</strong> with <a href="' . $newVideoLink . '" class="alert-link">' . $newVideoLink . '</a></div>';
    } else {
        $errorInfo = $stmt->errorInfo();
        echo '<div class="alert alert-danger" role="alert">Error updating record for ' . $videoId . ': ' . $errorInfo[2] . '</div>';
    }
}

echo '<center><strong><span style="color:#fc5e03;text-align:center;"> Update completed </span></strong><center>';

?>
        <!-- Closing PHP tag here if necessary -->
        </div> <!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
