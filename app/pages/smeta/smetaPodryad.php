<?php
include "app/classes/SmetaList.php";

$harakteristikaObject = 0;
$sborIshodnihDannih = 0;
$obsledotdel = 0;
$obmerRaboty = 0;
$obsledRab = 0;
$sostTech = 0;
$redaktorCons = 0;
$calculacia = 0;
$calcalcres = 0;


echo "<script>
     let smetaList = " . $smetaList->getListSmets() . ";
   
</script>";
?>
<style>
    .hidden {
        display: none;
    }

    .highlight-green {
        color: green;
    }

    .highlight-red {
        color: red;
    }

    .butrad {
        margin-right: 5px;
    }
   .form-date, .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    .form-control {
        resize: vertical;
    }

    .form-select {
        padding: 8px 12px;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s ease;
    }
    .form-select-calc {
        width: 66%;
        padding: 8px 12px;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s ease;
    }

    .form-select:focus, .form-select-calc:focus {
        border-color: #80bdff;
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }



    .form-outline {
        width: 90%;
        margin-bottom: 10px;
        margin-left: 5%;
        margin-top: 10px;
    }


    .zakpod, .zakpodGps {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #333;
    }

    .pasportzd {
        margin-left: 5%;
        display: inline;
    }

    .pasportzd {
        margin-left: 1%;
        display: inline;
    }




    .pos1, .pos2, .pos3 {
        flex: 1;
        min-width: 300px;
        padding: 15px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .position1 {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .posfull {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left: 1%;
        width: 100%;
    }

    .nameforblock {
        font-size: x-large;
        display: flex;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .input-container {
        margin-bottom: 15px;
    }

    .input-containerval {
        margin-left: 0%;
        margin-right: 2%;
        display: block;

    }

    .onCollap {
        margin-left: 5%;
    }

    #commonInputField, #commonInputFieldWorking {
        width: 100px;
        padding: 5px;
        margin-top: 5px;
    }

    #etazh {
        width: 33%;
    }

    #visotazdani {
        width: 33%;
    }

    #obem {
        width: 33%;
    }



    #visotapola {
        width: 33%;
    }

    .dndb, .dndb3, .dndb4, .dndb5, .dndb6, .dndb7, .dndb8, .dndb9 {
        padding: 20px;
        background: #ffffff;
        border-radius: 8px;
        margin: 10px 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        display:none;
    }

    .nameforblock1, .nameforblock3, .nameforblock4, .nameforblock5,
    .nameforblock6, .nameforblock7, .nameforblock8, .nameforblock9 {
        background: linear-gradient(to right, #f8f9fa, #e9ecef);
        padding: 15px 20px;
        border-radius: 8px;
        margin: 10px 0;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .nameforblock1:hover, .nameforblock3:hover, .nameforblock4:hover,
    .nameforblock5:hover, .nameforblock6:hover, .nameforblock7:hover,
    .nameforblock8:hover, .nameforblock9:hover {
        background: linear-gradient(to right, #e9ecef, #dee2e6);
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    input[type="checkbox"], input[type="radio"] {
        margin-right: 10px;
        cursor: pointer;
    }

    .countRub {
        margin-left: 10%;

    }

    .viborvis {
        margin-left: 5%;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .viborvisnew {
        margin-left: 1%;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .viborvischeckbox1 {
        margin-left: 5%;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .viborvischeckbox2 {
        margin-left: 5%;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .mainfreename {
        display: flex;
        margin-left: 1%;
    }

    .lolspace {

    }

    .mainlolspace {
        display: block;
    }


    .visotarad {
        display: inline;
    }

    .dusl {
        width: 92%;
        margin-top: 10px;
        margin-left: 1%;
        border: 1px solid;
        margin-bottom: 10px;
    }

    .dusl2 {
        width: 92%;
        margin-top: 10px;
        margin-left: 1%;
        margin-bottom: 10px;
    }

    #toggleZdDopUsl {
        margin-left: 15px;
    }

    .posframech {
        border: 1px solid;
        display: flex;
    }


    .mainselspace {
        display: flex;
        flex-direction: column;
    }

    .select-input-pair {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }



    .inpvalsel, .inpval {
        padding: 8px 12px;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        width: 80%;
        margin: 5px 0;
    }

    .mgbottom20p {
        margin-bottom: 20px;
    }

    .mgleft5 {
        margin-left: 2%;
    }

    .sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 30px;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 50px;
        z-index: 999;
        margin-top: 10px;
    }

    .hr {
        z-index: 1;
        position: relative;
    }
</style>
<style>
    :root {
        --primary-color: #2196F3;
        --secondary-color: #4CAF50;
        --accent-color: #FF5722;
        --background-color: #fff;
        --text-color: #333;
        --border-radius: 8px;
        --shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .otstup{
        height: 240px;
    }
    .header-fixed {
        width: 85.15%;
        position: fixed;
        top: 13.6%;
        left: 14%;
        right: 0;
        background: var(--background-color);
        box-shadow: var(--shadow);
        z-index: 1000;
        padding: 10px 0;
    }

    .header-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .header-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .search-group {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .amounts-group {
        display: flex;
        gap: 20px;
        background: #f8f9fa;
        padding: 10px;
        border-radius: var(--border-radius);
    }

    .amount-item {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .amount-value {
        font-weight: bold;
        color: var(--primary-color);
    }

    .buttons-group {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: left;
        width: 50%;
    }
    .buttons-group2 {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: right;
        width: 50%;
    }

    .btn {
        padding: 8px 15px;
        border: none;
        border-radius: var(--border-radius);
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s;
        white-space: nowrap;
    }

    .btn-primary { background: var(--primary-color); color: white; }
    .btn-secondary { background: var(--secondary-color); color: white; }
    .btn-accent { background: var(--accent-color); color: white; }

    .search-input {
        padding: 8px 15px;
        border: 1px solid #ddd;
        border-radius: var(--border-radius);
        width: 200px;
    }

    @media (min-width: 2100px) and (max-width: 2398px) {

        .header-fixed {
            width: 86.5%;
            position: fixed;
            top: 70px;
            left: 12.7%;
            right: 0;
            background: var(--background-color);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 10px 0;
        }
    }



    @media (min-width: 2399px) {

        .header-fixed {
            width: 88%;
            position: fixed;
            top: 70px;
            left: 11.2%;
            right: 0;
            background: var(--background-color);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 10px 0;
        }
    }


    @media (min-width: 1530px) and (max-width: 1700px) {
        .header-fixed {
            width: 81.5%;
            position: fixed;
            top: 70px;
            left: 17.6%;
            right: 0;
            background: var(--background-color);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 10px 0;
        }
    }


    @media (min-width: 1740px) and (max-width: 1899px) {

        .header-fixed {
            width: 83.6%;
            position: fixed;
            top: 70px;
            left: 15.5%;
            right: 0;
            background: var(--background-color);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 10px 0;
        }
    }
    @media (min-width: 1900px) and (max-width: 2099px) {

        .header-fixed {
            width: 85.1%;
            position: fixed;
            top: 70px;
            left: 14%;
            right: 0;
            background: var(--background-color);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 10px 0;
        }
    }


    @media (max-width: 1200px) {

        .header-fixed {
            width:100%;
            position: fixed;
            top: 7%;
            left: 0%;
            right: 0;
            background: var(--background-color);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 10px 0;
        }


        .header-row {
            flex-direction: column;
            align-items: stretch;
        }

        .search-group, .amounts-group, .buttons-group .buttons-group2 {
            margin-bottom: 10px;
        }
        .buttons-group{
            width: 75%;
        }

#btnShowModalPeremen{
    width: 130px;
    height: 25px;
}
.otstup{
    height: 275px;
}
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            white-space: nowrap;
        }


        .position1 {
            flex-direction: column;
        }

        .pos1, .pos2, .pos3 {
            width: 100%;
        }

        .select-input-pair {
            flex-direction: column;
        }
        .form-select-calc, .inpvalsel {
            width: 80%;
            margin: 5px 0;
        }

    }

    @media (max-width: 600px) {
        .position1 {
            padding: 10px;
        }

        .pos1, .pos2, .pos3 {
            padding: 10px;
        }
    }
    @media (max-width: 768px) {
        .nameforblock1, .nameforblock3, .nameforblock4, .nameforblock5,
        .nameforblock6, .nameforblock7, .nameforblock8, .nameforblock9 {
            padding: 10px 15px;
            font-size: 14px;
        }

        .dndb, .dndb3, .dndb4, .dndb5, .dndb6, .dndb7, .dndb8, .dndb9 {
            padding: 10px;
        }

        .viborvis, .viborvischeckbox1, .viborvischeckbox2 {
            margin: 5px 0;
        }
    }

    /* Стили для групп элементов */
    .viborvis, .viborvischeckbox1, .viborvischeckbox2 {
        margin: 15px 0;
    }

    /* Стили для горизонтальных линий */
    hr {
        margin: 10px 0;
        border: 0;
        border-top: 1px solid #dee2e6;
    }

    /* Стили для модального окна */
    .modal-content {
        border-radius: 8px;
    }

    .modal-header {
        background: #f8f9fa;
        border-radius: 8px 8px 0 0;
    }

    .modal-footer {
        background: #f8f9fa;
        border-radius: 0 0 8px 8px;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        max-height: 300px;
        overflow-y: auto;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .show {
        display: block;
    }

</style>

<div class="header-fixed">
    <div class="header-container">
        <div class="header-row">
            <div class="search-group">
                <div class="dropdown">
                    <button class="btn btn-primary" onclick="toggleDropdown()">Найти смету</button>
                    <div id="smetaDropdown" class="dropdown-content">
                        <input type="text" placeholder="Поиск смет..." id="smetaSearch" onkeyup="filterSmeta()">
                        <?php
                        $smetaArray = $smetaList->getSmetaArray();
                        foreach ($smetaArray as $smeta) {
                            echo '<a onclick="getSmeta(' . $smeta->getId() . ')">' . $smeta->getName() . '</a>';
                        }
                        ?>
                    </div>
                </div>
                <input type="text" class="search-input" id="smetaName" placeholder="Название сметы">
                <button class="btn btn-secondary" onclick="saveSmeta()">Сохранить</button>
            </div>

            <div class="amounts-group">
                <div class="amount-item">
                    <span>Общая сумма:</span>
                    <span class="amount-value" id="harakteristikaObjectObsh">0 ₽</span>
                </div>
                <div class="amount-item">
                    <span>Смета:</span>
                    <span class="amount-value" id="harakteristikaObjectSmeta">0 ₽</span>
                </div>
                <div class="amount-item">
                    <span>Калькуляция:</span>
                    <span class="amount-value" id="harakteristikaObjectCalc">0 ₽</span>
                </div>
            </div>
        </div>

        <hr>
<div style = "display:flex;">
        <div class="buttons-group">
            <button class="btn btn-accent" onclick="printCalculExcel()">Калькуляция в EXCEL</button>
            <button class="btn btn-accent" onclick="printExcel()">Смета в EXCEL</button>
            <button class="btn btn-accent" onclick="printTZ()">Техническое задание</button>
        </div>
        <div class="buttons-group2">
        <button class="btn btn-primary" id="btnShowModalPeremen">Параметры переменных</button>
        </div>
</div>
    </div>
</div>

<!-- Отступ для контента под фиксированной шапкой -->
<div class = "otstup"></div>

<div class="position1">
    <div class="pos1">
        <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
        <select class="form-select" aria-label="" id="zakazchik">
            <option value="0" selected>-- Пожалуйста, выберите --</option>
            <?php
            while ($row = $connectionDB->getRowResult($zakazchik)) {
                echo '<option id="zakazchik" value="' . htmlspecialchars($row['id_zakazchik']) . '">' . htmlspecialchars($row['nameZakazchik']) . '</option>';
            }
            ?>

        </select>

        <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
        <select class="form-select" aria-label="" id="podryadchik">
            <option id="podryadchik" value="0" selected>-- Пожалуйста, выберите --</option>
            <?php
            while ($row = $connectionDB->getRowResult($podryadchik)) {
                echo '<option value="' . htmlspecialchars($row['id_podryadchik']) . '">' . htmlspecialchars($row['namePodryadchik']) . '</option>';
            }
            ?>
        </select>

        <!-- Textarea with class .w-50 -->
        <label for="textAreaNaimRabot" class="zakpod">Наименование работ:</label>
        <div class="form-outline">
            <textarea class="form-control" id="textAreaNaimRabot" rows="3"></textarea>
        </div>
    </div>
    <div class="pos2">
        <label for="SelectZakazchik" class="zakpod">Дата начала выполнения работ:</label>
        <input type="date" class="form-date" id="dateNachRab" aria-label="">
        <label for="SelectPodryadchik" class="zakpod">Дата окончания работ:</label>
        <input type="date" class="form-date" id="dateOkonchRab" aria-label="">
        <label for="textAreaCel" class="zakpod">Цель:</label>
        <div class="form-outline">
            <textarea class="form-control" id="textAreaCel" rows="3"></textarea>
        </div>
    </div>


    <div class="pos3">
        <label for="calendarDays" class="zakpod">Календарных дней:</label>
        <input id="calendarDays" class="butrad" type="radio" name="daysType" value="calendar">
        <br>
        <div id="inputContainer" class="input-container">
            <label id="inputLabel" for="commonInputField">Введите значение:</label>
            <input id="commonInputField" disabled type="number" name="inputValue" step="1" min="0">
        </div>
        <label for="workingDays" class="zakpod">Рабочих дней:</label>
        <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
        <br>
        <div id="inputContainerWorking" class="input-container">
            <label id="inputLabel" for="commonInputFieldWorking">Введите значение:</label>
            <input id="commonInputFieldWorking" disabled type="number" name="inputValue" step="1" min="0">
        </div>

        <label for="textAreaMestoObj" class="zakpodGps">Местоположение объекта:</label>
        <div class="form-outline">
            <textarea class="form-control" id="textAreaMestoObj" rows="3"></textarea>
        </div>

    </div>
</div>

<hr>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


<div class="nameforblock1" onclick="toggleDisplay('.nameforblock1', '.dndb');">Характеристика
    объекта&nbsp;&nbsp;&nbsp;<?php echo '<span class="harakteristikaObject" id="harakteristikaObject">';
    //   echo $harakteristikaObject;
    echo '</span>'; ?></div>
<div class="dndb">
    <div class="position1">
        <div class="pos1">
            <div class="viborvis">
                <label for="SelectZakazchik" class="zakpod">Здание:</label>
                <select class="form-select" id="buildingType" aria-label=""
                        onchange="calculateHaracterCoefficient();">
                    <option data-id="1" value="0" selected>-- Пожалуйста, выберите --</option>
                    <option data-id="1.2" value="1">Жилое</option>
                    <option data-id="1.2" value="2">Гражданское</option>
                    <option data-id="1" value="3">Промышленное</option>
                    <option data-id="1" value="4">Сельскохозяйственное</option>
                    <option data-id="1" value="5">Галереи</option>
                    <option data-id="1" value="6">Коммуникационные и многоярусные эстакады</option>
                    <option data-id="1" value="7">Градирни, этажерки и т.д.</option>
                </select>

                <select class="form-select" id="constructionType" aria-label=""
                        onchange="calculateHaracterCoefficient();">
                    <option data-id="1" value="0" selected>-- Пожалуйста, выберите --</option>
                    <option data-id="1.2" value="1">Существующее здание</option>
                    <option data-id="0.8" value="2">Незавершенное капитальное строительство</option>
                    <option data-id="0.7" value="3">Новое строительство</option>
                </select>

                <div id="inputContainer" class="input-containerval">
                    <label for="etazh" class="zakpod">Количество этажей:</label>
                    <input data-id="1" id="etazh" type="number" name="inputValue" step="1" min="0"
                           oninput="calculateHaracterCoefficient()">
                </div>

                <div id="inputContainer" class="input-containerval">
                    <label for="visotazdani" class="zakpod">Высота здания:</label>
                    <input data-id="1" id="visotazdani" type="number" name="inputValue" step="1" min="0"
                           oninput="calculateHaracterCoefficient()">м
                </div>

                <div id="inputContainer" class="input-containerval">
                    <label for="obem" class="zakpod">Объем здания:</label>
                    <input id="obem" type="number" name="inputValue" step="1" min="0"
                           oninput="calculateHaracterCoefficient()">м³
                </div>

                <div id="inputContainer" class="input-containerval">
                    <label for="visotapola" class="zakpod">Высота покрытия от уровня пола:</label>
                    <input data-id="1" id="visotapola" type="number" name="inputValue" step="1" min="0"
                           oninput="calculateHaracterCoefficient()">м
                </div>

            </div>
        </div>
        <div class="pos2">

            <div class="viborvis">
                <input data-id="1.3" id="vis6" class="butrad" type="radio" name="zdvis" value="1"
                       onchange="calculateHaracterCoefficient()">
                <label for="vis6" class="visotarad"> 1) Здание высотой до 6м, бескрановое, однообъемное,
                    двухпролетное</label>
                <br>
                <input data-id="1.5" id="vis614" class="butrad" type="radio" name="zdvis" value="2"
                       onchange="calculateHaracterCoefficient()">
                <label for="vis614" class="visotarad">2) Здание высотой от 6м до 14м высоты, с кранами
                    грузоподъемностью до 50т включительно, с двумя объемами, 3-5 пролета, а также различные
                    сооружения, резервуары, тоннели, лестничные клетки, галереи
                </label>
                <br>
                <input data-id="1.5" id="vis14" class="butrad" type="radio" name="zdvis" value="3"
                       onchange="calculateHaracterCoefficient()">
                <label for="vis14" class="visotarad">3) Здание высотой более 14м, со сложной конструктивной схемой,
                    с двухъярусным расположением кранов, более 3
                    объемов, более 6 пролетов галереи с высотой опор более 20м и пролетом более 36м, полный
                    монолитный каркас</label>
                <br>
            </div>
        </div>
        <div class="pos3">

            <label for="SelectZakazchik" class="zakpod">Температурно-влажностный режим:</label>
            <select class="form-select" id="temperatureMode" aria-label=""
                    onchange="calculateHaracterCoefficient();">
                <option data-id="1" value="0" selected>-- Пожалуйста, выберите --</option>
                <option data-id="1" value="1">Нормальный (К = 1)</option>
                <option data-id="1.15" value="2">t>25° С, W>70% (K = 1.15)</option>
                <option data-id="1.2" value="3">t>30° С, W>85% (K = 1.2)</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Насыщенность оборудования:</label>
            <select class="form-select" id="equipmentSaturation" aria-label=""
                    onchange="calculateHaracterCoefficient();">
                <option data-id="1" value="0" selected>-- Пожалуйста, выберите --</option>
                <option data-id="1" value="1">Отсуствует (K = 1)</option>
                <option data-id="1.1" value="2">До 30% от площади помещений (K = 1.1)</option>
                <option data-id="1.2" value="3">От 30% До 50% от площади помещений (K = 1.2)</option>
                <option data-id="1.3" value="4">Свыше 50% от площади помещений (K = 1.3)</option>
            </select>

            <label>

                <input type="checkbox" id="toggleSelect"
                       onchange="toggleSelect('toggleSelect', 'selectContainer', 'options')"> Работа в помещениях в
                зависимости от степени агрессивности воздействия
            </label>

            <div id="selectContainer" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select class="form-select" id="options" disabled onchange="calculateHaracterCoefficient();">
                    <option data-id="1" value="0">-- Пожалуйста, выберите --</option>
                    <option data-id="1.2" value="1">Помещение со слабой степенью агрессивного воздействия (k=1.2)
                    </option>
                    <option data-id="1.3" value="2">Помещение со средней степенью агрессивного воздействия (k=1.3)
                    </option>
                    <option data-id="1.4" value="3">Помещение с сильной степенью агрессивного воздействия (k=1.4)
                    </option>
                </select>
            </div>

        </div>
    </div>
    <div class="position1">
        <div class="pos1">
            <div class="viborvis">
                <label>
                    <input class="harObj" data-id="1.5" value="1" type="checkbox" id="chekb1" data-nameK="K18.208"
                           onchange="calculateHaracterCoefficient();"> Выполнение работ с применением альпинисткого
                    снаряжения (K = 1.5)
                </label>
                <label>
                    <input class="harObj" data-id="1.25" value="2" type="checkbox" id="chekb2" data-nameK="K18.209"
                           onchange="calculateHaracterCoefficient();"> Шумовые воздействия, превышающие нормативные
                    величины (K = 1.25)
                </label>
                <label>
                    <input class="harObj" data-id="1.2" value="3" type="checkbox" id="chekb3" data-nameK="K18.210"
                           onchange="calculateHaracterCoefficient();"> Выполнение работ в условиях отрицательных
                    температур в период с 1 ноября - 1 мая (K = 1.2)
                </label>
                <label>
                    <input class="harObj" data-id="1.2" value="4" type="checkbox" id="chekb4" data-nameK="K18.211"
                           onchange="calculateHaracterCoefficient();"> Необходимость очистки поверхности конструкций
                    от грязи, пыли, ржавчины. Расчет выполнять по калькуляции трудозатрат
                </label>

            </div>
        </div>
        <div class="pos2">

            <div class="viborvis">
                <label>
                    <input class="harObj" data-id="1.2" value="5" type="checkbox" id="chekb5" data-nameK="K18.212"
                           onchange="calculateHaracterCoefficient();"> Необходимость использования переносных
                    источников освещения (K = 1.2)
                </label>
                <label>
                    <input class="harObj" data-id="1.02" value="6" type="checkbox" id="chekb6" data-nameK="K18.213"
                           onchange="calculateHaracterCoefficient();"> Здание является памятником архитектуры (K =
                    1.02)
                </label>
                <label>
                    <input class="harObj" data-id="1.2" value="7" type="checkbox" id="chekb7" data-nameK="K18.214"
                           onchange="calculateHaracterCoefficient();"> Обследование в условиях производственного
                    процесса (K = 1.2)
                </label>
                <label>
                    <input class="harObj" data-id="1.15" value="8" type="checkbox" id="chekb8" data-nameK="K18.215"
                           onchange="calculateHaracterCoefficient();"> Выполнение работ с мостового крана или
                    подмостей (K = 1.15)
                </label>
            </div>
        </div>
        <div class="pos3">
            <div class="viborvis">
                <label>
                    <input class="harObj" data-id="1.2" value="9" type="checkbox" id="chekb9" data-nameK="K18.216"
                           onchange="calculateHaracterCoefficient();"> Здание оборудовано кранами режимных групп 7К,
                    8К, (K = 1.2)
                </label>
                <label>
                    <input class="harObj" data-id="1.2" value="10" type="checkbox" id="chekb10" data-nameK="K18.217"
                           onchange="calculateHaracterCoefficient();"> Конструкции, усиленные по ранее разработанным
                    проектам (K = 1.2)
                </label>
                <label>
                    <input class="harObj" data-id="0.7" value="11" type="checkbox" id="chekb11" data-nameK="K18.218"
                           onchange="calculateHaracterCoefficient();"> Использование ранее выполненных обследований
                    не более 3 лет назад (K = 0.7)
                </label>
                <label>
                    <input class="harObj" data-id="1.35" value="12" type="checkbox" id="chekb12" data-nameK="K18.220"
                           onchange="calculateHaracterCoefficient();"> Срочное выполнение обмерно-обследовательских
                    работ (K <= 1.35)
                </label>
            </div>
        </div>
    </div>

</div>

<hr>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


<div class="nameforblock3" onclick="toggleDisplay('.nameforblock3', '.dndb3');"><input class="onCollap"
                                                                                       type="checkbox"
                                                                                       id="sborCheck"
                                                                                       name="obmerCheck" value="1"
                                                                                       onchange="calculateK()">
    &nbsp;&nbsp;&nbsp;Сбор исходных данных
    &nbsp;&nbsp;&nbsp;<?php echo '<span class="sborIshodnihDannih" id="sborIshodnihDannih">';
    echo $sborIshodnihDannih;
    echo '</span>'; ?></div>
<div class="dndb3">

    <div class="mainfreename">
        <div class="freeName" style="margin-left: 1%;">
            <label>
                Категория сложности работ:
            </label>
        </div>
        <div class="freeName2" style="    margin-left: 19%;">
            <label>
                <input data-id="1" value="10" type="checkbox" id="choosCunstruct" onchange="toggleCheckboxes()">
                Конструкции (если конструкции обследуются выборочно, поставьте галочку и введите проценты) :
            </label>
        </div>
    </div>


    <div class="position1">

        <div class="pos1">
            <div class="viborvis">
                <input data-id="12" id="pasportNaZdanie" class="butrad" type="radio" name="pasportNaZdanie" value="1"
                       onchange="calcIshod1()">
                <label for="pasportNaZdanie" class="pasportzd">1) Паспорт на здание или сооружение</label>

                <br>
                <input data-id="14" id="pasportNaZdanie" class="butrad" type="radio" name="pasportNaZdanie" value="2"
                       onchange="calcIshod1()">
                <label for="pasportNaZdanie" class="pasportzd">2) Паспорт на здание или сооружение. Проектная
                    документация. Исполнительная документация. Эксплатуационная документация,
                    журнал наблюдений службы эксплуатации. Документы характеризующие фактические нагрузки и
                    воздействия. Сертификаты на стальные конструкции.</label>

                <br>
            </div>
        </div>
        <div class="pos2">
            <div class="viborvischeckbox1">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1" value="1" type="checkbox" class="ishod2check" id="toggleZd1" disabled
                               onchange="toggleCheckboxesDop()"> Конструкция фундаментов
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval1" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input data-id="1" type="checkbox" id="toggleZd2" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Стены
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval2" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input data-id="1" type="checkbox" id="toggleZd3" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Полы
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval3" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1" type="checkbox" id="toggleZd4" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Колонны, столбы, стойки
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval4" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1" type="checkbox" id="toggleZd5" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Несущие конструкции копров,пролетных строейний
                        галерей
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval5" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>

            </div>
        </div>


        <div class="pos3">

            <div class="viborvischeckbox2">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1" type="checkbox" id="toggleZd6" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Подкрановые и тормозные конструкции
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval6" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input data-id="1" type="checkbox" id="toggleZd7" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Перекрытия
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval7" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input data-id="1" type="checkbox" id="toggleZd8" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Покрытие
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval8" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1" type="checkbox" id="toggleZd9" class="ishod2check" disabled
                               onchange="toggleCheckboxesDop()"> Кровля
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input data-id="1" class="inpval" id="conval9" disabled type="number" name="inputValue"
                               step="1" min="0" oninput="calcIshod2()"> %
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

<div class="nameforblock4" onclick="toggleDisplay('.nameforblock4', '.dndb4');"><input class="onCollap"
                                                                                       type="checkbox"
                                                                                       id="obmerCheck"
                                                                                       name="obmerCheck" value="1"
                                                                                       onchange="calculateK()">&nbsp;&nbsp;&nbsp;Обмерные
    работы &nbsp;&nbsp;&nbsp;<?php echo '<span class="sborIshodnihDannih" id="obmerRaboty">';
    echo $obmerRaboty;
    echo '</span>'; ?></div>
<div class="dndb4">

    <div class="mainfreename">
        <div class="freeName" style="margin-left: 1%;">
            <label>
                Категория сложности работ:
            </label>
        </div>
        <div class="freeName2" style="    margin-left: 19%;">
            <label>
                <input type="checkbox" id="choosCunstruct4" onchange="toggleCheckboxes4()"> Объем обмерных работ
                (если обмеры выполняются выборочно, поставьте галочку и введите проценты) :
            </label>
        </div>
    </div>


    <div class="position1">

        <div class="pos1">
            <div class="viborvis">
                <input data-id="10" id="obmerobs1" class="butrad kat_sl_rab" type="radio" name="kat_sl_rab" value="1"
                       onchange="calcObmerWorksPart1()">
                <label for="obmerobs1" class="pasportzd">1) Обмеры для визуального обследования,
                    паспортизации.:</label>

                <br>
                <input data-id="14" id="obmerobs2" class="butrad kat_sl_rab" type="radio" name="kat_sl_rab" value="2"
                       onchange="calcObmerWorksPart1()">
                <label for="obmerobsl2" class="pasportzd ">2) Обмеры для детального обследования (узлы, вскрытия и
                    т.д.):</label>

                <!--                    <br>-->
                <!--                    <input id="obmerobsl3" class="butrad kat_sl_rab" type="radio" name="kat_sl_rab" value="3" onchange="calcObmerWorksPart1()">-->
                <!--                    <label for="obmerobsl3" class="pasportzd">3) Работы различной категории сложности:</label>-->

            </div>
        </div>
        <div class="pos2">
            <div class="viborvischeckbox3">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd41" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()">
                        Конструкция фундаментов
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval41" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd42" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()"> Планы
                        этажей
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval42" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd43" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()"> Фасады
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval43" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd44" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()"> Разрезы,
                        сечения
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval44" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd45" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()"> Несущие
                        конструкции копров,пролетных строейний галерей
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval45" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>

            </div>
        </div>


        <div class="pos3">

            <div class="viborvischeckbox4">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd46" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()"> План
                        кровли
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval46" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd48" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()">
                        Стропильные и подстропильные конструкции, подкрановые и тормозные конструкции
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval48" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd49" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()"> Несущие
                        элементы перекрытий
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval49" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd449" class="obmer2check" disabled
                               onchange="toggleCheckboxesDop4()"> Несущие
                        элементы покрытий
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval449" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObmerWorksPart2()"> %
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="dusl">Дополнительные условия:
        <input data-id="0.7" type="checkbox" id="toggleZdDopUsl" onchange="toggleCheckboxesDopDusl(this)"> Проектная
        документация присутствует в полном
        объеме (K = 0.7)
        <input data-id="1.25" type="checkbox" id="toggleZdDopUsl1" onchange="toggleCheckboxesDopDusl(this)"> Выполнение
        детальных измерений пролетов,
        сечений, узлов, смещений (K = 1.25)
    </div>
