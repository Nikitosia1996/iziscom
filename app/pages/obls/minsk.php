<?php
?>

<style>


    #myUL li a {

        border: 1px solid #ddd;
        margin-top: 15px;
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block;
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
        margin-bottom: 1rem;
        cursor: pointer;
        height: 85px;
        background-size: cover;
        background-attachment: fixed;
        padding-left: 20px;
        justify-content: center;
        color: black;
        transition: all 0.5s ease-in;
    }

    .activecard1 {
        background-color: #c6d1dd;
    }

    .activeOrg{
        background-color: #c6d1dd !important;
    }

    td {
        text-align: center;
    }

    #myUL li a:hover {
        cursor: pointer;
        background-color: #c6d1dd;
    }
</style>
<section class="content" style="margin-top: 100px; margin-left: 15px">
    <div class="container-fluid">
        <div class="row" id="main_row">

            <section class="col-lg-9 connectedSortable ui-sortable" id="org1">
                <div class="row">
                    <input type="text" id="myInput" onkeyup="myFunction(this)" placeholder="Что ищем?"
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
                            <tr>
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
                            <tr>
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
</section>

<script>

    function showTable(idTable, element) {
        let oldActive = document.getElementsByClassName("activeOrg")[0];
        if (oldActive)
            oldActive.classList.remove("activeOrg");
        element.classList.add('activeOrg');
        let tables = document.getElementsByTagName('table');
        [...tables].forEach(item => {
            item.style.display = 'none';
        })
        let table = document.getElementById(idTable);
        table.style.display = "block";
        $('table').DataTable().destroy();
        $('#infoOb' + idTable.substr(6)).DataTable();
        $('th').css('width', '20%');

    }

    function showSection(idCard, element) {
        let oldActive = document.getElementsByClassName("activecard1")[0];
        oldActive.classList.remove("activecard1");
        element.classList.add('activecard1');
        let sections = document.getElementsByClassName('connectedSortable');
        [...sections].forEach(item => {
            item.style.display = 'none';
        })
        let section = document.getElementById(idCard);
        section.style.display = "block";
    }

    function myFunction(input) {
        let filter = input.value.toUpperCase();
        let ul = input.nextElementSibling;
        let lis = ul.children;
        for (let i = 0; i < lis.length; i++) {
            let a = lis[i].children[0];
            let li = a.textContent.toUpperCase();
            if (li.indexOf(filter) > -1) {
                lis[i].style.display = "";
            } else {
                lis[i].style.display = "none";
            }
        }
    }
</script>

