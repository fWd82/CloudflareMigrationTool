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
        header('Content-Type: application/json');

        use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

        header('Content-Type: application/json'); // Send JSON response

        // Input from POST for security
        $db_host = $_POST["db_host"];
        $db_name = $_POST["db_name"];
        $db_username = $_POST["db_username"];
        $db_password = $_POST["db_password"];

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

        echo json_encode($response);
        ?>


        </div> <!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