</div>

<hr>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


<div class="nameforblock5" onclick="toggleDisplay('.nameforblock5', '.dndb5');"><input class="onCollap"
                                                                                       type="checkbox"
                                                                                       id="obsledCheck"
                                                                                       name="obsledCheck" value="1"
                                                                                       onchange="calculateK()">&nbsp;&nbsp;&nbsp;Обследовательские
    работы &nbsp;&nbsp;&nbsp;<?php echo '<span class="sborIshodnihDannih" id="obsledRab">';
    echo $obsledRab;
    echo '</span>'; ?></div>
<div class="dndb5">

    <div class="mainfreename">
        <div class="freeName" style="margin-left: 1%;">
            <label>
                Категория сложности работ:
            </label>
        </div>
        <div class="freeName2" style="    margin-left: 19%;">
            <label>
                <input type="checkbox" id="choosCunstruct5" onchange="toggleCheckboxes5()"> Конструкции (если
                конструкции обследуются выборочно, поставьте галочку и введите проценты) :
            </label>
        </div>
    </div>


    <div class="position1">

        <div class="pos1">
            <div class="viborvis">
                <input id="obsledObs1" class="butrad kat_sl_rab_obsled" type="radio" name="kat_sl_rab_obsled"
                       value="1" onchange="calcObsled1()">
                <label for="obsledObs1" class="pasportzd kat_sl_rab">Предварительный осмотр</label>
                <br>
                <input id="obsledObs2" class="butrad kat_sl_rab_obsled" type="radio" name="kat_sl_rab_obsled"
                       value="2" onchange="calcObsled1()">
                <label for="obsledObs2" class="pasportzd">Общее обследование</label>
                <br>
                <input id="obsledObs3" class="butrad kat_sl_rab_obsled" type="radio" name="kat_sl_rab_obsled"
                       value="3" onchange="calcObsled1()">
                <label for="obsledObs3" class="pasportzd">Детальное обследование</label>
                <br>
                <!--                    <input id="rabotyObshDetal" class="butrad" type="radio" name="daysType" value="4">-->
                <!--                    <label for="rabotyObshDetal" class="pasportzd">Работы совмещающие общее и детальное обследование</label>-->
                <!--                    <br>-->
            </div>
        </div>
        <div class="pos2">
            <div class="viborvischeckbox53">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd51" disabled onchange="toggleCheckboxesDop5()">
                        Конструкция фундаментов
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval51" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd52" disabled onchange="toggleCheckboxesDop5()"> Стены
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval52" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd53" disabled onchange="toggleCheckboxesDop5()"> Полы
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval53" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd54" disabled onchange="toggleCheckboxesDop5()"> Колонны,
                        столбы, стойки
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval54" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd55" disabled onchange="toggleCheckboxesDop5()"> Несущие
                        конструкции копров,пролетных строейний галерей
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval55" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>

            </div>
        </div>


        <div class="pos3">

            <div class="viborvischeckbox54">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd56" disabled onchange="toggleCheckboxesDop5()">
                        Подкрановые и тормозные конструкции
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval56" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd57" disabled onchange="toggleCheckboxesDop5()">
                        Перекрытия
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval57" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd58" disabled onchange="toggleCheckboxesDop5()"> Покрытие
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval58" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd59" disabled onchange="toggleCheckboxesDop5()"> Кровля
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval59" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcObsled2()">%
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=posframech>
        <div class="dusl2">Дополнительные условия:
            <label>
                <input type="checkbox" id="toggleSelect1"
                       onchange="toggleSelect('toggleSelect1', 'selectContainer1', 'options1')"> Облицовка
                поверхностных конструкций
            </label>

            <div id="selectContainer1" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select class="form-select" id="options1" disabled onchange="obsledDataidSelect(this)">
                    <option data-id="1" value="">-- Пожалуйста, выберите --</option>
                    <option data-id="1.2" value="1">Поверхность конструкций обшиты листовыми материалами или плиткой
                    </option>
                    <option data-id="1.1" value="2">Поверхность конструкций оштукатурена</option>
                    <option data-id="1.05" value="3">Поверхность конструкций окрашены или побелены</option>
                </select>
                <input type="hidden" id="dataId1" value="1">
            </div>
            <label>
                <input type="checkbox" id="toggleSelect2"
                       onchange="toggleSelect('toggleSelect2', 'selectContainer2', 'options2')"> Наличие
                значительных дефектов
            </label>

            <div id="selectContainer2" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select class="form-select" id="options2" disabled onchange="obsledDataidSelect(this)">
                    <option data-id="1" value="">-- Пожалуйста, выберите --</option>
                    <option data-id="1" value="1">Значительные дефекты отсутствуют</option>
                    <option data-id="1" value="2">До 33% элементов в неудовлетворительном состоянии</option>
                    <option data-id="1.1" value="3">От 34% до 66% элементов в неудовлетворительном состоянии</option>
                    <option data-id="1.2" value="4">Свыше 66% элементов в неудовлетворительном состоянии</option>
                    <option data-id="1.1" value="5">До 33% элементов в предаварийном состоянии</option>
                    <option data-id="1.2" value="6">От 34% до 66% элементов в предаварийном состоянии</option>
                    <option data-id="1.3" value="7">Свыше 66% элементов в предаварийном состоянии</option>
                </select>
                <input type="hidden" id="dataId2" value="1">
            </div>
        </div>
        <div class="svposch">
            <input type="checkbox" id="povkef"> Учитывать повышающий коэффициент от объема работ если обследуется
            <70% <br>
            <input data-id="1.15" value="1" type="checkbox" id="sooruzhzd"> Здание (сооружение) на просадочных грунтах
        </div>
    </div>


