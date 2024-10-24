<?php
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\RichText\Run;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setTitle("Калькуляция");

$zakazchik = $_COOKIE['zakazchik'];
$podradchik = $_COOKIE['podradchik'];

$costwork14 = $_COOKIE['costwork14'];
$p_avg = $_COOKIE['p_avg'];
$t_k = $_COOKIE['t_k'];
$countCalc = $_COOKIE['countCalc'];
$calculacia = $_COOKIE['calculacia'];

class Service{
    public $name_rab, $trud, $doljnost, $tarif, $kol_isp;

    /**
     * Service constructor.
     * @param $name_rab
     * @param $trud
     * @param $doljnost
     * @param $tarif
     * @param $kol_isp
     */
    public function __construct($name_rab, $trud, $doljnost, $tarif, $kol_isp)
    {
        $this->name_rab = $name_rab;
        $this->trud = $trud;
        $this->doljnost = $doljnost;
        $this->tarif = $tarif;
        $this->kol_isp = $kol_isp;
    }

}


$sheet->getStyle('A1:Z1000')->getFont()->setName('Arial');
$sheet->getStyle('A1:Z1000')->getFont()->setSize(14);

$sheet->getColumnDimension("A")->setWidth(19 );
$sheet->getColumnDimension("B")->setWidth(19 );
$sheet->getColumnDimension("C")->setWidth(19 );
$sheet->getColumnDimension("D")->setWidth(14 );
$sheet->getColumnDimension("E")->setWidth(14);
$sheet->getColumnDimension("F")->setWidth(20 );
$sheet->getColumnDimension("G")->setWidth(16 );
$sheet->getColumnDimension("H")->setWidth(26 );
$sheet->getColumnDimension("I")->setWidth(18);
$sheet->getColumnDimension("J")->setWidth(22 );
$sheet->getColumnDimension("K")->setWidth(17 );
foreach (range('P', 'U') as $column) {
    $sheet->getColumnDimension($column)->setWidth(8.14);
}
for ($row = 1; $row <= 1000; $row++) {
    $sheet->getRowDimension($row)->setRowHeight(24);
}

$sheet->getRowDimension("5")->setRowHeight(47);


$sheet->setCellValue("J1", "Приложение №");
$sheet->setCellValue("J2", "к договору №");
$date = "30.08.2024";
$sheet->setCellValue("J3", "от ");
$sheet->setCellValue("K3", $date);
$sheet->getStyle("N1:N3")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

$sheet->setCellValue("E4", "Калькуляция трудозатрат");
$sheet->getStyle("E4")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle("E4")->getFont()->setSize(20);
$sheet->getStyle("E4")->getFont()->setBold(true);

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
$sheet->getStyle('A9:K9')->applyFromArray($styleArray);
$sheet->getStyle('A10:K13')->applyFromArray($styleArray);
$sheet->setCellValue("E9", "Общие положения и коэффициенты");
$sheet->getStyle("E9")->getFont()->setBold(true);


$sheet->setCellValue("A10", "Средний тарифный разряд исполнителей ");
$sheet->setCellValue("A12", "Тарифный коэффициент  для пересчета стоимости");
$sheet->getStyle('A10:A12')->getFont()->setSize(14);
$sheet->setCellValue("D10", "Pср.= ");
$sheet->setCellValue("E10", $p_avg);
$sheet->setCellValue("D12", "Тк=");
$sheet->setCellValue("E12", $t_k);
$sheet->setCellValue("H10", $costwork14);
$sheet->setCellValue("H12", $t_k * $costwork14);


$sheet->getStyle("D10:D12")->getFont()->setBold(true);

$sheet->setCellValue("G10", "Вчел-дн 01янв=");
$sheet->setCellValue("G12", "Вчел-дн14р=");
$sheet->getStyle("G10:G12")->getFont()->setBold(true);
$sheet->getStyle('G10:G12')->getFont()->setSize(11);



$sheet->setCellValue("I10", "руб. - стоимость работ на 1 чел.-д. исполнителя 14 разряда");
$sheet->setCellValue("I11", "на 01.01.2021 г. по приказу МАиС №205 от 14.12.2020 г.");
$sheet->setCellValue("I12", "руб. - стоим. работ на 1 чел.-дн. специал. 14 разряда ");
$sheet->setCellValue("I13", "на дату завершения работ, руб.");
$sheet->getStyle('I10:I13')->getFont()->setSize(10);



