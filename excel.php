<?php


require 'vendor/autoload.php';

//require "connection/connection.php";
//
//$smets = "SELECT * FROM smets where id_smeta = 54";
//$smetsRresult = $connectionDB->executeQuery($smets);
//
//$rows = $connectionDB->getRowResult($smetsRresult);
//$text = $rows['textAreaNaimRabot'];


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\RichText\Run;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setTitle("Смета");

const COEFF = 1.053423626787058;
$dateStartWork = $_COOKIE['dateStartWork'];
$hardZdanie = $_COOKIE['hardZdanie'];
$costWork = $_COOKIE['costWork'];
$commonInputField = $_COOKIE['commonInputField'];
$b14Input = $_COOKIE['b14Input'];

$sheet->setCellValue("F10", $hardZdanie);
$sheet->setCellValue("I10", $costWork);
$sheet->setCellValue("J10", "руб. - стоимость работ на 1 чел.-д. исполнителя 14 разряда");
$sheet->setCellValue("J11", "на 01.03.2022 г. по приказу МАиС №17 от 09.02.2022 г.");
$sheet->setCellValue("J12", "мес. - месяц текущего года, в котором начинаются работы");
$sheet->setCellValue("J13", "мес. - продолжительность работ");
$sheet->setCellValue("J14", "руб. - стоим. работ на 1 чел.-дн. специал. 14 разр.");
$sheet->setCellValue("I12", date('m'));
$sheet->setCellValue("I13", $commonInputField);
$sheet->setCellValue("I14", $b14Input);


$zakazchik = $_COOKIE['zakazchik'];
$podradchik = $_COOKIE['podradchik'];
$V = $_COOKIE['V'];
$n = $_COOKIE['n'];
$h = $_COOKIE['h'];
$het = $_COOKIE['het'];
$textAreaNaimRabot = $_COOKIE['textAreaNaimRabot'];
$k18101 = $_COOKIE['k18101'];
$k18ob = $_COOKIE['k18ob'];

$k18102 = $_COOKIE['K18102'];
$k18205 = $_COOKIE['K18205'];
$k18206 = $_COOKIE['K18206'];
$k18207 = $_COOKIE['K18207'];
$k18208 = $_COOKIE['K18208'];
$k18209 = $_COOKIE['K18209'];
$k18210 = $_COOKIE['K18210'];
$k18211 = $_COOKIE['K18211'];
$k18212 = $_COOKIE['K18212'];
$k18213 = $_COOKIE['K18213'];
$k18214 = $_COOKIE['K18214'];
$k18215 = $_COOKIE['K18215'];
$k18216 = $_COOKIE['K18216'];
$k18217 = $_COOKIE['K18217'];
$k18218 = $_COOKIE['K18218'];
$k18220 = $_COOKIE['K18220'];

$fullSumma = floatval($_COOKIE['fullSumma']);

$arrSbor = $_COOKIE["arrSbor"];
$stringSbor = "";
$arr = json_decode($arrSbor);

foreach ($arr as $item) {
    $stringSbor .= $item . "; ";
}
$stringSbor = rtrim($stringSbor, "; ");
////////
$arrObmer = $_COOKIE["arrObmer"];
$stringObmer = "";
$arr = json_decode($arrObmer);

foreach ($arr as $item) {
    $stringObmer .= $item . "; ";
}
$stringObmer = rtrim($stringObmer, "; ");

////////
$arrObsled = $_COOKIE["arrObsled"];
$stringObsled = "";
$arr = json_decode($arrObsled);

foreach ($arr as $item) {
    $stringObsled .= $item . "; ";
}
$stringObsled = rtrim($stringObsled, "; ");

////////
$arrSostTech = $_COOKIE["arrSostTech"];
$stringSostTech = "";
$arr = json_decode($arrSostTech);

foreach ($arr as $item) {
    $stringSostTech .= $item . "; ";
}
$stringSostTech = rtrim($stringSostTech, "; ");


class Table
{
    public $tableName;
    public $arrString;
    public $chacked;
    public $h3tp;
    public $ki;
    public $p;
    public $ph3;
    public $sumKoef;
    public $formula;
    public $arrObosnovanie;

