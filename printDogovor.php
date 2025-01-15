<?php
setlocale(LC_TIME, 'ru_RU.UTF-8');
$indprot = $_POST['indprot'] ?? "";
$indtehzad = $_POST['indtehzad'] ?? "";
$indcalendarplan = $_POST['indcalendarplan'] ?? "";
$indsvodsmet = $_POST['indsvodsmet'] ?? "";
$indcalc = $_POST['indcalc'] ?? "";
$indsmeta = $_POST['indsmeta'] ?? "";
$nomer_dogovora = $_POST['nomer_dogovora'] ?? null;
$applications = $_POST['applications'] ?? null;
$rekvizit = $_POST['rekvizit'] ?? null;
$doljn = $_POST['doljn'] ?? null;
$count_bum = $_POST['count_bum'] ?? null;
$count_el = $_POST['count_el'] ?? null;
$doljn = $_POST['doljn'] ?? null;
$osn_podpis = $_POST['osn_podpis'] ?? null;
$date_zakl_dogovora = $_POST['date_zakl_dogovora'] ?? null;
$fio = $_POST['fio'];
$fioDirika = $doljn == "Директор" ? "А.В. Лукьянович" : "Иванов И.И";
$formatted_date_zakl_dogovora = null;
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
    $date_zakl = DateTime::createFromFormat('Y-m-d', $date_zakl_dogovora);
    if ($date_zakl) {
        // Форматирование даты на русском языке
        $formatter = new IntlDateFormatter(
            'ru_RU',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            null,
            IntlDateFormatter::GREGORIAN,
            'd MMMM yyyy г.'
        );
        $form_date_zakl_dogovora = $formatter->format($date_zakl);
    }
}


$name_zakazchik = $_POST['name_zakazchik'] ?? null;

$date_start_work = $_POST['date_start_work'] ?? null;
$date_end_work = $_POST['date_end_work'] ?? null;

$formatted_date_start_work = null;
$formatted_date_end_work = null;

if ($date_start_work) {
    $date_start = DateTime::createFromFormat('Y-m-d', $date_start_work);
    if ($date_start) {
        // Форматирование даты на русском языке
        $formatter = new IntlDateFormatter(
            'ru_RU',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            null,
            IntlDateFormatter::GREGORIAN,
            'd MMMM yyyy г.'
        );
        $formatted_date_start_work = $formatter->format($date_start);
    }
}

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


$target_work = $_POST['target_work'] ?? null;
$name_work = $_POST['name_work'] ?? null;
$cost_work = $_POST['cost_work'] ?? null;
$sum_avans = $_POST['sum_avans'] ?? null;

if ($cost_work !== null && $sum_avans !== null) {

    $costavans = (floatval($cost_work) * floatval($sum_avans)) / 100;
} else {
}

$istochnik = $_POST['istochnik'] ?? null;

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
    if ($intRubLastOne == 2 && $intRubLastTwo != 12 || $intRubLastOne == 3 && $intRubLastTwo != 13 || $intRubLastOne == 4 && $intRubLastTwo != 14)
        $stringP = " рубля";
    else
        $stringP = " рубль";
}
if ($last_two_characters == "00") {
    $stringP = " рублей";
}

if ($intKopLastTwo >= 5 && $intKopLastTwo < 100) {
    $stringK = " копеек";
    if ($intKopLastOne == 1 && $intKopLastOne != 11) {
        $stringK = " копейка";
    } else if ($intKopLastOne > 1 && $intKopLastOne < 5 && ($intKopLastTwo < 12 || $intKopLastTwo > 20)) {
        $stringK = " копейки";
    }
} else {
    $stringK = " копейки";
}

$result_rubli = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => $rubli]);
$result_kopeiki = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => $kopeiki]);

//-------------------------------аванс


$rubli1 = intval($costavans);
$costavans = str_replace(',', '.', $costavans);
$number1 = floatval($costavans);
$costavans = $number1 * 100;
$kopeiki1 = round($costavans - $rubli1 * 100);

$last_one_characters_k1 = substr($kopeiki1, -1);
$intKopLastOne1 = intval($last_one_characters_k1);
$last_two_characters_k1 = substr($kopeiki1, -2);
$intKopLastTwo1 = intval($last_two_characters_k1);

$last_one_characters1 = substr($rubli1, -1);
$intRubLastOne1 = intval($last_one_characters1);

