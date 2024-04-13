<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

function updateWorkbook($filePath, $successfulLinks, $unsuccessfulLinks) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Example of adding successful links
    $sheet->setCellValue('A1', 'Video UID');
    $sheet->setCellValue('B1', 'Link Status');
    // ...add other headers

    $row = 2;
    foreach ($successfulLinks as $link) {
        $sheet->setCellValue('A' . $row, $link['videoUid']);
        $sheet->setCellValue('B' . $row, $link['status']);
        // ...add other data
        $row++;
    }

    // Similar for unsuccessfulLinks...

    $writer = new Xlsx($spreadsheet);
    $writer->save($filePath);
}
