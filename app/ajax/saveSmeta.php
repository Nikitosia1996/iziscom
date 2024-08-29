<?php

include '../../connection/connection.php';

$haractObject = json_decode($_POST['haractObject'], true);

$zdanie = isset($haractObject['zdanie']) ? $haractObject['zdanie'] : null;
$typeZdanie = isset($haractObject['typeZdanie']) ? $haractObject['typeZdanie'] : null;
$stage = isset($haractObject['stage']) ? $haractObject['stage'] : null;
$height = isset($haractObject['height']) ? $haractObject['height'] : null;
$obem = isset($haractObject['obem']) ? $haractObject['obem'] : null;
$height_pol = isset($haractObject['height_pol']) ? $haractObject['height_pol'] : null;
$temperature = isset($haractObject['temperature']) ? $haractObject['temperature'] : null;
$nasishenost = isset($haractObject['nasishenost']) ? $haractObject['nasishenost'] : null;
$aggresive_vozdeistvie = isset($haractObject['aggresive_vozdeistvie']) ? $haractObject['aggresive_vozdeistvie'] : null;


$checkb1 = isset($haractObject['checkb1']) ? $haractObject['checkb1'] : 0;
$checkb2 = isset($haractObject['checkb2']) ? $haractObject['checkb2'] : 0;
$checkb3 = isset($haractObject['checkb3']) ? $haractObject['checkb3'] : 0;
$checkb4 = isset($haractObject['checkb4']) ? $haractObject['checkb4'] : 0;
$checkb5 = isset($haractObject['checkb5']) ? $haractObject['checkb5'] : 0;
$checkb6 = isset($haractObject['checkb6']) ? $haractObject['checkb6'] : 0;
$checkb7 = isset($haractObject['checkb7']) ? $haractObject['checkb7'] : 0;
$checkb8 = isset($haractObject['checkb8']) ? $haractObject['checkb8'] : 0;
$checkb9 = isset($haractObject['checkb9']) ? $haractObject['checkb9'] : 0;
$checkb10 = isset($haractObject['checkb10']) ? $haractObject['checkb10'] : 0;
$checkb11 = isset($haractObject['checkb11']) ? $haractObject['checkb11'] : 0;
$checkb12 = isset($haractObject['checkb12']) ? $haractObject['checkb12'] : 0;


$id_zakazchik = $_POST['id_zakazchik'];
$id_podryadchik = $_POST['id_podryadchik'];
if ($_POST['dateNachRab'] === "")
    $dateNachRab = "2000-01-01";
else {
    $dateNachRab = $_POST['dateNachRab'];

}
if ($_POST['dateOkonchRab'] === "")
    $dateOkonchRab = '2000-01-01';

else {
    $dateOkonchRab = $_POST['dateOkonchRab'];

}
$smetaName = $_POST['name'];

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $sql = "update smets set `name` = '$smetaName',`id_zakazchik`='$id_zakazchik', `id_podryadchik`='$id_podryadchik', `date_nach_rab`='$dateNachRab', `date_okonch_rab`='$dateOkonchRab'
            where id_smeta = '$id'";
    mysqli_query($connectionDB->con, $sql);

    $sql = "UPDATE haract_object SET
    zdanie = '" . mysqli_real_escape_string($connectionDB->con, $zdanie) . "',
    type_zdanie = '" . mysqli_real_escape_string($connectionDB->con, $typeZdanie) . "',
    stage = '" . mysqli_real_escape_string($connectionDB->con, $stage) . "',
    height = '" . mysqli_real_escape_string($connectionDB->con, $height) . "',
    obem = '" . mysqli_real_escape_string($connectionDB->con, $obem) . "',
    height_pol = '" . mysqli_real_escape_string($connectionDB->con, $height_pol) . "',
    temperature = '" . mysqli_real_escape_string($connectionDB->con, $temperature) . "',
    nasishenost = '" . mysqli_real_escape_string($connectionDB->con, $nasishenost) . "',
    aggresive_vozdeistvie = '" . mysqli_real_escape_string($connectionDB->con, $aggresive_vozdeistvie) . "',
    checkb1 = '" . mysqli_real_escape_string($connectionDB->con, $checkb1) . "',
    checkb2 = '" . mysqli_real_escape_string($connectionDB->con, $checkb2) . "',
    checkb3 = '" . mysqli_real_escape_string($connectionDB->con, $checkb3) . "',
    checkb4 = '" . mysqli_real_escape_string($connectionDB->con, $checkb4) . "',
    checkb5 = '" . mysqli_real_escape_string($connectionDB->con, $checkb5) . "',
    checkb6 = '" . mysqli_real_escape_string($connectionDB->con, $checkb6) . "',
    checkb7 = '" . mysqli_real_escape_string($connectionDB->con, $checkb7) . "',
    checkb8 = '" . mysqli_real_escape_string($connectionDB->con, $checkb8) . "',
    checkb9 = '" . mysqli_real_escape_string($connectionDB->con, $checkb9) . "',
    checkb10 = '" . mysqli_real_escape_string($connectionDB->con, $checkb10) . "',
    checkb11 = '" . mysqli_real_escape_string($connectionDB->con, $checkb11) . "',
    checkb12 = '" . mysqli_real_escape_string($connectionDB->con, $checkb12) . "'
WHERE id_smeta = '$id'";

    mysqli_query($connectionDB->con, $sql);

    echo $id;

} else {
    $sql = "INSERT INTO smets (`name`, `id_zakazchik`, `id_podryadchik`, `date_nach_rab`, `date_okonch_rab`) VALUES ('$smetaName', '$id_zakazchik', '$id_podryadchik', '$dateNachRab', '$dateOkonchRab')";
    if (mysqli_query($connectionDB->con, $sql)) {
        $insertedId = mysqli_insert_id($connectionDB->con);

        $sql = "INSERT INTO haract_object (
    zdanie, 
    type_zdanie, 
    stage, 
    height, 
    obem, 
    height_pol, 
    temperature, 
    nasishenost, 
    aggresive_vozdeistvie, 
    checkb1, 
    checkb2, 
    checkb3, 
    checkb4, 
    checkb5, 
    checkb6, 
    checkb7, 
    checkb8, 
    checkb9, 
    checkb10, 
    checkb11, 
    checkb12,
                           id_smeta
) VALUES (
    '" . mysqli_real_escape_string($connectionDB->con, $zdanie) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $typeZdanie) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $stage) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $height) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $obem) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $height_pol) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $temperature) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $nasishenost) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $aggresive_vozdeistvie) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb1) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb2) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb3) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb4) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb5) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb6) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb7) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb8) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb9) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb10) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb11) . "',
    '" . mysqli_real_escape_string($connectionDB->con, $checkb12) . "',
    '$insertedId'
)";
        mysqli_query($connectionDB->con, $sql);
    }
    echo $insertedId;

}
