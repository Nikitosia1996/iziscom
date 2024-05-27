<link rel="stylesheet" href="css/minsk.css">
<section class="content" style="margin-top: 100px; margin-left: 15px">
    <div class="container-fluid">
        <div class="row" id="main_row">

            <?php $query = "select * from uz where id_oblast = 6;";
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
                            </tr>
                            </thead>
                            <tbody>';
                $sql1 = "SELECT oborudovanie.*, type_oborudovanie.name FROM oborudovanie
                                        left outer join type_oborudovanie on oborudovanie.id_type_oborudovanie = type_oborudovanie.id_type_oborudovanie
                                        where id_uz = $id_uz";
                $result1 = $connectionDB->executeQuery($sql1);
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $nameOborudov = $row1['name'];
                    echo '<tr oncontextmenu="showMenu(this)">';

                    echo '<td>' . $nameOborudov . '</td>';
                    echo '<td>' . $row1['cost'] . '</td>';
                    echo '<td>' . $row1['date_create'] . '</td>';
                    echo '<td>' . $row1['date_release'] . '</td>';
                    echo '<td>' . $row1['service_organization'] . '</td>';
                    echo '<td>' . $row1['date_last_TO'] . '</td>';
                    $status =  $row1['status'] === "1" ? "исправно" : "неисправно";
                    echo '<td>' .$status. '</td>';
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
                $sql = "select * from uz where id_oblast = 6";
                $result = $connectionDB->executeQuery($sql);
                $activeClass = "activecard1";
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<div class="card card0 '.$activeClass.'" onclick="showSection('. $row['id_uz']. ',this)">';
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

