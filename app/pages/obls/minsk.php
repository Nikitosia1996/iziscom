<link rel="stylesheet" href="css/minsk.css">
<section class="content" style="margin-top: 100px; margin-left: 15px">
    <div class="container-fluid">
        <div class="row" id="main_row">

            <section class="col-lg-9 connectedSortable ui-sortable" id="org1" style="display: block;">
                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb1"
                               style="display: none">
                            <thead>
                            <tr>
                                <th>Наименование оборудования</th>
                                <th>Тип оборудования</th>
                                <th>Стоимость</th>
                                <th>Дата производства</th>
                                <th>Дата ввода в эксплуатацию</th>
                                <th>Сервисная организация</th>
                                <th>Дата последнего ТО</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM oborudovanie where id_uz = 1";
                            $result = $connectionDB->executeQuery($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $status = ($row['status'] == 0) ? 'Исправно' : 'Неисправно';
                                echo '<tr oncontextmenu="showMenu(this)">';
                                echo '<td>' . $row['id_oborudovanie'] . '</td>';
                                echo '<td>' . $row['id_type_oborudovanie'] . '</td>';
                                echo '<td>' . $row['cost'] . '</td>';
                                echo '<td>' . $row['date_create'] . '</td>';
                                echo '<td>' . $row['date_release'] . '</td>';
                                echo '<td>' . $row['service_organization'] . '</td>';
                                echo '<td>' . $row['date_last_TO'] . '</td>';
                                echo '<td>' . $status . '</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </section>
            <section class="col-lg-9 connectedSortable ui-sortable" id="org2" style="display: none;">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb3"
                               style="display: none">
                            <thead>
                            <tr>
                                <th>Наименование оборудования</th>
                                <th>Тип оборудования</th>
                                <th>Стоимость</th>
                                <th>Дата производства</th>
                                <th>Дата ввода в эксплуатацию</th>
                                <th>Сервисная организация</th>
                                <th>Дата последнего ТО</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM oborudovanie where id_uz = 2";
                            $result = $connectionDB->executeQuery($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $status = ($row['status'] == 0) ? 'Исправно' : 'Неисправно';
                                echo '<tr oncontextmenu="showMenu(this)">';
                                echo '<td>' . $row['id_oborudovanie'] . '</td>';
                                echo '<td>' . $row['id_type_oborudovanie'] . '</td>';
                                echo '<td>' . $row['cost'] . '</td>';
                                echo '<td>' . $row['date_create'] . '</td>';
                                echo '<td>' . $row['date_release'] . '</td>';
                                echo '<td>' . $row['service_organization'] . '</td>';
                                echo '<td>' . $row['date_last_TO'] . '</td>';
                                echo '<td>' . $status  . '</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </section>

            <section class="col-lg-9 connectedSortable ui-sortable" id="org3" style="display: none;">
                <div class="row">
                    <input type="text" id="myInput" onkeyup="myFunction('depressia')" placeholder="Что ищем?"
                           title="Type in a name">

                    <ul id="myUL">
                        <li><a href="public/3Инструкция Депрессия - краткая версия.pdf" target="_blank">Оборудование 5
                            </a></li>
                        <li><a href="public/33Инструкция по депрессии.pdf" target="_blank">Оборудование 6</a></li>


                    </ul>
                </div>
            </section>
            <section class="col-lg-9 connectedSortable ui-sortable" id="org4" style="display: none;">
                <div class="row">
                    <input type="text" id="myInput" onkeyup="myFunction('imt')" placeholder="Что ищем?"
                           title="Type in a name">

                    <ul id="myUL">
                        <li><a href="public/4Инструкция ИМТ - краткая версия.pdf" target="_blank">Оборудование 7</a>
                        </li>
                        <li><a href="public/44Инструкция о ПООМП в отношении профилактики и ведения ИМТ.pdf"
                               target="_blank">Оборудование 8</a></li>


                    </ul>
                </div>
            </section>
            <section class="col-lg-9 connectedSortable ui-sortable" id="org5" style="display: none;">
                <div class="row">
                    <input type="text" id="myInput" onkeyup="myFunction('kurenie')" placeholder="Что ищем?"
                           title="Type in a name">

                    <ul id="myUL">
                        <li><a href="public/5Инструкция Курение - краткая версия.pdf" target="_blank">Оборудование 9</a>
                        </li>
                        <li><a href="public/55Инструкция о ПООМП в отношении прекращения Курения.pdf" target="_blank">Оборудование
                                10</a></li>


                    </ul>
                </div>
            </section>
            <section class="col-lg-3" id="right_section">
              <div>  <input style="width:100%;" type="text" id="myInputOrg" onkeyup="myFunctionOrg(this)"
                       placeholder="Поиск организации"
                       title="Type in a name">
              </div>

                <div class="card card0 card1 activecard1" onclick="showSection('org1',this)">
                    <h4>Организация 1</h4>
                </div>
                <div class="card card0 card2" onclick="showSection('org2',this)">
                    <h4>Организация 2</h4>
                </div>
                <div class="card card0 card3" onclick="showSection(this)">
                    <h4>Организация 3</h4>
                </div>
                <div class="card card0 card4" onclick="showSection(this)">
                    <h4>Организация 4</h4>
                </div>
                <div class="card card0 card5" onclick="showSection(this)">
                    <h4>Организация 5</h4>
                </div>


        </div>
    </div>
    <div id="contMenu" style="display: none;">
        <div>
            <a onclick="getFaultsTable()" style="cursor: pointer">Таблица неисправностей</a>
        </div>
        <div>
            <a onclick="getEffectTable()" style="cursor: pointer">Таблица эффективности</a>
        </div>
    </div>
</section>



<div class="modal" id="faultsModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Таблица неисправностей</h5>
                <button type="button" class="btn  btn-danger btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>



<div class="modal" id="effectModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Таблица эффективности использования оборудования</h5>
                <button type="button" class="btn  btn-danger btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>


<script>

    const contMenu = document.getElementById('contMenu');
    const body = document.getElementsByTagName('body')[0];
    let selectedEquipmentId;

    function showMenu(thisTr) {
        event.preventDefault();
        selectedEquipmentId = thisTr.cells[0].textContent;
        contMenu.style.display = 'block';
        contMenu.style.position = 'absolute';
        contMenu.style.left = event.clientX - 200 + 'px';
        contMenu.style.top = event.clientY - 110 + 'px';
    }

    body.addEventListener('click', function (event) {
        contMenu.style.display = 'none';
    })


</script>

<script src="js/minsk.js"></script>

