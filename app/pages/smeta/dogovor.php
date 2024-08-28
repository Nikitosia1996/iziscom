<?php

?>
<style>
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

</style>

<section class="col-lg-12 connectedSortable ui-sortable" style="margin-top: 90px; margin-bottom: 20px;">
    <div class="row ">
        <div class="col-lg-3 mgleft2">
            <div class="form-group mgtop5">
                <label for="exampleFormControlSelect1">Заказчик</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group mgtop5">
                <label for="">Должность</label>
                <input type="text" class="form-control" id="" >
            </div>

            <div class="form-group mgtop5">
                <label for="">ФИО:</label>
                <input type="text" class="form-control" id="">
            </div>

            <div class="form-group mgtop5">
                <label for="">Основание для подписи:</label>
                <input type="text" class="form-control" id="">
            </div>

            <div class="form-group mgtop5">
                <label for="">Реквизиты:</label>
                <textarea class="form-control" id="" rows="3"></textarea>
            </div>
        </div>

        <div class="col-lg-3 mgleft8">
            <div class="form-group mgtop5">
                <label for="">Источник финансирования</label>
                <select class="form-control" id="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group mgtop5">
                <label for="">Дата начала выполнения работ:</label>
                <input type="date" class="form-control" id="">
            </div>

            <div class="form-group mgtop5">
                <label for="">Дата окончания выполнения:</label>
                <input type="date" class="form-control" id="">
            </div>

            <div class="form-group mgtop5">
                <label for="">Количество экземпляров на бумажном носителе:</label>
                <input type="number" class="form-control" id="">
            </div>

            <div class="form-group mgtop5">
                <label for="">Количество экземпляров на электронном носителе:</label>
                <input type="number" class="form-control" id="">
            </div>

            <div class="form-group mgtop5">
                <label for="">Основание для обследования:</label>
                <select class="form-control" id="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>

        <div class="col-lg-3 mgleft8">
            <div class="form-group mgtop5" style="height: 42%;">
                <label for="">Наименование работ:</label>
                <textarea class="form-control" id="" style="height: 90%;"></textarea>

            </div>
            <div class="form-group mgtop5" style="height: 42%;">
                <label for="">Цель:</label>
                <textarea class="form-control" id="" style="height: 90%;"></textarea>

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
                <input type="text" class="form-control" id="">
            </div>
        </div>
        <div class="col-lg-7 mgleft8 ">
            <h3 class="mgtop20p">К договору прилагается:</h3>
            <div class="border-div" style="padding: 20px 0;">
                <div class="col-md-6 mgleft2">
                    <div class="form-group ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Смета
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Калькуляция
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Сводная смета
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Антикоррупционная оговорка
                            </label>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 ">
                    <div class="form-group ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Календарный план
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Техническое задание
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Протокол заседания
                            </label>
                        </div>
                    </div>
                    <div class="form-group mgtop20p">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
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
                <input type="date" class="form-control" id="">
            </div>

            <div class="form-group mgtop5">
                <label for="">Основание для обследования:</label>
                <select class="form-control" id="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>

        <div class="col-lg-3 mgleft8 ">
            <div class="form-group mgtop20p">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Наличие аванса
                    </label>
                </div>
            </div>
            <div class="form-group mgtop20p">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
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
                        <span class="input-group-addon">Р</span>
                        <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2"
                               data-number-stepfactor="100" class="form-control currency" id="c2"
                               style="appearance: none; display: none;"><input
                                class="ws-number ws-inputreplace form-control currency wsshadow-1724763137553 has-input-buttons"
                                type="text" placeholder="" value="1,000" aria-required="false" inputmode="numeric"
                                aria-labelledby="ID-1724763137556 ID-1724763137557"
                                style="margin-left: 0px; margin-right: 0px; padding-right: 30px;">
                    </div>

                    <div class="form-group mgtop5">
                        <label for="">Количество томов:</label>
                        <input type="number" class="form-control" id="">
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
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Текущая смета
                        </label>
                    </div>
                </div>
                <div class="form-group mgtop20p">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Калькуляция
                        </label>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mgtop20p">
                <div class="form-group ">
                    <label for="">Кто подписывает договор:</label>
                    <select class="form-control" id="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="mgtop20p">
                    <label for="c2" id="ID-1724763137556">Стоимость работ:</label>
                    <div class="input-group ">
                        <span class="input-group-addon">Р</span>
                        <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2"
                               data-number-stepfactor="100" class="form-control currency" id="c2"
                               style="appearance: none; display: none;"><input
                                class="ws-number ws-inputreplace form-control currency wsshadow-1724763137553 has-input-buttons"
                                type="text" placeholder="" value="1,000" aria-required="false" inputmode="numeric"
                                aria-labelledby="ID-1724763137556 ID-1724763137557"
                                style="margin-left: 0px; margin-right: 0px; padding-right: 30px;">
                    </div>
                </div>

                <div class="form-group mgtop5">
                    <label for="">Количество страниц:</label>
                    <input type="text" class="form-control" id="">
                </div>
            </div>
        </div>

</section>
<?php
$result = (new \MessageFormatter('ru-RU', '{n, spellout}'))->format(['n' => 45]);
echo $result;  // сорок пять
?>
<script>
</script>

</body>
</html>
