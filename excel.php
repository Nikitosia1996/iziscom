<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setTitle("Новый лист");

const COEFF = 1.053423626787058;

$sheet->getStyle('A1:Z1000')->getFont()->setName('Arial');
$sheet->getStyle('A1:Z1000')->getFont()->setSize(14);

$sheet ->getColumnDimension("A")->setWidth(14*COEFF);
$sheet ->getColumnDimension("B")->setWidth(9.57*COEFF);
$sheet ->getColumnDimension("C")->setWidth(21.29*COEFF);
$sheet ->getColumnDimension("D")->setWidth(25.71*COEFF);
$sheet ->getColumnDimension("E")->setWidth(12.86*COEFF);
$sheet ->getColumnDimension("F")->setWidth(21.29*COEFF);
$sheet ->getColumnDimension("G")->setWidth(8.43*COEFF);
$sheet ->getColumnDimension("H")->setWidth(14.14*COEFF);
$sheet ->getColumnDimension("I")->setWidth(13.86*COEFF);
$sheet ->getColumnDimension("J")->setWidth(13.57*COEFF);
$sheet ->getColumnDimension("K")->setWidth(8.14*COEFF);
$sheet ->getColumnDimension("L")->setWidth(8.14*COEFF);
$sheet ->getColumnDimension("M")->setWidth(9.71*COEFF);
$sheet ->getColumnDimension("N")->setWidth(10.43*COEFF);
$sheet ->getColumnDimension("O")->setWidth(12.71*COEFF);
foreach (range('P', 'U') as $column) {
    $sheet->getColumnDimension($column)->setWidth(8.14);
}
for ($row = 1; $row <= 1000; $row++) {
    $sheet->getRowDimension($row)->setRowHeight(24);
}

$sheet ->getRowDimension("5")->setRowHeight(47);


$sheet->setCellValue("N1", "Приложение №");
$sheet->setCellValue("N2", "к договору №");
$date = "30.08.2024";
$sheet->setCellValue("N3", "от ");
$sheet->setCellValue("O3", $date);
$sheet->getStyle("N1:N3")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

$sheet->setCellValue("F3", "Смета");
$sheet->getStyle("F3")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle("F3")->getFont()->setSize(20);
$sheet->getStyle("F3")->getFont()->setBold(true);

$sheet->setCellValue("E4", "на выполнение обследовательских работ по объекту:");
$sheet->getStyle('E4')->getFont()->setSize(16);

$sheet->setCellValue("A6", "Заказчик: ");
$sheet->setCellValue("A7", "Подрядчик: ");
$sheet->getStyle('A6:A14')->getFont()->setSize(16);


$styleArray = [
    'borders' => [
        'outline' => [
            'borderStyle' => Border::BORDER_THICK, // Жирная обводка
            'color' => ['argb' => 'FF000000'], // Черный цвет
        ],
    ],
];

// Применяем стиль к диапазону A9:O9
$sheet->getStyle('A9:O9')->applyFromArray($styleArray);
$sheet->setCellValue("F9", "Общие положения и коэффициенты");







header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=myFile.xlsx");


$writer = new Xlsx($spreadsheet);
$writer->save("php://output");