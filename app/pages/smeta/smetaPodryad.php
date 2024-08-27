<?php

?>
<style>
    .hidden {
        display: none; /* Скрываем селект по умолчанию */
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

.dndb {
    display: none;
}
.nameforblock1  {
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

.dndb3 {
    display: none;
}
.nameforblock3  {
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

    .dndb4 {
        display: none;
    }
    .nameforblock4  {
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


    .dndb5 {
        display: none;
    }
    .nameforblock5  {
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

    .dndb6 {
        display: none;
    }
    .nameforblock6  {
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

    .dndb7 {
        display: none;
    }
    .nameforblock7  {
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

</style>

<section class="col-lg-12 connectedSortable ui-sortable" style="margin-top: 90px">
    <div class="position1">
<div class="pos1">
    <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
    <select class="form-select" aria-label="">
        <option selected>-- Пожалуйста, выберите --</option>
        <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
    <select class="form-select" aria-label="">
        <option selected>-- Пожалуйста, выберите --</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    <!-- Textarea with class .w-50 -->
    <label for="textAreaNaimRabot" class="zakpod">Наименование работ:</label>
    <div class="form-outline">
        <textarea class="form-control" id="textAreaNaimRabot" rows="3"></textarea>
    </div>
</div>
        <div class="pos2">
            <label for="SelectZakazchik" class="zakpod">Дата начала выполнения работ:</label>
            <input type="date" class="form-date" id="SelectZakazchik" aria-label="">

            <label for="SelectPodryadchik" class="zakpod">Дата окончания работ:</label>
            <input type="date" class="form-date" id="SelectPodryadchik" aria-label="">

            <label for="textAreaCel" class="zakpod">Цель:</label>
            <div class="form-outline">
                <textarea class="form-control" id="textAreaCel" rows="3"></textarea>
            </div>
        </div>


        <div class="pos3">
            <label for="calendarDays" class="zakpod">Календарных дней:</label>
            <input id="calendarDays" class="butrad" type="radio" name="daysType" value="calendar">
            <br>
            <label for="workingDays" class="zakpod">Рабочих дней:</label>
            <input id="workingDays" class="butrad" type="radio" name="daysType" value="working">
            <br>
            <div id="inputContainer" class="input-container">
                <label id="inputLabel" for="commonInputField">Введите значение:</label>
                <input id="commonInputField" type="number" name="inputValue" step="1" min="0">
            </div>

            <label for="textAreaMestoObj" class="zakpodGps">Местоположение объекта:</label>
            <div class="form-outline">
                <textarea class="form-control" id="textAreaMestoObj" rows="3"></textarea>
            </div>

        </div>
    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


    <div class="nameforblock1" onclick ="toggleDisplay('.nameforblock1', '.dndb');">Характеристика объекта   <?php echo '<span class="countRub">123</span>' ?></div>
    <div class="dndb">
    <div class="position1">
        <div class="pos1">
            <div class = "viborvis">
            <label for="SelectZakazchik" class="zakpod">Здание:</label>
            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div id="inputContainer" class="input-containerval">
                <label for="SelectZakazchik" class="zakpod">Количество этажей:</label>
                <input id="etazh" type="number" name="inputValue" step="1" min="0">
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="SelectZakazchik" class="zakpod">Высота здания:</label>
                <input id="visotazdani" type="number" name="inputValue" step="1" min="0">м
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="SelectZakazchik" class="zakpod">Объем здания:</label>
                <input id="obem" type="number" name="inputValue" step="1" min="0">м³
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="SelectZakazchik" class="zakpod">Высота покрытия от уровня пола:</label>
                <input id="visotapola" type="number" name="inputValue" step="1" min="0">м
            </div>

</div>
        </div>
        <div class="pos2">

<div class = "viborvis">
            <input id="vis6" class="butrad" type="radio" name="daysType" value="vis6">
            <label for="calendarDays" class="visotarad"> 1) Здание высотой до 6м, бескрановое, однообъемное, двухпролетное</label>
            <br>
            <input id="vis614" class="butrad" type="radio" name="daysType" value="vis614">
            <label for="workingDays" class="visotarad">2) Здание высотой от 6м до 14м высоты, с кранами грузоподъемностью до 50т включительно, с двумя объемами, 3-5 пролета
            , а также различные сооружения, резервуары, тоннели, лестничные клетки, галереи
            </label>
            <br>
            <input id="vis14" class="butrad" type="radio" name="daysType" value="vis14">
            <label for="workingDays" class="visotarad">2) Здание высотой более 14м, со сложной конструктивной схемой, с двухъярусным расположением кранов, более 3
            объемов, более 6 пролетов галереи с высотой опор более 20м и пролетом более 36м, полный монолитный каркас</label>
            <br>
</div>
        </div>
        <div class="pos3">

            <label for="SelectZakazchik" class="zakpod">Температурно-влажностный режим:</label>
            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Насыщенность оборудования:</label>
            <select class="form-select" aria-label="">
                <option selected>-- Пожалуйста, выберите --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label>

                <input type="checkbox" id="toggleSelect" onchange="toggleSelect('toggleSelect', 'selectContainer', 'options')"> Работа в помещениях в зависимости от  степени агрессивности воздействия
            </label>

            <div id="selectContainer" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select class="form-select" id="options" disabled>
                    <option value="">-- Пожалуйста, выберите --</option>
                    <option value="1">Опция 1</option>
                    <option value="2">Опция 2</option>
                    <option value="3">Опция 3</option>
                </select>
            </div>

        </div>
        </div>
        <div class="position1">
            <div class="pos1">
                <div class = "viborvis">
                    <label>
                        <input type="checkbox" id="toggleSelect"> Выполнение работ с применением альпинисткого снаряжения (K = 1.5)
                    </label>
                    <label>
                        <input type="checkbox" id="toggleSelect"> Шумовые воздействия, превышающие нормативные величины (K = 1.25)
                    </label>
                    <label>
                        <input type="checkbox" id="toggleSelect"> Выполнение работ в условиях отрицательных температур в период с 1 ноября - 1 мая (K = 1.2)
                    </label>
                    <label>
                        <input type="checkbox" id="toggleSelect"> Необходимость очистки поверхности конструкций от грязи, пыли, ржавчины. Расчет выполнять по калькуляции трудозатрат
                    </label>

                </div>
            </div>
            <div class="pos2">

                <div class = "viborvis">
                    <label>
                        <input type="checkbox" id="toggleSelect"> Необходимость использования переносных источников освещения (K = 1.2)
                    </label>
                    <label>
                        <input type="checkbox" id="toggleSelect"> Здание является памятником архитектуры (K = 1.02)
                    </label>
                    <label>
                        <input type="checkbox" id="toggleSelect"> Обследование в условиях производственного процесса (K = 1.2)
                    </label>
                    <label>
                        <input type="checkbox" id="toggleSelect"> Выполнение работ с мостового крана или подмостей (K = 1.15)
                    </label>
                </div>
            </div>
            <div class="pos3">
                <div class = "viborvis">
                <label>
                    <input type="checkbox" id="toggleSelect"> Здание оборудовано кранами режимных групп 7К, 8К, (K = 1.2)
                </label>
                <label>
                    <input type="checkbox" id="toggleSelect"> Конструкции, усиленные по ранее разработанным проектам (K = 1.2)
                </label>
                <label>
                    <input type="checkbox" id="toggleSelect"> Использование ранее выполненных обследований не более  3 лет назад (K = 0.7)
                </label>
                <label>
                    <input type="checkbox" id="toggleSelect"> Срочное выполнение обмерно-обследовательских работ (K <= 1.35)
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
                            <input type="checkbox" id="toggleZd81" disabled onchange="toggleCheckboxesDop8()"> Конструкция фундаментов
                        </div>
                        <div id="inputContainer" class="input-container">
                            <input class = "inpval" id="conval81" disabled type="number" name="inputValue" step="1" min="0"> %
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
            <div class="pos2">
                <div class = "viborvischeckbox82">
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

                <div class = "viborvischeckbox83">
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


</section>

<script>
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

    function toggleCheckboxes7() {
        const isChecked = document.getElementById('choosCunstruct7').checked;
        const checkboxes = document.querySelectorAll('.viborvischeckbox73 input[type="checkbox"], .viborvischeckbox74 input[type="checkbox"]');

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


</script>

</body>
</html>
