<?php

$harakteristikaObject = 0;



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

.form-select{
    width: 90%;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    margin-left:5%;
    margin-top: 10px;
}

    .form-select-calc{
        width: 90%;
        height: 35px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        margin-left:5%;
        margin-top: 10px;
        font-size:12px;
    }

.form-date{
    width: 90%;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    margin-left:5%;
    margin-top: 10px;
}

.form-outline{
    width: 90%;
    margin-bottom: 10px;
    margin-left:5%;
    margin-top: 10px;
}


.zakpod{
    margin-left:5%;
}
    .pasportzd{
        margin-left:5%;
        display: inline;
    }
    .pasportzd{
        margin-left:1%;
        display: inline;
    }


.zakpodGps{
    margin-top: 95px;
    margin-left:5%;
}

.pos1{
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-left: 1%;
    width:30%;
}
.pos2{
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-left: 1%;
    width:30%;
}
.pos3{
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-left: 1%;
    width:30%;
}
.position1 {
    display:flex;
}
    .posfull
    {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left: 1%;
        width:100%;
    }

.nameforblock{
    font-size: x-large;
    display: flex;
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 10px;
}
.input-container{
    margin-left: 5%;
}
.input-containerval{
    margin-left: 0%;
    margin-right: 2%;
    display: block;

}

.onCollap{
    margin-left:5%;
}

#commonInputField{
    width: 70px;
}

#etazh{
    width:15%;
}
#visotazdani{
    width:15%;
}
#obem{
    width:15%;
}
.inpval {
    width:30%;
}
#visotapola{
    width:15%;
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
    .countRub{
    margin-left: 10%;

}
.viborvis{
    margin-left: 5%;
    margin-top: 10px;
    margin-bottom: 15px;
}
    .viborvisnew{
        margin-left: 1%;
        margin-top: 10px;
        margin-bottom: 15px;
    }
    .viborvischeckbox1{
        margin-left: 5%;
        margin-top: 10px;
        margin-bottom: 15px;
    }
    .viborvischeckbox2{
        margin-left: 5%;
        margin-top: 10px;
        margin-bottom: 15px;
    }

.mainfreename{
    display: flex;
    margin-left: 1%;
}

.lolspace {

}
.mainlolspace{
    display:block;
}


.visotarad{
    display: inline;
}

.dusl{
    width: 92%;
    margin-top: 10px;
    margin-left: 1%;
    border: 1px solid;
    margin-bottom: 10px;
}
    .dusl2{
        width: 92%;
        margin-top: 10px;
        margin-left: 1%;
        margin-bottom: 10px;
    }

#toggleZdDopUsl{
    margin-left: 15px;
}
    .posframech{
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

</style>

<section class="col-lg-12 connectedSortable ui-sortable" style="margin-top: 90px">
    <div class="position1">
<div class="pos1">
    <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
    <select class="form-select" aria-label="">
        <option value="0" selected>-- Пожалуйста, выберите --</option>
        <?php
        while ($row = $connectionDB->getRowResult($zakazchik)) {
            echo '<option id="zakazchik" value="' . htmlspecialchars($row['id_zakazchik']) . '">' . htmlspecialchars($row['nameZakazchik']) . '</option>';
        }
        ?>
    </select>

    <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
    <select class="form-select" aria-label="">
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
            <input type="date" class="form-date" id="SelectZakazchik" aria-label="" onchange="updateEndDate()">
            <label for="SelectPodryadchik" class="zakpod">Дата окончания работ:</label>
            <input type="date" class="form-date" id="SelectPodryadchik" aria-label="" onchange="updateCalendarDaysFromEnd()">
            <label for="textAreaCel" class="zakpod">Цель:</label>
            <div class="form-outline">
                <textarea class="form-control" id="textAreaCel" rows="3"></textarea>
            </div>
        </div>

        <div class="pos3">
            <label for="calendarDays" class="zakpod">Календарных дней:</label>
            <input id="calendarDays" class="butrad" type="radio" name="daysType" value="calendar" onclick="toggleInputs()">
            <br>
            <div id="inputContainer" class="input-container">
                <label id="inputLabel" for="commonInputField">Введите значение:</label>
                <input id="commonInputField" disabled type="number" name="inputValue" step="1" min="0" oninput="updateWorkingDays()">
            </div>
            <label for="workingDays" class="zakpod">Рабочих дней:</label>
            <input id="workingDays" class="butrad" type="radio" name="daysType" value="working" onclick="toggleInputs()">
            <br>
            <div id="inputContainerWorking" class="input-container">
                <label id="inputLabel" for="commonInputFieldWorking">Введите значение:</label>
                <input id="commonInputFieldWorking" disabled type="number" name="inputValue" step="1" min="0" oninput="updateCalendarDays()">
            </div>

            <label for="textAreaMestoObj" class="zakpodGps">Местоположение объекта:</label>
            <div class="form-outline">
                <textarea class="form-control" id="textAreaMestoObj" rows="3"></textarea>
            </div>

        </div>
    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


    <div class="nameforblock1" onclick ="toggleDisplay('.nameforblock1', '.dndb');">Характеристика объекта&nbsp;&nbsp;&nbsp;<?php echo '<span class="harakteristikaObject" id="harakteristikaObject">'; echo $harakteristikaObject; echo'</span>'; ?></div>
    <div class="dndb">
    <div class="position1">
        <div class="pos1">
            <div class = "viborvis">
            <label for="SelectZakazchik" class="zakpod">Здание:</label>
            <select class="form-select" id="buildingType" aria-label="" onchange="calculateFinalCoefficient();" >
                <option value="0" selected>-- Пожалуйста, выберите --</option>
                <option value="1.2">Жилое</option>
                <option value="1.2">Гражданское</option>
                <option value="1">Промышленное</option>
                <option value="1">Сельскохозяйственное</option>
                <option value="1">Галереи</option>
                <option value="1">Коммуникационные и многоярусные эстакады</option>
                <option value="1">Градирни, этажерки и т.д.</option>
            </select>

            <select class="form-select" id="constructionType" aria-label="" onchange="calculateFinalCoefficient();">
                <option value="0" selected>-- Пожалуйста, выберите --</option>
                <option value="1">Существующее здание</option>
                <option value="0.8">Незавершенное капитальное строительство</option>
                <option value="0.7">Новое строительство</option>
            </select>

            <div id="inputContainer" class="input-containerval">
                <label for="etazh" class="zakpod">Количество этажей:</label>
                <input id="etazh" type="number" name="inputValue" step="1" min="0" oninput="updateBuildingInfo()">
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="visotazdani" class="zakpod">Высота здания:</label>
                <input id="visotazdani" type="number" name="inputValue" step="1" min="0" oninput="updateBuildingInfo()">м
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="obem" class="zakpod">Объем здания:</label>
                <input id="obem" type="number" name="inputValue" step="1" min="0" oninput="calculateK()">м³
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="visotapola" class="zakpod">Высота покрытия от уровня пола:</label>
                <input id="visotapola" type="number" name="inputValue" step="1" min="0">м
            </div>

</div>
        </div>
        <div class="pos2">

<div class = "viborvis">
            <input id="vis6" class="butrad" type="radio" name="daysType" value="vis6">
            <label for="vis6" class="visotarad"> 1) Здание высотой до 6м, бескрановое, однообъемное, двухпролетное</label>
            <br>
            <input id="vis614" class="butrad" type="radio" name="daysType" value="vis614">
            <label for="vis614" class="visotarad">2) Здание высотой от 6м до 14м высоты, с кранами грузоподъемностью до 50т включительно, с двумя объемами, 3-5 пролета, а также различные сооружения, резервуары, тоннели, лестничные клетки, галереи
            </label>
            <br>
            <input id="vis14" class="butrad" type="radio" name="daysType" value="vis14">
            <label for="vis14" class="visotarad">3) Здание высотой более 14м, со сложной конструктивной схемой, с двухъярусным расположением кранов, более 3
            объемов, более 6 пролетов галереи с высотой опор более 20м и пролетом более 36м, полный монолитный каркас</label>
            <br>
