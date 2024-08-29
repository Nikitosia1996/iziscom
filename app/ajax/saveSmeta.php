<?php

include '../../connection/connection.php';

$haractObject = json_decode($_POST['haractObject'], true);
$ishod = json_decode($_POST['ishod'], true);

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


$toggleZd1 = isset($ishod['toggleZd1']) ? $ishod['toggleZd1'] : null;
$toggleZd2 = isset($ishod['toggleZd2']) ? $ishod['toggleZd2'] : null;
$toggleZd3 = isset($ishod['toggleZd3']) ? $ishod['toggleZd3'] : null;
$toggleZd4 = isset($ishod['toggleZd4']) ? $ishod['toggleZd4'] : null;
$toggleZd5 = isset($ishod['toggleZd5']) ? $ishod['toggleZd5'] : null;
$toggleZd6 = isset($ishod['toggleZd6']) ? $ishod['toggleZd6'] : null;
$toggleZd7 = isset($ishod['toggleZd7']) ? $ishod['toggleZd7'] : null;
$toggleZd8 = isset($ishod['toggleZd8']) ? $ishod['toggleZd8'] : null;
$toggleZd9 = isset($ishod['toggleZd9']) ? $ishod['toggleZd9'] : null;

$conval1 = isset($ishod['conval1']) ? $ishod['conval1'] : null;
$conval2 = isset($ishod['conval2']) ? $ishod['conval2'] : null;
$conval3 = isset($ishod['conval3']) ? $ishod['conval3'] : null;
$conval4 = isset($ishod['conval4']) ? $ishod['conval4'] : null;
$conval5 = isset($ishod['conval5']) ? $ishod['conval5'] : null;
$conval6 = isset($ishod['conval6']) ? $ishod['conval6'] : null;
$conval7 = isset($ishod['conval7']) ? $ishod['conval7'] : null;
$conval8 = isset($ishod['conval8']) ? $ishod['conval8'] : null;
$conval9 = isset($ishod['conval9']) ? $ishod['conval9'] : null;


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
    zdanie = '$zdanie',
    type_zdanie = '$typeZdanie',
    stage = '$stage',
    height = '$height',
    obem = '$obem',
    height_pol = '$height_pol',
    temperature = '$temperature',
    nasishenost = '$nasishenost',
    aggresive_vozdeistvie = '$aggresive_vozdeistvie',
    checkb1 = '$checkb1',
    checkb2 = '$checkb2',
    checkb3 = '$checkb3',
    checkb4 = '$checkb4',
    checkb5 = '$checkb5',
    checkb6 = '$checkb6',
    checkb7 = '$checkb7',
    checkb8 = '$checkb8',
    checkb9 = '$checkb9',
    checkb10 = '$checkb10',
    checkb11 = '$checkb11',
    checkb12 = '$checkb12'
WHERE id_smeta = '$id'";

    mysqli_query($connectionDB->con, $sql);


    $sql = "UPDATE sbor_ishod_value SET
    toggleZd1 = '" . $ishod['toggleZd1'] . "',
    toggleZd2 = '" . $ishod['toggleZd2'] . "',
    toggleZd3 = '" . $ishod['toggleZd3'] . "',
    toggleZd4 = '" . $ishod['toggleZd4'] . "',
    toggleZd5 = '" . $ishod['toggleZd5'] . "',
    toggleZd6 = '" . $ishod['toggleZd6'] . "',
    toggleZd7 = '" . $ishod['toggleZd7'] . "',
    toggleZd8 = '" . $ishod['toggleZd8'] . "',
    toggleZd9 = '" . $ishod['toggleZd9'] . "',
    conval1 = '" . $ishod['conval1'] . "',
    conval2 = '" . $ishod['conval2'] . "',
    conval3 = '" . $ishod['conval3'] . "',
    conval4 = '" . $ishod['conval4'] . "',
    conval5 = '" . $ishod['conval5'] . "',
    conval6 = '" . $ishod['conval6'] . "',
    conval7 = '" . $ishod['conval7'] . "',
    conval8 = '" . $ishod['conval8'] . "',
    conval9 = '" . $ishod['conval9'] . "'
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
    '$zdanie',
    '$typeZdanie',
    '$stage',
    '$height',
    '$obem',
    '$height_pol',
    '$temperature',
    '$nasishenost',
    '$aggresive_vozdeistvie',
    '$checkb1',
    '$checkb2',
    '$checkb3',
    '$checkb4',
    '$checkb5',
    '$checkb6',
    '$checkb7',
    '$checkb8',
    '$checkb9',
    '$checkb10',
    '$checkb11',
    '$checkb12',
    '$insertedId'
)";
        mysqli_query($connectionDB->con, $sql);


        $sql = "INSERT INTO sbor_ishod_value (
    toggleZd1,
    toggleZd2,
    toggleZd3,
    toggleZd4,
    toggleZd5,
    toggleZd6,
    toggleZd7,
    toggleZd8,
    toggleZd9,
    conval1,
    conval2,
    conval3,
    conval4,
    conval5,
    conval6,
    conval7,
    conval8,
    conval9,
    id_smeta
) VALUES (
    '{$ishod['toggleZd1']}',
    '{$ishod['toggleZd2']}',
    '{$ishod['toggleZd3']}',
    '{$ishod['toggleZd4']}',
    '{$ishod['toggleZd5']}',
    '{$ishod['toggleZd6']}',
    '{$ishod['toggleZd7']}',
    '{$ishod['toggleZd8']}',
    '{$ishod['toggleZd9']}',
    '{$ishod['conval1']}',
    '{$ishod['conval2']}',
    '{$ishod['conval3']}',
    '{$ishod['conval4']}',
    '{$ishod['conval5']}',
    '{$ishod['conval6']}',
    '{$ishod['conval7']}',
    '{$ishod['conval8']}',
    '{$ishod['conval9']}',
    '$insertedId'
)";

        mysqli_query($connectionDB->con, $sql);

    }
    echo $insertedId;

}
