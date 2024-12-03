<?php
include "app/classes/DogovorList.php";
include "app/classes/SmetaList.php";

echo "<script>
     let dogovorList = " . $dogovorList->getListDogovors() . ";
     let smetaList = " . $smetaList->getListSmets() . ";
   
</script>";

?>


<script src="/js/global.js"></script>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .input-group .input-buttons {
        position: relative;
        z-index: 3;
    }

    .input-buttons {
        text-align: left;
    }

    .input-buttons, .step-controls, .ws-popover-opener {
        zoom: 1;
        overflow: hidden;
        display: inline-block;
        vertical-align: middle;
        margin-left: -18.5px;
    }

    .input-group-addon {
        padding: 12px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .input-group {
        position: relative;
        border-collapse: separate;
    }

    .border-div {
        display: flex;
        border: 2px solid black;
    }

    .dogovor-line {
        background-color: #f0f8ff;
        min-height: 6vh;
    }

    .mgleft2 {
        margin-left: 2%;
    }

    .mgleft8 {
        margin-left: 8%;
    }

    .mgtop5 {
        margin-top: 5%;
    }

    .mgtop10p {
        margin-top: 10px;
    }

    .mgtop20p {
        margin-top: 20px;
    }

    .hidden {
        display: none; /* Скрываем селект по умолчанию */
    }
    @media (max-width: 768px) {
        .row > * {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 90%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x)* 0.5);
            padding-left: calc(var(--bs-gutter-x)* 0.5);
            margin-top: var(--bs-gutter-y);
        }
        #btnTechZad{
            width: 130px !important;
            height: 25px !important;
        }
        #actnacl{
            margin-left: 10px !important;
        }
        #dogr{
            margin-left: 10px !important;
        }
        #naitidog{
            margin-left: -270px !important;
            margin-top: 30px !important;
        }
        #dogovorDropdown{
            margin-left: -270px !important;
        }
        #dogovorName{
            margin-left: -170px !important;
            margin-top: 32px !important;
            width: 90px !important;
            height: 26px !important;
        }
        #svdog{
            margin-left: 5px !important;
            width: 75px !important;
            height: 27px !important;
            margin-top: 30px !important;
        }
        #naitismetu{
            margin-left: 10px !important;
            width: 60px !important;
            height: 40px !important;
        }
        #smetaDropdown{
            margin-left: -58px !important;
        }



    }


</style>