</div>
        </div>
        <div class="pos3">

            <label for="SelectZakazchik" class="zakpod">Температурно-влажностный режим:</label>
            <select class="form-select" id="temperatureMode" aria-label="" onchange="calculateFinalCoefficient();">
                <option value="0" selected>-- Пожалуйста, выберите --</option>
                <option value="1">Нормальный (К = 1)</option>
                <option value="1.15">t>25° С, W>70% (K = 1.15)</option>
                <option value="1.2">t>30° С, W>85% (K = 1.2)</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Насыщенность оборудования:</label>
            <select class="form-select" id="equipmentSaturation" aria-label="" onchange="calculateFinalCoefficient();">
                <option value="0" selected>-- Пожалуйста, выберите --</option>
                <option value="1">Отсуствует (K = 1)</option>
                <option value="1.1">До 30% от площади помещений (K = 1.1)</option>
                <option value="1.2">От 30% До 50% от площади помещений (K = 1.2)</option>
                <option value="1.3">Свыше 50% от площади помещений (K = 1.3)</option>
            </select>

            <label>

                <input type="checkbox" id="toggleSelect" onchange="toggleSelect('toggleSelect', 'selectContainer', 'options')"> Работа в помещениях в зависимости от  степени агрессивности воздействия
            </label>

            <div id="selectContainer" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select class="form-select" id="options" disabled onchange="calculateFinalCoefficient();">
                    <option value="0">-- Пожалуйста, выберите --</option>
                    <option value="1.2">Помещение со слабой степенью агрессивного воздействия (k=1.2)</option>
                    <option value="1.3">Помещение со средней степенью агрессивного воздействия (k=1.3)</option>
                    <option value="1.4">Помещение с сильной степенью агрессивного воздействия (k=1.4)</option>
                </select>
            </div>

        </div>
        </div>
        <div class="position1">
            <div class="pos1">
                <div class = "viborvis">
                    <label>
                        <input value="1.5" type="checkbox" id="toggleSelect"> Выполнение работ с применением альпинисткого снаряжения (K = 1.5)
                    </label>
                    <label>
                        <input value="1.25" type="checkbox" id="toggleSelect"> Шумовые воздействия, превышающие нормативные величины (K = 1.25)
                    </label>
                    <label>
                        <input value="1.2" type="checkbox" id="toggleSelect"> Выполнение работ в условиях отрицательных температур в период с 1 ноября - 1 мая (K = 1.2)
                    </label>
                    <label>
                        <input type="checkbox" id="toggleSelect"> Необходимость очистки поверхности конструкций от грязи, пыли, ржавчины. Расчет выполнять по калькуляции трудозатрат
                    </label>

                </div>
            </div>
            <div class="pos2">

                <div class = "viborvis">
                    <label>
                        <input value="1.2" type="checkbox" id="toggleSelect"> Необходимость использования переносных источников освещения (K = 1.2)
                    </label>
                    <label>
                        <input value="1.02" type="checkbox" id="toggleSelect"> Здание является памятником архитектуры (K = 1.02)
                    </label>
                    <label>
                        <input value="1.2" type="checkbox" id="toggleSelect"> Обследование в условиях производственного процесса (K = 1.2)
                    </label>
                    <label>
                        <input value="1.15" type="checkbox" id="toggleSelect"> Выполнение работ с мостового крана или подмостей (K = 1.15)
                    </label>
                </div>
            </div>
            <div class="pos3">
                <div class = "viborvis">
                <label>
                    <input value="1.2" type="checkbox" id="toggleSelect"> Здание оборудовано кранами режимных групп 7К, 8К, (K = 1.2)
                </label>
                <label>
                    <input value="1.2" type="checkbox" id="toggleSelect"> Конструкции, усиленные по ранее разработанным проектам (K = 1.2)
                </label>
                <label>
                    <input value="0.7" type="checkbox" id="toggleSelect"> Использование ранее выполненных обследований не более  3 лет назад (K = 0.7)
                </label>
                <label>
                    <input value="1.35" type="checkbox" id="toggleSelect"> Срочное выполнение обмерно-обследовательских работ (K <= 1.35)
                </label>
                </div>
            </div>
        </div>

    </div>

    <hr>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->






    <div class="nameforblock3" onclick ="toggleDisplay('.nameforblock3', '.dndb3');">Сбор исходных данных <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb3">

        <div class = "mainfreename">
        <div class = "freeName" style = "margin-left: 1%;">
            <label>
                Категория сложности работ:
            </label>
        </div>
        <div class = "freeName2" style = "    margin-left: 19%;">
            <label>
                <input type="checkbox" id="choosCunstruct" onchange="toggleCheckboxes()"> Конструкции (если конструкции обследуются выборочно, поставьте галочку и введите проценты) :
            </label>
        </div>
        </div>


        <div class="position1">

            <div class="pos1">
                <div class = "viborvis">
                    <input id="calendarDays" class="butrad" type="radio" name="daysType" value="calendar">
                <label for="calendarDays" class="pasportzd">1) Паспорт на здание или сооружение</label>

                <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                <label for="workingDays" class="pasportzd">2) Паспорт на здание или сооружение. Проектная документация. Исполнительная документация. Эксплатуационная документация,
                    журнал наблюдений службы эксплуатации. Документы характеризующие фактические нагрузки и воздействия. Сертификаты на стальные конструкции.</label>

                <br>
                </div>
            </div>
            <div class="pos2">
                <div class = "viborvischeckbox1">
                    <div class = "mainlolspace">
                   <div class = "lolspace">
                        <input type="checkbox" id="toggleZd1" disabled onchange="toggleCheckboxesDop()"> Конструкция фундаментов
                   </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval1" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                    <div class = "lolspace">

                        <input type="checkbox" id="toggleZd2" disabled  onchange="toggleCheckboxesDop()"> Стены
                    </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval2" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                        <input type="checkbox" id="toggleZd3" disabled  onchange="toggleCheckboxesDop()"> Полы
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval3" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                            <div class = "lolspace">
                        <input type="checkbox" id="toggleZd4" disabled  onchange="toggleCheckboxesDop()"> Колонны, столбы, стойки
                            </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval4" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>
                    <div class = "mainlolspace">
                                <div class = "lolspace">
                        <input type="checkbox" id="toggleZd5" disabled  onchange="toggleCheckboxesDop()"> Несущие конструкции копров,пролетных строейний галерей
                                </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval5" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                </div>
            </div>



            <div class="pos3">

                <div class = "viborvischeckbox2">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd6" disabled onchange="toggleCheckboxesDop()"> Подкрановые и тормозные конструкции
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval6" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd7" disabled  onchange="toggleCheckboxesDop()"> Перекрытия
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval7" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd8" disabled  onchange="toggleCheckboxesDop()"> Покрытие
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval8" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd9" disabled  onchange="toggleCheckboxesDop()"> Кровля
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval9" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <div class="nameforblock4" onclick ="toggleDisplay('.nameforblock4', '.dndb4');">Обмерные работы <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb4">

        <div class = "mainfreename">
            <div class = "freeName" style = "margin-left: 1%;">
                <label>
                    Категория сложности работ:
                </label>
            </div>
            <div class = "freeName2" style = "    margin-left: 19%;">
                <label>
                    <input type="checkbox" id="choosCunstruct4" onchange="toggleCheckboxes4()"> Объем обмерных работ (если обмеры выполняются выборочно, поставьте галочку и введите проценты) :
                </label>
            </div>
        </div>


        <div class="position1">

            <div class="pos1">
                <div class = "viborvis">
                    <input id="calendarDays" class="butrad" type="radio" name="daysType" value="calendar">
                    <label for="calendarDays" class="pasportzd">1) Обмеры для визуального обследования, паспортизации.:</label>

                    <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays" class="pasportzd">2) Обмеры для детального обследования (узлы, вскрытия и т.д.):</label>

                    <br>
                    <input id="workingDays2" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays2" class="pasportzd">3) Работы различной категории сложности:</label>

                </div>
            </div>
            <div class="pos2">
                <div class = "viborvischeckbox3">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd41" disabled onchange="toggleCheckboxesDop4()"> Конструкция фундаментов
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval41" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd42" disabled  onchange="toggleCheckboxesDop4()"> Планы этажей
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval42" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd43" disabled  onchange="toggleCheckboxesDop4()"> Фасады
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval43" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd44" disabled  onchange="toggleCheckboxesDop4()"> Разрезы, сечения
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval44" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd45" disabled  onchange="toggleCheckboxesDop4()"> Несущие конструкции копров,пролетных строейний галерей
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval45" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                </div>
            </div>



            <div class="pos3">

                <div class = "viborvischeckbox4">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd46" disabled onchange="toggleCheckboxesDop4()"> План кровли
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval46" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd47" disabled  onchange="toggleCheckboxesDop4()"> Стропильные и подстропильные конструкции
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval47" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd48" disabled  onchange="toggleCheckboxesDop4()"> Подкрановые и тормозные конструкции
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval48" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd49" disabled  onchange="toggleCheckboxesDop4()"> Несущие элементы перекрытий
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval49" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>


                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd449" disabled  onchange="toggleCheckboxesDop4()"> Несущие элементы покрытий
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval449" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class = "dusl">Дополнительные условия:
        <input type="checkbox" id="toggleZdDopUsl"> Проектная документация присутствует в полном объеме
        <input type="checkbox" id="toggleZdDopUsl"> Выполнение детальных измерений пролетов, сечений, узлов, смещений
        </div>
    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->



    <div class="nameforblock5" onclick ="toggleDisplay('.nameforblock5', '.dndb5');">Обследовательские работы <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb5">

        <div class = "mainfreename">
            <div class = "freeName" style = "margin-left: 1%;">
                <label>
                    Категория сложности работ:
                </label>
            </div>
            <div class = "freeName2" style = "    margin-left: 19%;">
                <label>
                    <input type="checkbox" id="choosCunstruct5" onchange="toggleCheckboxes5()"> Конструкции (если конструкции обследуются выборочно, поставьте галочку и введите проценты) :
                </label>
            </div>
        </div>


        <div class="position1">

            <div class="pos1">
                <div class = "viborvis">
                    <input id="calendarDays" class="butrad" type="radio" name="daysType" value="calendar">
                    <label for="calendarDays" class="pasportzd">Предварительный осмотр</label>
                    <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays" class="pasportzd">Общее обследование</label>
                    <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays" class="pasportzd">Детальное обследование</label>
                    <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays" class="pasportzd">Работы совмещающие общее и детальное обследование</label>
                    <br>
                </div>
            </div>
            <div class="pos2">
                <div class = "viborvischeckbox53">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd51" disabled onchange="toggleCheckboxesDop5()"> Конструкция фундаментов
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval51" disabled type="number" name="inputValue" step="1" min="0">
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd52" disabled  onchange="toggleCheckboxesDop5()"> Стены
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval52" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd53" disabled  onchange="toggleCheckboxesDop5()"> Полы
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval53" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd54" disabled  onchange="toggleCheckboxesDop5()"> Колонны, столбы, стойки
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval54" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd55" disabled  onchange="toggleCheckboxesDop5()"> Несущие конструкции копров,пролетных строейний галерей
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval55" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>

                </div>
            </div>



            <div class="pos3">

                <div class = "viborvischeckbox54">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd56" disabled onchange="toggleCheckboxesDop5()"> Подкрановые и тормозные конструкции
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval56" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd57" disabled  onchange="toggleCheckboxesDop5()"> Перекрытия
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval57" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd58" disabled  onchange="toggleCheckboxesDop5()"> Покрытие
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval58" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd59" disabled  onchange="toggleCheckboxesDop5()"> Кровля
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval59" disabled type="number" name="inputValue" step="1" min="0">%
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <div class = posframech>
        <div class = "dusl2">Дополнительные условия:
            <label>
                <input type="checkbox" id="toggleSelect1" onchange="toggleSelect('toggleSelect1', 'selectContainer1', 'options1')"> Облицовка поверхностных конструкций
            </label>

            <div id="selectContainer1" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select class="form-select" id="options1" disabled>
                    <option value="">-- Пожалуйста, выберите --</option>
                    <option value="1">Опция 1</option>
                    <option value="2">Опция 2</option>
                    <option value="3">Опция 3</option>
                </select>
            </div>
            <label>
                <input type="checkbox" id="toggleSelect2" onchange="toggleSelect('toggleSelect2', 'selectContainer2', 'options2')"> Наличие значительных дефектов
            </label>

            <div id="selectContainer2" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select class="form-select" id="options2" disabled>
                    <option value="">-- Пожалуйста, выберите --</option>
                    <option value="1">Опция 1</option>
                    <option value="2">Опция 2</option>
                    <option value="3">Опция 3</option>
                </select>
            </div>
        </div>
        <div class ="svposch">
            <input type="checkbox" id="povkef"> Учитывать повышающий коэффициент от объема работ если обследуется <70% <br>
            <input type="checkbox" id="sooruzhzd"> Здание (сооружение) на просадочных грунтах
        </div>
 </div>



    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


    <div class="nameforblock6" onclick ="toggleDisplay('.nameforblock6', '.dndb6');">Составление технического отчета <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb6">

        <div class = "mainfreename">
            <div class = "freeName" style = "margin-left: 1%;">
                <label>
                    Категория сложности работ:
                </label>
            </div>
            <div class = "freeName2" style = "    margin-left: 19%;">
                <label>
                    <input type="checkbox" id="choosCunstruct6" onchange="toggleCheckboxes6()"> Конструкции (если конструкции обследуются выборочно, поставьте галочку и введите проценты) :
                </label>
            </div>
        </div>


        <div class="position1">

            <div class="pos1">
                <div class = "viborvis">
                    <input id="calendarDays" class="butrad" type="radio" name="daysType" value="calendar">
                    <label for="calendarDays" class="pasportzd">Заключение о состоянии строительных конструкций с выводами и рекомендациями</label>
                    <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays" class="pasportzd">То же, с разработкой технических решений для отдельных элементов</label>
                    <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays" class="pasportzd">То же, с частичной заменой или усилением более 30% несущих элементов</label>
                    <br>
                    <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
                    <label for="workingDays" class="pasportzd">Работы различной категории сложности</label>
                    <br>
                </div>
            </div>
            <div class="pos2">
                <div class = "viborvischeckbox63">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd61" disabled onchange="toggleCheckboxesDop6()"> Конструкция фундаментов
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval61" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd62" disabled  onchange="toggleCheckboxesDop6()"> Стены
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval62" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd63" disabled  onchange="toggleCheckboxesDop6()"> Полы
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval63" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd64" disabled  onchange="toggleCheckboxesDop6()"> Колонны, столбы, стойки
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval64" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd65" disabled  onchange="toggleCheckboxesDop6()"> Несущие конструкции копров,пролетных строейний галерей
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval65" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                </div>
            </div>



            <div class="pos3">

                <div class = "viborvischeckbox64">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd66" disabled onchange="toggleCheckboxesDop6()"> Подкрановые и тормозные конструкции
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval66" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd67" disabled  onchange="toggleCheckboxesDop6()"> Перекрыия
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval67" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd68" disabled  onchange="toggleCheckboxesDop6()"> Покрытие
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval68" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd69" disabled  onchange="toggleCheckboxesDop6()"> Кровля
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval69" disabled type="number" name="inputValue" step="1" min="0"> %
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "dusl">Дополнительные условия:
            <input type="checkbox" id="toggleZdDopUsl"> Сейсмические условия 7 баллов и более
            <input type="checkbox" id="toggleZdDopUsl"> Разработка временных противоаварийных мероприятий
            <input type="checkbox" id="toggleZdDopUsl"> Разработка рекомендаций без проведения расчетов
        </div>
    </div>
    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->



    <div class="nameforblock7" onclick ="toggleDisplay('.nameforblock7', '.dndb7');">Редактор испытания конструкций <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb7">
        <div style = "margin-left:1%";>Работы по определению прочности бетона и кирпичной кладки:</div>
        <div class="position1">

            <div class="posfull">
                <div class = "viborvisnew">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd71"  onchange="toggleCheckboxesDop7()"> Определение прочности бетона в бетонных и железобетонных конструкциях
                            механическими приборами
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval71" disabled type="number" name="inputValue" step="1" min="0">
                        </div>
                    </div>
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd72"   onchange="toggleCheckboxesDop7()"> Определение прочности бетона в бетонных и железобетонных конструкциях
                            ультразвуковыми приборами
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval72" disabled type="number" name="inputValue" step="1" min="0">
                        </div>
                    </div>
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd73"   onchange="toggleCheckboxesDop7()"> Определение прочности бетона в бетонных и железобетонных конструкциях
                            гидравлическими пресс-насосами (типа ГПНС, "Скол", и т.д.)
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval73" disabled type="number" name="inputValue" step="1" min="0">
                        </div>
                    </div>
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd74"  onchange="toggleCheckboxesDop7()"> Определение прочности раствора и каменных материалов ультразвуковыми
                            и ударно-импульсными методами
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval74" disabled type="number" name="inputValue" step="1" min="0">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <hr>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
    <div class="nameforblock8" onclick ="toggleDisplay('.nameforblock8', '.dndb8');">Обследование отдельных конструкций <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb8">


        <div class="position1">

            <div class="pos1">
                <div class = "viborvischeckbox81">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd81"  onchange="toggleCheckboxesDop8()"> Стропильная ферма пролетом 18м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval81" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval811" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd82"   onchange="toggleCheckboxesDop8()"> Стропильная ферма пролетом 24м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval82" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval822" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">

                            <input type="checkbox" id="toggleZd83"   onchange="toggleCheckboxesDop8()"> Стропильная ферма пролетом 30м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval83" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval833" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd84"   onchange="toggleCheckboxesDop8()"> Подстропильная ферма пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval84" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval844" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>

                    </div>
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd85"   onchange="toggleCheckboxesDop8()"> Подстропильная балка пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval85" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval855" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd86"   onchange="toggleCheckboxesDop8()"> Стропильная балка пролетом 9м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval86" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval866" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd87"   onchange="toggleCheckboxesDop8()"> Стропильная балка пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval87" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval877" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>




                </div>
            </div>
            <div class="pos2">
                <div class = "viborvischeckbox82">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd88"   onchange="toggleCheckboxesDop8()"> Стропильная балка пролетом 18м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval88" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval888" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd89"   onchange="toggleCheckboxesDop8()"> Подкрановая балка пролетом 6м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval89" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval899" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd081"   onchange="toggleCheckboxesDop8()"> Подкрановая балка пролетом 12м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval081" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0811" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>


                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd082"   onchange="toggleCheckboxesDop8()"> Плиты покрытия и перекрытий размером 1,5х6 и 3х6 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval082" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0822" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd083"   onchange="toggleCheckboxesDop8()"> Плиты покрытия и перекрытий размером 1,5х12 и 3х12 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval083" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0833" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd084"   onchange="toggleCheckboxesDop8()"> Ригели и фундаментальные балки пролетом 6 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval084" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0844" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd085"   onchange="toggleCheckboxesDop8()"> Ригели и фундаментальные балки пролетом 9 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval085" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0855" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                </div>
            </div>



            <div class="pos3">

                <div class = "viborvischeckbox83">
                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd086"   onchange="toggleCheckboxesDop8()"> Колонны одноветвевые
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval086" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0866" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd087"   onchange="toggleCheckboxesDop8()"> Колонны двухветвевые
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval087" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0877" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>



                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd088"   onchange="toggleCheckboxesDop8()"> Капители безбалочных перекрытий
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval088" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0888" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd089"   onchange="toggleCheckboxesDop8()"> Стеновые панели
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval089" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0899" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>


                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd0081"   onchange="toggleCheckboxesDop8()"> Панели-оболочки размером 3х18 и 3х24 м
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0081" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval00811" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd0082"   onchange="toggleCheckboxesDop8()"> Фундаменты
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0082" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval00822" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>


                    <div class = "mainlolspace">
                        <div class = "lolspace">
                            <input type="checkbox" id="toggleZd0083"   onchange="toggleCheckboxesDop8()"> Перемычки
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval0083" disabled type="number" name="inputValue" step="1" min="0"> количество
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval00833" disabled type="number" name="inputValue" step="1" min="0"> сложность
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
    <div class="nameforblock9" onclick ="toggleDisplay('.nameforblock9', '.dndb9');">Калькуляция <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb9">
        <div class="position1">
            <div class="pos1">
                <div class="viborvisnew">
                    <div class="mainselspace">

                        <div style = "display:flex;">
                            <div style = "width:90%">
                        <label for="SelectZakazchik" class="zakpod">Наименование работы (услуги)</label>
                            </div>
                            <div style = "width:50%">
                        <label for="SelectZakazchik" class="zakpod">Трудоёмкость работы (услуги),чел.-дн(Т)</label>
                            </div>
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input  class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pos2">
                <div class="viborvisnew">
                    <div class="mainselspace">

                        <div style = "display:flex;">
                            <div style = "width:100%">
                                <label for="SelectZakazchik" class="zakpod">Должность исполнителя по КСД</label>
                            </div>
                            <div style = "width:30%; font-size:10px;">
                                <label for="SelectZakazchik" class="zakpod">Тарифный разряд исполнителя по ЕТС (р)</label>
                            </div>
                            <div style = "width:20%; font-size:10px;">
                                <label for="SelectZakazchik" class="zakpod">Количество исполнителей</label>
                            </div>
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                        <div class="select-input-pair">
                            <select class="form-select-calc" aria-label="">
                                <option selected>-- Пожалуйста, выберите --</option>
                                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                            <input style ="width: 70px;" class="inpvalsel" type="number" name="inputValue" step="1" min="0" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pos3">
                <div class = "viborvisnew">
                    <div style = "display: grid;
    justify-content: center;">
                        <label id="inputLabel" for="commonInputField">Средний тарифный разряд исполнителей</label><br>
                        <input id="commonInputField" type="number" name="inputValue" step="1" min="0"><br>
                    <br><br>
                        <label id="inputLabel" for="commonInputField">Тарифный коэффициент для пересчёта стоимости</label><br>
                        <input id="commonInputField" type="number" name="inputValue" step="1" min="0"><br>
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
                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Кем выступает заказчик:</label>
            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>


            <label for="SelectPodryadchik" class="zakpod">Кем выступает ИЗИСКОМ:</label>
            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Кто производит вскрытие и заделку строительных конструкций</label>
            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Кто подписывает конкурсное предложение</label>
            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>


        </div>
        <div class="pos2">
            <label>
                <input type="checkbox" id="toggleSelect"> Учитывать УСН
            </label>
            <br>
            <label>
                <input type="checkbox" id="toggleSelect"> Учитывать НДС
            </label>
            <br>
            <br>
            <label id="inputLabel" for="commonInputField">Понижающий коэффициент</label><br>
            <input id="commonInputField" type="number" name="inputValue" step="1" min="0"><br>
            <label id="inputLabel" for="commonInputField">Стоимость работ 14 разряда</label><br>
            <input id="commonInputField" type="number" name="inputValue" step="1" min="0"><br>
            <br>
            <label id="inputLabel" for="commonInputField">Значения прогнозных среднегодовых индексов изменения стоимости работ:</label><br>
            <label id="inputLabel" for="commonInputField">на 2024 год</label><br>
            <input id="commonInputField" type="number" name="inputValue" step="1" min="0"><br>
            <label id="inputLabel" for="commonInputField">на 2025 год</label><br>
            <input id="commonInputField" type="number" name="inputValue" step="1" min="0"><br>
        </div>
    </div>

    <hr>