$stringP1 = "";
$last_two_characters1 = substr($rubli1, -2);
$intRubLastTwo1 = intval($last_two_characters1);

$intKopeiki1 = $kopeiki1;

if ($intRubLastTwo1 >= 5 && $intRubLastTwo1 < 100) {
    $stringP1 = " рублей";

    if ($intRubLastOne1 == 1 && $intRubLastTwo1 != 11) {
        $stringP1 = " рубль";
    } else if ($intRubLastOne1 > 1 && $intRubLastOne1 < 5 && $intRubLastTwo1 < 12 || $intRubLastTwo1 > 20) {
        $stringP1 = " рубля";
    }
} else {
    if ($intRubLastOne1 == 2 && $intRubLastTwo1 != 12 || $intRubLastOne1 == 3 && $intRubLastTwo1 != 13 || $intRubLastOne1 == 4 && $intRubLastTwo1 != 14)
        $stringP1 = " рубля";
    else
        $stringP1 = " рубль";
}
if ($last_two_characters1 == "00") {
    $stringP1 = " рублей";
}

if ($intKopLastTwo1 >= 5 && $intKopLastTwo1 < 100) {
    $stringK1 = " копеек";
    if ($intKopLastOne1 == 1 && $intKopLastOne1 != 11) {
        $stringK1 = " копейка";
    } else if ($intKopLastOne1 > 1 && $intKopLastOne1 < 5 && ($intKopLastTwo1 < 12 || $intKopLastTwo1 > 20)) {
        $stringK1 = " копейки";
    }
} else {
    $stringK1 = " копейки";
}

$result_rubli1 = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => $rubli1]);
$result_kopeiki1 = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => $kopeiki1]);


//-----------------------------------
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
<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>Договор № ' . $nomer_dogovora . ' </strong> </div>

    <div style="margin-top:-100px">
    <pre  style="text-align: left; line-height: 18pt; padding-left: 0px; ">
        г. Минск                                                                               ' . $form_date_zakl_dogovora . '
    </pre>
        <p style="text-align: justify;"> ' . $name_zakazchik . ', именуемое в дальнейшем «<strong>Заказчик</strong>» в лице ' . $doljn . ', действующего на основании ' . $osn_podpis . ' с одной стороны, и <strong>ООО «ИЗИСКОМ»</strong> в лице директора Лукьяновича А.В., действующего на основании Устава, именуемое в дальнейшем <strong>«Подрядчик»</strong>, с другой стороны, вместе именуемые - Стороны, заключили настоящий Договор о нижеследующем:</p>
    </div> 
    <div >
        <h2 class="text-lg font-bold">1. ПРЕДМЕТ ДОГОВОРА</h2>
        <pre class=" no-margin" style=" text-indent: 30px; ">1.1. <strong>Заказчик</strong> поручает, а <strong>Подрядчик</strong> обязуется выполнить <strong> ' . $name_work . ' </strong> с последующей выдачей соответствующего заключения. <br></pre>
        <pre style=" text-indent: 30px; ">1.2. Цель проведения работ – ' . $target_work . '</pre>
    </div>
    <div >
        <h2 class="text-lg font-bold">2. СРОКИ ВЫПОЛНЕНИЯ РАБОТ</h2>
       <pre class=" no-margin" >2.1. Сроки выполнения работ: ' . $formatted_date_start_work . ' - ' . $formatted_date_end_work . '</pre>
       <pre>2.2. В случае не своевременного выполнения <strong>Заказчиком</strong> обязательства, изложенного в п. 3.1.1 настоящего Договора, <strong>Подрядчик</strong> имеет право сместить срок выполнения на соответствующее число дней.</pre>
    </div>
     <div class="">
        <h2 class="text-lg font-bold">3. ПРАВА И ОБЯЗАННОСТИ СТОРОН</h2>
        <pre class=" no-margin">3.1. <strong>Заказчик</strong> обязуется:</pre>
        <pre class=" no-margin">3.1.1. Содействовать <strong>Подрядчику</strong> в обеспечении свободного, непрерывного и безопасного доступа к строительным конструкциям объекта на весь период действия договора.</pre>
        <pre class=" no-margin">3.1.2. Предоставить имеющуюся техническую документацию по объекту <strong>Подрядчику</strong> для изучения.</pre>
        <pre class=" no-margin">3.1.3. В случае необходимости своевременно информировать <strong>Подрядчика</strong> о предполагаемых изменениях в техническом состоянии объекта.</pre>
        <pre class=" no-margin">3.1.4. Обеспечить своевременную приемку работ по настоящему договору.</pre>
        <pre class=" no-margin">3.1.5. При необходимости произвести своими силами и за свой счет вскрытия в строительных конструкциях в местах отбора образцов, определённых <strong>Подрядчиком</strong>.</pre>
        <pre class=" no-margin">3.2. <strong>Подрядчик</strong> обязуется:</pre>
        <pre class=" no-margin">3.2.1. Произвести работы в соответствии с СН 1.04.01 «Техническое состояние зданий и сооружений», а также с требованиями указанных в техническом задании.</pre>
        <pre class=" no-margin">3.2.2. Доставлять собственными силами и за свой счёт необходимое для надлежащего выполнения работ материально-техническое обеспечение на объект и обратно, обеспечить выполнение всех видов работ по настоящему договору своими силами и за свой счёт, обеспечить качественное и своевременное исполнение всех видов работ, соблюдения сотрудниками правил выполнения работ и техники безопасности при их производстве.</pre>
        <pre class=" no-margin">3.2.3. <strong>Подрядчик</strong> имеет право привлекать для проведения или обеспечения некоторых видов работ по настоящему договору сторонние (субподрядные) организации.</pre> 
    </div>';

echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">4. СТОИМОСТЬ РАБОТ И ПОРЯДОК ОПЛАТЫ</h2>
        <pre class=" no-margin">4.1. Стоимость работ определена на момент составления договора, согласно утвержденной сторонами протокола (Приложение №' . $indprot . ') и составляет:<strong> ' . $rubli . ',' . $kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $result_kopeiki . ' ' . $stringK . ')</strong>, без НДС (в связи с применением УСН).</pre>
        <pre class=" no-margin">4.2. Цена может изменяться в следующих случаях:</pre>
        <pre class=" no-margin">- внесения <strong>Заказчиком</strong> изменений в первоначальное задание, влекущее за собой изменение объемов обследовательских работ;</pre>
        <pre class=" no-margin">- изменения налогового законодательства;</pre>
        <pre class=" no-margin">В случае изменения договорной цены расчеты производятся на основании исполнительной калькуляции по фактическим трудозатратам.</pre>
        ';
if ($sum_avans == "0") {
    echo '<pre class="ml-4 mt-2 no-margin">4.3. Расчет за выполненные работы производится путем банковского перевода денежных средств на расчетный счет <strong>Подрядчика</strong> в течение 05 банковских дней со дня подписания акта сдачи-приёмки выполненных работ.</pre>';
} else {
    echo '<pre class="ml-4 mt-2 no-margin">4.3. Заказчик в течении 2 банковских дней от даты договора перечисляет Подрядчику авансовый платеж в размере ' . $sum_avans . '% от стоимости работ по договору, что составляет: <strong> ' . $rubli1 . ',' . $kopeiki1 . ' (' . $result_rubli1 . ' ' . $stringP1 . ' ' . $result_kopeiki1 . ' ' . $stringK1 . ')</strong>. Подрядчик приступает к выполнению работ со дня вступления авансового платежа. При несвоевременном перечислении авансового платежа подрядчик имеет право перенести срок сдачи работ соразмерно количеству дней задержки авансового платежа.</pre>';
}
echo ' <pre class="ml-4 mt-2 no-margin">4.4. В случае приостановления или прекращения работ по инициативе <strong>Заказчика</strong> окончательный расчет производится за фактически выполненный объем работ с учетом фактических затрат <strong>Подрядчика</strong> в течение пяти банковских дней после подписания акта сдачи-приемки выполненных работ.</pre>
        <pre class="ml-4 mt-2 no-margin">4.5. В случае возникновения необходимости выполнения работ, непредусмотренных договором и не включенных в смету, данные работы оплачиваются на основании дополнительного соглашения сторон, при этом сумма дополнительной оплаты рассчитывается на основе и по методике основной сметы.</pre>
        <pre class="ml-4 mt-2 no-margin">4.6. Источник финансирования – ' . $istochnik . '.</pre> 
    </div>';

echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">5. ПОРЯДОК СДАЧИ И ПРИЕМКИ РАБОТ</h2>
        <pre class="ml-4 mt-2 no-margin">5.1. Работа принимается по накладной на основании подписанного сторонами акта сдачи-приемки выполненных работ.
