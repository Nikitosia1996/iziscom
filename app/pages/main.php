<?php


?>
<style>


    .card1 {
        cursor: pointer;
        height: 100px;
        background-size: cover;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        padding-left: 20px;
        justify-content: center;
        /* text-align: center; */
        color: black;
        transition: all 0.5s ease-in;
        width: 700px;
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: aliceblue;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card {
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
        margin-bottom: 1rem;
        left: 27%;
    }

    .card:hover{
        background-color: #bbd0e3;
    }

    .card1 h2 {
        text-align: center;
        margin-top: 20px;
    }

</style>

<section class="col-lg-12 connectedSortable ui-sortable" style="margin-top: 90px">

    <div class="row">
        <div class="card card1" onclick="location.href='index.php?minsk'"
        >
            <h2>г. Минск</h2>
        </div>
    </div>
    <div class="row">
        <div class="card card1" onclick="location.href='index.php?minskobl'"
        >
            <h2>Минская область</h2>
        </div>
    </div>
    <div class="row">
        <div class="card card1" onclick="location.href='index.php?brestobl'"
        >
            <h2>Брестская область</h2>
        </div>
    </div>
    <div class="row">
        <div class="card card1" onclick="location.href='index.php?vitebskoblobl'" >
            <h2>Витебская область</h2>
        </div>
    </div>
    <div class="row">
        <div class="card card1" onclick="location.href='index.php?gomelobl'" >
            <h2>Гомельская область</h2>
        </div>
    </div>
    <div class="row">
        <div class="card card1" onclick="location.href='index.php?grodnoobl'" >
            <h2>Гродненская область</h2>
        </div>
    </div>
    <div class="row">
        <div class="card card1" onclick="location.href='index.php?mogilevobl'" >
            <h2>Могилевская область</h2>
        </div>
    </div>
    <button onclick="sendSms()">
        Тест смс
    </button>
</section>

<script>
    function sendSms() {
        let email = prompt('Введите вашу почту');
        let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Паттерн для проверки формата номера

        if (email && pattern.test(email)) {
            $.ajax({
                type: "POST",
                url: "checkCode.php",
                data: {
                    email: email
                },
                success: function (codeFromDb) {
                    let code = prompt("Введите полученный код");
                    if(code === codeFromDb){
                        alert("Код верный");
                    }
                    else{
                        alert("Код не верный");
                    }
                }
            });
        } else {
            alert('Вы ввели неверный формат почты');
        }

    }
</script>

<!--<div class="container-fluid">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-6">-->
<!--            <table class="table table-striped table-responsive-sm dataTable no-footer" id="myusers" role="grid" aria-describedby="agreementsTable_info">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th>ID</th>-->
<!--                    <th>login</th>-->
<!--                    <th>username</th>-->
<!--                    <th>email</th>-->
<!--                    <th>token</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div class="col-lg-6">-->
<!--            2-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row" style="justify-content: center;">-->
<!---->
<!--        <div class="col-lg-6">-->
<!--            3-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="col-lg-6">-->
<!--            4-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--</div>-->
<!--<script src="js/controllerUsers.js"></script>-->
