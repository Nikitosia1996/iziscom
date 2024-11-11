<?php
echo '
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Управление заказчиками</title>
    <style>
        body {
            background-color: #f4f7fa;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .card {
            margin-bottom: 20px;
        }
        .header {
            background-color: #f8f8f8;
            color: black; /* Изменено на черный для лучшей видимости текста */
            padding: 20px;
            border-radius: 5px 5px 0 0;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container-fluid mt-5"> <!-- Изменено на container-fluid -->
    <div class="header text-center">
        <h1>Управление заказчиками</h1>
        <button class="btn btn-custom" data-toggle="modal" data-target="#addZakazchikModal">Добавить заказчика</button>
    </div>

    <div class="modal fade" id="addZakazchikModal" tabindex="-1" role="dialog" aria-labelledby="addZakazchikModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addZakazchikModalLabel">Добавить заказчика</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addZakazchikForm">
                        <div class="form-group">
                            <label for="nameZakazchik">Наименование Заказчика <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nameZakazchik" required>
                        </div>
                        <div class="form-group">
                            <label for="dolzhnostIP">Должность ИП:</label>
                            <input type="text" class="form-control" id="dolzhnostIP">
                        </div>
                        <div class="form-group">
                            <label for="dolzhnostRP">Должность РП:</label>
                            <input type="text" class="form-control" id="dolzhnostRP">
                        </div>
                        <div class="form-group">
                            <label for="fioIP">ФИО ИП:</label>
                            <input type="text" class="form-control" id="fioIP">
                        </div>
                        <div class="form-group">
                            <label for="fioRP">ФИО РП:</label>
                            <input type="text" class="form-control" id="fioRP">
                        </div>
                        <div class="form-group">
                            <label for="osnovanie">Основание:</label>
                            <input type="text" class="form-control" id="osnovanie">
                        </div>
                        <div class="form-group">
                            <label for="rekvizit">Реквизит:</label>
                            <input type="text" class="form-control" id="rekvizit">
                        </div>
                        <div class="form-group">
                            <label for="contact">Контакт:</label>
                            <input type="text" class="form-control" id="contact">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pochtaIndex">Почтовый индекс:</label>
                            <input type="text" class="form-control" id="pochtaIndex">
                        </div>
                        <div class="form-group">
                            <label for="primechanie">Примечание:</label>
                            <textarea class="form-control" id="primechanie"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить заказчика</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <h3>Список заказчиков</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID Заказчика</th>
                    <th>Наименование Заказчика</th>
                    <th>Должность ИП</th>
                    <th>Должность РП</th>
                    <th>ФИО ИП</th>
                    <th>ФИО РП</th>
                    <th>Основание</th>
                    <th>Реквизит</th>
                    <th>Контакт</th>
                    <th>Email</th>
                    <th>Почтовый индекс</th>
                    <th>Примечание</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>';
$query = "SELECT * FROM zakazchik;";
$result = $connectionDB->executeQuery($query);
if ($connectionDB->getNumRows($result) == 0) {
    echo '<tr><td colspan="13" class="text-center">Данные недоступны.</td></tr>';
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $id_zakazchik = $row['id_zakazchik'];
        echo '<tr data-id=' . $id_zakazchik . '>';
        echo '<td>' . $id_zakazchik . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'nameZakazchik\', ' . $id_zakazchik . ')">' . $row['nameZakazchik'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'dolzhnostIP\', ' . $id_zakazchik . ')">' . $row['dolzhnostIP'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'dolzhnostRP\', ' . $id_zakazchik . ')">' . $row['dolzhnostRP'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'fioIP\', ' . $id_zakazchik . ')">' . $row['fioIP'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'fioRP\', ' . $id_zakazchik . ')">' . $row['fioRP'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'osnovanie\', ' . $id_zakazchik . ')">' . $row['osnovanie'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'rekvizit\', ' . $id_zakazchik . ')">' . $row['rekvizit'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'contact\', ' . $id_zakazchik . ')">' . $row['contact'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'email\', ' . $id_zakazchik . ')">' . $row['email'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'pochtaIndex\', ' . $id_zakazchik . ')">' . $row['pochtaIndex'] . '</td>';
        echo '<td contenteditable="true" onblur="saveField(event, \'primechanie\', ' . $id_zakazchik . ')">' . $row['primechanie'] . '</td>';
        echo '<td><button class="btn btn-danger" onclick="deleteZakazchik(' . $id_zakazchik . ')">&#10060;</button></td>';
        echo '</tr>';
    }
}
echo ' 
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $("#addZakazchikForm").on("submit", function(event) {
            event.preventDefault();
            const formData = {
                nameZakazchik: $("#nameZakazchik").val(),
                dolzhnostIP: $("#dolzhnostIP").val(),
                dolzhnostRP: $("#dolzhnostRP").val(),
                fioIP: $("#fioIP").val(),
                fioRP: $("#fioRP").val(),
                osnovanie: $("#osnovanie").val(),
                rekvizit: $("#rekvizit").val(),
                contact: $("#contact").val(),
                email: $("#email").val(),
                pochtaIndex: $("#pochtaIndex").val(),
                primechanie: $("#primechanie").val()
            };

            $.ajax({
                url: "app/ajax/addZakazchik.php",
                method: "POST",
                data: formData
            }).done(function(response) {
                alert("Заказчик добавлен.");
                location.reload(); // Обновляем страницу после добавления
            }).fail(function() {
                alert("Ошибка при добавлении заказчика.");
            });
        });
    });

    function saveField(event, fieldName, id_zakazchik) {
        const newValue = event.target.innerText;
        $.ajax({
            url: "app/ajax/updateZakazchik.php",
            method: "POST",
            data: { 
                id_zakazchik: id_zakazchik,
                field: fieldName,
                value: newValue
            }
        }).done(function(response) {
            alert("Данные обновлены.");
        }).fail(function() {
            alert("Ошибка при обновлении данных.");
        });
    }

    function deleteZakazchik(id_zakazchik) {
        if (confirm("Вы уверены, что хотите удалить заказчика?")) {
            $.ajax({
                url: "app/ajax/deleteZakazchik.php",
                method: "POST",
                data: { id_zakazchik: id_zakazchik }
            }).done(function (response) {
                alert("Заказчик удален.");
                location.reload();
            }).fail(function() {
                alert("Ошибка при удалении заказчика.");
            });
        }
    }
</script>
</body>
</html>
';
?>
