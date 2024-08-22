<?php

?>
<style>
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
.onCollap{
    margin-left:5%;
}

#commonInputField{
    width: 70px;
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


</style>

<section class="col-lg-12 connectedSortable ui-sortable" style="margin-top: 90px">
    <div class="position1">
<div class="pos1">
    <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
    <select class="form-select" aria-label="">
        <option selected></option>
        <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
    <select class="form-select" aria-label="">
        <option selected></option>
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
                <input id="commonInputField" type="text" name="inputValue">
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
            <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
            <select class="form-select" aria-label="">
                <option selected></option>
                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
            <select class="form-select" aria-label="">
                <option selected></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

        </div>
        <div class="pos2">

            <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
            <select class="form-select" aria-label="">
                <option selected></option>
                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
            <select class="form-select" aria-label="">
                <option selected></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

        </div>
        <div class="pos3">

            <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
            <select class="form-select" aria-label="">
                <option selected></option>
                <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
            <select class="form-select" aria-label="">
                <option selected></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
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
                    <option selected></option>
                    <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
                <select class="form-select" aria-label="">
                    <option selected></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <div class="pos2">

                <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
                <select class="form-select" aria-label="">
                    <option selected></option>
                    <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
                <select class="form-select" aria-label="">
                    <option selected></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <div class="pos3">

                <label for="SelectZakazchik" class="zakpod">Заказчик:</label>
                <select class="form-select" aria-label="">
                    <option selected></option>
                    <option value="1">dasdasdasdagsdgahsgdhkgadhkagsdkagkgsdjagsdjgjkasgkfafsgjkfgasfgjasgjfkgasfgjkafgkasgfjakgafg</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <label for="SelectPodryadchik" class="zakpod">Подрядчик:</label>
                <select class="form-select" aria-label="">
                    <option selected></option>
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

</script>

</body>
</html>
