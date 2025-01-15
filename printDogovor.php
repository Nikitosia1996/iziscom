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
$osn_podpis = $_POST['osn_podpis'] ?? null;
$date_zakl_dogovora = $_POST['date_zakl_dogovora'] ?? null;
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
            text-align: center;
        }

        p {
            text-indent: 20px; 
            text-align: justify; 
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
font-size: 14px;
}
    .no-margin {
        margin: 0; /* Убираем отступы */
    }

</style>
</body>        
<br><br><br>

<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>Договор № ' . $nomer_dogovora . ' </strong> </div>
    <br>
    <div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px;">
        г. Минск<br>
    </div>
    <div class="right-block" style="text-align: left; line-height: 18pt; margin-left:120px;">
        ' . $form_date_zakl_dogovora . '<br>
    </div>
</div>
<div class="mt-4">
        <p style="text-align: justify;"> ' . $name_zakazchik . ', именуемое в дальнейшем «<strong>Заказчик</strong>» в лице ' . $doljn . ', действующего на основании ' . $osn_podpis . ' с одной стороны, и <strong>ООО «ИЗИСКОМ»</strong> в лице директора Лукьяновича А.В., действующего на основании Устава, именуемое в дальнейшем <strong>«Подрядчик»</strong>, с другой стороны, вместе именуемые - Стороны, заключили настоящий Договор о нижеследующем:</p>
    </div> 
    <div class="mt-8">
        <h2 class="text-lg font-bold">1. ПРЕДМЕТ ДОГОВОРА</h2>
        <p class="mt-2 no-margin">1.1. <strong>Заказчик</strong> поручает, а <strong>Подрядчик</strong> обязуется выполнить <strong> ' . $name_work . ' </strong> с последующей выдачей соответствующего заключения.</p>
        <p class="mt-2 no-margin">1.2. Цель проведения работ – ' . $target_work . '</p>
    </div>
    <div class="mt-8">
        <h2 class="text-lg font-bold">2. СРОКИ ВЫПОЛНЕНИЯ РАБОТ</h2>
        <p class="mt-2 no-margin">2.1. Сроки выполнения работ: ' . $formatted_date_start_work . ' - ' . $formatted_date_end_work . '</p>
        <p class="mt-2 no-margin">2.2. В случае не своевременного выполнения <strong>Заказчиком</strong> обязательства, изложенного в п. 3.1.1 настоящего Договора, <strong>Подрядчик</strong> имеет право сместить срок выполнения на соответствующее число дней.</p>
    </div>
     <div class="mt-8">
        <h2 class="text-lg font-bold">3. ПРАВА И ОБЯЗАННОСТИ СТОРОН</h2>
        <p class="mt-2 no-margin">3.1. <strong>Заказчик</strong> обязуется:</p>
        <p class="ml-4 mt-2 no-margin">3.1.1. Содействовать <strong>Подрядчику</strong> в обеспечении свободного, непрерывного и безопасного доступа к строительным конструкциям объекта на весь период действия договора.</p>
        <p class="ml-4 mt-2 no-margin">3.1.2. Предоставить имеющуюся техническую документацию по объекту <strong>Подрядчику</strong> для изучения.</p>
        <p class="ml-4 mt-2 no-margin">3.1.3. В случае необходимости своевременно информировать <strong>Подрядчика</strong> о предполагаемых изменениях в техническом состоянии объекта.</p>
        <p class="ml-4 mt-2 no-margin">3.1.4. Обеспечить своевременную приемку работ по настоящему договору.</p>
        <p class="ml-4 mt-2 no-margin">3.1.5. При необходимости произвести своими силами и за свой счет вскрытия в строительных конструкциях в местах отбора образцов, определённых <strong>Подрядчиком</strong>.</p>
        <p class="mt-2 no-margin">3.2. <strong>Подрядчик</strong> обязуется:</p>
        <p class="ml-4 mt-2 no-margin">3.2.1. Произвести работы в соответствии с СН 1.04.01 «Техническое состояние зданий и сооружений», а также с требованиями указанных в техническом задании.</p>
        <p class="ml-4 mt-2 no-margin">3.2.2. Доставлять собственными силами и за свой счёт необходимое для надлежащего выполнения работ материально-техническое обеспечение на объект и обратно, обеспечить выполнение всех видов работ по настоящему договору своими силами и за свой счёт, обеспечить качественное и своевременное исполнение всех видов работ, соблюдения сотрудниками правил выполнения работ и техники безопасности при их производстве.</p>
        <p class="ml-4 mt-2 no-margin">3.2.3. <strong>Подрядчик</strong> имеет право привлекать для проведения или обеспечения некоторых видов работ по настоящему договору сторонние (субподрядные) организации.</p> 
    </div>';

echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">4. СТОИМОСТЬ РАБОТ И ПОРЯДОК ОПЛАТЫ</h2>
        <p class="ml-4 mt-2 no-margin">4.1. Стоимость работ определена на момент составления договора, согласно утвержденной сторонами протокола (Приложение №' . $indprot . ') и составляет:<strong> ' . $rubli . ',' . $kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $result_kopeiki . ' ' . $stringK . ')</strong>, без НДС (в связи с применением УСН).</p>
        <p class="ml-4 mt-2 no-margin">4.2. Цена может изменяться в следующих случаях:</p>
        <p class="ml-4 mt-2 no-margin">- внесения <strong>Заказчиком</strong> изменений в первоначальное задание, влекущее за собой изменение объемов обследовательских работ;</p>
        <p class="ml-4 mt-2 no-margin">- изменения налогового законодательства;</p>
        <p class="ml-4 mt-2 no-margin">В случае изменения договорной цены расчеты производятся на основании исполнительной калькуляции по фактическим трудозатратам.</p>
        ';
if ($sum_avans == "0") {
    echo '<p class="ml-4 mt-2 no-margin">4.3. Расчет за выполненные работы производится путем банковского перевода денежных средств на расчетный счет <strong>Подрядчика</strong> в течение 05 банковских дней со дня подписания акта сдачи-приёмки выполненных работ.</p>';
} else {
    echo '<p class="ml-4 mt-2 no-margin">4.3. Заказчик в течении 2 банковских дней от даты договора перечисляет Подрядчику авансовый платеж в размере ' . $sum_avans . '% от стоимости работ по договору, что составляет: <strong> ' . $rubli1 . ',' . $kopeiki1 . ' (' . $result_rubli1 . ' ' . $stringP1 . ' ' . $result_kopeiki1 . ' ' . $stringK1 . ')</strong>. Подрядчик приступает к выполнению работ со дня вступления авансового платежа. При несвоевременном перечислении авансового платежа подрядчик имеет право перенести срок сдачи работ соразмерно количеству дней задержки авансового платежа.</p>';
}
echo ' <p class="ml-4 mt-2 no-margin">4.4. В случае приостановления или прекращения работ по инициативе <strong>Заказчика</strong> окончательный расчет производится за фактически выполненный объем работ с учетом фактических затрат <strong>Подрядчика</strong> в течение пяти банковских дней после подписания акта сдачи-приемки выполненных работ.</p>
        <p class="ml-4 mt-2 no-margin">4.5. В случае возникновения необходимости выполнения работ, непредусмотренных договором и не включенных в смету, данные работы оплачиваются на основании дополнительного соглашения сторон, при этом сумма дополнительной оплаты рассчитывается на основе и по методике основной сметы.</p>
        <p class="ml-4 mt-2 no-margin">4.6. Источник финансирования – ' . $istochnik . '.</p> 
    </div>';

echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">5. ПОРЯДОК СДАЧИ И ПРИЕМКИ РАБОТ</h2>
        <p class="ml-4 mt-2 no-margin">5.1. Работа принимается по накладной на основании подписанного сторонами акта сдачи-приемки выполненных работ.
</p>
        <p class="ml-4 mt-2 no-margin">5.2. <strong>Заказчик</strong> обязан принять выполненные работы и подписать накладную и акт сдачи-приемки выполненных работ в течение 5 (пяти) дней с момента их завершения или направить <strong>Подрядчику</strong> обоснованные претензии, в противном случае работы считаются принятыми и подлежат оплате со дня предоставления накладной и акта.</p>
        <p class="ml-4 mt-2 no-margin">5.3. Если в процессе выполнения работ выясняется невозможность ее дальнейшего проведения, Подрядчик обязан приостановить ее, письменно поставить об этом в известность <strong>Заказчика</strong> и в 10-ти дневный срок рассмотреть вопрос о дальнейших действиях. По истечении указанного срока <strong>Заказчик</strong> уплачивает <strong>Подрядчику</strong> стоимость выполненных работ.</p> 
    </div>';

echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">6. ОТВЕТСТВЕННОСТЬ СТОРОН</h2>
        <p class="ml-4 mt-2 no-margin">6.1. За невыполнение или ненадлежащее выполнение обязательств по настоящему договору <strong>Заказчик</strong> и <strong>Подрядчик</strong> несут имущественную ответственность в соответствии с действующим законодательством Республики Беларусь.
