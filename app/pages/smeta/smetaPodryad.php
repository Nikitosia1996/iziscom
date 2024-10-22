<?php
include "app/classes/SmetaList.php";

$harakteristikaObject = 0;
$sborIshodnihDannih = 0;
$obmerRaboty = 0;
$obsledRab = 0;
$sostTech = 0;
$redaktorCons = 0;


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

    .form-select {
        width: 90%;
        height: 40px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        margin-left: 5%;
        margin-top: 10px;
    }

    .form-select-calc {
        width: 90%;
        height: 35px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        margin-left: 5%;
        margin-top: 10px;
        font-size: 12px;
    }

    .form-date {
        width: 90%;
        height: 40px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        margin-left: 5%;
        margin-top: 10px;
    }

    .form-outline {
        width: 90%;
        margin-bottom: 10px;
        margin-left: 5%;
        margin-top: 10px;
    }


    .zakpod {
        margin-left: 5%;
    }

    .pasportzd {
        margin-left: 5%;
        display: inline;
    }

    .pasportzd {
        margin-left: 1%;
        display: inline;
    }


    .zakpodGps {
        margin-top: 95px;
        margin-left: 5%;
    }

    .pos1 {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left: 1%;
        width: 30%;
    }

    .pos2 {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left: 1%;
        width: 30%;
    }

    .pos3 {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left: 1%;
        width: 30%;
    }

    .position1 {
        display: flex;
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
        margin-left: 5%;
    }

    .input-containerval {
        margin-left: 0%;
        margin-right: 2%;
        display: block;

    }

    .onCollap {
        margin-left: 5%;
    }

    #commonInputField {
        width: 70px;
    }

    #etazh {
        width: 15%;
    }

    #visotazdani {
        width: 15%;
    }

    #obem {
        width: 15%;
    }

    .inpval {
        width: 30%;
    }

    #visotapola {
        width: 15%;
    }

    .dndb, .dndb3, .dndb4, .dndb5, .dndb6, .dndb7, .dndb8, .dndb9 {
        display: none;
    }

    .nameforblock1, .nameforblock3, .nameforblock4, .nameforblock5,
    .nameforblock6, .nameforblock7, .nameforblock8, .nameforblock9 {
        margin-left: 1%;
        cursor: pointer;
        background-color: #f0f0f0;
        padding: 10px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
        width: 50%;
        display: flex;
        justify-content: center;
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

    .form-select-calc {
        margin-right: 10px;
    }

    .inpvalsel {
        flex: 1;
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
        top: 0;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 50px;
        z-index: 999;
        margin-top: 70px;
    }
    .hr{
        z-index: 1;
        position: relative;
    }
</style>
<div class="sticky">
<div class="col-lg-12 connectedSortable ui-sortable" style="margin-top: 90px">
    <div class="row mgbottom20p mgleft5">
        <div class="dropdown col-lg-2">
            <button onclick="myFunction()" class="dropbtn">Найти смету</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Поиск..." id="myInput" onkeyup="filterFunction()">
                <?php
                $smetaArray = $smetaList->getSmetaArray();
                foreach ($smetaArray as $smeta) {
                    echo '<a onclick=" getSmeta(' . $smeta->getId() . ')">' . $smeta->getName() . '</a>';
                }

                ?>
            </div>
        </div>


        <div class="col-lg-2">
            <button id="btnShowModalPeremen" class="btn btn-primary">Параметры переменных</button>
        </div>

        <div class="col-lg-1">

            Общая сумма <?php echo ' <span class="harakteristikaObject" id="harakteristikaObjectObsh">';
            echo $harakteristikaObject;
            echo '</span>' ?>
        </div>
        <div class="col-lg-1">
            Смета <?php echo ' <span class="harakteristikaObject" id="harakteristikaObjectSmeta">';
            echo $harakteristikaObject;
            echo '</span>' ?>
        </div>
        <div class="col-lg-1">
            Калькуляция <?php echo ' <span class="harakteristikaObject" id="harakteristikaObjectCalc">';
            echo $harakteristikaObject;
            echo '</span>' ?>
        </div>



        <div class="col-lg-5">
            <div id="divSaveSmeta" class="form-group mgtop5" style="display: inline-flex;
    float: right;
    margin-right: 9%;">
                <input class="form-control" type="text" id="smetaName" placeholder="Новая смета"
                       style="width: 300px; margin-right: 10%;">
                <button id="btnSaveSmeta" class="btn btn-primary" onclick="saveSmeta()">Сохранить</button>
            </div>
        </div>
    </div>
    <div class="row mgbottom20p mgleft5">
        <div class="col-lg-4">
            <button id="btnCalculationExcel" class="btn btn-primary">Калькуляция в EXCEL</button>
        </div>
        <div class="col-lg-4">
            <button id="btnTechZad" class="btn btn-primary" onclick="printTZ()">Техническое задание</button>
        </div>
        <div class="col-lg-4">
            <a href="../smeta/excel.php" class="btn btn-primary">Смета в EXCEL</a>
        </div>
    </div>
</div>
</div>

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


    <div class="nameforblock1" onclick="toggleDisplay('.nameforblock1', '.dndb');">Характеристика объекта&nbsp;&nbsp;&nbsp;<?php echo '<span class="harakteristikaObject" id="harakteristikaObject">';
        echo $harakteristikaObject;
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
                        <input data-id="1.5" value="1" type="checkbox" id="chekb1"
                               onchange="calculateHaracterCoefficient();"> Выполнение работ с применением альпинисткого
                        снаряжения (K = 1.5)
                    </label>
                    <label>
                        <input data-id="1.25" value="2" type="checkbox" id="chekb2"
                               onchange="calculateHaracterCoefficient();"> Шумовые воздействия, превышающие нормативные
                        величины (K = 1.25)
                    </label>
                    <label>
                        <input data-id="1.2" value="3" type="checkbox" id="chekb3"
                               onchange="calculateHaracterCoefficient();"> Выполнение работ в условиях отрицательных
                        температур в период с 1 ноября - 1 мая (K = 1.2)
                    </label>
                    <label>
                        <input data-id="1.2" value="4" type="checkbox" id="chekb4"
                               onchange="calculateHaracterCoefficient();"> Необходимость очистки поверхности конструкций
                        от грязи, пыли, ржавчины. Расчет выполнять по калькуляции трудозатрат
                    </label>

                </div>
            </div>
            <div class="pos2">

                <div class="viborvis">
                    <label>
                        <input data-id="1.2" value="5" type="checkbox" id="chekb5"
                               onchange="calculateHaracterCoefficient();"> Необходимость использования переносных
                        источников освещения (K = 1.2)
                    </label>
                    <label>
                        <input data-id="1.02" value="6" type="checkbox" id="chekb6"
                               onchange="calculateHaracterCoefficient();"> Здание является памятником архитектуры (K =
                        1.02)
                    </label>
                    <label>
                        <input data-id="1.2" value="7" type="checkbox" id="chekb7"
                               onchange="calculateHaracterCoefficient();"> Обследование в условиях производственного
                        процесса (K = 1.2)
                    </label>
                    <label>
                        <input data-id="1.15" value="8" type="checkbox" id="chekb8"
                               onchange="calculateHaracterCoefficient();"> Выполнение работ с мостового крана или
                        подмостей (K = 1.15)
                    </label>
                </div>
            </div>
            <div class="pos3">
                <div class="viborvis">
                    <label>
                        <input data-id="1.2" value="9" type="checkbox" id="chekb9"
                               onchange="calculateHaracterCoefficient();"> Здание оборудовано кранами режимных групп 7К,
                        8К, (K = 1.2)
                    </label>
                    <label>
                        <input data-id="1.2" value="10" type="checkbox" id="chekb10"
                               onchange="calculateHaracterCoefficient();"> Конструкции, усиленные по ранее разработанным
                        проектам (K = 1.2)
                    </label>
                    <label>
                        <input data-id="0.7" value="11" type="checkbox" id="chekb11"
                               onchange="calculateHaracterCoefficient();"> Использование ранее выполненных обследований
                        не более 3 лет назад (K = 0.7)
                    </label>
                    <label>
                        <input data-id="1.35" value="12" type="checkbox" id="chekb12"
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
                                                                                           name="obmerCheck" value="1" onchange="calculateK()">
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
                    <input data-id="1" id="pasportNaZdanie" class="butrad" type="radio" name="pasportNaZdanie" value="1"
                           onchange="calcIshod1()">
                    <label for="pasportNaZdanie" class="pasportzd">1) Паспорт на здание или сооружение</label>

                    <br>
                    <input data-id="1" id="pasportNaZdanie" class="butrad" type="radio" name="pasportNaZdanie" value="2"
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
                                                                                           name="obmerCheck" value="1" onchange="calculateK()">&nbsp;&nbsp;&nbsp;Обмерные
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
                    <input id="obmerobsl" class="butrad kat_sl_rab" type="radio" name="kat_sl_rab" value="1"
                           onchange="calcObmerWorksPart1()">
                    <label for="obmerobsl" class="pasportzd">1) Обмеры для визуального обследования,
                        паспортизации.:</label>

                    <br>
                    <input id="obmerobs2" class="butrad kat_sl_rab" type="radio" name="kat_sl_rab" value="2"
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
            <input data-id="0.7" type="checkbox" id="toggleZdDopUsl" onchange ="toggleCheckboxesDopDusl(this)"> Проектная документация присутствует в полном
            объеме (K = 0.7)
            <input data-id="1.25" type="checkbox" id="toggleZdDopUsl1" onchange ="toggleCheckboxesDopDusl(this)"> Выполнение детальных измерений пролетов,
            сечений, узлов, смещений (K = 1.25)
        </div>
    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


    <div class="nameforblock5" onclick="toggleDisplay('.nameforblock5', '.dndb5');"><input class="onCollap"
                                                                                           type="checkbox"
                                                                                           id="obsledCheck"
                                                                                           name="sborDann" value="1" onchange="calculateK()">&nbsp;&nbsp;&nbsp;Обследовательские
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
                    <select class="form-select" id="options1" disabled onchange = "obsledDataidSelect(this)">
                        <option data-id="1" value="">-- Пожалуйста, выберите --</option>
                        <option data-id="1.2" value="1">Поверхность конструкций обшиты листовыми материалами или плиткой</option>
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
                    <select class="form-select" id="options2" disabled onchange = "obsledDataidSelect(this)">
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
                <input data-id="1.15"  value="1" type="checkbox" id="sooruzhzd"> Здание (сооружение) на просадочных грунтах
            </div>
        </div>


    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <div class="nameforblock6" onclick="toggleDisplay('.nameforblock6', '.dndb6');"><input class="onCollap"
                                                                                           type="checkbox"
                                                                                           id="sostTechOtchetCheck"
                                                                                           name="sostTechOtchetCheck"
                                                                                           value="1" onchange="calculateK()">&nbsp;&nbsp;&nbsp;Составление
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


    <div class="nameforblock7" onclick="toggleDisplay('.nameforblock7', '.dndb7');"><input class = "onCollap" type="checkbox" id="redaktorIspConstr" name="redaktorIspConstr" value="1" onchange="calculateK()">&nbsp;&nbsp;&nbsp;Редактор испытания конструкций &nbsp;&nbsp;&nbsp;<?php echo '<span class="sborIshodnihDannih" id="redaktorCons">'; echo $redaktorCons; echo'</span>'; ?></div>
    <div class="dndb7">
        <div style="margin-left:1%" ;>Работы по определению прочности бетона и кирпичной кладки:</div>
        <div class="position1">

            <div class="posfull">
                <div class="viborvisnew">
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd71" onchange="toggleCheckboxesDop7('toggleZd71')"> Определение
                            прочности бетона в бетонных и железобетонных конструкциях
                            механическими приборами
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval71" disabled type="number" name="inputValue" step="1" min="0" oninput="sumKoefRedaktor()">
                        </div>
                    </div>
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd72" onchange="toggleCheckboxesDop7('toggleZd72')"> Определение
                            прочности бетона в бетонных и железобетонных конструкциях
                            ультразвуковыми приборами
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval72" disabled type="number" name="inputValue" step="1" min="0" oninput="sumKoefRedaktor()">
                        </div>
                    </div>
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd73" onchange="toggleCheckboxesDop7('toggleZd73')"> Определение
                            прочности бетона в бетонных и железобетонных конструкциях
                            гидравлическими пресс-насосами (типа ГПНС, "Скол", и т.д.)
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval73" disabled type="number" name="inputValue" step="1" min="0" oninput="sumKoefRedaktor()">
                        </div>
                    </div>
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd74" onchange="toggleCheckboxesDop7('toggleZd74')"> Определение
                            прочности раствора и каменных материалов ультразвуковыми
                            и ударно-импульсными методами
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval74" disabled type="number" name="inputValue" step="1" min="0" oninput="sumKoefRedaktor()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
    <div class="nameforblock8" onclick="toggleDisplay('.nameforblock8', '.dndb8');">Обследование отдельных  конструкций <?php echo '<input onchange="calculateK()" class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb8">


        <div class="position1">

            <div class="pos1">
                <div class="viborvischeckbox81">
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd81" onchange="toggleCheckboxesDop8()"> Стропильная ферма
                            пролетом 18м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval81" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval811" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">

                            <input type="checkbox" id="toggleZd82" onchange="toggleCheckboxesDop8()"> Стропильная ферма
                            пролетом 24м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval82" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval822" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>


                    <div class="mainlolspace">
                        <div class="lolspace">

                            <input type="checkbox" id="toggleZd83" onchange="toggleCheckboxesDop8()"> Стропильная ферма
                            пролетом 30м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval83" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval833" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd84" onchange="toggleCheckboxesDop8()"> Подстропильная
                            ферма пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval84" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval844" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>

                    </div>
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd85" onchange="toggleCheckboxesDop8()"> Подстропильная
                            балка пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval85" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval855" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd86" onchange="toggleCheckboxesDop8()"> Стропильная балка
                            пролетом 9м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval86" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval866" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd87" onchange="toggleCheckboxesDop8()"> Стропильная балка
                            пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval87" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval877" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>


                </div>
            </div>
            <div class="pos2">
                <div class="viborvischeckbox82">
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd88" onchange="toggleCheckboxesDop8()"> Стропильная балка
                            пролетом 18м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval88" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval888" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd89" onchange="toggleCheckboxesDop8()"> Подкрановая балка
                            пролетом 6м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval89" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval899" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>


                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd081" onchange="toggleCheckboxesDop8()"> Подкрановая балка
                            пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval081" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0811" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>


                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd082" onchange="toggleCheckboxesDop8()"> Плиты покрытия и
                            перекрытий размером 1,5х6 и 3х6 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval082" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0822" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd083" onchange="toggleCheckboxesDop8()"> Плиты покрытия и
                            перекрытий размером 1,5х12 и 3х12 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval083" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0833" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd084" onchange="toggleCheckboxesDop8()"> Ригели и
                            фундаментальные балки пролетом 6 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval084" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0844" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd085" onchange="toggleCheckboxesDop8()"> Ригели и
                            фундаментальные балки пролетом 9 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval085" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0855" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                </div>
            </div>


            <div class="pos3">

                <div class="viborvischeckbox83">
                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd086" onchange="toggleCheckboxesDop8()"> Колонны
                            одноветвевые
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval086" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0866" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd087" onchange="toggleCheckboxesDop8()"> Колонны
                            двухветвевые
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval087" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0877" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>


                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd088" onchange="toggleCheckboxesDop8()"> Капители
                            безбалочных перекрытий
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval088" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0888" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd089" onchange="toggleCheckboxesDop8()"> Стеновые панели
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval089" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0899" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>


                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd0081" onchange="toggleCheckboxesDop8()"> Панели-оболочки
                            размером 3х18 и 3х24 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0081" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval00811" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd0082" onchange="toggleCheckboxesDop8()"> Фундаменты
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0082" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval00822" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>


                    <div class="mainlolspace">
                        <div class="lolspace">
                            <input type="checkbox" id="toggleZd0083" onchange="toggleCheckboxesDop8()"> Перемычки
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval0083" disabled type="number" name="inputValue" step="1"
                                   min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class="inpval" id="conval00833" disabled type="number" name="inputValue" step="1"
                                   min="0"> сложность
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
    <div class="nameforblock9" onclick="toggleDisplay('.nameforblock9', '.dndb9');">
        Калькуляция <?php echo '<input onchange="calculateK()" class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
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
                            </select>
                            <input class="inpvalsel trud" disabled type="number" id="inputCalc1" name="inputValue" step="1"
                                   min="0" placeholder="">
                        </div>
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
                            </select>
                            <input class="inpvalsel trud" disabled type="number" id="inputCalc2" name="inputValue" step="1"
                                   min="0" placeholder="">
                        </div>
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
                            </select>
                            <input class="inpvalsel trud" type="number" disabled id="inputCalc3" name="inputValue" step="1"
                                   min="0" placeholder="">
                        </div>
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
                            </select>
                            <input class="inpvalsel trud" type="number" name="inputValue" disabled id="inputCalc4" step="1"
                                   min="0" placeholder="">
                        </div>
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
                            </select>
                            <input class="inpvalsel trud" type="number" disabled id="inputCalc5" name="inputValue" step="1"
                                   min="0" placeholder="">
                        </div>
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
                            </select>
                            <input class="inpvalsel trud" type="number" disabled id="inputCalc6" name="inputValue" step="1"
                                   min="0" placeholder="">
                        </div>
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
                            </select>
                            <input class="inpvalsel trud" type="number" disabled id="inputCalc7" name="inputValue" step="1"
                                   min="0" placeholder="">
                        </div>
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
                            </select>
                            <input class="inpvalsel trud" type="number" disabled id="inputCalc8" name="inputValue" step="1"
                                   min="0" placeholder="">
                        </div>
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
                        <input id="sredRazryad" type="number" name="inputValue" step="1" min="0"><br>
                        <br><br>
                        <label id="inputLabel" for="tarifKoef">Тарифный коэффициент для пересчёта
                            стоимости</label><br>
                        <input id="tarifKoef" type="number" name="inputValue" step="1" min="0"><br>
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
                <input type="checkbox" id="checkUSN"> Учитывать УСН
            </label>
            <br>
            <label>
                <input type="checkbox" id="checkNDS"> Учитывать НДС
            </label>
            <br>
            <br>
            <label id="inputLabel" for="minuskef">Понижающий коэффициент</label><br>
            <input id="minuskef" type="number" name="inputValue" step="1" min="0"><br>
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
    let sumSosttech = 0; // СУММА ВКЛАДКИ обcледа
    let fullSumma = 0; // ОБЩАЯ СУММА ВСЕХ ВКЛАДОК
    let K18ob = 0; // Общий  К18.об
    let hardZdanie; // КАТЕГОРИЯ СЛОЖНОСТИ ЗДАНИЯ
    let mainvisotazdani; // ВЫСОТА ЗДАНИЯ
    let koefIshod = 1; // КОЭФИЦИЕНТ НЗТ1 (табл.2.3)
    let selectedRadio; // КАТЕГОРИЯ СЛОЖНОСТИ РАБОТ
    let koefIshod2 = 1; // КОЭФИЦИЕНТ НЗТ1 (табл.2.4)
    let costwork14; // СРЕДНИЙ РАЗРЯД  14
    let obmerDop1 = 1; // доп чекбокс2
    let obmerDop2 = 1; // доп чекбокс2
    let obsledDop1 = 1; //
    let obsledDop2 = 1; //


    async function calculateK() {

        const isSborIshodnihDannihChecked = document.getElementById('sborCheck').checked;
        const isObmerRabotyChecked = document.getElementById('obmerCheck').checked;
        const isObsledRabChecked = document.getElementById('obsledCheck').checked;
        const isSostTechOtchetCheck = document.getElementById('sostTechOtchetCheck').checked;
        const isRedaktorIspConstr = document.getElementById('redaktorIspConstr').checked;


        koefIshod = koefIshod == 0 ? 1 : koefIshod;
        koefIshod2 = koefIshod2 == 0 ? 1 : koefIshod2;
        koefObmerWork1 = koefObmerWork1 == 0 ? 1 : koefObmerWork1;
        koefObmerWork2 = koefObmerWork2 == 0 ? 1 : koefObmerWork2;
        koefObsled2 = koefObsled2 == 0 ? 1 : koefObsled2;
        koefObsled1 = koefObsled1 == 0 ? 1 : koefObsled1;
        if (koefIshod == 1 && koefIshod2 == 1) {
            sumIshod = 0;
        } else {
            sumIshod = koefIshod * koefIshod2 * costwork14 * K18ob;
        }

        if (koefObmerWork1 == 1 && koefObmerWork2 == 1) {
            sumObmer = 0;
        } else {
            sumObmer = koefObmerWork1 * koefObmerWork2 * costwork14 * K18ob * obmerDop1 * obmerDop2;
            console.log (sumObmer , obmerDop1 , obmerDop2);
        }

        if (koefObsled1 == 1 && koefObsled2 == 1) {
            sumObsled = 0;
        } else {
            sumObsled = koefObsled1 * koefObsled2 * costwork14 * K18ob * obsledDop1 * obsledDop2;
        }

        if (koefSosttech1 == 1 && koefSosttech2 == 1) {
            sumSosttech = 0;
        } else {
            sumSosttech = koefSosttech1 * koefSosttech2 * costwork14 * K18ob;
        }

        fullSumma = parseFloat(sumHarakter); //+ parseFloat(sumIshod) + parseFloat(sumObmer) + parseFloat(sumObsled) + parseFloat(sumSosttech) + parseFloat(sumRedaktor);
        if (isSborIshodnihDannihChecked) fullSumma += parseFloat(sumIshod);
        if (isObmerRabotyChecked) fullSumma += parseFloat(sumObmer);
        if (isObsledRabChecked) fullSumma += parseFloat(sumObsled);
        if (isSostTechOtchetCheck) fullSumma += parseFloat(sumSosttech);
        if (isRedaktorIspConstr) fullSumma += parseFloat(sumSosttech);

        fullSumma = fullSumma.toFixed(3);
        document.getElementById('harakteristikaObjectObsh').innerText = fullSumma;
        document.getElementById('harakteristikaObjectSmeta').innerText = fullSumma;
        document.getElementById('harakteristikaObjectCalc').innerText = fullSumma;
        console.log (fullSumma);
        // fullSumma = fullSumma.toFixed(3);
        // document.getElementById('harakteristikaObjectObsh').innerText = fullSumma;
        // document.getElementById('harakteristikaObjectSmeta').innerText = fullSumma;
        // document.getElementById('harakteristikaObjectCalc').innerText = fullSumma;
    }


    function getCheckboxValue(checkboxId) {
        const checkbox = document.getElementById(checkboxId);
        return checkbox.checked ? parseFloat(checkbox.getAttribute('data-id')) || 1 : 1;
    }

    async function calculateHaracterCoefficient() {
        sumHarakter = 0;

        const chekb1 = getCheckboxValue('chekb1');
        const chekb2 = getCheckboxValue('chekb2');
        const chekb3 = getCheckboxValue('chekb3');
        const chekb4 = getCheckboxValue('chekb4');
        const chekb5 = getCheckboxValue('chekb5');
        const chekb6 = getCheckboxValue('chekb6');
        const chekb7 = getCheckboxValue('chekb7');
        const chekb8 = getCheckboxValue('chekb8');
        const chekb9 = getCheckboxValue('chekb9');
        const chekb10 = getCheckboxValue('chekb10');
        const chekb11 = getCheckboxValue('chekb11');
        const chekb12 = getCheckboxValue('chekb12');
        let kefVisota = 1;
        const visotazdani = parseFloat(document.getElementById('visotazdani').value) || 0;
        const etazh = parseFloat(document.getElementById('etazh').value) || 0;
        const visotapola = parseFloat(document.getElementById('visotapola').value) || 0;
        let visotaPolaVal = 1;
        const buildingType = parseFloat(document.querySelector('#buildingType option:checked').getAttribute('data-id')) || 1;
        const constructionType = parseFloat(document.querySelector('#constructionType option:checked').getAttribute('data-id')) || 1;
        const options = parseFloat(document.querySelector('#options option:checked').getAttribute('data-id')) || 1;
        const temperatureMode = parseFloat(document.querySelector('#temperatureMode option:checked').getAttribute('data-id')) || 1;
        const equipmentSaturation = parseFloat(document.querySelector('#equipmentSaturation option:checked').getAttribute('data-id')) || 1;
        //РАСЧЕТ ОСНОВНОГО  КОЭФИЦИЕНТА К18.об ОТ ОБЪЕМА
        const obem = parseFloat(document.getElementById('obem').value) / 1000;
        if (obem > 0) {
            K18ob = 6.33 / Math.sqrt(obem);
        } else {
            K18ob = 0;
        }


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

        if (visotapola > 0 && visotapola <= 1.6) {
            visotaPolaVal = 1.3;
        } else {
            visotaPolaVal = 1;
        }


        const finalCoefficient =
            K18ob *
            temperatureMode *
            equipmentSaturation *
            buildingType *
            constructionType *
            options *
            chekb1 *
            chekb2 *
            chekb3 *
            chekb4 *
            chekb5 *
            chekb6 *
            chekb7 *
            chekb8 *
            chekb9 *
            chekb10 *
            chekb11 *
            chekb12 *
            kefVisota *
            visotaPolaVal;



        document.getElementById('harakteristikaObject').innerText = finalCoefficient.toFixed(3);
        sumHarakter = finalCoefficient.toFixed(3);

        updateBuildingInfo();
        await calculateK();
    }


    async function calcIshod1() {
        const buildingType = parseFloat(document.querySelector('#buildingType option:checked').getAttribute('data-id')) || 1;

        mainvisotazdani = parseFloat(document.getElementById('visotazdani').value) || 0;

        const etazh = parseFloat(document.getElementById('etazh').value) || 0;
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
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: 'app/ajax/getIshodDannih.php',
                    method: 'POST',
                    data: {
                        pasportZD: selectedRadio.value,
                        hardZdanie: hardZdanie,
                        valVisZd: valVisZd,
                        etazh: document.getElementById('etazh').value,
                    },
                    success: function (response) {
                        koefIshod = parseFloat(response.trim());
                        if (koefIshod == 1 && koefIshod2 == 1) {
                            sumIshod = 0;
                        } else {
                            sumIshod = koefIshod * koefIshod2 * costwork14 * K18ob;
                        }
                        $('#sborIshodnihDannih').html(sumIshod.toFixed(3));
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
                        sumIshod = koefIshod * koefIshod2 * costwork14 * K18ob;
                    }
                    $('#sborIshodnihDannih').html(sumIshod.toFixed(3));
                    resolve();
                }).catch(function (error) {
                    reject(error);
                });
            });
        } else {
            koefIshod2 = 1;
        }

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
            sumIshod = koefIshod * koefIshod2 * costwork14 * K18ob;
        }
        $('#sborIshodnihDannih').html(sumIshod.toFixed(3));
        await calculateK();
    })

    $(".ishod2check").on("change", async function () {

        await calcIshod2();
        await calculateK();

    })

    function updateBuildingInfo() {
        const etazh = parseInt(document.getElementById('etazh').value) || 0;
        const visotazdani = parseFloat(document.getElementById('visotazdani').value) || 0;

        const vis6Label = document.querySelector('label[for="vis6"]');
        const vis614Label = document.querySelector('label[for="vis614"]');
        const vis14Label = document.querySelector('label[for="vis14"]');


        vis6Label.classList.remove('highlight-green', 'highlight-red');
        vis614Label.classList.remove('highlight-green', 'highlight-red');
        vis14Label.classList.remove('highlight-green', 'highlight-red');

        document.getElementById('vis6').checked = false;
        document.getElementById('vis614').checked = false;
        document.getElementById('vis14').checked = false;



        if (etazh > 1) {


            document.getElementById('vis6').value = '1';
            vis6Label.innerText = '1) Здание с высотой этажа до 3.6м, бескрановое, до 3х этажей, этажерки высотой до 15м многоэтажные эстакады';


            document.getElementById('vis614').value = '2';
            vis614Label.innerText = '2) Здание с высотой этажа до 6м, бескрановое, до 2 объемов, до 4-9 этажей, сооружения высотой более 20м';

            document.getElementById('vis14').value = '3';
            vis14Label.innerText = '3)  Здание с высотой этажа свыше 6м, с краном, свыше 3 объемов, свыше 10 этажей, сооружения высотой более 60м, полный монолитный каркас';



            if (visotazdani < 20) {
                vis6Label.classList.add('highlight-green');
                vis614Label.classList.add('highlight-red');
                vis14Label.classList.add('highlight-red');
                document.getElementById('vis6').checked = true;
            } else if (visotazdani >= 20 && visotazdani < 60) {
                vis614Label.classList.add('highlight-green');
                vis6Label.classList.add('highlight-red');
                vis14Label.classList.add('highlight-red');
                document.getElementById('vis614').checked = true;
            } else if (visotazdani > 60) {
                vis14Label.classList.add('highlight-green');
                vis6Label.classList.add('highlight-red');
                vis614Label.classList.add('highlight-red');
                document.getElementById('vis14').checked = true;
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
                document.getElementById('vis6').checked = true;
            } else if (visotazdani >= 6 && visotazdani < 14) {
                vis614Label.classList.add('highlight-green');
                vis14Label.classList.add('highlight-red');
                vis6Label.classList.add('highlight-red');
                document.getElementById('vis614').checked = true;
            } else if (visotazdani >= 14) {
                vis14Label.classList.add('highlight-green');
                vis614Label.classList.add('highlight-red');
                vis6Label.classList.add('highlight-red');
                document.getElementById('vis14').checked = true;
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
        console.log(3 + "updateCalendarDaysFromEnd")
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
            document.getElementById('dataId' + optionsId.charAt(optionsId.length - 1)).value = 1;



            if (optionsId === 'options1') {
                obsledDop1 = 1;
            } else if (optionsId === 'options2') {
                obsledDop2 = 1;
            }
            if (koefObsled1 == 1 && koefObsled2 == 1) {
                sumObsled = 0;
            } else {
                sumObsled = koefObsled1 * koefObsled2 * costwork14 * K18ob * obsledDop1 * obsledDop2;
            }
            $('#obsledRab').html(sumObsled.toFixed(3));

        }
        await calculateK();
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

        await calcIshod2();
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


    async function toggleCheckboxesDop7(checkboxId) {
        const checkboxes = [
            { checkbox: document.getElementById('toggleZd71'), input: document.getElementById('conval71') },
            { checkbox: document.getElementById('toggleZd72'), input: document.getElementById('conval72') },
            { checkbox: document.getElementById('toggleZd73'), input: document.getElementById('conval73') },
            { checkbox: document.getElementById('toggleZd74'), input: document.getElementById('conval74') },
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
        let koefRedaktor1 = 0;
        let koefRedaktor2 = 0;
        let koefRedaktor3 = 0;
        let koefRedaktor4 = 0;

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
            koefRedaktor1 = costwork14 * val1kef * val1;
        }

        if (val2 > 0) {
            if (val2 <= 50) {
                val2kef = 0.061;
            } else if (val2 <= 200) {
                val2kef = 0.048;
            } else {
                val2kef = 0.043;
            }
            koefRedaktor2 = costwork14 * val2kef * val2;
        }

        if (val3 > 0) {
            koefRedaktor3 = costwork14 * val3kef * val3;
        }

        if (val4 > 0) {
            if (val4 <= 50) {
                val4kef = 0.071;
            } else if (val4 <= 200) {
                val4kef = 0.059;
            } else {
                val4kef = 0.048;
            }
            koefRedaktor4 = costwork14 * val4kef * val4;
        }

        let sumRedaktor1 = koefRedaktor1 + koefRedaktor2 + koefRedaktor3 + koefRedaktor4;
        sumRedaktor = sumRedaktor1;

        console.log("koefRedaktor1=" + koefRedaktor1 + " koefRedaktor2=" + koefRedaktor2 + " koefRedaktor3=" + koefRedaktor3 + " koefRedaktor4=" + koefRedaktor4 + " === " + "sumRedaktor=" + sumRedaktor);
        document.getElementById('redaktorCons').innerText = sumRedaktor1.toFixed(3);
        await calculateK();
    }



    function toggleCheckboxesDop8() {
        const checkboxes = [
            {
                checkbox: document.getElementById('toggleZd81'),
                inputs: [document.getElementById('conval81'), document.getElementById('conval811')]
            },
            {
                checkbox: document.getElementById('toggleZd82'),
                inputs: [document.getElementById('conval82'), document.getElementById('conval822')]
            },
            {
                checkbox: document.getElementById('toggleZd83'),
                inputs: [document.getElementById('conval83'), document.getElementById('conval833')]
            },
            {
                checkbox: document.getElementById('toggleZd84'),
                inputs: [document.getElementById('conval84'), document.getElementById('conval844')]
            },
            {
                checkbox: document.getElementById('toggleZd85'),
                inputs: [document.getElementById('conval85'), document.getElementById('conval855')]
            },
            {
                checkbox: document.getElementById('toggleZd86'),
                inputs: [document.getElementById('conval86'), document.getElementById('conval866')]
            },
            {
                checkbox: document.getElementById('toggleZd87'),
                inputs: [document.getElementById('conval87'), document.getElementById('conval877')]
            },
            {
                checkbox: document.getElementById('toggleZd88'),
                inputs: [document.getElementById('conval88'), document.getElementById('conval888')]
            },
            {
                checkbox: document.getElementById('toggleZd89'),
                inputs: [document.getElementById('conval89'), document.getElementById('conval899')]
            },
            {
                checkbox: document.getElementById('toggleZd081'),
                inputs: [document.getElementById('conval081'), document.getElementById('conval0811')]
            },
            {
                checkbox: document.getElementById('toggleZd082'),
                inputs: [document.getElementById('conval082'), document.getElementById('conval0822')]
            },
            {
                checkbox: document.getElementById('toggleZd083'),
                inputs: [document.getElementById('conval083'), document.getElementById('conval0833')]
            },
            {
                checkbox: document.getElementById('toggleZd084'),
                inputs: [document.getElementById('conval084'), document.getElementById('conval0844')]
            },
            {
                checkbox: document.getElementById('toggleZd085'),
                inputs: [document.getElementById('conval085'), document.getElementById('conval0855')]
            },
            {
                checkbox: document.getElementById('toggleZd086'),
                inputs: [document.getElementById('conval086'), document.getElementById('conval0866')]
            },
            {
                checkbox: document.getElementById('toggleZd087'),
                inputs: [document.getElementById('conval087'), document.getElementById('conval0877')]
            },
            {
                checkbox: document.getElementById('toggleZd088'),
                inputs: [document.getElementById('conval088'), document.getElementById('conval0888')]
            },
            {
                checkbox: document.getElementById('toggleZd089'),
                inputs: [document.getElementById('conval089'), document.getElementById('conval0899')]
            },
            {
                checkbox: document.getElementById('toggleZd0081'),
                inputs: [document.getElementById('conval0081'), document.getElementById('conval00811')]
            },
            {
                checkbox: document.getElementById('toggleZd0082'),
                inputs: [document.getElementById('conval0082'), document.getElementById('conval00822')]
            },
            {
                checkbox: document.getElementById('toggleZd0083'),
                inputs: [document.getElementById('conval0083'), document.getElementById('conval00833')]
            },

        ];

        checkboxes.forEach(item => {
            item.inputs.forEach(input => {
                input.disabled = !item.checkbox.checked;
            });
        });
        calculateK();
    }

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
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
                    await calculateK();
                    $('#modalPeremen').modal('hide');
                    updateCalendarDaysFromEnd();
                    updateBuildingInfo();
                    await toggleCheckboxesDop();
                    await toggleCheckboxesDop4();
                    await toggleCheckboxesDop5();
                    await toggleCheckboxesDop6();
                    await calculateHaracterCoefficient();
                    await calcIshod1();
                    await calcIshod2();
                    await calcObmerWorksPart1();
                    await calcObmerWorksPart2();
                    await calcObsled1();
                    await calcObsled2();
                    await calcSosttech1();
                    await calcSosttech2();
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
                    $('#currentIndex').val(data.params.index_current_year);
                    $('#nextIndex').val(data.params.index_next_year);
                    $('#usnValue').val(data.params.value_usn);
                    $('#ndsValue').val(data.params.value_nds);
                    $('#workCost').val(data.params.cost_work14);
                    $('#costwork14').val(data.params.cost_work14);
                    $('#znachprognoz24').val(data.params.index_current_year);
                    $('#znachprognoz25').val(data.params.index_next_year);
                    costwork14 = data.params.cost_work14;
                    const b14Value = data.params.analizb14;
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
        let visotapola = document.getElementById('visotapola').value;
        let zakazchikSelect = document.getElementById('zakazchik');
        let podryadchikSelect = document.getElementById('podryadchik');
        let zakazchik = zakazchikSelect.value > 0 ? zakazchikSelect.options[zakazchikSelect.selectedIndex].text : '';
        let podryadchik = podryadchikSelect.value > 0 ? podryadchikSelect.options[podryadchikSelect.selectedIndex].text : '';
        let toggleZd1 = document.getElementById('toggleZd1').value;
        $.ajax({
            url: '/smeta/printTZ.php',
            type: 'POST',
            data: {
                obem: obem, etazh: etazh, visotazdani: visotazdani, visotapola: visotapola, zakazchik: zakazchik,
                podryadchik: podryadchik, toggleZd1: toggleZd1
            },
            success: function (response) {
                var WinPrint = window.open('', '', 'left=50,top=50,width=1200,height=860,toolbar=0,scrollbars=1,status=0');
                WinPrint.document.write('<style>@page {\n' +
                    'margin: 1rem;\n' +
                    '}</style>');
                WinPrint.document.write('<br/>');
                WinPrint.document.write(response);
                WinPrint.document.close();
                WinPrint.focus();
                WinPrint.print();
                WinPrint.close();

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
       if(koefObmerWork1 == 1 && koefObmerWork2 == 1){
           sumObmer = 0;
       }else {
           sumObmer = koefObmerWork1 * koefObmerWork2 * costwork14 * K18ob * obmerDop1 * obmerDop2;
       }
       $('#obmerRaboty').html(sumObmer.toFixed(3));
        await calculateK();
    }

    function obsledDataidSelect(selectElement) {
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        return selectedOption.value === "" ? "1" : selectedOption.getAttribute('data-id');
    }

    document.getElementById('options1').onchange = function() {
        obsledDop1 = obsledDataidSelect(this);
        if (koefObsled1 == 1 && koefObsled2 == 1) {
            sumObsled = 0;
        } else {
            sumObsled = koefObsled1 * koefObsled2 * costwork14 * K18ob * obsledDop1 * obsledDop2;
        }
        $('#obsledRab').html(sumObsled.toFixed(3));


        calculateK();
    };

    document.getElementById('options2').onchange = function() {
        obsledDop2 = obsledDataidSelect(this);
        if (koefObsled1 == 1 && koefObsled2 == 1) {
            sumObsled = 0;
        } else {
            sumObsled = koefObsled1 * koefObsled2 * costwork14 * K18ob * obsledDop1 * obsledDop2;
        }
        $('#obsledRab').html(sumObsled.toFixed(3));
        calculateK();
    };




</script>

</body>
</html>
