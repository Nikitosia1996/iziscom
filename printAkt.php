<?php
setlocale(LC_TIME, 'ru_RU.UTF-8');

$rekvizit = $_POST['rekvizit'] ?? null;
$date_akt = $_POST['date_akt'] ?? null;
$date_end_work = $_POST['date_end_work'] ?? null;
$name_zakazchik = $_POST['name_zakazchik'] ?? null;
$nomer_dogovora = $_POST['nomer_dogovora'] ?? null;
$count_bum = $_POST['count_bum'] ?? null;
$count_el = $_POST['count_el'] ?? null;
$date_zakl_dogovora = $_POST['date_zakl_dogovora'] ?? null;
$name_work = $_POST['name_work'] ?? null;
$formatted_date_zakl_dogovora = null;
$formatted_date_zakl_akt = null;
$formatted_date_end_work = null;
if ($date_zakl_dogovora) {
    $date_z_dog = DateTime::createFromFormat('Y-m-d', $date_zakl_dogovora);
    if ($date_z_dog) {
        $formatted_date_zakl_dogovora = $date_z_dog->format('d.m.Y');
    } else {
        $date_zakl_dogovora = $_POST['date_zakl_dogovora'] ?? null;
    }
} else {
    $date_zakl_dogovora = $_POST['date_zakl_dogovora'] ?? null;
}

if ($date_zakl_dogovora) {
    $date_zakl_dogovora = DateTime::createFromFormat('Y-m-d', $date_zakl_dogovora);
    if ($date_zakl_dogovora) {

        $day = $date_zakl_dogovora->format('d');
        $month = $date_zakl_dogovora->format('n');
        $year = $date_zakl_dogovora->format('Y');


        $day = sprintf('«%02d»', intval($day));


        $months = [
            1 => 'января',
            2 => 'февраля',
            3 => 'марта',
            4 => 'апреля',
            5 => 'мая',
            6 => 'июня',
            7 => 'июля',
            8 => 'августа',
            9 => 'сентября',
            10 => 'октября',
            11 => 'ноября',
            12 => 'декабря',
        ];

        $monthName = $months[(int)$month];

        $formatted_date_start_work = "$day $monthName $year г.";
    }
}



if ($date_akt) {
    $date_z_dog_akt = DateTime::createFromFormat('Y-m-d', $date_akt);
    if ($date_z_dog_akt) {
        $formatted_date_zakl_akt = $date_z_dog_akt->format('d.m.Y');
    } else {
        $date_akt = $_POST['$date_akt'] ?? null;
    }
} else {
    $date_akt = $_POST['$date_akt'] ?? null;
}

if ($date_akt) {
    $date_akt = DateTime::createFromFormat('Y-m-d', $date_akt);
    if ($date_akt) {

        $day = $date_akt->format('d');
        $month = $date_akt->format('n');
        $year = $date_akt->format('Y');


        $day = sprintf('«%02d»', intval($day));


        $months = [
            1 => 'января',
            2 => 'февраля',
            3 => 'марта',
            4 => 'апреля',
            5 => 'мая',
            6 => 'июня',
            7 => 'июля',
            8 => 'августа',
            9 => 'сентября',
            10 => 'октября',
            11 => 'ноября',
            12 => 'декабря',
        ];

        $monthName = $months[(int)$month];

        $formatted_date_start_akt = "$day $monthName $year г.";
    }
}






$cost_work = $_POST['cost_work'] ?? null;

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


if ($date_end_work) {
    $date_end = DateTime::createFromFormat('Y-m-d', $date_end_work);
    if ($date_end) {
        // Форматирование даты на русском языке
        $formatter = new IntlDateFormatter(
            'ru_RU',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            null,
            IntlDateFormatter::GREGORIAN,
            'd MMMM yyyy г.'
        );
        $formatted_date_end_work = $formatter->format($date_end);
    }
}



