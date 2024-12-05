<?php

$id = $_POST['id'];
$nomer_dogovora = $_POST['nomer_dogovora'];
$date_zakl_dogovora = $_POST['date_zakl_dogovora'];
$name_work = $_POST['name_work'];
$istochnik = $_POST['istochnik'];
$date_start_work = $_POST['date_start_work'];
$date_end_work = $_POST['date_end_work'];
$id_zakazchik = $_POST['id_zakazchik'];
$who_podpis_dog = $_POST['who_podpis_dog'];
$doljn = $_POST['doljn'];
$fio = $_POST['fio'];
$fioDirika = $doljn == "Директор" ? "А.В. Лукьянович" : "Иванов И.И";
//$_POST['id'];
$date_zakl_dogovora = DateTime::createFromFormat('Y-m-d', $date_zakl_dogovora);
$date_start_work = DateTime::createFromFormat('Y-m-d', $date_start_work);
$date_end_work = DateTime::createFromFormat('Y-m-d', $date_end_work);
if ($date_zakl_dogovora) {
    // Форматирование даты на русском языке
    $formatter = new IntlDateFormatter(
        'ru_RU',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        null,
        IntlDateFormatter::GREGORIAN,
        'd MMMM yyyy г.'
    );
    $formatted_date_zakl_dogovora = $formatter->format($date_zakl_dogovora);
    $formatted_date_start_work = $formatter->format($date_start_work);
    $formatted_date_end_work = $formatter->format($date_end_work);
}

$cost_work = $_POST['cost_work'];
//$_POST['cost_work'] ?? null;

$rubli = intval($cost_work);
$cost_work = str_replace(',', '.', $cost_work);

// Преобразуем строку в вещественное число
$number = floatval($cost_work);
$cost_work = $number * 100;
$kopeiki = round($cost_work - $rubli * 100);

$last_one_characters_k = substr($kopeiki, -1);
$intKopLastOne = intval($last_one_characters_k);
$last_two_characters_k = substr($kopeiki, -2);
$intKopLastTwo = intval($last_two_characters_k);

$last_one_characters = substr($rubli, -1);
$intRubLastOne = intval($last_one_characters);

$stringP = "";
$last_two_characters = substr($rubli, -2);
$intRubLastTwo = intval($last_two_characters);

$intKopeiki = $kopeiki;

if ($intRubLastTwo >= 5 && $intRubLastTwo < 100) {
    $stringP = " рублей";

    if ($intRubLastOne == 1 && $intRubLastTwo != 11) {
        $stringP = " рубль";
    } else if ($intRubLastOne > 1 && $intRubLastOne < 5 && $intRubLastTwo < 12 || $intRubLastTwo > 20) {
        $stringP = " рубля";
    }
} else {
    $stringP = " рубль";
}
if ($last_two_characters == "00") {
    $stringP = " рублей";
}

if ($intKopLastTwo >= 5 && $intKopLastTwo < 100) {
    $stringK = " копеек";
    if ($intKopLastOne == 1 && $intKopLastOne != 11) {
        $stringK = " копейка";
    }else if ($intKopLastOne > 1 && $intKopLastOne < 5 && ($intKopLastTwo < 12 || $intKopLastTwo > 20)) {
        $stringK = " копейки";
    }
}else{
    $stringK = " копейки";
}

$result_rubli = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => $rubli]);
$result_kopeiki = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => $kopeiki]);
?>

<html>
<head>
    <style>
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<div style="display: grid">
    <div style='float: right'>
        <div style='position: relative; text-align: right'>Приложение №<?= $id ?></div>
        <div style='position: relative;text-align: right'>к договору <?= $nomer_dogovora ?></div>
        <div style='position: relative; text-align: right'>от <?= $formatted_date_zakl_dogovora ?></div>
    </div>

    <div style="text-align: center; margin-top: 50px; font-size:18px"><b>КАЛЕНДАРНЫЙ ПЛАН</b></div>

    <div >
        <p style="margin-left: 40px">Наименование выполняемых работ:</p>
        <p>«<?= $name_work ?>»</p>

    </div>

    <div>
        <table border="1">
            <tr>
                <th rowspan="2">
                    Наименование работ
                </th>
                <th rowspan="2">
                    Сроки начала и завершения выполняемых работ
                </th>
                <th colspan="2">
                    Расчетная стоимость
                </th>

                <th rowspan="2">
                    Источник финансирования
                </th>
                <th rowspan="2">
                    Результат работ
                </th>
            </tr>
            <tr>

                <th>
                    сумма, рублей
                </th>
                <th>
                    в % к стоимости
                </th>

            </tr>

            <tr>
                <td><?=$name_work?></td>
                <td style="text-align: center"><?=$formatted_date_start_work?><br>
                -<br><?=$formatted_date_end_work?>
                </td>
                <td><?=$rubli . ',' . $kopeiki?></td>
                <td>100%</td>
                <td><?=$istochnik?></td>
                <td>Техническое заключение в 2 экз.</td>
            </tr>
            <tr>
                <td>Итого</td>
                <td></td>
                <td><b><?=$rubli . ',' . $kopeiki?></b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

    <div style="display: flex; justify-content: space-around; margin-top: 60px;">
        <div>
            <b>Подрядчик</b>
            <br>
            <br>
            <?=$who_podpis_dog?><br>
            ООО «ИЗИСКОМ»<br><br>
            _____________<?=$fioDirika?>
            <br>
            <div style="text-align: left; font-size: 12px; margin-left:40px">М.П.</div>
        </div>
        <div>
            <b>Заказчик</b>
            <br>
            <br>
            <?=$doljn?><br>
            <?=$id_zakazchik?><br><br>
            _____________<?=$fio?>
            <br>
            <div style="text-align: left; font-size: 12px; margin-left:40px">М.П.</div>
        </div>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 20px;">

    </div>
</div>
</body>
</html>
