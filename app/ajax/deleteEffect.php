<?php
include "../../connection/connection.php";
if (!$connectionDB) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['id_use_efficiency'])) {
    $id_use_efficiency = $_POST['id_use_efficiency'];
    $sql = "DELETE from use_efficiency where id_use_efficiency = '$id_use_efficiency'";
    $result = $connectionDB->executeQuery($sql);
    echo "Запись успешно удалена.";
}else {
    echo "id_use_efficiency не предоставлен.";
}

