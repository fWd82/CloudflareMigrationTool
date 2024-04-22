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
            <h3 class="mt-5" style="color:#fc5e03;">MIGRATION</h3>
        </div>

        <div class="class">
            <div class="card" style="width: rem;"> 
                <div class="card-body">
                    <h5 class="card-title">Manipluating Excel Sheet: </h5>
                    <p class="card-text">Unfortunately the exported file <code>Video Details.xls</code> from <strong>Huawei Cloud VOD</strong> is not in compatable mode, as it is giving this error: <code>The file format and extension of FILE_NAME don't match. The file could be corrupted or unsafe. Unless you trust its source, dont open it. Do you want to open it anyway?</code>, so we have to  open the file and go to <code>File</code> > then look for first option <code>Compatablity Mode</code> and click on <code>Convert</code> button, and just save the file <code>exported_from_huawei_cloud.xls</code></p>
 
                </div>
            </div> 

        </div>

        <div class="text-center mb-4">
            <h3 class="mt-5" style="color:#fc5e03;">PROGRESS</h3>
        </div>

        <br>

<!-- PHP  -->

<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

echo "Starting script execution...\n <br />";

// Format the current date and time as "YYYY-MM-DD-HH-MM-SS"
$dateTime = date("Y-m-d-H-i-s");
// $filePath = "exported_from_huawei_cloud.xlsx"; // Include the correct extension here
$filePath = "Video Details (5).xlsx"; // Include the correct extension here
$savePath = "cleaned_data-{$dateTime}.xlsx"; // Output is always in .xlsx format

$fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
$reader = null;

echo "Loading the Excel file from: <strong> {$filePath}</strong>\n <br />";

// Choose the reader based on file extension
if ($fileExtension === 'xlsx') {
    $reader = new Xlsx();
} elseif ($fileExtension === 'xls') {
    $reader = new Xls();
} else {
    echo "Unsupported file format.\n <br />";
    exit;
}

try {
    $spreadsheet = $reader->load($filePath); // No need to append the extension
} catch (Exception $e) {
    echo "Error loading file: " . $e->getMessage() . "\n <br />";
    exit;
}

$worksheet = $spreadsheet->getActiveSheet();

$newSpreadsheet = new Spreadsheet();
$newWorksheet = $newSpreadsheet->getActiveSheet();
$newRow = 1; // Start from the first row

echo "Adding headers...\n <br />";
// Add headers before processing the data rows
$newWorksheet->setCellValue('A1', 'video_id');
$newWorksheet->setCellValue('B1', 'new_video_links');
$newRow++; // Increment to start adding data from the second row

$maxRow = $worksheet->getHighestRow();
echo "Processing {$maxRow} rows...\n <br />";

for ($row = 1; $row <= $maxRow; $row++) {
    $cellValue = $worksheet->getCell('C'.$row)->getValue();
    $cellMerge = $worksheet->getCell('C'.$row)->isInMergeRange() && !$worksheet->getCell('C'.$row)->isMergeRangeValueCell();

    if ($cellMerge) {
        $cellValue = $previousValue;
    } else {
        $previousValue = $cellValue;
    }

    $cleanValueC = str_replace("default.mp4?filename=", "", $cellValue);

    $valueR = $worksheet->getCell('R'.$row)->getValue();
    if (str_ends_with($valueR, "index.m3u8")) {
        $newWorksheet->setCellValue('A'.$newRow, $cleanValueC);
        $newWorksheet->setCellValue('B'.$newRow, $valueR);
        $newRow++;
    }
}

echo "Finished processing rows. Total rows written to new file: <strong>" . ($newRow - 1) . "</strong>\n <br />";

try {
    $writer = new XlsxWriter($newSpreadsheet);
    $writer->save($savePath);
    echo "Successfully saved the cleaned data to: <strong> {$savePath}</strong>\n <br />";
} catch (Exception $e) {
    echo "Failed to save the file: " . $e->getMessage() . "\n <br />";
    exit;
}

echo "<span class='text-success font-weight-bolder'>Script execution completed.</span>\n <br />";
?>