</div>

<hr>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

<div class="nameforblock6" onclick="toggleDisplay('.nameforblock6', '.dndb6');"><input class="onCollap"
                                                                                       type="checkbox"
                                                                                       id="sostTechOtchetCheck"
                                                                                       name="sostTechOtchetCheck"
                                                                                       value="1"
                                                                                       onchange="calculateK()">&nbsp;&nbsp;&nbsp;Составление
    технического отчета &nbsp;&nbsp;&nbsp;<?php echo '<span class="sborIshodnihDannih" id="sostTech">';
    echo $sostTech;
    echo '</span>'; ?></div>
<div class="dndb6">

    <div class="mainfreename">
        <div class="freeName" style="margin-left: 1%;">
            <label>
                Категория сложности работ:
            </label>
        </div>
        <div class="freeName2" style="    margin-left: 19%;">
            <label>
                <input type="checkbox" id="choosCunstruct6" onchange="toggleCheckboxes6()"> Конструкции (если
                конструкции обследуются выборочно, поставьте галочку и введите проценты) :
            </label>
        </div>
    </div>


    <div class="position1">

        <div class="pos1">
            <div class="viborvis">
                <input id="sosttech1" class="butrad kat_sl_rab_sosttech" type="radio" name="kat_sl_rab_sosttech"
                       value="1" onchange="calcSosttech1()">
                <label for="sosttech1" class="pasportzd">Заключение о состоянии строительных конструкций с
                    выводами и рекомендациями</label>
                <br>
                <input id="sosttech2" class="butrad kat_sl_rab_sosttech" type="radio" name="kat_sl_rab_sosttech"
                       value="2" onchange="calcSosttech1()">
                <label for="sosttech2" class="pasportzd">То же, с разработкой технических решений для отдельных
                    элементов</label>
                <br>
                <input id="sosttech3" class="butrad kat_sl_rab_sosttech" type="radio" name="kat_sl_rab_sosttech"
                       value="3" onchange="calcSosttech1()">
                <label for="sosttech3" class="pasportzd">То же, с частичной заменой или усилением более 30%
                    несущих элементов</label>
                <br>
                <!--                    <input id="rabotCategory" class="butrad" type="radio" name="daysType" value="working">-->
                <!--                    <label for="rabotCategory" class="pasportzd">Работы различной категории сложности</label>-->
                <!--                    <br>-->
            </div>
        </div>
        <div class="pos2">
            <div class="viborvischeckbox63">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd61" disabled onchange="toggleCheckboxesDop6()">
                        Конструкция фундаментов
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval61" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd62" disabled onchange="toggleCheckboxesDop6()"> Стены
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval62" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd63" disabled onchange="toggleCheckboxesDop6()"> Полы
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval63" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd64" disabled onchange="toggleCheckboxesDop6()"> Колонны,
                        столбы, стойки
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval64" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd65" disabled onchange="toggleCheckboxesDop6()"> Несущие
                        конструкции копров,пролетных строейний галерей
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval65" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>

            </div>
        </div>


        <div class="pos3">

            <div class="viborvischeckbox64">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd66" disabled onchange="toggleCheckboxesDop6()">
                        Подкрановые и тормозные конструкции
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval66" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd67" disabled onchange="toggleCheckboxesDop6()"> Перекрыия
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval67" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input type="checkbox" id="toggleZd68" disabled onchange="toggleCheckboxesDop6()"> Покрытие
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval68" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd69" disabled onchange="toggleCheckboxesDop6()"> Кровля
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval69" disabled type="number" name="inputValue" step="1"
                               min="0" oninput="calcSosttech2()"> %
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dusl">Дополнительные условия:
        <input type="checkbox" id="toggleZdDopUslseism"> Сейсмические условия 7 баллов и более
        <input type="checkbox" id="toggleZdDopUslrazrab"> Разработка временных противоаварийных мероприятий
        <input type="checkbox" id="toggleZdDopUslrazrabrek"> Разработка рекомендаций без проведения расчетов
    </div>
</div>
<hr>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


<div class="nameforblock7" onclick="toggleDisplay('.nameforblock7', '.dndb7');"><input class="onCollap" type="checkbox"
                                                                                       id="redaktorIspConstr"
                                                                                       name="redaktorIspConstr"
                                                                                       value="1"
                                                                                       onchange="calculateK()">&nbsp;&nbsp;&nbsp;Редактор
    испытания конструкций &nbsp;&nbsp;&nbsp;<?php echo '<span class="sborIshodnihDannih" id="redaktorCons">';
    echo $redaktorCons;
    echo '</span>'; ?></div>
<div class="dndb7">
    <div style="margin-left:1%" ;>Работы по определению прочности бетона и кирпичной кладки:</div>
    <div class="position1">

        <div class="posfull">
            <div class="viborvisnew">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd71" onchange="toggleCheckboxesDop7('toggleZd71')">
                        Определение
                        прочности бетона в бетонных и железобетонных конструкциях
                        механическими приборами
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval71" disabled type="number" name="inputValue" step="1" min="0"
                               oninput="sumKoefRedaktor()">
                    </div>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd72" onchange="toggleCheckboxesDop7('toggleZd72')">
                        Определение
                        прочности бетона в бетонных и железобетонных конструкциях
                        ультразвуковыми приборами
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval72" disabled type="number" name="inputValue" step="1" min="0"
                               oninput="sumKoefRedaktor()">
                    </div>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd73" onchange="toggleCheckboxesDop7('toggleZd73')">
                        Определение
                        прочности бетона в бетонных и железобетонных конструкциях
                        гидравлическими пресс-насосами (типа ГПНС, "Скол", и т.д.)
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval73" disabled type="number" name="inputValue" step="1" min="0"
                               oninput="sumKoefRedaktor()">
                    </div>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input type="checkbox" id="toggleZd74" onchange="toggleCheckboxesDop7('toggleZd74')">
                        Определение
                        прочности раствора и каменных материалов ультразвуковыми
                        и ударно-импульсными методами
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval" id="conval74" disabled type="number" name="inputValue" step="1" min="0"
                               oninput="sumKoefRedaktor()">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<div class="nameforblock8" onclick="toggleDisplay('.nameforblock8', '.dndb8');"><input class="onCollap"
                                                                                       type="checkbox"
                                                                                       id="obsledotdelCheck"
                                                                                       name="obsledotdelCheck" value="1"
                                                                                       onchange="calculateK()">
    &nbsp;&nbsp;&nbsp;Обследование отдельных конструкций
    &nbsp;&nbsp;&nbsp;<?php echo '<span class="obsledotdel" id="obsledotdel">';
    echo $obsledotdel;
    echo '</span>'; ?></div>
<div class="dndb8">


    <div class="position1">

        <div class="pos1">
            <div class="viborvischeckbox81">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.222" type="checkbox" id="toggleZd81" onchange="toggleCheckboxesDop8(this)">
                        Стропильная ферма
                        пролетом 18м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval81" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval811" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit1" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">

                        <input data-id="1.425" type="checkbox" id="toggleZd82" onchange="toggleCheckboxesDop8(this)">
                        Стропильная ферма
                        пролетом 24м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval82" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval822" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit2" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </div>
                    <hr>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">

                        <input data-id="1.587" type="checkbox" id="toggleZd83" onchange="toggleCheckboxesDop8(this)">
                        Стропильная ферма
                        пролетом 30м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval83" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval833" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit3" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.298" type="checkbox" id="toggleZd84" onchange="toggleCheckboxesDop8(this)">
                        Подстропильная
                        ферма пролетом 12м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval84" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval844" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit4" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.298" type="checkbox" id="toggleZd85" onchange="toggleCheckboxesDop8(this)">
                        Подстропильная
                        балка пролетом 12м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval85" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval855" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit5" data-nameK="K18.229"
                               onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.004" type="checkbox" id="toggleZd86" onchange="toggleCheckboxesDop8(this)">
                        Стропильная балка
                        пролетом 9м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval86" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval866" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit6" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.077" type="checkbox" id="toggleZd87" onchange="toggleCheckboxesDop8(this)">
                        Стропильная балка
                        пролетом 12м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval87" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval877" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit7" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>

                </div>


            </div>
        </div>
        <div class="pos2">
            <div class="viborvischeckbox82">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.130" type="checkbox" id="toggleZd88" onchange="toggleCheckboxesDop8(this)">
                        Стропильная балка
                        пролетом 18м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval88" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval888" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit8"
                               data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"
                               > Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.298" type="checkbox" id="toggleZd89" onchange="toggleCheckboxesDop8(this)">
                        Подкрановая балка
                        пролетом 6м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval89" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval899" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit9" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.552" type="checkbox" id="toggleZd081" onchange="toggleCheckboxesDop8(this)">
                        Подкрановая балка
                        пролетом 12м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval081" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0811" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit10" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="0.931" type="checkbox" id="toggleZd082" onchange="toggleCheckboxesDop8(this)">
                        Плиты
                        покрытия и
                        перекрытий размером 1,5х6 и 3х6 м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval082" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0822" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit11" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.112" type="checkbox" id="toggleZd083" onchange="toggleCheckboxesDop8(this)">
                        Плиты
                        покрытия и
                        перекрытий размером 1,5х12 и 3х12 м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval083" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0833" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit12" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="0.896" type="checkbox" id="toggleZd084" onchange="toggleCheckboxesDop8(this)">
                        Ригели и
                        фундаментальные балки пролетом 6 м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval084" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0844" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit13" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.004" type="checkbox" id="toggleZd085" onchange="toggleCheckboxesDop8(this)">
                        Ригели и
                        фундаментальные балки пролетом 9 м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval085" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0855" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit14" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

            </div>
        </div>


        <div class="pos3">

            <div class="viborvischeckbox83">
                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="0.786" type="checkbox" id="toggleZd086" onchange="toggleCheckboxesDop8(this)">
                        Колонны
                        одноветвевые
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval086" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0866" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit15" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.040" type="checkbox" id="toggleZd087" onchange="toggleCheckboxesDop8(this)">
                        Колонны
                        двухветвевые
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval087" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0877" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit16" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="0.639" type="checkbox" id="toggleZd088" onchange="toggleCheckboxesDop8(this)">
                        Капители
                        безбалочных перекрытий
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval088" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0888" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit17" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="0.565" type="checkbox" id="toggleZd089" onchange="toggleCheckboxesDop8(this)">
                        Стеновые панели
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval089" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval0899" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit18" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="3.215" type="checkbox" id="toggleZd0081" onchange="toggleCheckboxesDop8(this)">
                        Панели-оболочки
                        размером 3х18 и 3х24 м
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval0081" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval00811" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit19" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="1.351" type="checkbox" id="toggleZd0082" onchange="toggleCheckboxesDop8(this)">
                        Фундаменты
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval0082" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval00822" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit20" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>


                <div class="mainlolspace">
                    <div class="lolspace">
                        <input data-id="0.217" type="checkbox" id="toggleZd0083" onchange="toggleCheckboxesDop8(this)">
                        Перемычки
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval kol" id="conval0083" disabled type="number" name="inputValue" step="1"
                               min="0" onchange="calcObsledOtdel(this)"> количество
                    </div>
                    <div id="inputContainer" class="input-container">
                        <input class="inpval slojn" id="conval00833" disabled type="number" name="inputValue" step="1"
                               min="1" max="3" onchange="calcObsledOtdel(this)"
                               oninput="this.value = this.value.replace(/[^1-3]/g, '')"> сложность
                    </div>
                    <label>
                        <input class="monolit" data-id="1.2" value="1" type="checkbox" id="monolit21" data-nameK="K18.229"
                               disabled onchange="calcObsledOtdel(this)"> Монолитная конструкция
                    </label>
                    <hr>
                </div>

            </div>
        </div>
    </div>
</div>
<hr>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<div class="nameforblock9" onclick="toggleDisplay('.nameforblock9', '.dndb9');">
    <?php echo '<input onchange="calculateK()" class = "onCollap" type="checkbox" id="calcalc" name="calcalc" value="1"> 