echo '		
<body>
<style>


 h2 {
            text-align: center;
        }

        p {
            text-indent: 30px; 
        }
table {
  width: 100%;
  border-collapse: collapse;
  
}
.page-break {
        page-break-before: always; 
    }
.container {
    display: flex; 
    width: 100%; 
}

.left-block, .right-block {
    width: 50%; 
    padding: 20px;
    box-sizing: border-box; 
   
}
td {
   border: 1px solid black;
  padding: 4px;
  text-align: start;
  font-size: 12pt;
}
td {
  word-break: break-word;
}
th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f5f5f5;
}

        .footer {
            margin-top: 20px;
        }
        .footer div {
            margin-top: 20px;
        }
        .signature {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .signature div {
            width: 45%;
            text-align: center;
        }
        .signature div span {
            display: block;
            margin-top: 40px;
            border-top: 1px solid black;
        }

</style>
</body>        
    <div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 14pt; padding-left: 0px;">
        <strong>ЗАКАЗЧИК</strong> <br>
<strong>'.$name_zakazchik.' </strong><br>
'.$rekvizit.' <br>
<br>
    </div>
    <div class="right-block" style="text-align: left; line-height: 14pt; margin-left:90px;">
        <strong>ПОДРЯДЧИК</strong><br>
<strong>ООО «ИЗИСКОМ»</strong><br>
ул. Шафарнянская, 11, пом.25, г. Минск, 220125, Республика Беларусь
тел. факс +375(17) 3939673, +375(17) 3968696, 
E-mail: info@iziscom.by, www.iziscom.by
УНП193091186
р/с BY61TECN30125225720180000010
БИК: TECNBY22 в ОАО «Технобанк»
ул. Руссиянова, 8, г. Минск.
<br>
    </div>
</div>

<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>Акт  </strong>  <br><br>
<strong>сдачи-приемки выполненных работ</strong> <br>
<strong>по договору № '.$nomer_dogovora.' от '.$formatted_date_start_work.' </strong>
 </div>
    <br>
    <div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 14pt; padding-left: 0px;">
        г. Минск<br>
    </div>
    <div class="right-block" style="text-align: left; line-height: 14pt; margin-left:340px;">
        '.$formatted_date_start_akt.'<br>
    </div>
</div>
<div class="mt-4">
        <p style="text-align: justify;">Мы, нижеподписавшиеся, представитель Подрядчика – директор 
<strong>ООО «ИЗИСКОМ»</strong> А.В. Лукьянович, с одной стороны, и Заказчик – '.$name_zakazchik.' с другой стороны, составили настоящий акт о том, что работы по предмету договора: «'.$name_work.'», выполнены в полном объеме. <br>
1.	Заказчик к качеству и объему выполненных работ претензий не имеет. <br>
2.	Работы надлежащим образом оформлены и переданы Заказчику по накладной от '.$formatted_date_end_work.'. <br>
3. <strong>Стоимость выполненных работ по настоящему акту составляет: ' . $rubli.','.$kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $result_kopeiki . ' ' . $stringK. '),</strong> без НДС (в связи с применением УСН).<br>
4.	Ранее перечислено: 0 (Ноль) белорусских рублей. <br>
5.	Следует к перечислению: <strong>' . $rubli.','.$kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $result_kopeiki . ' ' . $stringK. '),</strong> без НДС (в связи с применением УСН).<br>
</p>
    </div>';
echo' 
    <div class="container" style="margin-left: 3%;">
 <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px;">
        <strong>Заказчик</strong><br>Директор<br><strong>'.$name_zakazchik.'</strong> <br>
    </div>
    <div class="right-block" style="text-align: left; line-height: 18pt; margin-left:120px;">
        <strong>Подрядчик</strong><br>Директор<br><strong>ООО «ИЗИСКОМ»</strong><br>
    </div>
</div></div>
<div class="container" style="margin-left: 3%; page-break-after: always;" >
    <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px; ">______________<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    <div class="right-block" style="text-align: left; line-height: 18pt; margin-left:120px;">______________А.В. Лукьянович<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    </div><br><br>  ';



