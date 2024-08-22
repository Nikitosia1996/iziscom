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
    display: ruby-text;

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
#visotapola{
    width:15%;
}

.dndb {
    display: none; /* Скрываем содержимое по умолчанию */
}
.nameforblock1  {
    margin-left: 1%;
    cursor: pointer; /* Указываем, что элемент кликабельный */
    background-color: #f0f0f0;
    padding: 10px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    width: 50%;
    display: flex;
    justify-content: center;
}

.dndb3 {
    display: none; /* Скрываем содержимое по умолчанию */
}
.nameforblock3  {
    margin-left: 1%;
    cursor: pointer; /* Указываем, что элемент кликабельный */
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




    <div class="nameforblock1">Характеристика объекта   <?php echo '<span class="countRub">123</span>' ?></div>
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
                <input id="visotazdani" type="number" name="inputValue" step="1" min="0">
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="SelectZakazchik" class="zakpod">Объем здания:</label>
                <input id="obem" type="number" name="inputValue" step="1" min="0">
            </div>

            <div id="inputContainer" class="input-containerval">
                <label for="SelectZakazchik" class="zakpod">Высота покрытия от уровня пола:</label>
                <input id="visotapola" type="number" name="inputValue" step="1" min="0">
            </div>

</div>
        </div>
        <div class="pos2">

<div class = "viborvis">
            <input id="vis6" class="butrad" type="radio" name="daysType" value="vis6">
            <label for="calendarDays" class="visotarad"> 1) Здание высотой до 6м</label>
            <br>
            <input id="vis614" class="butrad" type="radio" name="daysType" value="vis614">
            <label for="workingDays" class="visotarad">2) Здание высотой от 6м до 14м</label>
            <br>
            <input id="vis14" class="butrad" type="radio" name="daysType" value="vis14">
            <label for="workingDays" class="visotarad">2) Здание высотой от 14м</label>
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
                <input type="checkbox" id="toggleSelect"> Работа в помещениях в зависимости от  степени агрессивности воздействия
            </label>

            <div id="selectContainer" class="hidden">
                <label for="options">Выберите опцию:</label>
                <select id="options" disabled>
                    <option value="">-- Пожалуйста, выберите --</option>
                    <option value="1">Опция 1</option>
                    <option value="2">Опция 2</option>
                    <option value="3">Опция 3</option>
                </select>
            </div>

        </div>
        </div>
    </div>

    <hr>







    <div class="nameforblock3">Сбор исходных данных <?php echo '<input class = "onCollap" type="checkbox" id="sborDann" name="sborDann" value="sborDann"> <span class="countRub">123</span>' ?></div>
    <div class="dndb3">
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

            </div>
            <div class="pos2">

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

            </div>
            <div class="pos3">

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
            </div>
        </div>
    </div>

    <hr>
</section>

<script>
    const nameforblock1 = document.querySelector('.nameforblock1');
    const dndb = document.querySelector('.dndb');
    nameforblock1.addEventListener('click', () => {
        if (dndb.style.display === "none" || dndb.style.display === "") {
            dndb.style.display = "block"; // Показываем блок
        } else {
            dndb.style.display = "none"; // Скрываем блок
        }
    });


    const nameforblock3 = document.querySelector('.nameforblock3');
    const dndb3 = document.querySelector('.dndb3');
    nameforblock3.addEventListener('click', () => {
        if (dndb3.style.display === "none" || dndb3.style.display === "") {
            dndb3.style.display = "block"; // Показываем блок
        } else {
            dndb3.style.display = "none"; // Скрываем блок
        }
    });



    const toggleSelect = document.getElementById('toggleSelect');
    const selectContainer = document.getElementById('selectContainer');
    const optionsSelect = document.getElementById('options');

    toggleSelect.addEventListener('change', () => {
        if (toggleSelect.checked) {
            // Если чекбокс выбран, показываем селект и активируем его
            selectContainer.classList.remove('hidden');
            optionsSelect.disabled = false;
        } else {
            // Если чекбокс не выбран, скрываем селект, очищаем его и блокируем
            selectContainer.classList.add('hidden');
            optionsSelect.selectedIndex = 0; // Сбрасываем выбор
            optionsSelect.disabled = true; // Блокируем селект
        }
    });

</script>

</body>
</html>
