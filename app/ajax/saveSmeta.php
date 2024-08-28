<?php

include '../classes/SmetaList.php';

$id_zakazchik = $_POST['id_zakazchik'];
$id_podryadchik = $_POST['id_podryadchik'];
$dateNachRab = $_POST['dateNachRab'];
$dateOkonchRab = $_POST['dateOkonchRab'];
$smetaName = $_POST['smetaName'];

if(isset($_POST['id'])){
    $id = $_POST['id'];
    return $smetaList->updateSmeta($id,$smetaName,$id_zakazchik,$id_podryadchik,$dateNachRab,$dateOkonchRab);
}
else {
    return $smetaList->pushSmeta($smetaName, $id_zakazchik, $id_podryadchik, $dateNachRab, $dateOkonchRab);
}
