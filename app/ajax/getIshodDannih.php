<?php
include '../../connection/connection.php';
$pasport_zdanie = $_POST['pasportZD'] ?? '';
$hard_zdanie = $_POST['hardZdanie'] ?? '';
$visota_zdanie = $_POST['valVisZd'] ?? '';
$etazh = $_POST['etazh'] ?? '';

if (empty($pasport_zdanie) || empty($hard_zdanie) || empty($visota_zdanie)) {
    echo 1;
} else{

    if ($etazh <2 )
        $nametable = 'table_ishod_dannih';
    else
        $nametable = 'table_ishod_dannih_mnogoetazh';

        $query = "SELECT * FROM $nametable where pasport_zdanie ='$pasport_zdanie'and hard_zdanie ='$hard_zdanie' and visota_zdanie = '$visota_zdanie' ";
$result = mysqli_query($connectionDB->con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row['ishod_value'];
}
else {
    echo 1;
}
}

?>