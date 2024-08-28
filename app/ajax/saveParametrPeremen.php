<?php
include '../../connection/connection.php';
$director = $_POST['director'];
$iODirector = $_POST['iODirector'];
$currentIndex = $_POST['currentIndex'];
$nextIndex = $_POST['nextIndex'];
$usnValue = $_POST['usnValue'];
$ndsValue = $_POST['ndsValue'];
$workCost = $_POST['workCost'];
$b14Index = $_POST['b14Index'];

$query = "UPDATE parametr_peremen SET name_director = '$director', name_IOdirector = '$iODirector', index_current_year = '$currentIndex', index_next_year = '$nextIndex', 
          value_usn = '$usnValue', value_nds = '$ndsValue', cost_work14 = '$workCost', analizb14 = '$b14Index'";
$result = mysqli_query($connectionDB->con, $query);

if ($result) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Error updating parameters']);
}
?>