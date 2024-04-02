<?php ?>

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card overflow-hidden">
                <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Статистика по договорам</h5>
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="fw-semibold mb-3">Всего договоров</h4>
                            <div class="d-flex align-items-center mb-3">
                                <?php
                                $result = mysqli_query($con, "SELECT count(*) as countAll FROM a_agreements");
                                $row = mysqli_fetch_assoc($result);
                                $countAll = $row['countAll'];

                                $result = mysqli_query($con, "SELECT count(*) as countZakl FROM a_agreements where ready = 1;");
                                $row = mysqli_fetch_assoc($result);
                                $countZakl = $row['countZakl'];
                                ?>
                            </div>
                            <canvas id="doughnutChart1" style="height: 250px;display: none;width: 299px;" width="350"
                                    height="200"></canvas>
                            <script>
                                let ll1 = <?= $countAll ?>;
                                let ll2 = <?= $countZakl ?>;
                                document.getElementById('doughnutChart1').setAttribute('attr1', ll1);
                                document.getElementById('doughnutChart1').setAttribute('attr2', ll2);
                            </script>
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                    <span class="fs-2">заключено: <?= $countZakl ?></span>
                                </div>
                                <div>
                                    <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                    <span class="fs-2">не заключено: <?= $countAll - $countZakl ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="breakup"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
                <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Статистика по заказам</h5>
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="d-flex align-items-center mb-3">
                                <?php
                                $result = mysqli_query($con, "SELECT count(*) as countDveri FROM a_agreement_type_work where id_type_work = 2");
                                $row = mysqli_fetch_assoc($result);
                                $countDveri = $row['countDveri'];

                                $result = mysqli_query($con, "SELECT count(*) as countOkna FROM a_agreement_type_work where id_type_work = 1");
                                $row = mysqli_fetch_assoc($result);
                                $countOkna = $row['countOkna'];

                                $result = mysqli_query($con, "SELECT count(*) as countZabor FROM a_agreement_type_work where id_type_work = 3");
                                $row = mysqli_fetch_assoc($result);
                                $countZabor = $row['countZabor'];

                                $result = mysqli_query($con, "SELECT count(*) as countKrish FROM a_agreement_type_work where id_type_work = 4");
                                $row = mysqli_fetch_assoc($result);
                                $countKrish = $row['countKrish'];
                                ?>
                                <canvas id="doughnutChart2" style="height: 250px;display: none;width: 299px;"
                                        width="350" height="200"></canvas>
                                <script>
                                    let zz1 = <?= $countDveri ?>;
                                    let zz2 = <?= $countOkna ?>;
                                    let zz3 = <?= $countZabor ?>;
                                    let zz4 = <?= $countKrish ?>;
                                    document.getElementById('doughnutChart2').setAttribute('attr1', zz1);
                                    document.getElementById('doughnutChart2').setAttribute('attr2', zz2);
                                    document.getElementById('doughnutChart2').setAttribute('attr3', zz3);
                                    document.getElementById('doughnutChart2').setAttribute('attr4', zz4);
                                </script>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <span class="round-8  rounded-circle me-2 d-inline-block"
                                          style="background-color:rgb(231 90 215) !important"></span>
                                    <span class="fs-2">Двери <?= $countDveri ?></span>
                                </div>
                                <div class="me-4">
                                    <span class="round-8  rounded-circle me-2 d-inline-block"
                                          style="background-color:rgb(243 4 57) !important;"></span>
                                    <span class="fs-2">Окна <?= $countOkna ?></span>
                                </div>
                                <div class="me-4">
                                    <span class="round-8  rounded-circle me-2 d-inline-block"
                                          style="background-color:rgb(9 225 252) !important"></span>
                                    <span class="fs-2">Заборы <?= $countZabor ?></span>
                                </div>
                                <div class="me-4">
                                    <span class="round-8  rounded-circle me-2 d-inline-block"
                                          style="background-color:rgb(236 176 35) !important"></span>
                                    <span class="fs-2">Крыши <?= $countKrish ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="breakup1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="justify-content: center;">


        <?php if (isset($role) && $role == "1") { ?>
            <div class="col-lg-6">
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Сумма за текущий месяц</h5>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php
                                $query = "Select sum(money) as sum_money from a_agreements where MONTH(`date`) = MONTH(CURRENT_DATE) AND YEAR(`date`) = YEAR(CURRENT_DATE); ";
                                $rez1 = mysqli_query($con, $query) or die("Ошибка ". mysqli_error($con));
                                if (mysqli_num_rows($rez1) == 1) //если нашлась одна строка, значит такой юзер существует в базе данных
                                {
                                    $row1 = mysqli_fetch_assoc($rez1);
                                    $count_str = $row1['sum_money'];
                                }
                                ?>
                                <h4 id="sum_money" class="fw-semibold mb-3"><?= $count_str ?> р.</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <select class="form-select me-3" id="month">
                                        <option value="1" <?php if(date('m') == 1) echo 'selected'; ?>>Январь</option>
                                        <option value="2" <?php if(date('m') == 2) echo 'selected'; ?>>Февраль</option>
                                        <option value="3" <?php if(date('m') == 3) echo 'selected'; ?>>Март</option>
                                        <option value="4" <?php if(date('m') == 4) echo 'selected'; ?>>Апрель</option>
                                        <option value="5" <?php if(date('m') == 5) echo 'selected'; ?>>Май</option>
                                        <option value="6" <?php if(date('m') == 6) echo 'selected'; ?>>Июнь</option>
                                        <option value="7" <?php if(date('m') == 7) echo 'selected'; ?>>Июль</option>
                                        <option value="8" <?php if(date('m') == 8) echo 'selected'; ?>>Август</option>
                                        <option value="9" <?php if(date('m') == 9) echo 'selected'; ?>>Сентябрь</option>
                                        <option value="10" <?php if(date('m') == 10) echo 'selected'; ?>>Октябрь</option>
                                        <option value="11" <?php if(date('m') == 11) echo 'selected'; ?>>Ноябрь</option>
                                        <option value="12" <?php if(date('m') == 12) echo 'selected'; ?>>Декабрь</option>

                                    </select>
                                    <select class="form-select" id="year">
                                        <?php
                                        $currentYear = date('Y');
                                        for ($i = $currentYear - 2; $i <= $currentYear + 2; $i++) {
                                            echo '<option value="' . $i . '" ' . ($i == $currentYear ? 'selected' : '') . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

        <div class="col-lg-6">
            <div class="card overflow-hidden">
                <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Количество клиентов</h5>
                    <div class="row align-items-center">
                        <div class="col-8">
                            <?php
                            $query = "Select count(id_contact) as count_str from a_contacts";
                            $rez1 = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
                            if (mysqli_num_rows($rez1) == 1) //если нашлась одна строка, значит такой юзер существует в базе данных
                            {
                                $row1 = mysqli_fetch_assoc($rez1);
                                $count_str = $row1['count_str'];

                            }
                            ?>
                            <h4 class="fw-semibold mb-3"><?= $count_str ?></h4>
                            <div class="d-flex align-items-center mb-3">


                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-4">

                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4"><a href="#" target="_blank" class="pe-1 text-primary text-decoration-underline"></a> <a
                    href="#"></a></p>
    </div>
</div>
</div>

<script>
    document.getElementById('month').addEventListener('change', updateSum);
    document.getElementById('year').addEventListener('change', updateSum);

    function updateSum() {
        var month = document.getElementById('month').value;
        var year = document.getElementById('year').value;

        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'update_sum.php?month=' + month + '&year=' + year, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    document.getElementById('sum_money').textContent = xhr.responseText + ' р.';
                }
            }
        };

        xhr.send();
    }
</script>