<section class="col-lg-12 connectedSortable ui-sortable" style="margin-top: 90px; margin-bottom: 20px;">

    <div class="row ">
        <div style = "display:flex;">
            <div style = "margin-left:30px;" id = "actnacl">
                <button id="btnTechZad" class="btn btn-primary" onclick="printAkt()">Акт, накладная в Word</button>
            </div>
            <div style = "margin-left:30px;"  id = "dogr">
                <button id="btnTechZad" class="btn btn-primary" onclick="printDogovor()">Договор в Word</button>
            </div>

            <div class="dropdown">
                <button style = "margin-left:120px;" class="btn btn-primary" id="naitidog" onclick="toggleDropdownDogovor()">Найти договор</button>
                <div id="dogovorDropdown" class="dropdown-content">
                    <input type="text" placeholder="Поиск договора..." id="dogovorSearch" onkeyup="filterDogovor()">
                    <?php
                    $dogovorList = $dogovorList->getDogovorList();
                    foreach ($dogovorList as $dogovor) {
                        echo '<a onclick="getDogovor(' . $dogovor->id_dogovor . ')">' . $dogovor->id_dogovor . '</a>';
                    }
                    ?>
                </div>
            </div>
            <input style = "margin-left:15px;" type="text" class="search-input" id="dogovorName" placeholder="Название договора">
            <button class="btn btn-secondary" id="svdog" onclick="saveDogovor()">Сохранить</button>

            <div class="dropdown">
                <button style = "margin-left:120px;" class="btn btn-primary" id = "naitismetu" onclick="toggleDropdown()">Найти смету</button>
                <div id="smetaDropdown" class="dropdown-content">
                    <input type="text" placeholder="Поиск смет..." id="smetaSearch" onkeyup="filterSmeta()">
                    <?php
                    $smetaArray = $smetaList->getSmetaArray();
                    foreach ($smetaArray as $smeta) {
                        echo '<a onclick="getSmetaDogovor(' . $smeta->getId() . ')">' . $smeta->getName() . '</a>';
                    }
                    ?>
                </div>
            </div>

        </div>
        <div class="col-lg-3 mgleft2">
            <div class="form-group mgtop5">
                <label for="id_zakazchik">Заказчик</label>
                <select class="form-control" id="id_zakazchik">
                    <option value="0" selected>-- Пожалуйста, выберите --</option>
                    <?php
                    while ($row = $connectionDB->getRowResult($zakazchik)) {
                        echo '<option id="zakazchik" value="' . htmlspecialchars($row['id_zakazchik']) . '">' . htmlspecialchars($row['nameZakazchik']) . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group mgtop5">
                <label for="">Должность</label>
                <input type="text" class="form-control" id="doljn" >
            </div>

            <div class="form-group mgtop5">
                <label for="">ФИО:</label>
                <input type="text" class="form-control" id="fio">
            </div>

            <div class="form-group mgtop5">
                <label for="">Основание для подписи:</label>
                <input type="text" class="form-control" id="osn_podpis">
            </div>

            <div class="form-group mgtop5">
                <label for="">Реквизиты:</label>
                <textarea class="form-control" id="rekvizit" rows="3"></textarea>
            </div>
        </div>

        <div class="col-lg-3 mgleft8">
            <div class="form-group mgtop5">
                <label for="">Источник финансирования</label>
                <select class="form-control" id="istochnik">
                    <option value="0">-- Пожалуйста, выберите --</option>
                    <option value="1">Собственные средства заказчика</option>
                    <option value="2">Местный бюджет</option>
                    <option value="3">Республиканский бюджет</option>
                    <option value="4">Государственный целевой бюджетный фонд</option>
                    <option value="5">Государственный целевой внебюджетный фонд</option>
                </select>
            </div>

            <div class="form-group mgtop5">
                <label for="">Дата начала выполнения работ:</label>
                <input type="date" class="form-control" id="date_start_work">
            </div>

            <div class="form-group mgtop5">
                <label for="">Дата окончания выполнения:</label>
                <input type="date" class="form-control" id="date_end_work">
            </div>

            <div class="form-group mgtop5">
                <label for="">Количество экземпляров на бумажном носителе:</label>
                <input type="number" class="form-control" id="count_bum">
            </div>

            <div class="form-group mgtop5">
                <label for="">Количество экземпляров на электронном носителе:</label>
                <input type="number" class="form-control" id="count_el">
            </div>

            <div class="form-group mgtop5">
                <label for="">Основание для обследования:</label>
                <select class="form-control" id="osn_obsled">
                    <option value="0">-- Пожалуйста, выберите --</option>
                    <option value="1">Техническое задание заказчика</option>
                    <option value="2">Обращение заказчика</option>
                </select>
            </div>
        </div>

        <div class="col-lg-3 mgleft8">
            <div class="form-group mgtop5" style="height: 42%;">
                <label for="">Наименование работ:</label>
                <textarea class="form-control" id="name_work" style="height: 90%;"></textarea>

            </div>
            <div class="form-group mgtop5" style="height: 42%;">
                <label for="">Цель:</label>
                <textarea class="form-control" id="target_work" style="height: 90%;"></textarea>

            </div>
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <div class="row dogovor-line mgtop20p">
        <h2 class="mgleft2 mgtop10p">
            Договор
        </h2>

    </div>

    <div class="row">
        <div class="col-lg-3 mgleft2">
            <div class="form-group mgtop5">
                <label for="">Номер договора:</label>
                <input type="text" class="form-control" id="nomer_dogovora">
            </div>


            <div class="form-group mgtop5">
                <label for="">Дата заключения договора:</label>
                <input type="date" class="form-control" id="date_zakl_dogovora">
            </div>

            <div class="form-group mgtop5">
                <label for="">Кто подписывает договор:</label>
                <select class="form-control" id="who_podpis_dog">
                    <option value="0">-- Пожалуйста, выберите --</option>
                    <option value="1">Директор</option>
                    <option value="2">И.О. Директора</option>
                </select>
            </div>


            <div class="form-group mgtop5">
                <label for="">Срок и вид оплаты:</label>
                <select class="form-control" id="srok_vid">
                    <option value="0">-- Пожалуйста, выберите --</option>
                    <option value="1">Наличными</option>
                    <option value="2">Картой</option>
                </select>
            </div>


            <div class="form-group mgtop5">
                <label for="">Количество дней:</label>
                <input type="number" class="form-control" id="count_days">
            </div>

        </div>
        <div class="col-lg-7 mgleft8 ">
            <h3 class="mgtop20p">К договору прилагается:</h3>
            <div class="border-div" style="padding: 20px 0;">
                <div class="col-md-6 mgleft2">
                    <div class="form-group ">
                        <div class="form-check">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_1" >
                            <label class="form-check-label" for="invalidCheck">
                                Смета
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_2" >
                            <label class="form-check-label" for="invalidCheck">
                                Калькуляция
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_3" >
                            <label class="form-check-label" for="invalidCheck">
                                Сводная смета
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_4" >
                            <label class="form-check-label" for="invalidCheck">
                                Антикоррупционная оговорка
                            </label>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 ">
                    <div class="form-group ">
                        <div class="form-check">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_5" >
                            <label class="form-check-label" for="invalidCheck">
                                Календарный план
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_6" >
                            <label class="form-check-label" for="invalidCheck">
                                Техническое задание
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_7" >
                            <label class="form-check-label" for="invalidCheck">
                                Протокол заседания
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check-">
                            <input class="form-check-input prilagaetsa" type="checkbox" value="" id="checkbox_8" >
                            <label class="form-check-label" for="invalidCheck">
                                Протокол согласования договорной (контрактной) цены
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <div class="row dogovor-line mgtop20p">
        <h2 class="mgleft2 mgtop10p">
            Акт, накладная, титул
        </h2>

    </div>

    <div class="row">
        <div class="col-lg-3 mgleft2">
            <div class="form-group mgtop5">
                <label for="">Дата акта:</label>
                <input type="date" class="form-control" id="date_akt">
            </div>

            <div class="form-group mgtop5">
                <label for="">Кто подписывает накладную и акт</label>
                <select class="form-control" id="who_podpis_akt">
                    <option value="0">-- Пожалуйста, выберите --</option>
                    <option value="1">Директор</option>
                    <option value="2">И.О. Директора</option>
                </select>
            </div>
        </div>

        <div class="col-lg-3 mgleft8 ">
            <div class="form-group mgtop20p">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="nalich_avans" required>
                    <label class="form-check-label" for="invalidCheck">
                        Наличие аванса
                    </label>
                </div>
            </div>
            <div class="form-group mgtop20p">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kompl_chert" required>
                    <label class="form-check-label" for="invalidCheck">
                        Комплектация чертежей
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mgleft8 ">
            <div class="row">

                <div class="mgtop20p">
                    <label for="c2" id="ID-1724763137556">Сумма аванса:</label>
                    <div class="input-group ">
                        <span class="input-group-addon">BYN</span>
                        <input type="number" value="" min="0" step="0.01" class="form-control currency"
                               style="appearance: none; display: none;"><input id="sum_avans"
                                class="ws-number ws-inputreplace form-control currency wsshadow-1724763137553 has-input-buttons"
                                type="text" placeholder="" value="1,000" aria-required="false" inputmode="numeric"
                                aria-labelledby="ID-1724763137556 ID-1724763137557"
                                style="margin-left: 0px; margin-right: 0px; padding-right: 30px;">
                    </div>

                    <div class="form-group mgtop5">
                        <label for="">Количество томов:</label>
                        <input type="number" class="form-control" id="count_toms">
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


        <div class="row dogovor-line mgtop20p">
            <h2 class="mgleft2 mgtop10p">

            </h2>

        </div>

        <div class="row">
            <div class="col-lg-3 mgleft2">
                <div class="form-group mgtop20p">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="tek_smeta" >
                        <label class="form-check-label" for="invalidCheck">
                            Текущая смета
                        </label>
                    </div>
                </div>
                <div class="form-group mgtop20p">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="calculacia" >
                        <label class="form-check-label" for="invalidCheck">
                            Калькуляция
                        </label>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mgtop20p">
                <div class="form-group ">
                    <label for="">Кто подписывает титул:</label>
                    <select class="form-control" id="who_podpis_titul">
                        <option value="0">-- Пожалуйста, выберите --</option>
                        <option value="1">Директор</option>
                        <option value="2">И.О. Директора</option>
                    </select>
                </div>

                <div class="mgtop20p">
                    <label for="c2" id="ID-1724763137556">Стоимость работ:</label>
                    <div class="input-group ">
                        <span class="input-group-addon">BYN</span>
                        <input type="number" value="" min="0" step="0.01" data-number-to-fixed="2"
                               data-number-stepfactor="100" class="form-control currency" id=""
                               style="appearance: none; display: none;"><input id="cost_work"
                                class="ws-number ws-inputreplace form-control currency wsshadow-1724763137553 has-input-buttons"
                                type="text" placeholder="" value="1,000" aria-required="false" inputmode="numeric"
                                aria-labelledby="ID-1724763137556 ID-1724763137557"
                                style="margin-left: 0px; margin-right: 0px; padding-right: 30px;">
                    </div>
                </div>

                <div class="form-group mgtop5">
                    <label for="">Количество страниц:</label>
                    <input type="text" class="form-control" id="count_str">
                </div>
            </div>
        </div>

</section>
<?php
$result = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => 45]);
echo $result;
?>
<script>
</script>

</body>
</html>