&nbsp;&nbsp;&nbsp;Калькуляция &nbsp;&nbsp;&nbsp;
<span class="calcalc" id="calcalcres">';
    echo $calculacia;
    echo '</span>'; ?></div>
<div class="dndb9">
    <div class="position1">
        <div class="pos1">
            <div class="viborvisnew">
                <div class="mainselspace">

                    <div style="display:flex;">
                        <div style="width:90%">
                            <label for="SelectZakazchik" class="zakpod">Наименование работы (услуги)</label>
                        </div>
                        <div style="width:50%">
                            <label for="SelectZakazchik" class="zakpod">Трудоёмкость работы
                                (услуги),чел.-дн(Т)</label>
                        </div>
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc" id="selectCalc1" aria-label=""
                                onchange="selectCalculation(1)">
                            <option value="0" selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" disabled type="number" id="inputCalc1" name="inputValue" step="1"
                               min="0" placeholder="">

                    </div>
                    <input class="custom-work" type="text" id="customWork1" style="display:none;"
                           placeholder="Введите наименование работы">
                    <div class="select-input-pair">
                        <select class="form-select-calc" id="selectCalc2" aria-label=""
                                onchange="selectCalculation(2)">
                            <option value="0" selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" disabled type="number" id="inputCalc2" name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <input class="custom-work" type="text" id="customWork2" style="display:none;"
                           placeholder="Введите наименование работы">
                    <div class="select-input-pair">
                        <select class="form-select-calc" aria-label="" id="selectCalc3"
                                onchange="selectCalculation(3)">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" type="number" disabled id="inputCalc3" name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <input class="custom-work" type="text" id="customWork3" style="display:none;"
                           placeholder="Введите наименование работы">
                    <div class="select-input-pair">
                        <select class="form-select-calc" aria-label="" id="selectCalc4"
                                onchange="selectCalculation(4)">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" type="number" name="inputValue" disabled id="inputCalc4" step="1"
                               min="0" placeholder="">
                    </div>
                    <input class="custom-work" type="text" id="customWork4" style="display:none;"
                           placeholder="Введите наименование работы">
                    <div class="select-input-pair">
                        <select class="form-select-calc" aria-label="" id="selectCalc5"
                                onchange="selectCalculation(5)">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" type="number" disabled id="inputCalc5" name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <input class="custom-work" type="text" id="customWork5" style="display:none;"
                           placeholder="Введите наименование работы">
                    <div class="select-input-pair">
                        <select class="form-select-calc" aria-label="" id="selectCalc6"
                                onchange="selectCalculation(6)">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" type="number" disabled id="inputCalc6" name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <input class="custom-work" type="text" id="customWork6" style="display:none;"
                           placeholder="Введите наименование работы">
                    <div class="select-input-pair">
                        <select class="form-select-calc" aria-label="" id="selectCalc7"
                                onchange="selectCalculation(7)">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" type="number" disabled id="inputCalc7" name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <input class="custom-work" type="text" id="customWork7" style="display:none;"
                           placeholder="Введите наименование работы">
                    <div class="select-input-pair">
                        <select class="form-select-calc" aria-label="" id="selectCalc8"
                                onchange="selectCalculation(8)">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <option value="1">
                                Обследование строительных конструкций. Оформление отчета.
                            </option>
                            <option value="2">Обмерные работы. Оформление чертежей.</option>
                            <option value="3">Отрывка шурфов</option>
                            <option value="4">Обследование сетей. Водопровод, канализация</option>
                            <option value="5">Обследование сетей. Электроснабжение, слаботочные сети, автоматика
                            </option>
                            <option value="6">Обследование сетей. Электроснабжение</option>
                            <option value="7">Обследование сетей. Отопление и вентиляция</option>
                            <option value="8">Другое</option>
                        </select>
                        <input class="inpvalsel trud" type="number" disabled id="inputCalc8" name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <input class="custom-work" type="text" id="customWork8" style="display:none;"
                           placeholder="Введите наименование работы">
                </div>
            </div>
        </div>

        <div class="pos2">
            <div class="viborvisnew">
                <div class="mainselspace">

                    <div style="display:flex;">
                        <div style="width:100%">
                            <label for="SelectZakazchik" class="zakpod">Должность исполнителя по КСД</label>
                        </div>
                        <div style="width:30%; font-size:10px;">
                            <label for="SelectZakazchik" class="zakpod">Тарифный разряд исполнителя по ЕТС
                                (р)</label>
                        </div>
                        <div style="width:20%; font-size:10px;">
                            <label for="SelectZakazchik" class="zakpod">Количество исполнителей</label>
                        </div>
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" id="select2Calc1" disabled aria-label="">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            $doljnosti_array = array();
                            while ($row = $connectionDB->getRowResult($doljnosti_KSD)) {
                                $KSD = [
                                    'id' => $row['id_doljnostiKSD'],
                                    'name' => $row['name'],
                                    'koef' => $row['koef']

                                ];
                                array_push($doljnosti_array, $KSD);
                            }
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }

                            ?>
                        </select>

                        <input style="width: 70px;" class="inpvalsel tarif" disabled id="input2Calc1" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" disabled id="input3Calc1" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" aria-label="" disabled id="select2Calc2">
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <input style="width: 70px;" class="inpvalsel tarif" disabled id="input2Calc2" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" disabled id="input3Calc2" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" aria-label="" id="select2Calc3" disabled>
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <input style="width: 70px;" class="inpvalsel tarif" disabled id="input2Calc3" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" disabled id="input3Calc3" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" aria-label="" id="select2Calc4" disabled>
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <input style="width: 70px;" class="inpvalsel tarif" disabled id="input2Calc4" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" disabled id="input3Calc4" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" aria-label="" id="select2Calc5" disabled>
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <input style="width: 70px;" class="inpvalsel tarif" disabled id="input2Calc5" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" disabled id="input3Calc5" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" aria-label="" id="select2Calc6" disabled>
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <input style="width: 70px;" class="inpvalsel tarif" disabled id="input2Calc6" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" disabled id="input3Calc6" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" aria-label="" id="select2Calc7" disabled>
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <input style="width: 70px;" class="inpvalsel tarif" disabled id="input2Calc7" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" disabled id="input3Calc7" type="number"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                    <div class="select-input-pair">
                        <select class="form-select-calc doljnosti_KSD" aria-label="" id="select2Calc8" disabled>
                            <option selected>-- Пожалуйста, выберите --</option>
                            <?php
                            foreach ($doljnosti_array as $row) {
                                echo "<option value='" . $row['id'] . "' data-koef='" . $row['koef'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        <input style="width: 70px;" class="inpvalsel tarif" type="number" disabled id="input2Calc8"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                        <input style="width: 70px;" class="inpvalsel kol_isp" type="number" disabled id="input3Calc8"
                               name="inputValue" step="1"
                               min="0" placeholder="">
                    </div>
                </div>
            </div>
        </div>

        <div class="pos3">
            <div class="viborvisnew">
                <div style="display: grid;
    justify-content: center;">
                    <label id="inputLabel" for="sredRazryad">Средний тарифный разряд исполнителей</label><br>
                    <input id="sredRazryad" disabled type="number" name="inputValue" step="1" min="0"><br>
                    <br><br>
                    <label id="inputLabel" for="tarifKoef">Тарифный коэффициент для пересчёта
                        стоимости</label><br>
                    <input disabled id="tarifKoef" type="number" name="inputValue" step="1" min="0"><br>
                    <br><br>
                </div>
            </div>
        </div>

    </div>
</div>
<hr>


<div class="position1">
    <div class="pos1">
        <label for="SelectZakazchik" class="zakpod">Кто подписывает смету:</label>
        <select class="form-select" aria-label="">
            <option selected>-- Пожалуйста, выберите --</option>
            <option value="1">
                Директор
            </option>
            <option value="2">И.О. Директора</option>
        </select>

        <label for="SelectPodryadchik" class="zakpod">Кем выступает заказчик:</label>
        <select class="form-select" aria-label="">
            <option selected>-- Пожалуйста, выберите --</option>
            <option value="1">Заказчик</option>
            <option value="2">Генподрядчик</option>
            <option value="3">Подрядчик</option>
            <option value="4">Генпроектировщик</option>
        </select>


        <label for="SelectPodryadchik" class="zakpod">Кем выступает ИЗИСКОМ:</label>
        <select class="form-select" aria-label="">
            <option selected>-- Пожалуйста, выберите --</option>
            <option value="1">Подрядчик</option>
            <option value="2">Субподрядчик</option>
            <option value="3">Исполнитель</option>
        </select>

        <label for="SelectPodryadchik" class="zakpod">Кто производит вскрытие и заделку строительных
            конструкций</label>
        <select class="form-select" aria-label="">
            <option selected>-- Пожалуйста, выберите --</option>
            <option value="1">Заказчик</option>
            <option value="2">Генподрядчик</option>
            <option value="3">Подрядчик</option>
            <option value="4">Генпроектировщик</option>
        </select>

        <label for="SelectPodryadchik" class="zakpod">Кто подписывает конкурсное предложение</label>
        <select class="form-select" aria-label="">
            <option selected>-- Пожалуйста, выберите --</option>
            <option value="1">Директор</option>
            <option value="2">И.О. Директора</option>
        </select>


    </div>
    <div class="pos2">
        <label>
            <input type="checkbox" id="checkUSN" onchange="calculateK()"> Учитывать УСН
        </label>
        <br>
        <label>
            <input type="checkbox" id="checkNDS" onchange="calculateK()"> Учитывать НДС
        </label>
        <br>
        <br>
        <label id="inputLabel" for="minuskef">Понижающий коэффициент</label><br>
        <input id="minuskef" type="number" name="inputValue" step="0.1" min="0" value="1" oninput="calculateK()"><br>
        <label id="inputLabel" for="costwork14">Стоимость работ 14 разряда</label><br>
        <input id="costwork14" disabled type="text" name="inputValue" step="1" min="0"><br>
        <br>
        <label id="inputLabel" for="znachprognoz">Значения прогнозных среднегодовых индексов изменения стоимости
            работ:</label><br>
        <label id="inputLabel" for="znachprognoz24">на 2024 год</label><br>
        <input id="znachprognoz24" disabled type="number" name="inputValue" step="1" min="0"><br>
        <label id="inputLabel" for="znachprognoz25">на 2025 год</label><br>
        <input id="znachprognoz25" disabled type="number" name="inputValue" step="1" min="0"><br>
    </div>
</div>

<hr>


</section>


<div class="modal fade" id="modalPeremen" tabindex="-1" aria-labelledby="modalPeremenLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPeremenLabel" style="color:black;">Параметры переменных</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="director" class="form-label">Директор</label>
                        <input type="text" class="form-control" id="director" placeholder="Введите директора"></div>
                    <div class="mb-3">
                        <label for="iODirector" class="form-label">И.о. директора</label>
                        <input type="text" class="form-control" id="iODirector" placeholder="Введите и.о. директора">
                    </div>
                    <div class="mb-3">
                        <label for="currentIndex" class="form-label">Индекс текущего года</label>
                        <input type="number" step="0.01" class="form-control" id="currentIndex"
                               placeholder="Введите индекс текущего года"></div>
                    <div class="mb-3">
                        <label for="nextIndex" class="form-label">Индекс следующего года</label>
                        <input type="number" step="0.01" class="form-control" id="nextIndex"
                               placeholder="Введите индекс следующего года"></div>
                    <div class="mb-3">
                        <label for="usnValue" class="form-label">Значение УСН, %</label>
                        <input type="number" step="0.01" class="form-control" id="usnValue"
                               placeholder="Введите значение УСН"></div>
                    <div class="mb-3">
                        <label for="ndsValue" class="form-label">Значение НДС, %</label>
                        <input type="number" step="0.01" class="form-control" id="ndsValue"
                               placeholder="Введите значение НДС"></div>
                    <div class="mb-3">
                        <label for="workCost" class="form-label">Стоимость работ 14 разряда:</label>
                        <input type="number" step="0.01" class="form-control" id="workCost"
                               placeholder="Введите стоимость работ"></div>
                    <div class="mb-3">
                        <label for="b14Index" class="form-label">Прогнозный индекс B14</label>
                        <div class="input-group">
                            <input type="checkbox" class="form-check-input" id="b14Checkbox">
                            <input type="number" step="0.01" class="form-control ms-2" id="b14Input"
                                   placeholder="Введите индекс B14" disabled></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="btnApply">Применить</button>
            </div>
        </div>
    </div>
</div>

<script>

    let sumRedaktor = 0; // СУММА ВКЛАДКИ РедАКТОР
    let sumHarakter = 0; // СУММА ВКЛАДКИ ХАРАКТЕРИСТИКА ОБЪЕКТА
    let sumIshod = 0; // СУММА ВКЛАДКИ СБОР ИСХОДНЫХ ДАННЫХ
    let sumObmer = 0; // СУММА ВКЛАДКИ обмера
    let sumObsled = 0; // СУММА ВКЛАДКИ обcледа
    let sumSosttech = 0; // СУММА ВКЛАДКИ тех отчета
    let sumIspConstr = 0; // СУММА ВКЛАДКИ испытания конструкций
    let sumObsledOtdel = 0; // СУММА ВКЛАДКИ обследования отдельных конструкций
    let fullSumma = 0; // ОБЩАЯ СУММА ВСЕХ ВКЛАДОК
    let k18ob = 0; // Общий  К18.об
    let hardZdanie; // КАТЕГОРИЯ СЛОЖНОСТИ ЗДАНИЯ
    let mainvisotazdani = 1; // ВЫСОТА ЗДАНИЯ
    let koefIshod = 1; // КОЭФИЦИЕНТ НЗТ1 (табл.2.3)
    let selectedRadio; // КАТЕГОРИЯ СЛОЖНОСТИ РАБОТ
    let koefIshod2 = 1; // КОЭФИЦИЕНТ НЗТ1 (табл.2.4)
    let b14Value = 1; // b14
    let usn;
    let nds;

    let costwork14; // СРЕДНИЙ РАЗРЯД  14
    let obmerDop1 = 1; // доп чекбокс2
    let obmerDop2 = 1; // доп чекбокс2
    let obsledDop1 = 1; //
    let obsledDop2 = 1; //
    let P212 = 1; // Средний разряд рабочих п 2.1.2
    let P222 = 1; // Средний разряд рабочих п 2.2.2
    let P223 = 1; // Средний разряд рабочих п 2.2.3
    let P242 = 1; // Средний разряд рабочих п 2.4.2
    let ki212 = 1; // Значение тарифного коэффициента п 2.1.2
    let ki222 = 1; // Значение тарифного коэффициента п 2.2.2
    let ki223 = 1; // Значение тарифного коэффициента п 2.2.2
    let ki242 = 1; // Значение тарифного коэффициента п 2.4.2
    let Vdiv100 = 1; // Значение тарифного коэффициента п 2.1.2
    let k18101 = 1; // Тип здания
    let kefVisota = 1;
    let V = 1;
    let agressive;
    let temperaturMode;
    let equipmentSaturat;

    let isSborIshodnihDannihChecked;
    let isObmerRabotyChecked;
    let isObsledRabChecked;
    let isSostTechOtchetCheck;
    let isRedaktorIspConstr;
    let isCalc;
    let isObsledOtdel ;
    let totalSum = 0;

    let slojnObsledOtdel = 0;
    let koef0=0;
    let arrObsledOtdel = [];

    class Obsled {
        constructor(id, koef, count, hard, koef_monol, total,text) {
            this.id = id;
            this.koef = koef;
            this.count = count;
            this.hard = hard;
            this.koef_monol = koef_monol;
            this.total = total;
            this.text = text;
        }
    }

    async function calculateK() {
       await calcCalkulation();
        isSborIshodnihDannihChecked = document.getElementById('sborCheck').checked;
        isObmerRabotyChecked = document.getElementById('obmerCheck').checked;
        isObsledRabChecked = document.getElementById('obsledCheck').checked;
        isSostTechOtchetCheck = document.getElementById('sostTechOtchetCheck').checked;
        isRedaktorIspConstr = document.getElementById('redaktorIspConstr').checked;
        isCalc = document.getElementById('calcalc').checked;
        isObsledOtdel = document.getElementById('obsledotdelCheck').checked;


        koefIshod = koefIshod == 0 ? 1 : koefIshod;
        koefIshod2 = koefIshod2 == 0 ? 1 : koefIshod2;
        koefObmerWork1 = koefObmerWork1 == 0 ? 1 : koefObmerWork1;
        koefObmerWork2 = koefObmerWork2 == 0 ? 1 : koefObmerWork2;
        koefObsled2 = koefObsled2 == 0 ? 1 : koefObsled2;
        koefObsled1 = koefObsled1 == 0 ? 1 : koefObsled1;
        if (koefIshod == 1 && koefIshod2 == 1) {
            sumIshod = 0;
        } else {
            sumIshod = Vdiv100 * k18101 * koefIshod * koefIshod2 * b14Value * k18ob * ki212 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
            $('#sborIshodnihDannih').html(sumIshod.toFixed(3) );
            console.log(sumIshod + " =  koefIshod: " + koefIshod + " koefIshod2: " + koefIshod2 + " costwork14: " + b14Value + " K18ob:" + k18ob + " ki212: " + ki212 + kefVisota + "VISOTA VISOTA VISOTA");
        }


        if (koefObmerWork1 == 1 && koefObmerWork2 == 1) {
            sumObmer = 0;
        } else {
            sumObmer = koefObmerWork1 * koefObmerWork2 * b14Value * k18ob * obmerDop1 * obmerDop2 * Vdiv100 * k18101 * ki222 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
            $('#obmerRaboty').html(sumObmer.toFixed(3));
            console.log(sumObmer + " =  koefObmerWork1: " + koefObmerWork1 + " koefObmerWork2: " + koefObmerWork2 + " K18ob: " + k18ob + " obmerDop1:" + obmerDop1 + " obmerDop2: " + obmerDop2 + " Vdiv100: " + Vdiv100 + " k18101: " + k18101 + " ki222: " + ki222);
        }

        if (koefObsled1 == 1 && koefObsled2 == 1) {
            sumObsled = 0;
        } else {
            sumObsled = koefObsled1 * koefObsled2 * b14Value * k18ob * obsledDop1 * obsledDop2 * Vdiv100 * k18101 * ki223 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
            $('#obsledRab').html(sumObsled.toFixed(3));
            console.log(sumObsled + " =  koefObsled1: " + koefObsled1 + " koefObsled2: " + koefObsled2 + " K18ob: " + k18ob + " obsledDop1:" + obsledDop1 + " obsledDop2: " + obsledDop2 + " Vdiv100: " + Vdiv100 + " k18101: " + k18101 + " ki223: " + ki223);
        }

        if (koefSosttech1 == 1 && koefSosttech2 == 1) {
            sumSosttech = 0;
        } else {
            sumSosttech = koefSosttech1 * koefSosttech2 * b14Value * k18ob * Vdiv100 * k18101 * ki242 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
            $('#sostTech').html(sumSosttech.toFixed(3));
            console.log(sumSosttech + " =  koefSosttech1: " + koefSosttech1 + " koefSosttech2: " + koefSosttech2 + " costwork14: " + b14Value + " K18ob:" + k18ob + " Vdiv100: " + Vdiv100 + " Vdiv100: " + Vdiv100 + " k18101: " + k18101 + " ki223: " + ki223);
        }


        fullSumma = 0; //+ parseFloat(sumIshod) + parseFloat(sumObmer) + parseFloat(sumObsled) + parseFloat(sumSosttech) + parseFloat(sumRedaktor);
        if (isSborIshodnihDannihChecked) fullSumma += parseFloat(sumIshod);
        if (isObmerRabotyChecked) fullSumma += parseFloat(sumObmer);
        if (isObsledRabChecked) fullSumma += parseFloat(sumObsled);
        if (isSostTechOtchetCheck) fullSumma += parseFloat(sumSosttech);
        if (isRedaktorIspConstr) fullSumma += parseFloat(sumRedaktor);
        fullSumma = fullSumma.toFixed(2);
        totalSum = 0;

        const input = document.getElementById('minuskef');
        const coefficient = parseFloat(input.value);
        if (!isNaN(coefficient) && coefficient >= 0) {
            fullSumma = fullSumma * (coefficient);
            console.log('Новое значение:', fullSumma);
        } else {
            console.error('Некорректное значение коэффициента');
        }

        //USNCALC
        const checkUSN = document.getElementById('checkUSN');
        const checkNDS = document.getElementById('checkNDS');
        if (checkUSN.checked)
        {
            console.log('Учитывать НДС:', checkNDS.checked);
            fullSumma = fullSumma - (fullSumma * usn)/100;
            calculacia = calculacia - (calculacia *  usn)/100;
            fullSumma = parseFloat(fullSumma.toFixed(2));
        }
        if (checkNDS.checked)
        {
            fullSumma = fullSumma - (fullSumma * nds)/100;
            calculacia = calculacia - (calculacia *  nds)/100;
            fullSumma = parseFloat(fullSumma.toFixed(2));
            console.log('Учитывать УСН:', checkUSN.checked);
            console.log('Учитывать НДС:', checkNDS.checked);
        }


        totalSum += parseFloat(fullSumma)
        if (isCalc) totalSum += parseFloat(calculacia);
        document.getElementById('harakteristikaObjectObsh').innerText = totalSum.toFixed(2);
        document.getElementById('harakteristikaObjectSmeta').innerText = fullSumma.toFixed(2);
        if (isCalc)
            document.getElementById('harakteristikaObjectCalc').innerText = parseFloat(calculacia).toFixed(2);
        else
            document.getElementById('harakteristikaObjectCalc').innerText = 0;

        calcObsOtd($('#obsledotdelCheck'));
        // fullSumma = fullSumma.toFixed(3);
        // document.getElementById('harakteristikaObjectObsh').innerText = fullSumma;
        // document.getElementById('harakteristikaObjectSmeta').innerText = fullSumma;
        // document.getElementById('harakteristikaObjectCalc').innerText = fullSumma;
    }


    function getCheckboxValue(checkboxId) {

        const checkbox = document.getElementById(checkboxId);
        console.log(checkbox.getAttribute('data-id'));
        return checkbox.checked ? parseFloat(checkbox.getAttribute('data-id')) || 1 : 1;

    }

    let koefHarackCheckb = 1;

    async function calculateHaracterCoefficient() {
        sumHarakter = 0;
        koefHarackCheckb = 1;
        agressive = 1;//++
        temperaturMode = 1;
        equipmentSaturat = 1;


        chekb1Val = getCheckboxValue('chekb1');
        chekb2Val = getCheckboxValue('chekb2');
        chekb3Val = getCheckboxValue('chekb3');
        chekb4Val = getCheckboxValue('chekb4');
        chekb5Val = getCheckboxValue('chekb5');
        chekb6Val = getCheckboxValue('chekb6');
        chekb7Val = getCheckboxValue('chekb7');
        chekb8Val = getCheckboxValue('chekb8');
        chekb9Val = getCheckboxValue('chekb9');
        chekb10Val = getCheckboxValue('chekb10');
        chekb11Val = getCheckboxValue('chekb11');
        chekb12Val = getCheckboxValue('chekb12');
        arrHaractCheckb = [chekb1Val, chekb2Val, chekb3Val, chekb4Val, chekb5Val, chekb6Val, chekb7Val, chekb8Val, chekb9Val, chekb10Val, chekb11Val, chekb12Val];
        arrHaractCheckb.map(item => koefHarackCheckb *= item);
        console.log("arrHaractCheckb", arrHaractCheckb);

        let checkboxagressive = document.getElementById("toggleSelect");
        let optionsaggr = document.getElementById("options");


        if (checkboxagressive.checked) {
            let selectedOption = optionsaggr.options[optionsaggr.selectedIndex];
            agressive = parseFloat(selectedOption.getAttribute('data-id')) || 1;
        } else {
            agressive = 1;
        }
        console.log(agressive + "agressive");



        const visotazdani = parseFloat(document.getElementById('visotazdani').value) || 0;
        etazh = parseFloat(document.getElementById('etazh').value) || 0;
        visotapola = parseFloat(document.getElementById('visotapola').value) || 0;
        let visotaPolaVal = 1;
        const selectedOption = document.querySelector('#buildingType option:checked');

        let buildingType;
        if (selectedOption) {
            buildingType = parseFloat(selectedOption.getAttribute('data-id')) || 1;
        } else {
            buildingType = 1; // Значение по умолчанию, если элемент не найден
            console.warn("Элемент не найден, используется значение по умолчанию: 1");
        }
        const getSelectedDataId = (selector) => {
            const selectedOption = document.querySelector(`${selector} option:checked`);
            return selectedOption ? parseFloat(selectedOption.getAttribute('data-id')) || 1 : 1;
        };

        const constructionType = getSelectedDataId('#constructionType');
        const options = getSelectedDataId('#options');
        temperaturMode = getSelectedDataId('#temperatureMode');
        console.log(temperaturMode + "temperatureMode");
        equipmentSaturat = getSelectedDataId('#equipmentSaturation');

        k18101 = buildingType;
        //РАСЧЕТ ОСНОВНОГО  КОЭФИЦИЕНТА К18.об ОТ ОБЪЕМА
        const obem = parseFloat(document.getElementById('obem').value) / 1000;
        V = parseFloat(document.getElementById('obem').value);
        if (obem > 0) {
            k18ob = 6.33 / Math.sqrt(obem);
            if (k18ob > 8) {
                k18ob = 8;
            }
            Vdiv100 = obem * 10;
        } else {
            k18ob = 0;
        }

        let bval = 1;
        bval = $("#buildingType").val();
        if (bval == 5 || bval == 6 || bval == 7)
        {
           if (visotazdani <= 5 && visotazdani > 0)
           {
               kefVisota = 1;
           }
           else if (visotazdani > 5 && visotazdani <= 10) {
               kefVisota = 1.1;
           } else if (visotazdani > 10 && visotazdani <= 20) {
               kefVisota = 1.25;
           } else if (visotazdani > 20 && visotazdani <= 30) {
               kefVisota = 1.35;
           } else if (visotazdani > 30 && visotazdani <= 40) {
               kefVisota = 1.45;
           } else if (visotazdani > 50) {
               kefVisota = 1.65;
           }


        }
        else {

            if (etazh <= 1) {
                if (visotazdani <= 4.2 && visotazdani > 0) {
                    kefVisota = 1;
                } else if (visotazdani > 4.2 && visotazdani <= 4.8) {
                    kefVisota = 1.1;
                } else if (visotazdani > 4.8 && visotazdani <= 5.4) {
                    kefVisota = 1.2;
                } else if (visotazdani > 5.4 && visotazdani <= 6.0) {
                    kefVisota = 1.3;
                } else if (visotazdani > 6.0 && visotazdani <= 6.6) {
                    kefVisota = 1.4;
                } else if (visotazdani > 6.6) {
                    kefVisota = 1.5;
                }
            } else {
                if (visotazdani <= 3.6) {
                    kefVisota = 1;
                } else if (visotazdani > 3.6 && visotazdani <= 4.2) {
                    kefVisota = 1.15;
                } else if (visotazdani > 4.2 && visotazdani <= 4.8) {
                    kefVisota = 1.3;
                } else if (visotazdani > 4.8 && visotazdani <= 5.4) {
                    kefVisota = 1.45;
                } else if (visotazdani > 5.4 && visotazdani <= 6.0) {
                    kefVisota = 1.5;
                } else if (visotazdani > 6) {
                    kefVisota = 1.65;
                }
            }

        }
        console.log (kefVisota, "ВЫСОТА ВЫСОТА ВЫСОТА");

        if (visotapola > 0 && visotapola <= 1.6) {
            visotaPolaVal = 1.3;
        } else {
            visotaPolaVal = 1;
        }


        await updateBuildingInfo();
        await calcIshod1();
        await calcIshod2();
        await calcObmerWorksPart1();
        await calcObmerWorksPart2();
        await calcObsled1();
        await calcObsled2();
        await calcSosttech1();
        await calcSosttech2();
        await calculateK();
    }


    async function calcIshod1() {

        const selectedOption = document.querySelector('#buildingType option:checked');

        let buildingType;
        if (selectedOption) {
            buildingType = parseFloat(selectedOption.getAttribute('data-id')) || 1;
        } else {
            buildingType = 1; // Значение по умолчанию, если элемент не найден
            console.warn("Элемент не найден, используется значение по умолчанию: 1");
        }

        mainvisotazdani = parseFloat(document.getElementById('visotazdani').value) || 0;

        etazh = parseFloat(document.getElementById('etazh').value) || 0;
        let valVisZd;
        if (etazh == 1) {

            if (mainvisotazdani < 1) {
                valVisZd = 0;
            } else {
                const thresholds = [0, 6, 7, 8, 9, 10, 12, 14, 16, 18, 20, 23, 26, 30, 35, 40, 45, 50];
                valVisZd = thresholds.findIndex(threshold => mainvisotazdani < threshold);
                if (valVisZd === -1) {
                    valVisZd = 18;
                }
            }
        } else {

            if (mainvisotazdani < 8 && mainvisotazdani > 0) {
                valVisZd = 1;
            } else if (mainvisotazdani >= 8 && mainvisotazdani < 8) {
                valVisZd = 2;
            } else if (mainvisotazdani >= 9 && mainvisotazdani < 10) {
                valVisZd = 3;
            } else if (mainvisotazdani >= 10 && mainvisotazdani < 12) {
                valVisZd = 4;
            } else if (mainvisotazdani >= 12 && mainvisotazdani < 14) {
                valVisZd = 5;
            } else if (mainvisotazdani >= 14 && mainvisotazdani < 16) {
                valVisZd = 6;
            } else if (mainvisotazdani >= 16 && mainvisotazdani < 18) {
                valVisZd = 7;
            } else if (mainvisotazdani >= 18 && mainvisotazdani < 20) {
                valVisZd = 8;
            } else if (mainvisotazdani >= 20 && mainvisotazdani < 23) {
                valVisZd = 9;
            } else if (mainvisotazdani >= 23 && mainvisotazdani < 26) {
                valVisZd = 10;
            } else if (mainvisotazdani >= 26 && mainvisotazdani < 30) {
                valVisZd = 11;
            } else if (mainvisotazdani >= 30 && mainvisotazdani < 35) {
                valVisZd = 12;
            } else if (mainvisotazdani >= 35 && mainvisotazdani < 40) {
                valVisZd = 13;
            } else if (mainvisotazdani >= 40 && mainvisotazdani < 45) {
                valVisZd = 14;
            } else if (mainvisotazdani >= 45 && mainvisotazdani < 50) {
                valVisZd = 15;
            } else if (mainvisotazdani >= 50) {
                valVisZd = 16;
            }
        }


        selectedRadio = document.querySelector('input[name="pasportNaZdanie"]:checked');
        if (selectedRadio) {
            P212 = selectedRadio.getAttribute('data-id');

            return new Promise((resolve, reject) => {
                $.ajax({
                    url: 'app/ajax/getIshodDannih.php',
                    method: 'POST',
                    data: {
                        pasportZD: selectedRadio.value,
                        hardZdanie: hardZdanie,
                        valVisZd: valVisZd,
                        etazh: document.getElementById('etazh').value,
                        P212: P212
                    },
                    success: function (response) {
                        if (response.trim().length > 0) {
                            let unparseRepsonse = JSON.parse(response);
                            koefIshod = parseFloat(unparseRepsonse[0].trim());
                            ki212 = parseFloat(unparseRepsonse[1].trim());
                            if (koefIshod == 1 && koefIshod2 == 1) {
                                sumIshod = 0;
                            } else {
                                sumIshod = Vdiv100 * k18101 * koefIshod * koefIshod2 * b14Value * k18ob * ki212 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                            }
                            $('#sborIshodnihDannih').html(sumIshod.toFixed(3));
                        }
                        resolve();
                    },
                })
            })
        }
        await calculateK();

    }


    async function calcIshod2() {
        let etazh = parseFloat(document.getElementById('etazh').value) || 0;
        let typeW;
        if ($("#choosCunstruct").prop("checked")) {
            typeW = $("#buildingType").val();

            switch (typeW) {
                case 6:
                    typeW = 4;
                    break;
                case 5:
                    typeW = 3;
                    break;
                case 7:
                    typeW = 2;
                    break;
                default:
                    typeW = etazh > 1 ? 2 : 1;
            }
            let koef1 = $("#toggleZd1").prop("checked") ? $("#conval1").val() / 100 : 0;
            let koef2 = $("#toggleZd2").prop("checked") ? $("#conval2").val() / 100 : 0;
            let koef3 = $("#toggleZd3").prop("checked") ? $("#conval3").val() / 100 : 0;
            let koef4 = $("#toggleZd4").prop("checked") ? $("#conval4").val() / 100 : 0;
            let koef5 = $("#toggleZd5").prop("checked") ? $("#conval5").val() / 100 : 0;
            let koef6 = $("#toggleZd6").prop("checked") ? $("#conval6").val() / 100 : 0;
            let koef7 = $("#toggleZd7").prop("checked") ? $("#conval7").val() / 100 : 0;
            let koef8 = $("#toggleZd8").prop("checked") ? $("#conval8").val() / 100 : 0;
            let koef9 = $("#toggleZd9").prop("checked") ? $("#conval9").val() / 100 : 0;

            let arKoef = [koef1, koef2, koef3, koef4, koef5, koef6, koef7, koef8, koef9];

            let myAr = [
                koef1 == 0 ? 0 : 1,
                koef2 == 0 ? 0 : 2,
                koef3 == 0 ? 0 : 3,
                koef4 == 0 ? 0 : 4,
                koef5 == 0 ? 0 : 9,
                koef6 == 0 ? 0 : 5,
                koef7 == 0 ? 0 : 6,
                koef8 == 0 ? 0 : 7,
                koef9 == 0 ? 0 : 8
            ];
            let count0 = 0;
            myAr.map(item => {
                item == 0 ? count0++ : count0
            });
            if (myAr.length == count0) {
                koefIshod2 = 1;

            }

            let newAr = myAr.filter(item => item != 0);


            return new Promise(function (resolve, reject) {
                let budval = $("#buildingType").val();
                if (budval == 5){
                    typeW = 3;
                }
                else if (budval == 6)
                {
                    typeW = 4;
                }
                console.log(typeW, "typeWtypeWtypeWtypeW");
                $.ajax({
                    url: "app/ajax/getKoefIshod2.php",
                    method: "POST",
                    data: {
                        typeW: typeW,
                        myAr: JSON.stringify(newAr)
                    },
                }).then(function (response) {
                    if (response.trim() == 1) {
                        koefIshod2 = 1;
                    } else {
                        let gettedAr = JSON.parse(response);
                        let sum = 0;
                        let index = 0;
                        arKoef.map(item => {
                            if (item != 0) {
                                sum += gettedAr[index] * item;
                                index++;
                            }
                        });
                        koefIshod2 = sum;
                    }
                    console.log("koefIshod = " + koefIshod);
                    console.log("koefIshod2 = " + koefIshod2);
                    if (koefIshod == 1 && koefIshod2 == 1) {
                        sumIshod = 0;
                    } else {
                        sumIshod = Vdiv100 * k18101 * koefIshod * koefIshod2 * b14Value * k18ob * ki212 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                    }
                    resolve();
                }).catch(function (error) {
                    reject(error);
                });
            });
        } else {
            koefIshod2 = 1;
        }
        calculateK();
        console.log("koefHarackCheckb", koefHarackCheckb);
        $('#sborIshodnihDannih').html(sumIshod.toFixed(3));

    }

    $("#choosCunstruct").on("change", async function (event) {
        if (event.target.checked) {
            await calcIshod1();
            await calcIshod2();
        } else {
            koefIshod2 = 1;
        }
        if (koefIshod == 1 && koefIshod2 == 1) {
            sumIshod = 0;
        } else {
            sumIshod = Vdiv100 * k18101 * koefIshod * koefIshod2 * b14Value * k18ob * ki212 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
        }
        $('#sborIshodnihDannih').html(sumIshod.toFixed(3));
        await calculateK();
    })

    $(".ishod2check").on("change", async function () {

        await calcIshod2();
        await calculateK();

    })

    async function updateBuildingInfo() {
        etazh = parseInt(document.getElementById('etazh').value) || 0;
        const visotazdani = parseFloat(document.getElementById('visotazdani').value) || 0;
        const visotapola = parseFloat(document.getElementById('visotapola').value) || 0;

        const vis6Label = document.querySelector('label[for="vis6"]');
        const vis614Label = document.querySelector('label[for="vis614"]');
        const vis14Label = document.querySelector('label[for="vis14"]');


        vis6Label.classList.remove('highlight-green', 'highlight-red');
        vis614Label.classList.remove('highlight-green', 'highlight-red');
        vis14Label.classList.remove('highlight-green', 'highlight-red');

        // document.getElementById('vis6').checked = false;
        // document.getElementById('vis614').checked = false;
        // document.getElementById('vis14').checked = false;


        if (etazh > 1) {


            document.getElementById('vis6').value = '1';
            vis6Label.innerText = '1) Здание с высотой этажа до 3.6м, бескрановое, до 3х этажей, этажерки высотой до 15м многоэтажные эстакады';


            document.getElementById('vis614').value = '2';
            vis614Label.innerText = '2) Здание с высотой этажа до 6м, бескрановое, до 2 объемов, до 4-9 этажей, сооружения высотой более 20м';

            document.getElementById('vis14').value = '3';
            vis14Label.innerText = '3)  Здание с высотой этажа свыше 6м, с краном, свыше 3 объемов, свыше 10 этажей, сооружения высотой более 60м, полный монолитный каркас';


            console.log(visotapola);
            if (visotapola <= 3.6) {
                vis6Label.classList.add('highlight-green');
                vis614Label.classList.add('highlight-red');
                vis14Label.classList.add('highlight-red');
                // document.getElementById('vis6').checked = true;
            } else if ((visotazdani >= 20 && visotazdani < 60 && visotapola < 6) || (visotapola > 3.6 && visotapola < 6)) {
                vis614Label.classList.add('highlight-green');
                vis6Label.classList.add('highlight-red');
                vis14Label.classList.add('highlight-red');
                //   document.getElementById('vis614').checked = true;
            } else if (visotazdani >= 60 || visotapola >= 6) {
                vis14Label.classList.add('highlight-green');
                vis6Label.classList.add('highlight-red');
                vis614Label.classList.add('highlight-red');
                //  document.getElementById('vis14').checked = true;
            }


        } else {
            document.getElementById('vis6').value = '1';
            vis6Label.innerText = '1) Здание высотой до 6м, бескрановое, однообъемное, двухпролетное';

            document.getElementById('vis614').value = '2';
            vis614Label.innerText = '2) Здание высотой от 6м до 14м высоты, с кранами грузоподъемностью до 50т включительно, с двумя объемами, 3-5 пролета, а также различные сооружения, резервуары, тоннели, лестничные клетки, галереи';

            document.getElementById('vis14').value = '3';
            vis14Label.innerText = '3) Здание высотой более 14м, со сложной конструктивной схемой, с двухъярусным расположением кранов, более 3 объемов, более 6 пролетов галереи с высотой опор более 20м и пролетом более 36м, полный монолитный каркас';

            if (visotazdani < 6) {
                vis6Label.classList.add('highlight-green');
                vis14Label.classList.add('highlight-red');
                vis614Label.classList.add('highlight-red');
                // document.getElementById('vis6').checked = true;
            } else if (visotazdani >= 6 && visotazdani < 14) {
                vis614Label.classList.add('highlight-green');
                vis14Label.classList.add('highlight-red');
                vis6Label.classList.add('highlight-red');
                // document.getElementById('vis614').checked = true;
            } else if (visotazdani >= 14) {
                vis14Label.classList.add('highlight-green');
                vis614Label.classList.add('highlight-red');
                vis6Label.classList.add('highlight-red');
                //  document.getElementById('vis14').checked = true;
            }
        }

        const selectedRadioZdvis = document.querySelector('input[name="zdvis"]:checked');

        if (selectedRadioZdvis) {
            if (etazh > 1) {
                if (selectedRadioZdvis.id === 'vis6') {
                    hardZdanie = 1;
                } else if (selectedRadioZdvis.id === 'vis614') {
                    hardZdanie = 2;
                } else if (selectedRadioZdvis.id === 'vis14') {
                    hardZdanie = 3;
                }
            } else {
                if (selectedRadioZdvis.id === 'vis6') {
                    hardZdanie = 1;
                } else if (selectedRadioZdvis.id === 'vis614') {
                    hardZdanie = 2;
                } else if (selectedRadioZdvis.id === 'vis14') {
                    hardZdanie = 3;
                }
            }
        }
        console.log(hardZdanie + "сложность здания");
        calculateK();
    }


    async function toggleInputs() {
        const calendarInput = document.getElementById('commonInputField');
        const workingInput = document.getElementById('commonInputFieldWorking');
        const isCalendarSelected = document.getElementById('calendarDays').checked;

        if (isCalendarSelected) {
            calendarInput.disabled = false;
            workingInput.disabled = true;
            workingInput.value = '';
        } else {
            workingInput.disabled = false;
            calendarInput.disabled = true;
            calendarInput.value = '';
        }
        await calculateK();
        console.log(5 + "updateWorkingDays");
    }

    function updateWorkingDays() {
        const calendarInput = document.getElementById('commonInputField');
        const workingInput = document.getElementById('commonInputFieldWorking');
        const startDateInput = document.getElementById('dateNachRab').value;

        const calendarDays = parseInt(calendarInput.value) || 0;
        const workingDays = Math.floor(calendarDays * 5 / 7);

        workingInput.value = workingDays;

        // if (startDateInput) {
        //     const startDate = new Date(startDateInput);
        //     const endDate = new Date(startDate);
        //     endDate.setDate(startDate.getDate() + calendarDays);
        //     document.getElementById('dateOkonchRab').value = endDate.toISOString().split('T')[0];
        // }
        console.log(4 + "updateWorkingDays")
    }

    function updateCalendarDays() {
        const workingInput = document.getElementById('commonInputFieldWorking');
        const calendarInput = document.getElementById('commonInputField');
        const startDateInput = document.getElementById('dateNachRab').value;

        const workingDays = parseInt(workingInput.value) || 0;
        const calendarDays = Math.ceil(workingDays * 7 / 5);

        calendarInput.value = calendarDays;

        if (startDateInput) {
            const startDate = new Date(startDateInput);
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + calendarDays);
            document.getElementById('dateOkonchRab').value = endDate.toISOString().split('T')[0];
        }

        console.log(1 + "updateCalendarDays")
    }

    function updateEndDate() {
        const startDateInput = document.getElementById('dateNachRab').value;
        const calendarInput = document.getElementById('commonInputField').value;

        if (startDateInput && calendarInput) {
            const startDate = new Date(startDateInput);
            const calendarDays = parseInt(calendarInput) || 0;
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + calendarDays);
            document.getElementById('dateOkonchRab').value = endDate.toISOString().split('T')[0];
        }
        console.log(2 + "updateEndDate")
    }

    // Устанавливает календарные дни в зависимости от выбранных дат в календаре.
    function updateCalendarDaysFromEnd() {
        const endDateInput = document.getElementById('dateOkonchRab').value;
        const startDateInput = document.getElementById('dateNachRab').value;

        if (endDateInput && startDateInput) {
            const startDate = new Date(startDateInput);
            const endDate = new Date(endDateInput);
            const calendarDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            document.getElementById('commonInputField').value = calendarDays;
        }
    }

    $('#dateNachRab').on('change', function () {
        updateCalendarDaysFromEnd();
        updateWorkingDays();
    });

    $('#dateOkonchRab').on('change', function () {
        updateCalendarDaysFromEnd();
        updateWorkingDays();
    });

    $('#calendarDays').on('change', function () {
        toggleInputs();
    });

    $('#workingDays').on('change', function () {
        toggleInputs();
    });


    $('#commonInputField').on('change', function () {
        toggleInputs();
        updateEndDate();
        updateWorkingDays();
        updateCalendarDaysFromEnd();
    });

    $('#commonInputFieldWorking').on('change', function () {
        toggleInputs();
        updateEndDate();
        updateCalendarDays();
        updateCalendarDaysFromEnd();


    });


    function toggleDisplay(triggerSelector, targetSelector) {
        const triggerElement = document.querySelector(triggerSelector);
        const targetElement = document.querySelector(targetSelector);
        const checkbox = document.getElementById('sborCheck');
        let ishdan = document.getElementById('sborIshodnihDannih');


        if (targetElement.style.display === "none" || targetElement.style.display === "") {
            targetElement.style.display = "block";
        } else {
            targetElement.style.display = "none";
        }

    }

    async function toggleSelect(toggleId, selectContainerId, optionsId) {
        const toggleSelect = document.getElementById(toggleId);
        const selectContainer = document.getElementById(selectContainerId);
        const optionsSelect = document.getElementById(optionsId);
        if (toggleSelect.checked) {
            selectContainer.classList.remove('hidden');
            optionsSelect.disabled = false;
        } else {
            selectContainer.classList.add('hidden');
            optionsSelect.selectedIndex = 0;
            optionsSelect.disabled = true;
            const index = optionsId.charAt(optionsId.length - 1);
            const dataIdElement = document.getElementById('dataId' + index);

            if (dataIdElement) {
                dataIdElement.value = 1;
            } else {
                console.log('Элемент с ID ' + 'dataId' + index + ' не найден.');
            }


            if (optionsId === 'options1') {
                obsledDop1 = 1;
            } else if (optionsId === 'options2') {
                obsledDop2 = 1;
            }
            if (koefObsled1 == 1 && koefObsled2 == 1) {
                sumObsled = 0;
            } else {
                sumObsled = koefObsled1 * koefObsled2 * b14Value * k18ob * obsledDop1 * obsledDop2 * Vdiv100 * k18101 * ki223 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
            }
            $('#obsledRab').html(sumObsled.toFixed(3));

        }
        await calculateHaracterCoefficient();
    }

    async function toggleCheckboxes() {
        const isChecked = document.getElementById('choosCunstruct').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox1 input[type="checkbox"], .viborvischeckbox2 input[type="checkbox"]');

        if (!isChecked) {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.disabled = true;
            });


            for (let i = 1; i <= 9; i++) {
                const input = document.getElementById(`conval${i}`);
                if (input) {
                    input.disabled = true;
                    input.value = '100';
                }
            }

        } else {

            checkboxes.forEach(checkbox => {
                checkbox.disabled = false;
            });

            for (let i = 1; i <= 9; i++) {
                const input = document.getElementById(`conval${i}`);
                if (input) {
                    input.value = '100';
                }

            }
        }

        await calculateK();
    }

    async function toggleCheckboxes4() {
        const isChecked = document.getElementById('choosCunstruct4').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox3 input[type="checkbox"], .viborvischeckbox4 input[type="checkbox"]');
        if (!isChecked) {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.disabled = true;
            });
            const inputIds = ['conval41', 'conval42', 'conval43', 'conval44', 'conval45', 'conval46', 'conval48', 'conval49', 'conval449'];
            inputIds.forEach(id => {
                const input = document.getElementById(id);
                if (input) {
                    input.disabled = true;
                    input.value = '100';
                }
            });
        } else {
            checkboxes.forEach(checkbox => {
                checkbox.disabled = false;
            });
            const inputIds = ['conval41', 'conval42', 'conval43', 'conval44', 'conval45', 'conval46', 'conval48', 'conval49', 'conval449'];
            inputIds.forEach(id => {
                const input = document.getElementById(id);
                if (input) {
                    input.value = '100';
                }
            });
        }
        await calculateK();
    }

    async function toggleCheckboxes5() {
        const isChecked = document.getElementById('choosCunstruct5').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox53 input[type="checkbox"], .viborvischeckbox54 input[type="checkbox"]');
        if (!isChecked) {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.disabled = true;
            });
            const inputIds = ['conval51', 'conval52', 'conval53', 'conval54', 'conval55', 'conval56', 'conval57', 'conval58', 'conval59'];
            inputIds.forEach(id => {
                const input = document.getElementById(id);
                if (input) {
                    input.disabled = true;
                    input.value = '100';
                }
            });
        } else {
            checkboxes.forEach(checkbox => {
                checkbox.disabled = false;
            });
            const inputIds = ['conval51', 'conval52', 'conval53', 'conval54', 'conval55', 'conval56', 'conval57', 'conval58', 'conval59'];
            inputIds.forEach(id => {
                const input = document.getElementById(id);
                if (input) {
                    input.value = '100';
                }
            });
        }
        await calculateK();
    }

    async function toggleCheckboxes6() {
        const isChecked = document.getElementById('choosCunstruct6').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox63 input[type="checkbox"], .viborvischeckbox64 input[type="checkbox"]');
        if (!isChecked) {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.disabled = true;
            });
            const inputIds = ['conval61', 'conval62', 'conval63', 'conval64', 'conval65', 'conval66', 'conval67', 'conval68', 'conval69'];
            inputIds.forEach(id => {
                const input = document.getElementById(id);
                if (input) {
                    input.disabled = true;
                    input.value = '100';
                }
            });
        } else {
            checkboxes.forEach(checkbox => {
                checkbox.disabled = false;
            });
            const inputIds = ['conval61', 'conval62', 'conval63', 'conval64', 'conval65', 'conval66', 'conval67', 'conval68', 'conval69'];
            inputIds.forEach(id => {
                const input = document.getElementById(id);
                if (input) {
                    input.value = '100';
                }
            });
        }
        await calculateK();
    }


    async function toggleCheckboxesDop() {
        const checkboxes = [
            {checkbox: document.getElementById('toggleZd1'), input: document.getElementById('conval1')},
            {checkbox: document.getElementById('toggleZd2'), input: document.getElementById('conval2')},
            {checkbox: document.getElementById('toggleZd3'), input: document.getElementById('conval3')},
            {checkbox: document.getElementById('toggleZd4'), input: document.getElementById('conval4')},
            {checkbox: document.getElementById('toggleZd5'), input: document.getElementById('conval5')},
            {checkbox: document.getElementById('toggleZd6'), input: document.getElementById('conval6')},
            {checkbox: document.getElementById('toggleZd7'), input: document.getElementById('conval7')},
            {checkbox: document.getElementById('toggleZd8'), input: document.getElementById('conval8')},
            {checkbox: document.getElementById('toggleZd9'), input: document.getElementById('conval9')},
        ];

        checkboxes.forEach(item => {
            if (item.checkbox.checked) {
                item.input.disabled = false;
            } else {
                item.input.disabled = true;
                item.input.value = 100;
            }
        });

        calcIshod1();
        calcIshod2();
        await calculateK();
    }


    async function toggleCheckboxesDop4() {
        const checkboxes = [
            {checkbox: document.getElementById('toggleZd41'), input: document.getElementById('conval41')},
            {checkbox: document.getElementById('toggleZd42'), input: document.getElementById('conval42')},
            {checkbox: document.getElementById('toggleZd43'), input: document.getElementById('conval43')},
            {checkbox: document.getElementById('toggleZd44'), input: document.getElementById('conval44')},
            {checkbox: document.getElementById('toggleZd45'), input: document.getElementById('conval45')},
            {checkbox: document.getElementById('toggleZd46'), input: document.getElementById('conval46')},
            {checkbox: document.getElementById('toggleZd48'), input: document.getElementById('conval48')},
            {checkbox: document.getElementById('toggleZd49'), input: document.getElementById('conval49')},
            {checkbox: document.getElementById('toggleZd449'), input: document.getElementById('conval449')},

        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
        await calcObmerWorksPart1();
        await calcObmerWorksPart2();
        await calculateK();
    }

    async function toggleCheckboxesDop5() {
        const checkboxes = [
            {checkbox: document.getElementById('toggleZd51'), input: document.getElementById('conval51')},
            {checkbox: document.getElementById('toggleZd52'), input: document.getElementById('conval52')},
            {checkbox: document.getElementById('toggleZd53'), input: document.getElementById('conval53')},
            {checkbox: document.getElementById('toggleZd54'), input: document.getElementById('conval54')},
            {checkbox: document.getElementById('toggleZd55'), input: document.getElementById('conval55')},
            {checkbox: document.getElementById('toggleZd56'), input: document.getElementById('conval56')},
            {checkbox: document.getElementById('toggleZd57'), input: document.getElementById('conval57')},
            {checkbox: document.getElementById('toggleZd58'), input: document.getElementById('conval58')},
            {checkbox: document.getElementById('toggleZd59'), input: document.getElementById('conval59')},
        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
        await calcObsled1();
        await calcObsled2();
        await calculateK();
    }

    async function toggleCheckboxesDop6() {
        const checkboxes = [
            {checkbox: document.getElementById('toggleZd61'), input: document.getElementById('conval61')},
            {checkbox: document.getElementById('toggleZd62'), input: document.getElementById('conval62')},
            {checkbox: document.getElementById('toggleZd63'), input: document.getElementById('conval63')},
            {checkbox: document.getElementById('toggleZd64'), input: document.getElementById('conval64')},
            {checkbox: document.getElementById('toggleZd65'), input: document.getElementById('conval65')},
            {checkbox: document.getElementById('toggleZd66'), input: document.getElementById('conval66')},
            {checkbox: document.getElementById('toggleZd67'), input: document.getElementById('conval67')},
            {checkbox: document.getElementById('toggleZd68'), input: document.getElementById('conval68')},
            {checkbox: document.getElementById('toggleZd69'), input: document.getElementById('conval69')},
        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
        await calcSosttech1();
        await calcSosttech2();
        await calculateK();
    }

    let toggleZd71;
    let toggleZd72;
    let toggleZd73;
    let toggleZd74;

    let conval71;
    let conval72;
    let conval73;
    let conval74;

    async function toggleCheckboxesDop7(checkboxId) {
        toggleZd71 = document.getElementById('toggleZd71').checked;
        toggleZd72 = document.getElementById('toggleZd72').checked;
        toggleZd73 = document.getElementById('toggleZd73').checked;
        toggleZd74 = document.getElementById('toggleZd74').checked;
        const checkboxes = [
            {checkbox: document.getElementById('toggleZd71'), input: document.getElementById('conval71')},
            {checkbox: document.getElementById('toggleZd72'), input: document.getElementById('conval72')},
            {checkbox: document.getElementById('toggleZd73'), input: document.getElementById('conval73')},
            {checkbox: document.getElementById('toggleZd74'), input: document.getElementById('conval74')},
        ];

        const currentCheckbox = checkboxes.find(item => item.checkbox.id === checkboxId);

        if (currentCheckbox) {
            if (currentCheckbox.checkbox.checked) {
                currentCheckbox.input.disabled = false;
                currentCheckbox.input.value = 0;
            } else {
                currentCheckbox.input.disabled = true;
                currentCheckbox.input.value = '';
            }
        }
        await sumKoefRedaktor();
    }

    async function sumKoefRedaktor() {
        conval71 = document.getElementById('conval71').value;
        conval72 = document.getElementById('conval72').value;
        conval73 = document.getElementById('conval73').value;
        conval74 = document.getElementById('conval74').value;

        const val1 = parseFloat(document.getElementById('conval71').value) || 0;
        const val2 = parseFloat(document.getElementById('conval72').value) || 0;
        const val3 = parseFloat(document.getElementById('conval73').value) || 0;
        const val4 = parseFloat(document.getElementById('conval74').value) || 0;

        let val1kef = 0;
        let val2kef = 0;
        let val3kef = 1.24;
        let val4kef = 0;

        if (val1 > 0) {
            if (val1 <= 50) {
                val1kef = 0.066;
            } else if (val1 <= 200) {
                val1kef = 0.054;
            } else {
                val1kef = 0.045;
            }
            koefRedaktor1 = b14Value * val1kef * val1;
        }

        if (val2 > 0) {
            if (val2 <= 50) {
                val2kef = 0.061;
            } else if (val2 <= 200) {
                val2kef = 0.048;
            } else {
                val2kef = 0.043;
            }
            koefRedaktor2 = b14Value * val2kef * val2;
        }

        if (val3 > 0) {
            koefRedaktor3 = b14Value * val3kef * val3;
        }

        if (val4 > 0) {
            if (val4 <= 50) {
                val4kef = 0.071;
            } else if (val4 <= 200) {
                val4kef = 0.059;
            } else {
                val4kef = 0.048;
            }
            koefRedaktor4 = b14Value * val4kef * val4;
        }

        let sumRedaktor1 = koefRedaktor1 + koefRedaktor2 + koefRedaktor3 + koefRedaktor4;
        sumRedaktor = sumRedaktor1;

        console.log("koefRedaktor1=" + koefRedaktor1 + " koefRedaktor2=" + koefRedaktor2 + " koefRedaktor3=" + koefRedaktor3 + " koefRedaktor4=" + koefRedaktor4 + " === " + "sumRedaktor=" + sumRedaktor);
        document.getElementById('redaktorCons').innerText = sumRedaktor1.toFixed(3);
        await calculateK();
    }

    let koefRedaktor1 = 0, koefRedaktor2 = 0, koefRedaktor3 = 0, koefRedaktor4 = 0;


    function toggleCheckboxesDop8(elem) {
        let k = false;
        koef0 = elem.getAttribute("data-id");
        const text = elem.nextSibling.textContent.replace(/\s+/g, ' ').trim();
        arrObsledOtdel.map(item => {
            if (item.id === elem.id) {
                k = true;
            }
        })
        if (!k) {
            arrObsledOtdel.push(new Obsled(elem.id, koef0, 0, 0, 1, 0, text))
        } else {
            arrObsledOtdel = arrObsledOtdel.filter((item) => item.id !== elem.id);
        }
        console.log(arrObsledOtdel);


        const checkboxes = [
            {
                checkbox: document.getElementById('toggleZd81'),
                inputs: [document.getElementById('conval81'), document.getElementById('conval811'), document.getElementById('monolit1')]
            },
            {
                checkbox: document.getElementById('toggleZd82'),
                inputs: [document.getElementById('conval82'), document.getElementById('conval822'), document.getElementById('monolit2')]
            },
            {
                checkbox: document.getElementById('toggleZd83'),
                inputs: [document.getElementById('conval83'), document.getElementById('conval833'), document.getElementById('monolit3')]
            },
            {
                checkbox: document.getElementById('toggleZd84'),
                inputs: [document.getElementById('conval84'), document.getElementById('conval844'), document.getElementById('monolit4')]
            },
            {
                checkbox: document.getElementById('toggleZd85'),
                inputs: [document.getElementById('conval85'), document.getElementById('conval855'), document.getElementById('monolit5')]
            },
            {
                checkbox: document.getElementById('toggleZd86'),
                inputs: [document.getElementById('conval86'), document.getElementById('conval866'), document.getElementById('monolit6')]
            },
            {
                checkbox: document.getElementById('toggleZd87'),
                inputs: [document.getElementById('conval87'), document.getElementById('conval877'), document.getElementById('monolit7')]
            },
            {
                checkbox: document.getElementById('toggleZd88'),
                inputs: [document.getElementById('conval88'), document.getElementById('conval888'), document.getElementById('monolit8')]
            },
            {
                checkbox: document.getElementById('toggleZd89'),
                inputs: [document.getElementById('conval89'), document.getElementById('conval899'), document.getElementById('monolit9')]
            },
            {
                checkbox: document.getElementById('toggleZd081'),
                inputs: [document.getElementById('conval081'), document.getElementById('conval0811'), document.getElementById('monolit10')]
            },
            {
                checkbox: document.getElementById('toggleZd082'),
                inputs: [document.getElementById('conval082'), document.getElementById('conval0822'), document.getElementById('monolit11')]
            },
            {
                checkbox: document.getElementById('toggleZd083'),
                inputs: [document.getElementById('conval083'), document.getElementById('conval0833'), document.getElementById('monolit12')]
            },
            {
                checkbox: document.getElementById('toggleZd084'),
                inputs: [document.getElementById('conval084'), document.getElementById('conval0844'), document.getElementById('monolit13')]
            },
            {
                checkbox: document.getElementById('toggleZd085'),
                inputs: [document.getElementById('conval085'), document.getElementById('conval0855'), document.getElementById('monolit14')]
            },
            {
                checkbox: document.getElementById('toggleZd086'),
                inputs: [document.getElementById('conval086'), document.getElementById('conval0866'), document.getElementById('monolit15')]
            },
            {
                checkbox: document.getElementById('toggleZd087'),
                inputs: [document.getElementById('conval087'), document.getElementById('conval0877'), document.getElementById('monolit16')]
            },
            {
                checkbox: document.getElementById('toggleZd088'),
                inputs: [document.getElementById('conval088'), document.getElementById('conval0888'), document.getElementById('monolit17')]
            },
            {
                checkbox: document.getElementById('toggleZd089'),
                inputs: [document.getElementById('conval089'), document.getElementById('conval0899'), document.getElementById('monolit18')]
            },
            {
                checkbox: document.getElementById('toggleZd0081'),
                inputs: [document.getElementById('conval0081'), document.getElementById('conval00811'), document.getElementById('monolit19')]
            },
            {
                checkbox: document.getElementById('toggleZd0082'),
                inputs: [document.getElementById('conval0082'), document.getElementById('conval00822'), document.getElementById('monolit20')]
            },
            {
                checkbox: document.getElementById('toggleZd0083'),
                inputs: [document.getElementById('conval0083'), document.getElementById('conval00833'), document.getElementById('monolit21')]
            },

        ];

        checkboxes.forEach(item => {
            item.inputs.forEach(input => {
                input.disabled = !item.checkbox.checked;
            });
        });
        calculateK();
    }

    function toggleDropdown() {
        document.getElementById("smetaDropdown").classList.toggle("show");
    }

    function filterSmeta() {
        var input, filter, dropdown, a, i;
        input = document.getElementById("smetaSearch");
        filter = input.value.toUpperCase();
        dropdown = document.getElementById("smetaDropdown");
        a = dropdown.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }

    window.onclick = function(event) {
        if (!event.target.matches('.btn-primary')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }


    document.getElementById('btnShowModalPeremen').addEventListener('click', function () {
        $('#modalPeremen').modal('show');
    });
    document.getElementById('b14Checkbox').addEventListener('change', function () {
        const b14Input = document.getElementById('b14Input');
        b14Input.disabled = !this.checked;
    });
    document.getElementById('btnApply').addEventListener('click', function () {
        const formData = {
            director: $('#director').val(),
            iODirector: $('#iODirector').val(),
            currentIndex: $('#currentIndex').val(),
            nextIndex: $('#nextIndex').val(),
            usnValue: $('#usnValue').val(),
            ndsValue: $('#ndsValue').val(),
            workCost: $('#workCost').val(),
            b14Index: $('#b14Input').val()
        };
        $.ajax({
            url: 'app/ajax/saveParametrPeremen.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: async function (data) {
                if (data.success) {
                    alert('Применено');
                    loadIndexPeremenFromDB();
                    loadParametrPeremenFromDB();
                    await calculateK();
                    $('#modalPeremen').modal('hide');
                    updateCalendarDaysFromEnd();
                    await updateBuildingInfo();
                    await toggleCheckboxesDop();
                    await toggleCheckboxesDop4();
                    await toggleCheckboxesDop5();
                    await toggleCheckboxesDop6();
                    await calculateHaracterCoefficient();


                    await calculateK();
                } else {
                    alert('Ошибка при сохранении параметров');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown);
                alert('Ошибка при сохранении параметров');
            }
        });
    });

    function loadParametrPeremenFromDB() {
        $.ajax({
            url: 'app/ajax/getParametrPeremen.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                if (data.success) {
                    $('#director').val(data.params.name_director);
                    $('#iODirector').val(data.params.name_IOdirector);
                    $('#usnValue').val(data.params.value_usn);
                    $('#ndsValue').val(data.params.value_nds);
                    usn = data.params.value_usn;
                    nds = data.params.value_nds;
                    console.log (usn , nds, "нАЛОГИ НАЛОГИ")
                } else {
                    console.error('Error:', data.error);
                }
            }
        });
    }

    $(document).ready(function () {
        loadParametrPeremenFromDB();
        loadIndexPeremenFromDB();
    });


    function loadIndexPeremenFromDB() {
        let indexval = 0;
        let b14indexval = 0;
        $.ajax({
            url: 'app/ajax/getIndexPeremen.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                if (data.success) {
                    $('#currentIndex').val(parseFloat(data.params.res.replace(',', '.')).toFixed(4));
                    $('#nextIndex').val(parseFloat(data.params.next_year_res.replace(',', '.')).toFixed(4));
                    $('#znachprognoz24').val(data.params.res);
                    $('#znachprognoz25').val(data.params.next_year_res);
                    indexval = parseFloat(data.params.cmont.replace(',', '.')).toFixed(4);
                    b14indexval = parseFloat(data.params.res.replace(',', '.')) * parseFloat(data.params.cost_work) * data.koefMonth * (1 + 0.5 * (indexval - 1));
                    $('#b14Input').val(b14indexval);
                    b14Value = b14indexval;

                    console.log("b14Ж" + b14indexval);
                    let formula = `${data.params.res} * ${data.params.cost_work} * ${data.koefMonth} * (1 + 0.5 * (${indexval} - 1))`;
                    console.log("b14Ж: " + b14indexval);
                    console.log("Формула: " + formula);

                    $('#workCost').val(data.params.cost_work);
                    $('#costwork14').val(data.params.cost_work);
                    costwork14 = data.params.cost_work;
                    b14Value = b14indexval.toFixed(4);
                    $('#b14Checkbox').prop('checked', b14Value !== '');
                    $('#b14Input').prop('disabled', !$('#b14Checkbox').is(':checked'));
                    if (b14Value) {
                        $('#b14Input').val(b14Value);
                    } else {
                        $('#b14Input').val('');
                    }

                } else {
                    console.error('Error:', data.error);
                }
            }
        });
    }

    $(document).ready(function () {
        loadParametrPeremenFromDB();
    });


    function printTZ() {
        let obem = document.getElementById('obem').value;
        let etazh = document.getElementById('etazh').value;
        let visotazdani = document.getElementById('visotazdani').value;
        visotapola = document.getElementById('visotapola').value;
        let zakazchikSelect = document.getElementById('zakazchik');
        let podryadchikSelect = document.getElementById('podryadchik');
        let zakazchik = zakazchikSelect.value > 0 ? zakazchikSelect.options[zakazchikSelect.selectedIndex].text : '';
        let podryadchik = podryadchikSelect.value > 0 ? podryadchikSelect.options[podryadchikSelect.selectedIndex].text : '';
        let cel = document.getElementById('textAreaCel').value;
        let mestoObj = document.getElementById('textAreaMestoObj').value;
        let naimRabot = document.getElementById('textAreaNaimRabot').value;


        let toggleZd1 = document.getElementById('toggleZd1').checked ? 1 : 0;
        let toggleZd2 = document.getElementById('toggleZd2').checked ? 1 : 0;
        let toggleZd3 = document.getElementById('toggleZd3').checked ? 1 : 0;
        let toggleZd4 = document.getElementById('toggleZd4').checked ? 1 : 0;
        let toggleZd5 = document.getElementById('toggleZd5').checked ? 1 : 0;
        let toggleZd6 = document.getElementById('toggleZd6').checked ? 1 : 0;
        let toggleZd7 = document.getElementById('toggleZd7').checked ? 1 : 0;
        let toggleZd8 = document.getElementById('toggleZd8').checked ? 1 : 0;
        let toggleZd9 = document.getElementById('toggleZd9').checked ? 1 : 0;

        let toggleZd41 = document.getElementById('toggleZd41').checked ? 1 : 0;
        let toggleZd42 = document.getElementById('toggleZd42').checked ? 1 : 0;
        let toggleZd43 = document.getElementById('toggleZd43').checked ? 1 : 0;
        let toggleZd44 = document.getElementById('toggleZd44').checked ? 1 : 0;
        let toggleZd45 = document.getElementById('toggleZd45').checked ? 1 : 0;
        let toggleZd46 = document.getElementById('toggleZd46').checked ? 1 : 0;
        let toggleZd48 = document.getElementById('toggleZd48').checked ? 1 : 0;
        let toggleZd49 = document.getElementById('toggleZd49').checked ? 1 : 0;
        let toggleZd449 = document.getElementById('toggleZd449').checked ? 1 : 0;

        let toggleZd51 = document.getElementById('toggleZd51').checked ? 1 : 0;
        let toggleZd52 = document.getElementById('toggleZd52').checked ? 1 : 0;
        let toggleZd53 = document.getElementById('toggleZd53').checked ? 1 : 0;
        let toggleZd54 = document.getElementById('toggleZd54').checked ? 1 : 0;
        let toggleZd55 = document.getElementById('toggleZd55').checked ? 1 : 0;
        let toggleZd56 = document.getElementById('toggleZd56').checked ? 1 : 0;
        let toggleZd57 = document.getElementById('toggleZd57').checked ? 1 : 0;
        let toggleZd58 = document.getElementById('toggleZd58').checked ? 1 : 0;
        let toggleZd59 = document.getElementById('toggleZd59').checked ? 1 : 0;

        let toggleZd61 = document.getElementById('toggleZd61').checked ? 1 : 0;
        let toggleZd62 = document.getElementById('toggleZd62').checked ? 1 : 0;
        let toggleZd63 = document.getElementById('toggleZd63').checked ? 1 : 0;
        let toggleZd64 = document.getElementById('toggleZd64').checked ? 1 : 0;
        let toggleZd65 = document.getElementById('toggleZd65').checked ? 1 : 0;
        let toggleZd66 = document.getElementById('toggleZd66').checked ? 1 : 0;
        let toggleZd67 = document.getElementById('toggleZd67').checked ? 1 : 0;
        let toggleZd68 = document.getElementById('toggleZd68').checked ? 1 : 0;
        let toggleZd69 = document.getElementById('toggleZd69').checked ? 1 : 0;


        let selectedRadio = document.querySelector('input[name="zdvis"]:checked');
        let zdvisValue = selectedRadio ? selectedRadio.value : '';
        let selectedRadioSlRab = document.querySelector('input[name="pasportNaZdanie"]:checked');
        let zdvisValueSlRab = selectedRadioSlRab ? selectedRadioSlRab.value : '';

        $.ajax({
            url: 'printTZ.php',
            type: 'POST',
            data: {
                obem: obem,
                etazh: etazh,
                visotazdani: visotazdani,
                visotapola: visotapola,
                zakazchik: zakazchik,
                cel: cel,
                mestoObj: mestoObj,
                naimRabot: naimRabot,
                podryadchik: podryadchik,
                toggleZd1: toggleZd1,
                toggleZd2: toggleZd2,
                toggleZd3: toggleZd3,
                toggleZd4: toggleZd4,
                toggleZd5: toggleZd5,
                toggleZd6: toggleZd6,
                toggleZd7: toggleZd7,
                toggleZd8: toggleZd8,
                toggleZd9: toggleZd9,

                toggleZd41: toggleZd41,
                toggleZd42: toggleZd42,
                toggleZd43: toggleZd43,
                toggleZd44: toggleZd44,
                toggleZd45: toggleZd45,
                toggleZd46: toggleZd46,
                toggleZd48: toggleZd48,
                toggleZd49: toggleZd49,
                toggleZd449: toggleZd449,

                toggleZd51: toggleZd51,
                toggleZd52: toggleZd52,
                toggleZd53: toggleZd53,
                toggleZd54: toggleZd54,
                toggleZd55: toggleZd55,
                toggleZd56: toggleZd56,
                toggleZd57: toggleZd57,
                toggleZd58: toggleZd58,
                toggleZd59: toggleZd59,

                toggleZd61: toggleZd61,
                toggleZd62: toggleZd62,
                toggleZd63: toggleZd63,
                toggleZd64: toggleZd64,
                toggleZd65: toggleZd65,
                toggleZd66: toggleZd66,
                toggleZd67: toggleZd67,
                toggleZd68: toggleZd68,
                toggleZd69: toggleZd69,

                zdvisValue: zdvisValue,
                zdvisValueSlRab: zdvisValueSlRab
            },
            success: function (response) {


                function downloadAsWord(response) {
                    // Create a Blob object with the HTML content and a Word-related MIME type
                    const blob = new Blob(['\ufeff', '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/1999/xhtml">',
                        '<head><meta charset="utf-8" />',
                        '<title>Report</title>',
                        '<style>@page { margin: 1rem; }</style>',
                        '</head>',
                        '<body>', response, '</body>',
                        '</html>'
                    ], {type: 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'});

                    // Create an anchor element with a download attribute
                    const a = document.createElement('a');
                    a.href = window.URL.createObjectURL(blob);
                    a.download = 'report.doc';

                    // Trigger a click event on the anchor element to download the Blob as a Word document
                    a.click();
                }

// Your existing code to generate the response
// ...

// Call the downloadAsWord function instead of the print function
                downloadAsWord(response);


                // var WinPrint = window.open('', '', 'left=50,top=50,width=1200,height=860,toolbar=0,scrollbars=1,status=0');
                // WinPrint.document.write('<style>@page {\n' +
                //     'margin: 1rem;\n' +
                //     '}</style>');
                // WinPrint.document.write('<br/>');
                // WinPrint.document.write(response);
                // WinPrint.document.close();
                // WinPrint.focus();
                // WinPrint.print();
                // WinPrint.close();

                resolve();
            }

        })
    }


    function selectCalculation(index) {
        const workSelect = document.querySelector(`#selectCalc${index}`);
        const otherInputs = [
            document.querySelector(`#inputCalc${index}`),
            document.querySelector(`#select2Calc${index}`),
            // document.querySelector(`#input2Calc${index}`),
            document.querySelector(`#input3Calc${index}`)
        ];
        const selectedValue = workSelect.value;

        if ($("#inputCalc" + index).val().length === 0) {
            $("#inputCalc" + index).val(1);
        }
        if (selectedValue !== "0") {
            otherInputs.forEach(input => {
                input.disabled = false;
            });

        } else {
            otherInputs.forEach(input => {
                input.disabled = true;
                if (input.tagName === 'SELECT') {
                    input.value = "0";
                } else {
                    input.value = '';
                }
            });

        }

        const select = document.getElementById(`selectCalc${index}`);
        const customWorkInput = document.getElementById(`customWork${index}`);

        if (select.value === "8") {
            customWorkInput.style.display = "inline";
        } else {
            customWorkInput.style.display = "none";
            customWorkInput.value = "";
        }


    }


    async function toggleCheckboxesDopDusl(checkbox) {
        const dataId = parseFloat(checkbox.getAttribute('data-id'));

        if (checkbox.checked) {
            if (checkbox.id === 'toggleZdDopUsl') {
                obmerDop1 = dataId;
            } else if (checkbox.id === 'toggleZdDopUsl1') {
                obmerDop2 = dataId;
            }
        } else {
            if (checkbox.id === 'toggleZdDopUsl') {
                obmerDop1 = 1;
            } else if (checkbox.id === 'toggleZdDopUsl1') {
                obmerDop2 = 1;
            }
        }
        if (koefObmerWork1 == 1 && koefObmerWork2 == 1) {
            sumObmer = 0;
        } else {
            sumObmer = koefObmerWork1 * koefObmerWork2 * b14Value * k18ob * obmerDop1 * obmerDop2 * Vdiv100 * k18101 * ki222 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
        }
        $('#obmerRaboty').html(sumObmer.toFixed(3));
        await calculateK();
    }

    function obsledDataidSelect(selectElement) {
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        return selectedOption.value === "" ? "1" : selectedOption.getAttribute('data-id');
    }

    document.getElementById('options1').onchange = function () {
        obsledDop1 = obsledDataidSelect(this);
        if (koefObsled1 == 1 && koefObsled2 == 1) {
            sumObsled = 0;
        } else {
            sumObsled = koefObsled1 * koefObsled2 * b14Value * k18ob * obsledDop1 * obsledDop2 * Vdiv100 * k18101 * ki223 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
        }
        $('#obsledRab').html(sumObsled.toFixed(3));


        calculateK();
    };

    document.getElementById('options2').onchange = function () {
        obsledDop2 = obsledDataidSelect(this);
        if (koefObsled1 == 1 && koefObsled2 == 1) {
            sumObsled = 0;
        } else {
            sumObsled = koefObsled1 * koefObsled2 * b14Value * k18ob * obsledDop1 * obsledDop2 * Vdiv100 * k18101 * ki223 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
        }
        $('#obsledRab').html(sumObsled.toFixed(3));
        calculateK();
    };


    function calcObsledOtdel(elem) {
        const ded = elem.parentElement.parentElement;
        let papa = elem.parentElement;
        let checkMonol;

        if(elem.value == 1)
        {
         slojnObsledOtdel = 0.905;
        }
        else if (elem.value == 2){
            slojnObsledOtdel = 1;
        }
        else if (elem.value == 3){
            slojnObsledOtdel = 1.108;
        }
        else {
            slojnObsledOtdel = 1;
        }

        if (elem.checked)
        {
            checkMonol = 1.2;
        }
        else{
            checkMonol = 1;
        }

        arrObsledOtdel.map(item => {
            if (item.id === ded.children[0].children[0].id) {
                switch (elem.className) {
                    case "inpval kol":
                        item.count = elem.value;
                        break;
                    case "inpval slojn":

                        item.hard = slojnObsledOtdel;
                        break;
                    case "monolit":
                        item.koef_monol = checkMonol;
                        break;
                }
                if ( item.count != 0 && item.hard != 0) {
                    item.total = koef0 * parseFloat(item.hard) * checkMonol * b14Value * item.count;
                    console.log(`считаем: item.total = ${koef0} * parseFloat(${item.hard}) * ${checkMonol} * ${b14Value} = ${item.total}`);
                    sumObsledOtdel =  item.total;
                    $('#obsledotdel').html(sumObsledOtdel.toFixed(3));
                    console.log (sumObsledOtdel + "obsled otdel");
                }
                else
                {
                    item.total = 0;
                }
            }
        })
       sumObsledOtdel = 0;
        arrObsledOtdel.map(item => {
            sumObsledOtdel +=  item.total;
        })
        $('#obsledotdel').html(sumObsledOtdel.toFixed(3));
        console.log (arrObsledOtdel);
        calculateK();
    }



    function calcObsOtd(elem){
        if (elem.is(':checked')) {
            console.log ("fullSumma", fullSumma)
            fullSumma = parseFloat(fullSumma) + parseFloat(sumObsledOtdel);

            totalSum = totalSum +parseFloat(sumObsledOtdel);

        }

        document.getElementById('harakteristikaObjectObsh').innerText = totalSum.toFixed(2);
        document.getElementById('harakteristikaObjectSmeta').innerText = parseFloat(fullSumma);
    }




</script>

</body>
</html>
