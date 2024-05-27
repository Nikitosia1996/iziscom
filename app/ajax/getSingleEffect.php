<?php
include "../../connection/connection.php";
if (!$connectionDB) {
    die("Connection failed: " . mysqli_connect_error());
}
$id_use_efficiency = $_GET['id_use_efficiency'];
$sql = "SELECT * FROM use_efficiency where id_use_efficiency = '$id_use_efficiency'";
$result = $connectionDB->executeQuery($sql);
if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data = ['date_fault' => $row['date_fault']
        , 'count_research' => $row['count_research']
        , 'count_patient' => $row['count_patient']
        ];
    }
    echo json_encode($data);
} else {
    echo json_encode(array('empty' => true));
}

?>