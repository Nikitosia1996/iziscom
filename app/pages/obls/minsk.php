<link rel="stylesheet" href="css/minsk.css">
<section class="content" style="margin-top: 100px; margin-left: 15px">
    <div class="container-fluid">
        <div class="row" id="main_row">

            <?php $query = "select * from uz where id_oblast = 7;";
            $result = $connectionDB->executeQuery($query);
            if($connectionDB->getNumRows($result) == 0){
                echo '<section class="col-lg-9 connectedSortable ui-sortable"  style="display: block;">
                <div class="row">
                </div>
                </section>';
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $id_uz = $row['id_uz'];
                echo ' <section class="col-lg-9 connectedSortable ui-sortable" id="org'.$id_uz.'" style="display: block;">
                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb'.$id_uz.'"
                               style="display: none">
                            <thead>
                            <tr>
                                <th>Тип оборудования</th>
                                <th>Стоимость</th>
                                <th>Дата производства</th>
                                <th>Дата ввода в эксплуатацию</th>
                                <th>Сервисная организация</th>
                                <th>Дата последнего ТО</th>
                                <th>Статус </th>
                                <th>Действия </th>
                            </tr>
                            </thead>
                            <tbody>';
                            $sql1 = "SELECT oborudovanie.*, type_oborudovanie.name FROM oborudovanie
                                        left outer join type_oborudovanie on oborudovanie.id_type_oborudovanie = type_oborudovanie.id_type_oborudovanie
                                        where id_uz = $id_uz";
                            $result1 = $connectionDB->executeQuery($sql1);
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                $nameOborudov = $row1['name'];
                                $idOborudovanie = $row1['id_oborudovanie'];
                                echo '<tr oncontextmenu="showMenu(this,'.$idOborudovanie.')">';

                                echo '<td>' . $nameOborudov . '</td>';
                                echo '<td>' . $row1['cost'] . '</td>';
                                echo '<td>' . $row1['date_create'] . '</td>';
                                echo '<td>' . $row1['date_release'] . '</td>';
                                echo '<td>' . $row1['service_organization'] . '</td>';
                                echo '<td>' . $row1['date_last_TO'] . '</td>';
                                $status =  $row1['status'] === "1" ? "исправно" : "неисправно";
                                echo '<td>' .$status. '</td>';
                                echo '<td><a href="#" onclick="">&#10060;</a><a href="#" onclick="editOborudovanie('.$idOborudovanie.')">✏️</a></td>';
                                echo '</tr>';
                            }

                       echo' 
                            </tbody>
                        </table>
     
                    </div>
                </div>

            </section>';
}
            ?>


            <section class="col-lg-3" id="right_section">
              <div>  <input style="width:100%;" type="text" id="myInputOrg" onkeyup="myFunctionOrg(this)"
                       placeholder="Поиск организации"
                       title="Type in a name">
              </div>


                <?php
                $sql = "select * from uz where id_oblast = 7";
                $result = $connectionDB->executeQuery($sql);
//                $activeClass = "activecard1";
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<div class="card card0 " onclick="showSection('. $row['id_uz']. ',this)">';
                    echo '<h4>'. $row['name']. '</h4>';
                    echo '</div>';
//                    $activeClass = "";
                }

              ?>


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

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFaultModal">
                    Добавить
                </button>
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