</section>

<script>

    let mainKoef = 0;
    function calculateK() {
        const obem = parseFloat(document.getElementById('obem').value);
        if (obem > 0) {
            mainKoef = 6.33 / Math.sqrt(obem);
        }
        else{
            mainKoef = 0;
        }
    }
    function calculateFinalCoefficient() {
        const buildingType = parseFloat(document.getElementById('buildingType').value) || 1;
        const constructionType = parseFloat(document.getElementById('constructionType').value) || 1;
        const options = parseFloat(document.getElementById('options').value) || 1;
        const temperatureMode = parseFloat(document.getElementById('temperatureMode').value) || 1;
        const equipmentSaturation = parseFloat(document.getElementById('equipmentSaturation').value) || 1;
        const finalCoefficient = mainKoef * temperatureMode * equipmentSaturation * buildingType * constructionType * options ;
        document.getElementById('harakteristikaObject').innerText = finalCoefficient.toFixed(2);
    }


    function updateBuildingInfo() {
        const etazh = parseInt(document.getElementById('etazh').value) || 0;
        const visotazdani = parseFloat(document.getElementById('visotazdani').value) || 0;

        const vis6Label = document.querySelector('label[for="vis6"]');
        const vis614Label = document.querySelector('label[for="vis614"]');
        const vis14Label = document.querySelector('label[for="vis14"]');


        vis6Label.classList.remove('highlight-green', 'highlight-red');
        vis614Label.classList.remove('highlight-green', 'highlight-red');
        vis14Label.classList.remove('highlight-green', 'highlight-red');


        if (etazh > 1) {
                document.getElementById('vis6').value = 'multi_vis6';
                vis6Label.innerText = '1) Здание с высотой этажа до 3.6м, бескрановое, до 3х этажей, этажерки высотой до 15м многоэтажные эстакады';

                document.getElementById('vis614').value = 'multi_vis614';
                vis614Label.innerText = '2) Здание с высотой этажа до 6м, бескрановое, до 2 объемов, до 4-9 этажей, сооружения высотой более 20м';

                document.getElementById('vis14').value = 'multi_vis14';
                vis14Label.innerText = '3)  Здание с высотой этажа свыше 6м, с краном, свыше 3 объемов, свыше 10 этажей, сооружения высотой более 60м, полный монолитный каркас';

            if (visotazdani < 20) {
                vis6Label.classList.add('highlight-green');
            }
            else if (visotazdani >= 20 && visotazdani < 60) {
                vis614Label.classList.add('highlight-green');
            }
            else if (visotazdani > 60) {
                vis14Label.classList.add('highlight-green');
            }


        } else {
            document.getElementById('vis6').value = 'vis6';
            vis6Label.innerText = '1) Здание высотой до 6м, бескрановое, однообъемное, двухпролетное';

                document.getElementById('vis614').value = 'vis614';
                vis614Label.innerText = '2) Здание высотой от 6м до 14м высоты, с кранами грузоподъемностью до 50т включительно, с двумя объемами, 3-5 пролета, а также различные сооружения, резервуары, тоннели, лестничные клетки, галереи';

                document.getElementById('vis14').value = 'vis14';
                vis14Label.innerText = '3) Здание высотой более 14м, со сложной конструктивной схемой, с двухъярусным расположением кранов, более 3 объемов, более 6 пролетов галереи с высотой опор более 20м и пролетом более 36м, полный монолитный каркас';

                if (visotazdani < 6) {
                vis6Label.classList.add('highlight-green');
            }
            else if (visotazdani >= 6 && visotazdani < 14) {
                vis614Label.classList.add('highlight-green');
            }
            else if (visotazdani >= 14) {
                vis14Label.classList.add('highlight-green');
            }
            }
    }





    function toggleInputs() {
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
    }

    function updateWorkingDays() {
        const calendarInput = document.getElementById('commonInputField');
        const workingInput = document.getElementById('commonInputFieldWorking');
        const startDateInput = document.getElementById('SelectZakazchik').value;

        const calendarDays = parseInt(calendarInput.value) || 0;
        const workingDays = Math.floor(calendarDays * 5 / 7);

        workingInput.value = workingDays;

        if (startDateInput) {
            const startDate = new Date(startDateInput);
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + calendarDays);
            document.getElementById('SelectPodryadchik').value = endDate.toISOString().split('T')[0];
        }
    }

    function updateCalendarDays() {
        const workingInput = document.getElementById('commonInputFieldWorking');
        const calendarInput = document.getElementById('commonInputField');
        const startDateInput = document.getElementById('SelectZakazchik').value;

        const workingDays = parseInt(workingInput.value) || 0;
        const calendarDays = Math.ceil(workingDays * 7 / 5);

        calendarInput.value = calendarDays;

        if (startDateInput) {
            const startDate = new Date(startDateInput);
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + calendarDays);
            document.getElementById('SelectPodryadchik').value = endDate.toISOString().split('T')[0];
        }
    }

    function updateEndDate() {
        const startDateInput = document.getElementById('SelectZakazchik').value;
        const calendarInput = document.getElementById('commonInputField').value;

        if (startDateInput && calendarInput) {
            const startDate = new Date(startDateInput);
            const calendarDays = parseInt(calendarInput) || 0;
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + calendarDays);
            document.getElementById('SelectPodryadchik').value = endDate.toISOString().split('T')[0];
        }
    }

    function updateCalendarDaysFromEnd() {
        const endDateInput = document.getElementById('SelectPodryadchik').value;
        const startDateInput = document.getElementById('SelectZakazchik').value;

        if (endDateInput && startDateInput) {
            const startDate = new Date(startDateInput);
            const endDate = new Date(endDateInput);
            const calendarDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            document.getElementById('commonInputField').value = calendarDays;
        }
    }



    function toggleDisplay(triggerSelector, targetSelector) {
        const triggerElement = document.querySelector(triggerSelector);
        const targetElement = document.querySelector(targetSelector);


            if (targetElement.style.display === "none" || targetElement.style.display === "") {
                targetElement.style.display = "block";
            } else {
                targetElement.style.display = "none";
            }
    }
    function toggleSelect(toggleId, selectContainerId, optionsId) {
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
            }
    }




    function toggleCheckboxes() {
        const isChecked = document.getElementById('choosCunstruct').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox1 input[type="checkbox"], .viborvischeckbox2 input[type="checkbox"]');

        checkboxes.forEach(checkbox => {
            checkbox.disabled = !isChecked;
        });
    }

    function toggleCheckboxes4() {
        const isChecked = document.getElementById('choosCunstruct4').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox3 input[type="checkbox"], .viborvischeckbox4 input[type="checkbox"]');

        checkboxes.forEach(checkbox => {
            checkbox.disabled = !isChecked;
        });
    }

    function toggleCheckboxes5() {
        const isChecked = document.getElementById('choosCunstruct5').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox53 input[type="checkbox"], .viborvischeckbox54 input[type="checkbox"]');

        checkboxes.forEach(checkbox => {
            checkbox.disabled = !isChecked;
        });
    }


    function toggleCheckboxes6() {
        const isChecked = document.getElementById('choosCunstruct6').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox63 input[type="checkbox"], .viborvischeckbox64 input[type="checkbox"]');

        checkboxes.forEach(checkbox => {
            checkbox.disabled = !isChecked;
        });
    }



    function toggleCheckboxesDop() {
        const checkboxes = [
            { checkbox: document.getElementById('toggleZd1'), input: document.getElementById('conval1') },
            { checkbox: document.getElementById('toggleZd2'), input: document.getElementById('conval2') },
            { checkbox: document.getElementById('toggleZd3'), input: document.getElementById('conval3') },
            { checkbox: document.getElementById('toggleZd4'), input: document.getElementById('conval4') },
            { checkbox: document.getElementById('toggleZd5'), input: document.getElementById('conval5') },
            { checkbox: document.getElementById('toggleZd6'), input: document.getElementById('conval6') },
            { checkbox: document.getElementById('toggleZd7'), input: document.getElementById('conval7') },
            { checkbox: document.getElementById('toggleZd8'), input: document.getElementById('conval8') },
            { checkbox: document.getElementById('toggleZd9'), input: document.getElementById('conval9') },
        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
    }


    function toggleCheckboxesDop4() {
        const checkboxes = [
            { checkbox: document.getElementById('toggleZd41'), input: document.getElementById('conval41') },
            { checkbox: document.getElementById('toggleZd42'), input: document.getElementById('conval42') },
            { checkbox: document.getElementById('toggleZd43'), input: document.getElementById('conval43') },
            { checkbox: document.getElementById('toggleZd44'), input: document.getElementById('conval44') },
            { checkbox: document.getElementById('toggleZd45'), input: document.getElementById('conval45') },
            { checkbox: document.getElementById('toggleZd46'), input: document.getElementById('conval46') },
            { checkbox: document.getElementById('toggleZd47'), input: document.getElementById('conval47') },
            { checkbox: document.getElementById('toggleZd48'), input: document.getElementById('conval48') },
            { checkbox: document.getElementById('toggleZd49'), input: document.getElementById('conval49') },
            { checkbox: document.getElementById('toggleZd449'), input: document.getElementById('toggleZd449') },

        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
    }

    function toggleCheckboxesDop5() {
        const checkboxes = [
            { checkbox: document.getElementById('toggleZd51'), input: document.getElementById('conval51') },
            { checkbox: document.getElementById('toggleZd52'), input: document.getElementById('conval52') },
            { checkbox: document.getElementById('toggleZd53'), input: document.getElementById('conval53') },
            { checkbox: document.getElementById('toggleZd54'), input: document.getElementById('conval54') },
            { checkbox: document.getElementById('toggleZd55'), input: document.getElementById('conval55') },
            { checkbox: document.getElementById('toggleZd56'), input: document.getElementById('conval56') },
            { checkbox: document.getElementById('toggleZd57'), input: document.getElementById('conval57') },
            { checkbox: document.getElementById('toggleZd58'), input: document.getElementById('conval58') },
            { checkbox: document.getElementById('toggleZd59'), input: document.getElementById('conval59') },
        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
    }

    function toggleCheckboxesDop6() {
        const checkboxes = [
            { checkbox: document.getElementById('toggleZd61'), input: document.getElementById('conval61') },
            { checkbox: document.getElementById('toggleZd62'), input: document.getElementById('conval62') },
            { checkbox: document.getElementById('toggleZd63'), input: document.getElementById('conval63') },
            { checkbox: document.getElementById('toggleZd64'), input: document.getElementById('conval64') },
            { checkbox: document.getElementById('toggleZd65'), input: document.getElementById('conval65') },
            { checkbox: document.getElementById('toggleZd66'), input: document.getElementById('conval66') },
            { checkbox: document.getElementById('toggleZd67'), input: document.getElementById('conval67') },
            { checkbox: document.getElementById('toggleZd68'), input: document.getElementById('conval68') },
            { checkbox: document.getElementById('toggleZd69'), input: document.getElementById('conval69') },
        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
    }


    function toggleCheckboxesDop7() {
        const checkboxes = [
            { checkbox: document.getElementById('toggleZd71'), input: document.getElementById('conval71') },
            { checkbox: document.getElementById('toggleZd72'), input: document.getElementById('conval72') },
            { checkbox: document.getElementById('toggleZd73'), input: document.getElementById('conval73') },
            { checkbox: document.getElementById('toggleZd74'), input: document.getElementById('conval74') },
        ];

        checkboxes.forEach(item => {
            item.input.disabled = !item.checkbox.checked;
        });
    }

    function toggleCheckboxesDop8() {
        const checkboxes = [
            { checkbox: document.getElementById('toggleZd81'), inputs: [document.getElementById('conval81') , document.getElementById('conval811')] },
            { checkbox: document.getElementById('toggleZd82'), inputs: [document.getElementById('conval82') , document.getElementById('conval822')] },
            { checkbox: document.getElementById('toggleZd83'), inputs: [document.getElementById('conval83') , document.getElementById('conval833')] },
            { checkbox: document.getElementById('toggleZd84'), inputs: [document.getElementById('conval84') , document.getElementById('conval844')] },
            { checkbox: document.getElementById('toggleZd85'), inputs: [document.getElementById('conval85') , document.getElementById('conval855')] },
            { checkbox: document.getElementById('toggleZd86'), inputs: [document.getElementById('conval86') , document.getElementById('conval866')] },
            { checkbox: document.getElementById('toggleZd87'), inputs: [document.getElementById('conval87') , document.getElementById('conval877')] },
            { checkbox: document.getElementById('toggleZd88'), inputs: [document.getElementById('conval88') , document.getElementById('conval888')] },
            { checkbox: document.getElementById('toggleZd89'), inputs: [document.getElementById('conval89') , document.getElementById('conval899')] },
            { checkbox: document.getElementById('toggleZd081'), inputs: [document.getElementById('conval081') , document.getElementById('conval0811')] },
            { checkbox: document.getElementById('toggleZd082'), inputs: [document.getElementById('conval082') , document.getElementById('conval0822')] },
            { checkbox: document.getElementById('toggleZd083'), inputs: [document.getElementById('conval083') , document.getElementById('conval0833')] },
            { checkbox: document.getElementById('toggleZd084'), inputs: [document.getElementById('conval084') , document.getElementById('conval0844')] },
            { checkbox: document.getElementById('toggleZd085'), inputs: [document.getElementById('conval085') , document.getElementById('conval0855')] },
            { checkbox: document.getElementById('toggleZd086'), inputs: [document.getElementById('conval086') , document.getElementById('conval0866')] },
            { checkbox: document.getElementById('toggleZd087'), inputs: [document.getElementById('conval087') , document.getElementById('conval0877')] },
            { checkbox: document.getElementById('toggleZd088'), inputs: [document.getElementById('conval088') , document.getElementById('conval0888')] },
            { checkbox: document.getElementById('toggleZd089'), inputs: [document.getElementById('conval089') , document.getElementById('conval0899')] },
            { checkbox: document.getElementById('toggleZd0081'), inputs: [document.getElementById('conval0081') , document.getElementById('conval00811')] },
            { checkbox: document.getElementById('toggleZd0082'), inputs: [document.getElementById('conval0082') , document.getElementById('conval00822')] },
            { checkbox: document.getElementById('toggleZd0083'), inputs: [document.getElementById('conval0083') , document.getElementById('conval00833')] },

        ];

        checkboxes.forEach(item => {
            item.inputs.forEach(input => {
                input.disabled = !item.checkbox.checked;
            });
        });
    }


</script>

</body>
</html>
