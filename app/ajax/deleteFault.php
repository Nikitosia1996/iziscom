<?php
include "../../connection/connection.php";
if (!$connectionDB) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['id_fault'])) {
    $id_fault = $_POST['id_fault'];
    $sql = "DELETE from faults where id_fault = '$id_fault'";
    $result = $connectionDB->executeQuery($sql);
    echo "Запись успешно удалена.";
}else {
    echo "id_fault не предоставлен.";
}