    public function __construct($tableName, $arrString, $chacked, $h3tp, $ki, $p, $ph3, $sumKoef, $formula, $arrObosnovanie)
    {
        $this->tableName = $tableName;
        $this->arrString = $arrString;
        $this->chacked = $chacked;
        $this->h3tp = $h3tp;
        $this->ki = $ki;
        $this->p = $p;
        $this->ph3 = $ph3;
        $this->sumKoef = $sumKoef;
        $this->formula = $formula;
        $this->arrObosnovanie = $arrObosnovanie;
    }
}


$isSborIshodnihDannihChecked = new Table("Сбор исходных данных", $stringSbor, $_COOKIE['chacked1'], $_COOKIE['h3tp_212'], $_COOKIE['ki212'], $_COOKIE['p212'], $_COOKIE['ph3_212'], $_COOKIE['sumIshod'], $_COOKIE['formula1'],
    ["п.2.1.2", "", "НЗТ8.01.00-2014 табл.1", "п.2.1.2", "п.2.1.5, табл. 2.4"]);
$isObmerRabotyChecked = new Table("Обмерные работы", $stringObmer, $_COOKIE['chacked2'], $_COOKIE['h3tp_222'], $_COOKIE['ki222'], $_COOKIE['p222'], $_COOKIE['ph3_222'], $_COOKIE['sumObmer'], $_COOKIE['formula2'],
    ["п.2.2.2", "", "НЗТ8.01.00-2014 табл.1", "п.2.2.2", "п.2.2.5, табл. 2.7"]);
$isObsledRabChecked = new Table("Обследовательские работы", $stringObsled, $_COOKIE['chacked3'], $_COOKIE['h3tp_223'], $_COOKIE['ki223'], $_COOKIE['p223'], $_COOKIE['ph3_223'], $_COOKIE['sumObsled'], $_COOKIE['formula3'],
    ["п.2.3.2", "", "НЗТ8.01.00-2014 табл.1", "п.2.3.2", "п.2.3.5, табл. 2.10"]);
$isSostTechOtchetCheck = new Table("Составление технического отчета ", $stringSostTech, $_COOKIE['chacked4'], $_COOKIE['h3tp_242'], $_COOKIE['ki242'], $_COOKIE['p242'], $_COOKIE['ph3_242'], $_COOKIE['sumSosttech'], $_COOKIE['formula4'],
    ["п.2.4.2", "", "НЗТ8.01.00-2014 табл.1", "п.2.4.2", "п.2.4.5, табл. 2.10"]);
$isRedaktorIspConstr = new Table("Расчет стоимости испытания материалов", "", $_COOKIE['chacked5'], 0, 0, 0, 0, $_COOKIE['sumRedaktor'], "формула5",
    ["табл.2.16"]);
$isObsledOtdel = new Table("Обследование отдельных жб конструкций", "", $_COOKIE['chacked6'], 0, 0, 0, 0, 0, $_COOKIE['formula6'],
    ["табл. 2.10", "п.2.4.1, табл. 2.11", "п.2.4.1, табл. 2.11", "табл. 2.11", "п.2.3.8.2"]);

$arrTables = array();
array_push($arrTables, $isSborIshodnihDannihChecked);
array_push($arrTables, $isObmerRabotyChecked);
array_push($arrTables, $isObsledRabChecked);
array_push($arrTables, $isSostTechOtchetCheck);
//array_push($arrTables, $isRedaktorIspConstr);


$sheet->getStyle('A1:Z1000')->getFont()->setName('Arial');
$sheet->getStyle('A1:Z1000')->getFont()->setSize(14);
$sheet->getStyle('I24:I100')->getFont()->setSize(13);
$sheet->getStyle('J10:J14')->getFont()->setSize(11);
$sheet->getStyle('H10:H14')->getFont()->setSize(10);

$sheet->getStyle('B24:B100')->getFont()->setBold(true);
$sheet->getStyle('N24:N100')->getFont()->setBold(true);

