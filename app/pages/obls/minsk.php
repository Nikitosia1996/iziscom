<?php
?>

<link rel="stylesheet" href="css/minsk.css">
<section class="content" style="margin-top: 100px; margin-left: 15px">
    <div class="container-fluid">
        <div class="row" id="main_row">

            <section class="col-lg-9 connectedSortable ui-sortable" id="org1">
                <div class="row">
                    <input type="text" id="myInput" onkeyup="myFunction(this)"
                           placeholder="Введите название оборудования"
                           title="Type in a name">

                    <ul id="myUL">
                        <li><a class="oborudovanieItem" onclick="showTable('infoOb1',this)">Оборудование 1</a></li>
                        <li><a class="oborudovanieItem" onclick="showTable('infoOb2',this)">Оборудование 2</a></li>
                    </ul>

                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb1"
                               style="display: none">
                            <thead>
                            <tr>
                                <th>Столбец 1</th>
                                <th>Столбец 2</th>
                                <th>Столбец 3</th>
                                <th>Столбец 4</th>
                                <th>Столбец 5</th>
                                <th>Столбец 6</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="btnShMenu">
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb2"
                               style="display: none">
                            <thead>
                            <tr>
                                <th>Столбец 6</th>
                                <th>Столбец 7</th>
                                <th>Столбец 8</th>
                                <th>Столбец 9</th>
                                <th>Столбец 10</th>
                                <th>Столбец 11</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
            <section class="col-lg-9 connectedSortable ui-sortable" id="org2" style="display: none;">
                <div class="row">
                    <input type="text" id="myInput" onkeyup="myFunction(this)" placeholder="Что ищем?"
                           title="Type in a name">
                    <ul id="myUL">
                        <li><a class="oborudovanieItem" onclick="showTable('infoOb3',this)">Оборудование 3</a></li>
                        <li><a class="oborudovanieItem" onclick="showTable('infoOb4',this)">Оборудование 4</a></li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb3"
                               style="display: none">
                            <thead>
                            <tr>
                                <th>Столбец 1</th>
                                <th>Столбец 2</th>
                                <th>Столбец 3</th>
                                <th>Столбец 4</th>
                                <th>Столбец 5</th>
                                <th>Столбец 6</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr >
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb4"
                               style="display: none">
                            <thead>
                            <tr>
                                <th>Столбец 6</th>
                                <th>Столбец 7</th>
                                <th>Столбец 8</th>
                                <th>Столбец 9</th>
                                <th>Столбец 10</th>
                                <th>Столбец 11</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>
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
            <a onclick="alert(1)" style="cursor: pointer">hello</a>
        </div>
        <div>
            bye
        </div>
    </div>
</section>
<script>
    const btnShMenu = document.getElementById('btnShMenu');
    const contMenu = document.getElementById('contMenu');
    const body = document.getElementsByTagName('body')[0];

    btnShMenu.addEventListener('contextmenu', function (event) {
        event.preventDefault();
        contMenu.style.display = 'block';
        contMenu.style.position = 'absolute';
        contMenu.style.left = event.clientX - 200 + 'px';
        contMenu.style.top = event.clientY - 110 + 'px';
    });

    body.addEventListener('click', function (event) {
        contMenu.style.display = 'none';
    })

</script>

<script src="js/minsk.js"></script>

