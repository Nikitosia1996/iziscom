<?php
include '../../connection/connection.php';
$kat_sl_zd = $_POST['kat_sl_zd'] ?? '';
$kat_sl_rab = $_POST['kat_sl_rab'] ?? '';
$vysota = $_POST['vysota'] ?? '';
$etazh = $_POST['etazh'] ?? '';

if (empty($kat_sl_zd) || empty($kat_sl_rab) || empty($vysota)) {
    echo 0;
} else{

    if ($etazh < 2)
        $nametable = 'table2_5';
    else
        $nametable = 'table2_6';

        $query = "SELECT * FROM $nametable where kat_sl_zd ='$kat_sl_zd'and kat_sl_rab ='$kat_sl_rab' and vysota = '$vysota' ";
$result = mysqli_query($connectionDB->con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row['koef'];
}
else {
    echo 1;
}
}

?>