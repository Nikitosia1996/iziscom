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
$zakazchik = $_COOKIE['zakazchik'];
$podradchik = $_COOKIE['podradchik'];
$V = $_COOKIE['V'];
$n = $_COOKIE['n'];
$h = $_COOKIE['h'];
$het = $_COOKIE['het'];
$k18101 = $_COOKIE['k18101'];
$k18ob = $_COOKIE['k18ob'];

class Table {
    public $tableName;
    public $chacked;
    public $h3tp;
    public $ki;
    public $p;
    public $ph3;

    public function __construct($tableName, $chacked, $h3tp, $ki, $p, $ph3) {
        $this->tableName = $tableName;
        $this->chacked = $chacked;
        $this->h3tp = $h3tp;
        $this->ki = $ki;
        $this->p = $p;
        $this->ph3 = $ph3;
    }
}

$isSborIshodnihDannihChecked = new Table("Сбор исходных данных", $_COOKIE['chacked1'], $_COOKIE['h3tp_212'], $_COOKIE['ki212'], $_COOKIE['p212'], $_COOKIE['ph3_212']);
$isObmerRabotyChecked = new Table("Обмерные работы",$_COOKIE['chacked2'], $_COOKIE['h3tp_222'], $_COOKIE['ki222'], $_COOKIE['p222'], $_COOKIE['ph3_222']);
$isObsledRabChecked = new Table("Обследовательские работы", $_COOKIE['chacked3'], $_COOKIE['h3tp_223'], $_COOKIE['ki223'], $_COOKIE['p223'], $_COOKIE['ph3_223']);
$isSostTechOtchetCheck = new Table("Составление технического отчета ", $_COOKIE['chacked4'], $_COOKIE['h3tp_242'], $_COOKIE['ki242'], $_COOKIE['p242'], $_COOKIE['ph3_242']);
//$isRedaktorIspConstr = new Table("Редактор испытания конструкций", $_COOKIE['chacked5'], $_COOKIE['h3tp_212'], $_COOKIE['ki212'], $_COOKIE['p212'], $_COOKIE['ph3_212']);

$arrTables = array();
array_push($arrTables, $isSborIshodnihDannihChecked);
array_push($arrTables, $isObmerRabotyChecked);
array_push($arrTables, $isObsledRabChecked);
array_push($arrTables, $isSostTechOtchetCheck);
//array_push($arrTables, $isRedaktorIspConstr);


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
$sheet->setCellValue("C6", $zakazchik);
$sheet->setCellValue("A7", "Подрядчик: ");
$sheet->setCellValue("C7", $podradchik);
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
$sheet->setCellValue("F11", $V);
$sheet->setCellValue("E12", "n =");
$sheet->setCellValue("F12", $n);
$sheet->setCellValue("E13", "h =");
$sheet->setCellValue("F13", $h);
$sheet->setCellValue("E14", "h =");
$sheet->setCellValue("F14", $het);

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
$sheet->setCellValue("C15", $k18101);


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
$sheet->setCellValue("C18", $k18ob);

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


$startedCell = 24;
foreach ($arrTables as $item) {
    if($item->chacked == "true"){
        $sheet->setCellValue("C" . ($startedCell + 1), $item->tableName);
        $sheet->setCellValue("G" . ($startedCell + 1), "НЗТР=");
        $sheet->setCellValue("G" . ($startedCell + 2), "Ki=");
        $sheet->setCellValue("G" . ($startedCell + 3), "P=");
        $sheet->setCellValue("G" . ($startedCell + 4), "РНЗ=");

        $sheet->setCellValue("H" . ($startedCell + 1), $item->h3tp);
        $sheet->setCellValue("H" . ($startedCell + 2), $item->ki);
        $sheet->setCellValue("H" . ($startedCell + 3), $item->p);
        $sheet->setCellValue("H" . ($startedCell + 4), $item->ph3);

        $sheet->setCellValue("E" . ($startedCell), "Категория сложности");
        $sheet->setCellValue("E" . ($startedCell + 1), "Распределение норм затрат");
        $sheet->setCellValue("E" . ($startedCell + 2), "Значение тарифного коэф.");
        $sheet->setCellValue("E" . ($startedCell + 3), "Разряд исполнителя работ");
        $sheet->setCellValue("E" . ($startedCell + 4), "Удельный вес работ");

        $sheet->getStyle("C" . ($startedCell + 1))->getFont()->setBold(true);
        $sheet->getStyle('C' . ($startedCell + 1))->getFont()->setSize(14);
        $endCell = $startedCell + 4;
        $sheet->getStyle('K' . $startedCell . ':M' . $endCell)->applyFromArray($styleArray);
        $sheet->getStyle('A' . $startedCell . ':A' . $endCell)->applyFromArray($styleArray);
        $sheet->getStyle('B' . $startedCell . ':D' . $endCell)->applyFromArray($styleArray);
        $sheet->getStyle('E' . $startedCell . ':F' . $endCell)->applyFromArray($styleArray);
        $sheet->getStyle('G' . $startedCell . ':H' . $endCell)->applyFromArray($styleArray);
        $sheet->getStyle('I' . $startedCell . ':J' . $endCell)->applyFromArray($styleArray);
        $sheet->getStyle('N' . $startedCell . ':O' . $endCell)->applyFromArray($styleArray);
        $sheet->getStyle('E' . $startedCell . ':E' . $endCell)->getFont()->setSize(11);
        $sheet->getStyle('G' . $startedCell . ':G' . $endCell)->getFont()->setSize(11);


        $startedCell = $endCell + 1;

    }
}









header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=myFile.xlsx");


$writer = new Xlsx($spreadsheet);
$writer->save("php://output");