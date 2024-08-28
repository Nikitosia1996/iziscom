<?php

include '../../connection/connection.php';

$id_zakazchik = $_POST['id_zakazchik'];
$id_podryadchik = $_POST['id_podryadchik'];
if($_POST['dateNachRab']==="")
    $dateNachRab = "2000-01-01";
else{
    $dateNachRab = $_POST['dateNachRab'];

}
if($_POST['dateOkonchRab']==="")
    $dateOkonchRab = '2000-01-01';

else{
    $dateOkonchRab = $_POST['dateOkonchRab'];

}
$smetaName = $_POST['name'];

if(isset($_POST['id'])){

    $id = $_POST['id'];
    $sql = "update smets set `name` = '$smetaName',`id_zakazchik`='$id_zakazchik', `id_podryadchik`='$id_podryadchik', `date_nach_rab`='$dateNachRab', `date_okonch_rab`='$dateOkonchRab'
            where id_smeta = '$id'";
    mysqli_query($connectionDB->con, $sql);
    echo $id;
}
else {
    $sql = "INSERT INTO smets (`name`, `id_zakazchik`, `id_podryadchik`, `date_nach_rab`, `date_okonch_rab`) VALUES ('$smetaName', '$id_zakazchik', '$id_podryadchik', '$dateNachRab', '$dateOkonchRab')";
    if (mysqli_query($connectionDB->con, $sql)) {
        $insertedId = mysqli_insert_id($connectionDB->con);
    }
    echo $insertedId;

}