</pre>
        <pre class="ml-4 mt-2 no-margin">5.2. <strong>Заказчик</strong> обязан принять выполненные работы и подписать накладную и акт сдачи-приемки выполненных работ в течение 5 (пяти) дней с момента их завершения или направить <strong>Подрядчику</strong> обоснованные претензии, в противном случае работы считаются принятыми и подлежат оплате со дня предоставления накладной и акта.</pre>
        <pre class="ml-4 mt-2 no-margin">5.3. Если в процессе выполнения работ выясняется невозможность ее дальнейшего проведения, Подрядчик обязан приостановить ее, письменно поставить об этом в известность <strong>Заказчика</strong> и в 10-ти дневный срок рассмотреть вопрос о дальнейших действиях. По истечении указанного срока <strong>Заказчик</strong> уплачивает <strong>Подрядчику</strong> стоимость выполненных работ.</pre> 
    </div>';

echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">6. ОТВЕТСТВЕННОСТЬ СТОРОН</h2>
        <pre class="ml-4 mt-2 no-margin">6.1. За невыполнение или ненадлежащее выполнение обязательств по настоящему договору <strong>Заказчик</strong> и <strong>Подрядчик</strong> несут имущественную ответственность в соответствии с действующим законодательством Республики Беларусь.
</pre>
        <pre class="ml-4 mt-2 no-margin">6.2. Споры, связанные с заключением и исполнением настоящего договора, рассматриваются в экономическом суде по месту нахождения ответчика в порядке, установленным хозяйственно-процессуальным кодексом Республики Беларусь.</pre>
        <pre class="ml-4 mt-2 no-margin">6.3. Стороны освобождаются от ответственности при наступлении форс-мажорных обстоятельств (пожар, наводнение, землетрясение и др.).</pre> 
        <pre class="ml-4 mt-2 no-margin">6.4. За нарушение сроков выполнения работ (п. 2.1 настоящего договора) Подрядчик уплачивает пеню в размере 0.2% от стоимости работ за каждый день просрочки, но не более 10% от стоимости.</pre> 
        <pre class="ml-4 mt-2 no-margin">6.5. За несвоевременную оплату выполненных работ (п. 4.3 настоящего договора) Заказчик уплачивает пеню в размере 0.2% от стоимости несвоевременно оплаченных работ за каждый день просрочки, но не более 10% от стоимости.</pre> 
    </div>';

echo '     <div class="mt-8" >
        <h2 class="text-lg font-bold">7. ДОПОЛНИТЕЛЬНЫЕ УСЛОВИЯ</h2>
        <pre class="ml-4 mt-2 no-margin">7.1. Все изменения и дополнения в договор вносятся путем заключения дополнительного соглашения, подписанного обеими сторонами.
</pre>
    </div>';
echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">8. СРОК ДЕЙСТВИЯ ДОГОВОРА </h2>
        <pre class="ml-4 mt-2 no-margin">8.1. Настоящий договор вступает в силу со дня его подписания и действует до полного исполнения сторонами своих обязательств.
</pre>
    </div>';

echo '    
    
     <div class="mt-8 page-break" >
        <h2 class="text-lg font-bold">9. ЮРИДИЧЕСКИЕ АДРЕСА СТОРОН</h2>
        <pre class="ml-4 mt-2 no-margin"><strong>Заказчик: ' . $name_zakazchik . '   </strong></pre>
<pre>' . $rekvizit . ' </pre>
<br>
  <pre class="ml-4 mt-2" style = "margin-bottom:0px"><strong>Подрядчик: ООО «ИЗИСКОМ»</strong></pre>
 <pre >ул. Шафарнянская, 11, пом.25, г. Минск, 220125, Республика Беларусь тел. факс +375(17) 3939673, +375(17) 3968696, E-mail: info@iziscom.by, www.iziscom.by УНП193091186 р/с BY61TECN30125225720180000010 БИК: TECNBY22 в ОАО «Технобанк» ул. Руссиянова, 8, г. Минск.</pre>

    </div>';

echo '     <div class="mt-8">
     ' . $applications . '
    </div>';


echo ' 

 <br><br>
 <table class ="ft" style="border-collapse: collapse; border: none;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td style="width: 45%;font-weight: 600;">ПОДРЯДЧИК <br>  ООО «ИЗИСКОМ» </td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%;font-weight: 600;">ЗАКАЗЧИК <br> '.$name_zakazchik.'</td>
    </tr>
 
    <tr>
        <td style="width: 45%; vertical-align: top">Директор</td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%; vertical-align: top">'.$doljn.'</td><br><br>
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