$sheet->getColumnDimension("A")->setWidth(14 * COEFF);
$sheet->getColumnDimension("B")->setWidth(9.57 * COEFF);
$sheet->getColumnDimension("C")->setWidth(21.29 * COEFF);
$sheet->getColumnDimension("D")->setWidth(25.71 * COEFF);
$sheet->getColumnDimension("E")->setWidth(12.86 * COEFF);
$sheet->getColumnDimension("F")->setWidth(21.29 * COEFF);
$sheet->getColumnDimension("G")->setWidth(8.43 * COEFF);
$sheet->getColumnDimension("H")->setWidth(14.14 * COEFF);
$sheet->getColumnDimension("I")->setWidth(13.86 * COEFF);
$sheet->getColumnDimension("J")->setWidth(13.57 * COEFF);
$sheet->getColumnDimension("K")->setWidth(8.14 * COEFF);
$sheet->getColumnDimension("L")->setWidth(8.14 * COEFF);
$sheet->getColumnDimension("M")->setWidth(9.71 * COEFF);
$sheet->getColumnDimension("N")->setWidth(12 * COEFF);
$sheet->getColumnDimension("O")->setWidth(12.71 * COEFF);
foreach (range('P', 'U') as $column) {
    $sheet->getColumnDimension($column)->setWidth(8.14);
}
for ($row = 1; $row <= 1000; $row++) {
    $sheet->getRowDimension($row)->setRowHeight(24);
}

$sheet->getRowDimension("5")->setRowHeight(47);


$sheet->getStyle("C6")->getFont()->setBold(true);
$sheet->getStyle("C7")->getFont()->setBold(true);
$sheet->getStyle("C15:C20")->getFont()->setBold(true);
$sheet->getStyle("G15:G20")->getFont()->setBold(true);
$sheet->getStyle("K15:K20")->getFont()->setBold(true);
$sheet->getStyle("O15:O20")->getFont()->setBold(true);
$sheet->getStyle("F10:F14")->getFont()->setBold(true);
$sheet->getStyle("I10:I14")->getFont()->setBold(true);


$sheet->setCellValue("L1", "Приложение №");
$sheet->setCellValue("L2", "к договору №");

$sheet->setCellValue("L3", "от ");

$dateStartWork = DateTime::createFromFormat('Y-m-d', $dateStartWork);
if ($dateStartWork) {
    // Форматирование даты на русском языке
    $formatter = new IntlDateFormatter(
        'ru_RU',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        null,
        IntlDateFormatter::GREGORIAN,
        'd MMMM yyyy г.'
    );
    $dateStartWork = $formatter->format($dateStartWork);
}
$sheet->setCellValue("M3", $dateStartWork);
$sheet->getStyle("N1:N3")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

$sheet->setCellValue("F3", "Смета");
$sheet->getStyle("F3")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle("F3")->getFont()->setSize(20);
$sheet->getStyle("F3")->getFont()->setBold(true);
$sheet->setCellValue("E4", "на выполнение обследовательских работ по объекту:");
$sheet->setCellValue("D5", $textAreaNaimRabot);
$sheet->getStyle("D5")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("D5")->getFont()->setBold(true);
$sheet->getStyle("D5")->getAlignment()->setWrapText(true);

// Объединяем ячейки D5:H5 (5 столбцов)
$sheet->mergeCells("D5:K5");
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
$sheet->getStyle("F9")->getFont()->setBold(true);


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

$sheet->setCellValue("H10", "В(чел-дн 01янв)=");
$sheet->setCellValue("H14", "В(чел-дн 14р)=");

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
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B15", $richText);
$sheet->setCellValue("C15", $k18101);


$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.102");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B16", $richText);
$sheet->setCellValue("C16", $k18102);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.103");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B17", $richText);
$sheet->setCellValue("C17", "1");

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.ОБ");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B18", $richText);
$sheet->setCellValue("C18", $k18ob);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.202");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B19", $richText);
$sheet->setCellValue("C19", "1");

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.203");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("B20", $richText);
$sheet->setCellValue("C20", "1");


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
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F15", $richText);
$sheet->setCellValue("G15", "1");

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.205");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F16", $richText);
$sheet->setCellValue("G16", $k18205);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.206");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F17", $richText);
$sheet->setCellValue("G17", $k18206);


$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.207");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F18", $richText);
$sheet->setCellValue("G18", $k18207);


