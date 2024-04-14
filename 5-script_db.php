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
                    <h5 class="card-title">Migration Progress </h5>
                    <p class="card-text">Please wait, until all process completed: <code>videolinks.xlsx</code></p>

                    <!-- <textarea name="cloudstream-links" id="cloudstream-links" cols="30" rows="10"></textarea> -->

                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <br>
             
            <br>
             
            <br>
             

        </div>

        <div class="text-center mb-4">
            <h3 class="mt-5" style="color:#fc5e03;">PROGRESS</h3>
        </div>

        <br>

<!-- ================================ -->
        <?php
        require 'vendor/autoload.php';
        use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

        $db_host = $_GET["db_host"];
        $db_name = $_GET["db_name"];
        $db_username = $_GET["db_username"];
        $db_password = $_GET["db_password"];

        print_r($db_host . " : " . $db_name . " : " . $db_username . " : " . $db_password);
        exit();

        // Establish database connection
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password);

        // Load the Excel file
        $reader = new Xlsx();
        $spreadsheet = $reader->load("cleaned_data-2024-04-01-09-52-02.xlsx");
        // $spreadsheet = $reader->load("videos.xlsx");


        // Assuming our data starts from the first row and is in the first sheet
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

        </div> <!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