echo'
  <div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 14pt; padding-left: 0px;">
        <strong>ЗАКАЗЧИК</strong> <br>
<strong>'.$name_zakazchik.' </strong><br>
'.$rekvizit.' <br>
<br>
    </div>
    <div class="right-block" style="text-align: left; line-height: 14pt; margin-left:90px;">
        <strong>ПОДРЯДЧИК</strong><br>
<strong>ООО «ИЗИСКОМ»</strong><br>
ул. Шафарнянская, 11, пом.25, г. Минск, 220125, Республика Беларусь
тел. факс +375(17) 3939673, +375(17) 3968696, 
E-mail: info@iziscom.by, www.iziscom.by
УНП193091186
р/с BY61TECN30125225720180000010
БИК: TECNBY22 в ОАО «Технобанк»
ул. Руссиянова, 8, г. Минск.
<br>
    </div>
</div>

<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>НАКЛАДНАЯ</strong> <br><br>
 <strong>на передачу результатов работ</strong> <br>
<strong>от '.$formatted_date_start_work.' </strong> <br><br>

договор № '.$nomer_dogovora.' от '.$formatted_date_start_work.'  по объекту: <br><br>
<strong>«'.$name_work.'»</strong> <br> <br>
 </div>

<div style=" justify-content: center; margin-left: 3%;">
<table style="border-collapse: collapse; border: 1px solid black; width: 98%; margin-top: 0px; margin-bottom: 0;">
    <tr style="padding: 6px;">
        <td style=" text-align: center;">
            <strong>№ п/п</strong>
        </td>
        <td style=" text-align: center;">
           <strong> Наименование технической документации</strong>
        </td>
        <td>

        </td>
       <td style="text-align: center;">
           <strong> Количество экземпляров</strong>
        </td>
        </tr>
        
        <tbody>';


echo ' <tr>
        <td rowspan="2" style = "text-align: center;"><strong>1</strong></td>
        <td rowspan="2" style = "text-align: left;"><strong>Отчет о техническом состоянии строительных конструкций по результатам обследования</strong></td>
        
        <td  style="    word-break: break-word; text-align: center;">На бумажном носителе </td>
        <td  style="    word-break: break-word; text-align: center;"><strong>'.$count_bum.'</strong></td>
</tr>
    <tr>
             <td style="    word-break: break-word; text-align: center;">
         В электронном формате
        </td>
                <td style="    word-break: break-word; text-align: center;"><strong>
'.$count_el.'</strong>
        </td>
</tr>
    <tr>
        <td style = "  text-align: center;"><strong>2</strong></td>
        <td colspan="2" style = "width: 70%; text-align: left;"><strong>Акт сдачи-приемки выполненных работ по договору № '.$nomer_dogovora.' от '.$formatted_date_start_work.' на сумму ' . $rubli.','.$kopeiki . ' руб.</strong></td>
        <td style="    word-break: break-word; text-align: center;"><strong> '.$count_el + $count_bum.'</strong></td>
</tr>
';
echo' </tbody></table>';

echo' <div class="footer">
            <div><strong>Отпуск документации разрешил:</strong></div>
            <div>
                <div>
                    <i>Директор ООО «ИЗИСКОМ» ___________________ А. В. Лукьянович</i>         
                </div><DIV STYLE = "MARGIN-LEFT:250PX;">М.П.</DIV><br>      
            </div>
            <div><strong>Указанную в накладной документацию принял:</strong></div>
            
            <div STYLE = "display: flex; justify-content: space-between;">
                 <div>
                    <br><br>__________________<br>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>(должность)</i></span>
                </div>
                <div>
                    <br><br>__________________<br>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>(подпись)</i></span>
                </div>
                <div>
                    <br><br>__________________<br>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>(ФИО)</i></span>
                </div>
            </div>';

?>

</body>