$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.208");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F19", $richText);
$sheet->setCellValue("G19", $k18208);

$richText = new RichText();
$richText->createText("К");
$subscriptText = new Run("18.209");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("F20", $richText);
$sheet->setCellValue("G20", $k18209);


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
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J15", $richText);
$sheet->setCellValue("K15", $k18210);


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.211");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J16", $richText);
$sheet->setCellValue("K16", $k18211);


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.212");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J17", $richText);
$sheet->setCellValue("K17", $k18212);


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.213");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J18", $richText);
$sheet->setCellValue("K18", $k18213);


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.214");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J19", $richText);
$sheet->setCellValue("K19", $k18214);


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.215");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("J20", $richText);
$sheet->setCellValue("K20", $k18215);


$sheet->setCellValue("M15", "п. 2.5.15");
$sheet->setCellValue("M16", "п. 2.5.16");
$sheet->setCellValue("M17", "п. 2.5.17");
$sheet->setCellValue("M18", "п. 2.5.18");
$sheet->setCellValue("M19", "п. 2.5.19");
$sheet->setCellValue("M20", "п. 1.7");


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.216");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N15", $richText);
$sheet->setCellValue("O15", $k18216);

$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.217");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N16", $richText);
$sheet->setCellValue("O16", $k18217);


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.218");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N17", $richText);
$sheet->setCellValue("O17", $k18217);


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.219");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N18", $richText);
$sheet->setCellValue("O18", "1");


$richText = new RichText();
$richText->createText("K");
$subscriptText = new Run("18.220");
$subscriptText->getFont()->setSubscript(true);
$subscriptText->getFont()->setSize(13);
$richText->addText($subscriptText);
$richText->addText($ravno);
$sheet->setCellValue("N19", $richText);
$sheet->setCellValue("O19", $k18220);


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
$sheet->setCellValue("N23", "Стоимость, руб.");
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

