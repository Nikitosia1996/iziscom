<?php
include "../../connection/connection.php";
if (!$connectionDB) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['id_oborudovanie'])) {
    $id_oborudovanie = $_POST['id_oborudovanie'];
    $sql = "DELETE from oborudovanie where id_oborudovanie = '$id_oborudovanie'";
    $result = $connectionDB->executeQuery($sql);
    echo "Запись успешно удалена.";
}else {
    echo "id_oborudovanie не предоставлен.";
}