$sheet->setCellValue("A14", "№ п.п.");
$sheet->setCellValue("B14", "Наименование");
$sheet->setCellValue("F14", "              Показатели");
$sheet->setCellValue("J14", "         Должность исполнителя    ");
$sheet->getStyle('A14:A14')->applyFromArray($styleArray);
$sheet->getStyle('B14:D14')->applyFromArray($styleArray);
$sheet->getStyle('E14:H14')->applyFromArray($styleArray);
$sheet->getStyle('I14:K14')->applyFromArray($styleArray);
$sheet->getStyle("A14:K14")->getFont()->setBold(true);
$sheet->getStyle('A14:K14')->getFont()->setSize(12);
$sheet->getStyle('E15:E100')->getFont()->setSize(10);
$sheet->getStyle("E15:E100")->getFont()->setBold(false);
$sheet->getStyle('G15:G100')->getFont()->setSize(12);
$sheet->getStyle("G15:G100")->getFont()->setBold(false);


$startedCell = 15;
$arrService = array();

for($i = 0; $i < $countCalc; $i++){
    array_push($arrService, new Service($_COOKIE['name_rab' . ($i + 1)],$_COOKIE['trud' . ($i + 1)],
        $_COOKIE['doljnost' . ($i + 1)],$_COOKIE['tarif' . ($i + 1)],$_COOKIE['kol_isp' . ($i + 1)]));
}

foreach ($arrService as $service){
    $sheet->setCellValue("B" . $startedCell + 1, $service->name_rab);

    $sheet->setCellValue("E" . $startedCell, "Трудоемкость работы (услуги)");
    $sheet->setCellValue("E" . $startedCell + 1, "Количество исполнителей");
    $sheet->setCellValue("E" . $startedCell + 2, "Тарифный разряд  исполнителя по ЕТС");

    $sheet->setCellValue("G" . $startedCell, "T, чел.-дн.= ");
    $sheet->setCellValue("G" . $startedCell + 1, "N=");
    $sheet->setCellValue("G" . $startedCell + 2, "P=");

    $sheet->setCellValue("H" . $startedCell, $service->trud);
    $sheet->setCellValue("H" . $startedCell + 1, $service->kol_isp);
    $sheet->setCellValue("H" . $startedCell + 2, $service->tarif);

    $sheet->setCellValue("J" . $startedCell + 1, $service->doljnost);

    $endCell = $startedCell + 2;

    $sheet->getStyle('E' . $startedCell . ':F' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('A' . $startedCell . ':A' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('B' . $startedCell . ':D' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('G' . $startedCell . ':H' . $endCell)->applyFromArray($styleArray);
    $sheet->getStyle('I' . $startedCell . ':K' . $endCell)->applyFromArray($styleArray);

    $startedCell = $endCell + 1;
}


$sheet->setCellValue("B" . ++$endCell, "Итого стоимость работ");
$sheet->getStyle('B' . $endCell)->getFont()->setBold(true);
$sheet->getStyle('B' . $endCell)->getFont()->setItalic(true);
$sheet->getStyle('A' . $endCell . ':A' . $endCell)->applyFromArray($styleArray);
$sheet->getStyle('B' . $endCell . ':F' . $endCell)->applyFromArray($styleArray);
$sheet->getStyle('G' . $endCell . ':H' . $endCell)->applyFromArray($styleArray);
$sheet->getStyle('I' . $endCell . ':K' . $endCell)->applyFromArray($styleArray);
$sheet->setCellValue("J" . $endCell, $calculacia);






//if($isSborDann->chacked == "true"){
//    $sheet->setCellValue("E" . $startedCell + 9, $isSborDann->tableName);
//    $sheet->getStyle("E" . $startedCell + 9)->getFont()->setBold(true);
//    $sheet->getStyle('E' . $startedCell + 9)->getFont()->setSize(14);
//}

header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=myFile.xlsx");


$writer = new Xlsx($spreadsheet);
$writer->save("php://output");