$sheet->getStyle("I23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("I23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("J23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("J23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("M23")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("M23")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);


$startedCell = 24;
$nom = 1;
foreach ($arrTables as $item) {
    $sheet->setCellValue("A" . ($startedCell + 2), $nom);
    $sheet->getStyle("A" . ($startedCell + 2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle("A" . ($startedCell + 2))->getFont()->setBold(true);
    if ($item->chacked == "true") {

        $sheet->setCellValue("B" . ($startedCell + 1), $item->tableName);


        $sheet->setCellValue("B" . ($startedCell + 2), $item->arrString);
        $sheet->getStyle("B" . ($startedCell + 2))->getFont()->setBold(false);
        $sheet->getStyle('B' . ($startedCell + 2))->getFont()->setSize(11);
        $sheet->mergeCells('B' . ($startedCell + 2) . ':D' . +($startedCell + 3));
        $sheet->getStyle("B" . ($startedCell + 2))->getAlignment()->setWrapText(true);
        $sheet->getRowDimension($startedCell + 2)->setRowHeight(20);

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

        $sheet->setCellValue("I" . ($startedCell), $item->arrObosnovanie[0]);
        $sheet->setCellValue("I" . ($startedCell + 1), $item->arrObosnovanie[1]);
        $sheet->setCellValue("I" . ($startedCell + 2), $item->arrObosnovanie[2]);
        $sheet->setCellValue("I" . ($startedCell + 3), $item->arrObosnovanie[3]);
        $sheet->setCellValue("I" . ($startedCell + 4), $item->arrObosnovanie[4]);

        $sheet->setCellValue("N" . ($startedCell + 2), $item->sumKoef);

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
        $sheet->getStyle('E' . $startedCell . ':E' . $endCell)->getFont()->setSize(13);
        $sheet->getStyle('G' . $startedCell . ':G' . $endCell)->getFont()->setSize(13);
        $sheet->mergeCells('K' . ($startedCell) . ':M' . $endCell);
        $sheet->setCellValue("K" . ($startedCell), $item->formula); ////////////////////////////////////////////////////////////////////////
        $sheet->getStyle('K' . $startedCell)->getFont()->setSize(12);
        $sheet->getStyle("K" . ($startedCell))->getAlignment()->setWrapText(true);
        $sheet->getStyle("K" . ($startedCell))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("K" . ($startedCell))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

        $startedCell = $endCell + 1;
    }
    $nom++;

}

$toggleZd71 = $_COOKIE['toggleZd71'];
$toggleZd72 = $_COOKIE['toggleZd72'];
$toggleZd73 = $_COOKIE['toggleZd73'];
$toggleZd74 = $_COOKIE['toggleZd74'];

$conval71 = $_COOKIE['conval71'];
$conval72 = $_COOKIE['conval72'];
$conval73 = $_COOKIE['conval73'];
$conval74 = $_COOKIE['conval74'];

$koef1 = $_COOKIE['koefRedaktor1'];
$koef2 = $_COOKIE['koefRedaktor2'];
$koef3 = $_COOKIE['koefRedaktor3'];
$koef4 = $_COOKIE['koefRedaktor4'];


class PodTable
{
    public $checked;
    public $val;
    public $koef;
    public $part1;
    public $part2;

    public function __construct($checked, $val, $koef, $part1, $part2)
    {
        $this->checked = $checked;
        $this->val = $val;
        $this->koef = $koef;
        $this->part1 = $part1;
        $this->part2 = $part2;
    }
}

$arrPodTable = [new PodTable($toggleZd71, $conval71, $koef1, "Определение прочности бетона", "механическими приборами"),
    new PodTable($toggleZd72, $conval72, $koef2, "Определение прочности бетона", "ультразвуковыми приборами"),
    new PodTable($toggleZd73, $conval73, $koef3, "Определение прочности бетона", 'гидравлич. пресс-насосами (типа ГПНС, "Скол" и т.д.)'),
    new PodTable($toggleZd74, $conval74, $koef4, "Определение прочности раствора и каменных", "материалов ультразв. и ударно-импульсными методами")];

if ($isRedaktorIspConstr->chacked == "true") {
    $sheet->setCellValue("E" . $startedCell, $isRedaktorIspConstr->tableName);
    $sheet->setCellValue("E" . $startedCell, $isRedaktorIspConstr->tableName);
    $sheet->getStyle("E" . $startedCell)->getFont()->setBold(true);
    $sheet->getStyle('E' . $startedCell)->getFont()->setSize(14);
    $sheet->getStyle('A' . $startedCell . ':O' . $startedCell)->applyFromArray($styleArray);
    $startedRed = $startedCell;
    $sheet->setCellValue("A" . $startedCell + 2, $nom);
    $sheet->getStyle("A" . ($startedCell + 2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle("A" . ($startedCell + 2))->getFont()->setBold(true);

    foreach ($arrPodTable as $podTable) {
        if ($podTable->checked == "true") {
            $sheet->setCellValue("B" . $startedCell + 1, $podTable->part1);
            $sheet->setCellValue("B" . $startedCell + 2, $podTable->part2);

            $sheet->setCellValue("E" . $startedCell + 1, "колич. испытаний");
            $sheet->setCellValue("E" . $startedCell + 2, "трудоёмкость на ед.");
            $sheet->setCellValue("I" . $startedCell + 1, $isRedaktorIspConstr->arrObosnovanie[0]);


            $sheet->setCellValue("G" . $startedCell + 1, "N=");
            $sheet->setCellValue("G" . $startedCell + 2, "НЗТР=");

            $sheet->setCellValue("H" . $startedCell + 1, $podTable->val);
            $sheet->setCellValue("H" . $startedCell + 2, $podTable->koef);
            $startedCell += 2;
        }

    }
    $nom++;

    $endCell = $startedCell;
    $sheet->getStyle('A' . $startedRed + 1 . ':A' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('B' . $startedRed + 1 . ':D' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('E' . $startedRed + 1 . ':F' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('G' . $startedRed + 1 . ':H' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('I' . $startedRed + 1 . ':J' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('K' . $startedRed + 1 . ':M' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('N' . $startedRed + 1 . ':O' . $endCell)->applyFromArray($styleArray);

    $sheet->getStyle('B' . $startedRed + 1 . ':B' . $endCell)->getFont()->setBold(true);
    $sheet->getStyle('B' . $startedRed + 1 . ':B' . $endCell)->getFont()->setSize(11);
    $sheet->setCellValue("N" . $startedRed + ($endCell - $startedRed) / 2, $isRedaktorIspConstr->sumKoef);
    $startedCell = $endCell + 1;
}

$myObject = $_COOKIE['myObject'];
$totalObsled = 0;
if ($isObsledOtdel->chacked == "true") {
    $sheet->setCellValue("E" . $startedCell, $isObsledOtdel->tableName);
    $sheet->getStyle("E" . $startedCell)->getFont()->setBold(true);
    $sheet->getStyle('E' . $startedCell)->getFont()->setSize(14);
    $sheet->getStyle('A' . $startedCell . ':O' . $startedCell)->applyFromArray($styleArray);
    $startedRed = $startedCell;
    $myarr = json_decode($myObject);
    $sheet->setCellValue("A" . $startedCell + 2, $nom);
    $sheet->getStyle("A" . ($startedCell + 2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle("A" . ($startedCell + 2))->getFont()->setBold(true);

    foreach ($myarr as $item) {
        $sheet->setCellValue("B" . $startedCell + 1, $item->text);

        $sheet->setCellValue("E" . $startedCell + 1, "Затраты трудовых ресурсов");
        $sheet->setCellValue("E" . $startedCell + 2, "Количество");
        $sheet->setCellValue("E" . $startedCell + 3, "Значение тарифного коэф.");
        $sheet->setCellValue("E" . $startedCell + 4, "Обследование монолитных конструкций");
        $sheet->setCellValue("E" . $startedCell + 5, "Всего");
//            $sheet->setCellValue("I" . $startedCell + 1, $isRedaktorIspConstr->arrObosnovanie[0]);


        $sheet->setCellValue("G" . $startedCell + 1, "K=");
        $sheet->setCellValue("G" . $startedCell + 2, "N=");
        $sheet->setCellValue("G" . $startedCell + 3, "Q=");
        $sheet->setCellValue("G" . $startedCell + 4, "Sl=");
        $sheet->setCellValue("G" . $startedCell + 5, "Total=");

        $sheet->setCellValue("I" . $startedCell + 1, "табл. 2.10");
        $sheet->setCellValue("I" . $startedCell + 2, "п.2.4.1, табл. 2.11");
        $sheet->setCellValue("I" . $startedCell + 3, "п.2.4.1, табл. 2.11");
        $sheet->setCellValue("I" . $startedCell + 4, "табл. 2.11");
        $sheet->setCellValue("I" . $startedCell + 5, "п.2.3.8.2");

        $sheet->setCellValue("H" . $startedCell + 1, $item->koef);
        $sheet->setCellValue("H" . $startedCell + 2, $item->count);
        $sheet->setCellValue("H" . $startedCell + 3, $item->hard);
        $sheet->setCellValue("H" . $startedCell + 4, $item->koef_monol);
        $sheet->setCellValue("H" . $startedCell + 5, $item->total);
        $startedCell += 5;
        $sheet->getStyle('B' . $startedRed + 1 . ':M' . $startedCell)->applyFromArray($styleArray);

        $totalObsled += $item->total;

    }
    $nom++;
    $endCell = $startedCell;
    $sheet->getStyle('A' . $startedRed + 1 . ':A' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('B' . $startedRed + 1 . ':D' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('E' . $startedRed + 1 . ':F' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('G' . $startedRed + 1 . ':H' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('I' . $startedRed + 1 . ':J' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('K' . $startedRed + 1 . ':M' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('N' . $startedRed + 1 . ':O' . $endCell)->applyFromArray($styleArray);

    $sheet->getStyle('B' . $startedRed + 1 . ':B' . $endCell)->getFont()->setBold(true);
    $sheet->getStyle('B' . $startedRed + 1 . ':B' . $endCell)->getFont()->setSize(11);
    $sheet->setCellValue("N" . $startedRed + round(($endCell - $startedRed) / 2), $totalObsled);
}

$stringItogoFormula = "";
for ($j = 1; $j < $nom - 1; $j++)
    $stringItogoFormula .= "п." . $j . " + ";
$stringItogoFormula .= "п." . $nom - 1;
$sheet->setCellValue("B" . ++$endCell, "Итого стоимость работ");
$sheet->setCellValue("A" . $endCell, $nom);
$sheet->getStyle("A" . $endCell)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("A" . $endCell)->getFont()->setBold(true);
$sheet->setCellValue("K" . $endCell, $stringItogoFormula);
$sheet->getStyle('K' . $endCell)->getFont()->setSize(12);
$sheet->getStyle('B' . $endCell)->getFont()->setBold(true);
$sheet->getStyle('B' . $endCell)->getFont()->setItalic(true);
$sheet->getStyle('A' . $endCell . ':A' . $endCell)->applyFromArray($styleArray);
$sheet->getStyle('B' . $endCell . ':M' . $endCell)->applyFromArray($styleArray);
$sheet->getStyle('N' . $endCell . ':O' . $endCell)->applyFromArray($styleArray);
$proc = $_COOKIE['usn'];
$znam = $_COOKIE['peremenusn'];
$chusn = $_COOKIE['chusn'];
$itog = $fullSumma;
if($chusn == "true"){
    $fullSumma = $itog - $proc * $itog / $znam;
}else{
    $proc = 0;
}
$sheet->setCellValue("N" . $endCell, $fullSumma);


$startedCell = $endCell + 1;
$sheet->setCellValue("E" . $startedCell, "Расчет налогов и отчислений");
$sheet->getStyle('E' . $startedCell)->getFont()->setBold(true);
$sheet->getStyle('A' . $startedCell . ':O' . $startedCell)->applyFromArray($styleArray);


for ($i = 1; $i < 3; $i++) {
    if ($i == 1) {
        $sheet->setCellValue("B" . $startedCell + $i, "Сумма налога при упрощенной системе налогообложения (" . $proc ."%)");
        $sheet->setCellValue("L" . $startedCell + $i, "п." . $nom . " * " . $proc . " / " . $znam );

            $sheet->setCellValue("N" . $startedCell + $i, $fullSumma * $proc / $znam);


    } else {
        $sheet->setCellValue("B" . $startedCell + $i, "Итого стоимость работ без НДС:");
        $sheet->setCellValue("L" . $startedCell + $i, "п." . $nom - 1  . " + " . "п." . $nom );
        $sheet->setCellValue("N" . $startedCell + $i, $fullSumma + $itog * $proc / $znam);

    }
    $sheet->getStyle('L' . $startedCell + $i)->getFont()->setSize(10);
    $sheet->getStyle('A' . $startedCell + $i)->applyFromArray($styleArray);
    $sheet->setCellValue("A" . $startedCell + $i, ++$nom);
    $sheet->getStyle("A" . ($startedCell + $i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle("A" . ($startedCell + $i))->getFont()->setBold(true);
    $sheet->getStyle('B' . $startedCell + $i . ':J' . $startedCell + $i)->applyFromArray($styleArray);
    $sheet->getStyle('K' . $startedCell + $i . ':M' . $startedCell + $i)->applyFromArray($styleArray);
    $sheet->getStyle('N' . $startedCell + $i . ':O' . $startedCell + $i)->applyFromArray($styleArray);
}
$startedCell = $startedCell + 6;

$whoVistupaet = $_COOKIE['whoVistupaet'];
$kefVisota = $_COOKIE['kefVisota'];
$sheet->setCellValue("O20", $kefVisota);

$sheet->setCellValue("A" . $startedCell, "Подрядчик");
$sheet->setCellValue("C" . $startedCell + 2, $podradchik);
$sheet->getStyle('C' . $startedCell + 2)->getFont()->setBold(true);

$sheet->setCellValue("A" . $startedCell + 2, "Директор");
$sheet->getStyle('A' . $startedCell)->getFont()->setBold(true);
$sheet->setCellValue("A" . $startedCell + 5, "_______________________________");
$sheet->setCellValue("D" . $startedCell + 5, "      А.В. Лукьянович");
$sheet->setCellValue("A" . $startedCell + 6, "М.П.");


header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=myFile.xlsx");


$writer = new Xlsx($spreadsheet);
$writer->save("php://output");

