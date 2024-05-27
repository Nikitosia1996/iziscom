<?php
include "../../connection/connection.php";
if (!$connectionDB) {
    die("Connection failed: " . mysqli_connect_error());
}

    $count_research = $_POST['count_research'];
    $count_patient = $_POST['count_patient'];
    $id_oborudovanie = $_POST['id_oborudovanie'];

    $sql = "INSERT INTO use_efficiency (count_research, count_patient,id_oborudovanie)
            VALUES ('$count_research', '$count_patient','$id_oborudovanie')";
    $result = $connectionDB->executeQuery($sql);
    echo "Запись добавлена.";