</p>
        <p class="ml-4 mt-2 no-margin">6.2. Споры, связанные с заключением и исполнением настоящего договора, рассматриваются в экономическом суде по месту нахождения ответчика в порядке, установленным хозяйственно-процессуальным кодексом Республики Беларусь.</p>
        <p class="ml-4 mt-2 no-margin">6.3. Стороны освобождаются от ответственности при наступлении форс-мажорных обстоятельств (пожар, наводнение, землетрясение и др.).</p> 
        <p class="ml-4 mt-2 no-margin">6.4. За нарушение сроков выполнения работ (п. 2.1 настоящего договора) Подрядчик уплачивает пеню в размере 0.2% от стоимости работ за каждый день просрочки, но не более 10% от стоимости.</p> 
        <p class="ml-4 mt-2 no-margin">6.5. За несвоевременную оплату выполненных работ (п. 4.3 настоящего договора) Заказчик уплачивает пеню в размере 0.2% от стоимости несвоевременно оплаченных работ за каждый день просрочки, но не более 10% от стоимости.</p> 
    </div>';

echo '     <div class="mt-8" >
        <h2 class="text-lg font-bold">7. ДОПОЛНИТЕЛЬНЫЕ УСЛОВИЯ</h2>
        <p class="ml-4 mt-2 no-margin">7.1. Все изменения и дополнения в договор вносятся путем заключения дополнительного соглашения, подписанного обеими сторонами.
</p>
    </div>';
echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">8. СРОК ДЕЙСТВИЯ ДОГОВОРА </h2>
        <p class="ml-4 mt-2 no-margin">8.1. Настоящий договор вступает в силу со дня его подписания и действует до полного исполнения сторонами своих обязательств.
</p>
    </div>';

echo '     <div class="mt-8">
        <h2 class="text-lg font-bold">9. ЮРИДИЧЕСКИЕ АДРЕСА СТОРОН</h2>
        <p class="ml-4 mt-2 no-margin">9.1. <strong>Заказчик: ' . $name_zakazchik . '   </strong>
' . $rekvizit . '
</p>
  <p class="ml-4 mt-2 no-margin">9.2. <strong>Подрядчик: ООО «ИЗИСКОМ»</strong>
ул. Шафарнянская, 11, пом.25, г. Минск, 220125, Республика Беларусь
тел. факс +375(17) 3939673, +375(17) 3968696, E-mail: info@iziscom.by, www.iziscom.by
УНП193091186 р/с BY61TECN30125225720180000010
БИК: TECNBY22 в ОАО «Технобанк» ул. Руссиянова, 8, г. Минск.
</p>
    </div>';

echo '     <div class="mt-8">
     ' . $applications . '
    </div>';


echo ' 
    <div class="container" style="margin-left: 3%;">
 <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px;">
       <strong>Заказчик</strong><br><strong>' . $name_zakazchik . '</strong><br>
    </div>
    <div class="right-block" style="text-align: left; line-height: 18pt; margin-left:120px;">
      <strong>Подрядчик</strong><br><strong>ООО "ИЗИСКОМ"</strong><br><p>Директор</p>
    </div>
</div></div>
<div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px; ">______________<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    <div class="right-block" style="text-align: left; line-height: 18pt; margin-left:120px;">______________А.В. Лукьянович<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    </div><br><br>  ';



$nomer_dogovora = $_POST['nomer_dogovora'];
$date_zakl_dogovora = $_POST['date_zakl_dogovora'];
$name_work = $_POST['name_work'];
$osn_obsled = $_POST['osn_obsled'];
$id_zakazchik = $_POST['id_zakazchik'];
$who_podpis_dog = $_POST['who_podpis_dog'];
$doljn = $_POST['doljn'];
$fio = $_POST['fio'];
$fioDirika = $doljn == "Директор" ? "А.В. Лукьянович" : "Иванов И.И";
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
<div style="display: grid" class = "page-break">
    <div style='float: right'>
        <div style='position: relative; text-align: right'>Приложение №<?= $indprot ?></div>
        <div style='position: relative;text-align: right'>к договору <?= $nomer_dogovora ?></div>
        <div style='position: relative; text-align: right'>от <?= $formatted_date_zakl_dogovora ?></div>
    </div>

    <div style="text-align: center; margin-top: 50px; font-size:18px"><b>Протокол</b></div>
    <div style="text-align: center; margin-top: 10px; font-size:14px"><b>согласования договорной (контрактной) цены</b></div>

    <div >
        <p style="margin-left: 40px">Наименование выполняемых работ:</p>
        <p>«<?= $name_work ?>»</p>
        <div style="margin-left: 40px">Основание для обследования: <?= $osn_obsled ?></div>
        <div style="margin-left: 40px"><b>Заказчик</b>: <?= $id_zakazchik ?></div>
        <div style="margin-left: 40px"><b>Подрядчик</b>: ООО «ИЗИСКОМ»</div>
        <div style="margin-left: 40px">Договорная цена работ: <b><?=$rubli.','.$kopeiki . ' (' . $result_rubli . ' ' . $stringP . ' ' . $kopeiki . ' ' . $stringK . ')' ?></b>,</div>
        <div>без НДС (в связи с применением УСН).</div>


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




