<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

function readVideoLinksFromExcel($filePath) {
    $reader = IOFactory::createReader('Xlsx');
    $spreadsheet = $reader->load($filePath);
    $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    $videoIds = [];
    foreach ($sheetData as $row => $columns) {
        if ($row > 1) { // Assuming the first row is headers
            $videoIds[] = $columns['A']; // Assuming video IDs are in column A
        }
    }
    return $videoIds;
}

// Example usage
$filePath = './2-videolinks.xlsx';
$videoIds = readVideoLinksFromExcel($filePath);
echo json_encode($videoIds);
