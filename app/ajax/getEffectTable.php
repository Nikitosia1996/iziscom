<?php
include "../../connection/connection.php";
if (!$connectionDB) {
    die("Connection failed: " . mysqli_connect_error());
}
$id_oborudovanie = $_GET['id_oborudovanie'];
$sql = "SELECT * FROM use_efficiency where id_oborudovanie = '$id_oborudovanie'";
$result = $connectionDB->executeQuery($sql);
if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = array('id_oborudovanie' => $row['id_oborudovanie']
        , 'count_research' => $row['count_research']
        , 'count_patient' => $row['count_patient']
        );
    }
    echo json_encode($data);
} else {
    echo json_encode(array('empty' => true));
}

?>