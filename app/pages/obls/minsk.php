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
                                <th>Статус (Исправно/неисправно)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM oborudovanie where id_uz = 1";
                            $result = $connectionDB->executeQuery($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr oncontextmenu="showMenu(this)">';
                                echo '<td>' . $row['id_oborudovanie'] . '</td>';
                                echo '<td>' . $row['id_type_oborudovanie'] . '</td>';
                                echo '<td>' . $row['cost'] . '</td>';
                                echo '<td>' . $row['date_create'] . '</td>';
                                echo '<td>' . $row['date_release'] . '</td>';
                                echo '<td>' . $row['service_organization'] . '</td>';
                                echo '<td>' . $row['date_last_TO'] . '</td>';
                                echo '<td>' . $row['status'] . '</td>';
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
                                <th>Статус (Исправно/неисправно)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM oborudovanie where id_uz = 2";
                            $result = $connectionDB->executeQuery($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr oncontextmenu="showMenu(this)">';
                                echo '<td>' . $row['id_oborudovanie'] . '</td>';
                                echo '<td>' . $row['id_type_oborudovanie'] . '</td>';
                                echo '<td>' . $row['cost'] . '</td>';
                                echo '<td>' . $row['date_create'] . '</td>';
                                echo '<td>' . $row['date_release'] . '</td>';
                                echo '<td>' . $row['service_organization'] . '</td>';
                                echo '<td>' . $row['date_last_TO'] . '</td>';
                                echo '<td>' . $row['status'] . '</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </section>

            <section class="col-lg-3" id="right_section">
              <div>  <input style="width:100%;" type="text" id="myInputOrg" onkeyup="myFunctionOrg(this)"
                       placeholder="Поиск организации"
                       title="Type in a name">
              </div>


                <?php
                $sql = "select * from uz";
                $result = $connectionDB->executeQuery($sql);
                $activeClass = "activecard1";
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<div class="card card0 '.$activeClass.'" onclick="showSection(\'org'. $row['id_uz']. '\',this)">';
                    echo '<h4>'. $row['name']. '</h4>';
                    echo '</div>';
                    $activeClass = "";
                }

              ?>


        </div>
    </div>
    <div id="contMenu" style="display: none;">
        <div>
            <a onclick="alert(1)" style="cursor: pointer">hello</a>
        </div>
        <div>
            bye
        </div>
    </div>
</section>
<script>

    const contMenu = document.getElementById('contMenu');
    const body = document.getElementsByTagName('body')[0];

    function showMenu(thisTr) {
        event.preventDefault();
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

