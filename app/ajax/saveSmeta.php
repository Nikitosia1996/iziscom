<?php

include '../../connection/connection.php';

$id_zakazchik = $_POST['id_zakazchik'];
$id_podryadchik = $_POST['id_podryadchik'];
$dateNachRab = $_POST['dateNachRab'];
$dateOkonchRab = $_POST['dateOkonchRab'];
$smetaName = $_POST['smetaName'];

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "update smets set `id_zakazchik`='$id_zakazchik', `id_podryadchik`='$id_podryadchik', `date_nach_rab`='$dateNachRab', `date_okonch_rab`='$dateOkonchRab'
            where id_smeta = '$id'";
    mysqli_query($con, $sql);
    return $id;
}
else {
    $sql = "INSERT INTO smets (`name`, `id_zakazchik`, `id_podryadchik`, `date_nach_rab`, `date_okonch_rab`) VALUES ('$smetaName', '$id_zakazchik', '$id_podryadchik', '$dateNachRab', '$dateOkonchRab')";
    if (mysqli_query($con, $sql)) {
        $insertedId = mysqli_insert_id($con);
    }
    return $insertedId;
}
