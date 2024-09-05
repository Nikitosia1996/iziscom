<?php
include '../../connection/connection.php';
$pasport_zdanie = $_POST['pasportZD'];
$hard_zdanie = $_POST['hardZdanie'];
$visota_zdanie = $_POST['valVisZd'];

$query = "SELECT * FROM table_ishod_dannih where pasport_zdanie ='$pasport_zdanie'and hard_zdanie ='$hard_zdanie' and visota_zdanie = '$visota_zdanie' ";
$result = mysqli_query($connectionDB->con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row['ishod_value'];
}

?>