<br><br><br><br><br>  ';



$nomer_dogovora = $_POST['nomer_dogovora'];
$date_zakl_dogovora = $_POST['date_zakl_dogovora'];
$name_work = $_POST['name_work'];
$osn_obsled = $_POST['osn_obsled'];
$id_zakazchik = $_POST['id_zakazchik'];
$who_podpis_dog = $_POST['who_podpis_dog'];
$doljn = $_POST['doljn'];

//$_POST['id'];
$date_zakl_dogovora = DateTime::createFromFormat('Y-m-d', $date_zakl_dogovora);
if ($date_zakl_dogovora) {
    $formatter = new IntlDateFormatter(
        'ru_RU',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        null,
        IntlDateFormatter::GREGORIAN,
        'd MMMM yyyy г.'
    );
    $formatted_date_zakl_dogovora = $formatter->format($date_zakl_dogovora);
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

</head>
<body>
<DIV class = "page-break"></DIV>
<div style="display: grid" >
    <div style='float: right'>
        <div style='position: relative; text-align: right'>Приложение №<?= $indprot ?></div>
        <div style='position: relative;text-align: right'>к договору <?= $nomer_dogovora ?></div>
        <div style='position: relative; text-align: right'>от <?= $formatted_date_zakl_dogovora ?></div>
    </div>

    <div style="text-align: center; margin-top: 50px; font-size:18px"><b>Протокол</b></div>
    <div style="text-align: center; margin-top: 10px; font-size:14px"><b>согласования договорной (контрактной) цены</b></div>

<br>
        <div style="text-align: center;">Наименование выполняемых работ:</div>
        <p style="margin: 0;">«<?= $name_work ?>»</p> <br>
        <div style="margin-left: 30px">Основание для обследования: <?= $osn_obsled ?></div>
        <div style="margin-left: 30px"><b>Заказчик</b>: <?= $id_zakazchik ?></div>
        <div style="margin-left: 30px"><b>Подрядчик</b>: ООО «ИЗИСКОМ»</div>
        <div style=" text-indent:30px;">Договорная цена работ: <b><?=$rubli.','.$kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $kopeiki . ' ' . $stringK . ')' ?></b>,без НДС (в связи с применением УСН).</div>


    <br>
    <br>


<?php echo '
 <table class ="ft" style="border-collapse: collapse; border: none;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td style="width: 45%;font-weight: 600;">ПОДРЯДЧИК <br>  ООО «ИЗИСКОМ» </td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%;font-weight: 600;">ЗАКАЗЧИК <br> '.$name_zakazchik.'</td>
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
    ';
?>

</div>
</body>
</html>





<?php


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
         .dirikxyu td{
            text-align: center;
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="display: grid">
    <div style='float: right'>
        <div style='position: relative; text-align: right'>Приложение №<?= $indcalendarplan ?></div>
        <div style='position: relative;text-align: right'>к договору <?= $nomer_dogovora ?></div>
        <div style='position: relative; text-align: right'>от <?= $formatted_date_zakl_dogovora ?></div>
    </div>

    <div style="text-align: center; margin-top: 50px; font-size:14px"><b>КАЛЕНДАРНЫЙ ПЛАН</b></div><br>
        <div style="text-align: center;">Наименование выполняемых работ:</div>
        <p style="margin: 0;">«<?= $name_work ?>»</p>
    <br>

    <div>
        <table class = "dirikxyu" border="1">
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

                <th style = "width: 80px;">
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
                <td><?=$osn_obsled?> на бумажном носителе в <?=$count_bum?> экз., в электронном формате в <?=$count_el?> экз.</td>
            </tr>
            <tr>
                <td>Итого</td>
                <td></td>
                <td><b><?=$rubli . ',' . $kopeiki?></b></td>
                <td></td>
                <td></td>
                <td><?=$count_bum + $count_el?></td>
            </tr>
        </table>
    </div>
    <br>
    <br>
</div>
<?php echo '
 <table class ="ft" style="border-collapse: collapse; border: none;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td style="width: 45%;font-weight: 600; vertical-align: top">ПОДРЯДЧИК <br>  ООО «ИЗИСКОМ» </td>
        <td style="width: 10%;font-weight: 600;"> </td>
        <td style="width: 45%;font-weight: 600; vertical-align: top">ЗАКАЗЧИК <br> '.$name_zakazchik.'</td>
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
    ';
?>
</body>
</html>