<div class="modal" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Успех</h5>
                <button type="button" class="btn  btn-danger btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div>Запись успешно удалена</div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="addFaultModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Добавление неисправности</h5>
                <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

                <form id="addFaultForm">
                    <label for="date_fault">Дата обнаружения неисправности:</label>
                    <input type="date" id="date_fault" name="date_fault">

                    <label for="date_call_service">Дата вызова сервиса:</label>
                    <input type="date" id="date_call_service" name="date_call_service">

                    <label for="reason_fault">Причина неисправности:</label>
                    <input type="text" id="reason_fault" name="reason_fault">

                    <label for="date_procedure_purchase">Дата процедуры закупки:</label>
                    <input type="date" id="date_procedure_purchase" name="date_procedure_purchase">

                    <label for="cost_repair">Стоимость ремонта:</label>
                    <input type="number" id="cost_repair" name="cost_repair">

                    <label for="time_repair">Время ремонта:</label>
                    <input type="date" id="time_repair" name="time_repair">

                    <label for="downtime">Простой (в часах):</label>
                    <input type="number" id="downtime" name="downtime">
                    <div id="btnsGroup">
                    <button type="submit" class="btn btn-primary">Добавить запись</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal" id="editFaultModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Редактирование неисправности</h5>
                <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

                <form id="editFaultForm">
                    <label for="date_fault">Дата обнаружения неисправности:</label>
                    <input type="date" id="edit_date_fault" name="date_fault">

                    <label for="date_call_service">Дата вызова сервиса:</label>
                    <input type="date" id="edit_date_call_service" name="date_call_service">

                    <label for="reason_fault">Причина неисправности:</label>
                    <input type="text" id="edit_reason_fault" name="reason_fault">

                    <label for="date_procedure_purchase">Дата процедуры закупки:</label>
                    <input type="date" id="edit_date_procedure_purchase" name="date_procedure_purchase">

                    <label for="cost_repair">Стоимость ремонта:</label>
                    <input type="number" id="edit_cost_repair" name="cost_repair">

                    <label for="time_repair">Время ремонта:</label>
                    <input type="date" id="edit_time_repair" name="time_repair">

                    <label for="downtime">Простой (в часах):</label>
                    <input type="number" id="edit_downtime" name="downtime">

                    <input type="hidden" id="edit_id_fault" name="id_fault">

                    <div id="edit_btnsGroup">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="editOborudovanieModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Редактирование оборудования</h5>
                <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

                <form id="editOborudovanieForm">
                    <label >Тип оборудования:</label>
                    <select class="form-select" id="select_type_oborudovanie">
                        <?php
                        $query = "select * from type_oborudovanie";
                        $result = $connectionDB->executeQuery($query);
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['id_type_oborudovanie']."'>".$row['name']."</option>";
                        }
                        ?>
                    </select>

                    <label for="cost">Стоимость:</label>
                    <input type="number" id="edit_cost" name="cost">
<!---->
                    <label for="date_create">Дата производства:</label>
                    <input type="date" id="edit_date_create" name="date_create">
<!---->
                    <label for="date_release">Дата ввода в эксплуатацию:</label>
                    <input type="date" id="edit_date_release" name="date_release">
<!---->
                    <label for="service_organization">Сервисная организация:</label>
                    <input type="text" id="edit_service_organization" name="service_organization">

<!---->
                    <label for="date_last_TO">Дата последнего ТО:</label>
                    <input type="date" id="edit_date_last_TO" name="date_last_TO">
<!---->
                    <label >Статус:</label>
                    <select class="form-select" id="select_status">
                       <option value='0'>Неисправно</option>
                       <option value='1'>Исправно</option>
                    </select>
<!---->
<!--                    <input type="hidden" id="edit_id_fault" name="id_fault">-->

                    <div style="margin-top: 10px">
                        <button type="button" class="btn btn-primary" onclick="saveEditedOborudovanie()">Сохранить</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    const contMenu = document.getElementById('contMenu');
    const body = document.getElementsByTagName('body')[0];
    let selectedEquipmentId;

    function showMenu(thisTr,idOborudovanie) {
        event.preventDefault();
        selectedEquipmentId = idOborudovanie;
        contMenu.style.display = 'block';
        contMenu.style.position = 'absolute';
        contMenu.style.left = event.clientX - 200 + 'px';
        contMenu.style.top = event.clientY - 110 + 'px';
    }

    body.addEventListener('click', function (event) {
        contMenu.style.display = 'none';
    })


</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/minsk.js"></script>

