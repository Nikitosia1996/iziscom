<?php
require 'vendor/autoload.php';



use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\RichText\Run;

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
            'borderStyle' => Border::BORDER_MEDIUM, // Жирная обводка
            'color' => ['argb' => 'FF000000'], // Черный цвет
        ],
    ],
];

// Применяем стиль к диапазону A9:O9
$sheet->getStyle('A9:O9')->applyFromArray($styleArray);
$sheet->setCellValue("F9", "Общие положения и коэффициенты");

$sheet->setCellValue("A10", "Категория сложности здания");
$sheet->setCellValue("A11", "Объем здания в целом (для К18.об)");
$sheet->setCellValue("A12", "Этажность");
$sheet->setCellValue("A13", "Высота здания");
$sheet->setCellValue("A14", "Высота этажа");

$sheet->setCellValue("E11", "V =");
$sheet->setCellValue("E12", "n =");
$sheet->setCellValue("E13", "h =");
$sheet->setCellValue("E14", "h =");

$sheet->setCellValue("G11", "м3");
$sheet->setCellValue("G12", "эт.");
$sheet->setCellValue("G13", "м");
$sheet->setCellValue("G14", "м");

$sheet->getStyle('A15:O20')->applyFromArray($styleArray);
$sheet->getStyle('A10:O14')->applyFromArray($styleArray);

$sheet->setCellValue("A15", "п. 1.6.1");
$sheet->setCellValue("A16", "п. 1.6.2");
$sheet->setCellValue("A17", "п. 1.6.3");
$sheet->setCellValue("A18", "п. 2.4");
$sheet->setCellValue("A19", "п. 2.5.1");
$sheet->setCellValue("A20", "п. 2.5.2");


$ravno = new Run("=");
$richText = new RichText();

$richText->createText("К");
$subscriptText = new Run("18.101");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B15", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.102");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B16", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.103");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B17", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.ОБ");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B18", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.202");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B19", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.203");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B20", $richText);


$sheet->setCellValue("E15", "п. 2.5.3");
$sheet->setCellValue("E16", "п. 2.5.4");
$sheet->setCellValue("E17", "п. 2.5.5");
$sheet->setCellValue("E18", "п. 2.5.6");
$sheet->setCellValue("E19", "п. 2.5.7");
$sheet->setCellValue("E20", "п. 2.5.8");

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.204");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F15", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.205");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F16", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.206");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F17", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.207");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F18", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.208");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F19", $richText);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.209");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F20", $richText);


$sheet->setCellValue("I15", "п. 2.5.9");
$sheet->setCellValue("I16", "п. 2.5.10");
$sheet->setCellValue("I17", "п. 2.5.11");
$sheet->setCellValue("I18", "п. 2.5.12");
$sheet->setCellValue("I19", "п. 2.5.13");
$sheet->setCellValue("I20", "п. 2.5.14");

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.210");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J15", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.211");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J16", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.212");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J17", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.213");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J18", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.214");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J19", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.215");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J20", $richText);


$sheet->setCellValue("I15", "п. 2.5.9");
$sheet->setCellValue("I16", "п. 2.5.10");
$sheet->setCellValue("I17", "п. 2.5.11");
$sheet->setCellValue("I18", "п. 2.5.12");
$sheet->setCellValue("I19", "п. 2.5.13");
$sheet->setCellValue("I20", "п. 2.5.14");

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.210");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J15", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.211");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J16", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.212");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J17", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.213");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J18", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.214");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J19", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.215");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J20", $richText);


$sheet->setCellValue("M15", "п. 2.5.15");
$sheet->setCellValue("M16", "п. 2.5.16");
$sheet->setCellValue("M17", "п. 2.5.17");
$sheet->setCellValue("M18", "п. 2.5.18");
$sheet->setCellValue("M19", "п. 2.5.19");
$sheet->setCellValue("M20", "п. 1.7");


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.215");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N15", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.216");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N16", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.217");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N17", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.218");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->createText("=");
$richText->addText($ravno);
$sheet->setCellValue("N18", $richText);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.219");
$subscriptText->getFont()->setSubscript(true);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N19", $richText);

$sheet->setCellValue("N20", "Коп=");
$sheet->getStyle("N20")->getFont()->setBold(true);

$sheet->getStyle("E10:F14")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("A15:N20")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->setCellValue("E21", "Расчёт стоимости работ по инженерному обследованию");
$sheet->setCellValue("E22", "Выполняемые работы");
$sheet->getStyle("E21:E22")->getFont()->setBold(true);
$sheet->getStyle('A21:O21')->applyFromArray($styleArray);
$sheet->getStyle('A22:A23')->applyFromArray($styleArray);
$sheet->getStyle('B22:J22')->applyFromArray($styleArray);
$sheet->getStyle('B23:D23')->applyFromArray($styleArray);
$sheet->getStyle('E23:J23')->applyFromArray($styleArray);
$sheet->getStyle('K23:M23')->applyFromArray($styleArray);

$sheet->setCellValue("A23", "№ п.п.");
$sheet->setCellValue("C23", "Наименование");
$sheet->setCellValue("F23", "Показатели");
$sheet->setCellValue("I23", "Обоснование               ");
$sheet->setCellValue("J23", "СНЗТ 18-2014");
$sheet->setCellValue("L23", "Расчет стоимости");
$sheet->setCellValue("N22", "          Стоимость ");
$sheet->setCellValue("N23", "          работ, руб.");
$sheet->getStyle('N22:O23')->applyFromArray($styleArray);
$sheet->getStyle("A22:O23")->getFont()->setBold(true);
$sheet->getStyle('A23:O23')->getFont()->setSize(12);
$sheet->getStyle('I23:J23')->getFont()->setSize(10);
$sheet->getStyle("I23:J23")->getFont()->setBold(false);
$sheet->getStyle("C23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle("C23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("F23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("F23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("L23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("L23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("N23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("N23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("I23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("I23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("J23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("J23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("M23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("M23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("N22")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("N22")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);









header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=myFile.xlsx");


$writer = new Xlsx($spreadsheet);
$writer->save("php://output");