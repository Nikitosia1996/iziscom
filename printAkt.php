<?php
setlocale(LC_TIME, 'ru_RU.UTF-8');

$doljn = $_POST['doljn'] ?? null;
$fio = $_POST['fio'] ?? null;
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
 font-size:14pt;
            text-align: center;
        }

        p { 
            text-align: center; 
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
.text-lg{
font-size: 14pt;
}
    .no-margin {
        margin: 0; /* Убираем отступы */
    }
pre{
    font-family: "Times New Roman";
    font-size: 12pt;
    text-align: justify; 
    text-indent: 30px;
}

.mt-m2{
    margin-top: -200px;
    padding-top:-200px;
}

.ft td{
 border:none;
}
    
</style>
</body>        

<table class ="ft" style="border-collapse: collapse; border: none;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td style="width: 45%;font-weight: 600; vertical-align: top"">ЗАКАЗЧИК <br> '.$name_zakazchik.'</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%;font-weight: 600; vertical-align: top"">ПОДРЯДЧИК <br> ООО «ИЗИСКОМ»</td>
    </tr>
 
    <tr>
        <td style="width: 45%; vertical-align: top">'. $rekvizit .'</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%; vertical-align: top">ул. Шафарнянская, 11, пом.25, г. Минск, 220125, Республика Беларусь<br>
            тел. факс +375(17) 3939673, <br>+375(17) 3968696,
            E-mail: info@iziscom.by, www.iziscom.by<br>
            УНП193091186
            р/с BY61TECN30125225720180000010<br>
            БИК: TECNBY22 в ОАО «Технобанк»<br>
            ул. Руссиянова, 8, г. Минск.
        </td>
    </tr>
</table>
  
<br>


<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>Акт  </strong>  <br><br>
<strong style="font-size: 12pt">сдачи-приемки выполненных работ</strong> <br>
<strong style="font-size: 12pt">по договору № '.$nomer_dogovora.' от '.$formatted_date_start_work.' </strong>
 </div>
     <pre  style="text-align: left; line-height: 18pt; padding-left: 0px; ">
        г. Минск                                                                               ' . $formatted_date_start_akt . '
    </pre>
   
</div>

        <pre style="text-align: justify;">Мы, нижеподписавшиеся, представитель Подрядчика – директор <strong>ООО «ИЗИСКОМ»</strong> А.В. Лукьянович, с одной стороны, и Заказчик – '.$name_zakazchik.' с другой стороны, составили настоящий акт о том, что работы по предмету договора: «'.$name_work.'», выполнены в полном объеме.
1. Заказчик к качеству и объему выполненных работ претензий не имеет. 
2. Работы надлежащим образом оформлены и переданы Заказчику по накладной от '.$formatted_date_end_work.'. 
3. <strong>Стоимость выполненных работ по настоящему акту составляет: ' . $rubli.','.$kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $result_kopeiki . ' ' . $stringK. '),</strong> без НДС (в связи с применением УСН).
4. Ранее перечислено: 0 (Ноль) белорусских рублей. 
</pre><pre style="text-align:left">5. Следует к перечислению: <b>' . $rubli.','.$kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $result_kopeiki . ' ' . $stringK. '),</b> без НДС (в связи с применением УСН).<br>
</pre>
    ';
echo' 
    <br><br>
 <table class ="ft" style="border-collapse: collapse; border: none;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td style="width: 45%;font-weight: 600; vertical-align: top"">ПОДРЯДЧИК <br>  ООО «ИЗИСКОМ» </td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%;font-weight: 600; vertical-align: top"">ЗАКАЗЧИК <br> '.$name_zakazchik.'</td>
    </tr>
 
    <tr>
        <td style="width: 45%; vertical-align: top">Директор</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%; vertical-align: top">'.$doljn.'</td> <br><br>
    </tr> 
        <tr>
        <td style="width: 45%; vertical-align: top">______________ А.В. Лукьянович</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%; vertical-align: top">______________ '.$fio.'</td>
    </tr>
            <tr>
        <td style="width: 45%; vertical-align: center">м.п.</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%; vertical-align: center">м.п.</td>
    </tr>
</table>
    </div><br><br><br><br>  ';



echo'
  <table class ="ft" style="border-collapse: collapse; border: none;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td style="width: 45%;font-weight: 600; vertical-align: top"">ЗАКАЗЧИК <br> '.$name_zakazchik.'</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%;font-weight: 600; vertical-align: top"">ПОДРЯДЧИК <br> ООО «ИЗИСКОМ»</td>
    </tr>
 
    <tr>
        <td style="width: 45%; vertical-align: top">'. $rekvizit .'</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%; vertical-align: top">ул. Шафарнянская, 11, пом.25, г. Минск, 220125, Республика Беларусь<br>
            тел. факс +375(17) 3939673, <br>+375(17) 3968696,
            E-mail: info@iziscom.by, www.iziscom.by<br>
            УНП193091186
            р/с BY61TECN30125225720180000010<br>
            БИК: TECNBY22 в ОАО «Технобанк»<br>
            ул. Руссиянова, 8, г. Минск.
        </td>
    </tr>
</table>

<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 35px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>НАКЛАДНАЯ</strong> <br><br>
 <strong style="font-size: 12pt">на передачу результатов работ</strong> <br>
<strong style="font-size: 12pt">от '.$formatted_date_start_work.' </strong> <br><br>

договор № '.$nomer_dogovora.' от '.$formatted_date_start_work.'  по объекту: <br><br>
<strong style="font-size: 12pt">«'.$name_work.'»</strong> <br> <br>
 </div>

<div style=" justify-content: center; margin-left: 3%;">
<table border="1" >
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

echo'<br> <div class="footer">
            <div><strong>Отпуск документации разрешил:</strong></div><br>
            <div>
                <div>
                    <i>Директор ООО «ИЗИСКОМ» ___________________ А. В. Лукьянович</i>         
                </div><DIV STYLE = "MARGIN-LEFT:275PX;">М.П.</DIV><br>     <br>  
            </div>
            <div><strong>Указанную в накладной документацию принял:</strong></div>
            
            
                 <pre>
                    <br><br>__________________                     __________________                      __________________ 
   <i>(подпись)</i>                                       <i>(должность)</i>                                       <i>(ФИО)</i>
                </pre>
             
            </div>';

?>

</body>

