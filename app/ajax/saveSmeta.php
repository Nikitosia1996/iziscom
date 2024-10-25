<?php

include '../../connection/connection.php';

$haractObject = json_decode($_POST['haractObject'], true);  // классы
$ishod = json_decode($_POST['ishod'], true);
$obmerObject = json_decode($_POST['obmerObject'], true);
$obsledObject = json_decode($_POST['obsledObject'], true);

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
$choosCunstruct = isset($ishod['choosCunstruct']) ? $ishod['choosCunstruct'] : null;
$conval1 = isset($ishod['conval1']) ? $ishod['conval1'] : null;
$conval2 = isset($ishod['conval2']) ? $ishod['conval2'] : null;
$conval3 = isset($ishod['conval3']) ? $ishod['conval3'] : null;
$conval4 = isset($ishod['conval4']) ? $ishod['conval4'] : null;
$conval5 = isset($ishod['conval5']) ? $ishod['conval5'] : null;
$conval6 = isset($ishod['conval6']) ? $ishod['conval6'] : null;
$conval7 = isset($ishod['conval7']) ? $ishod['conval7'] : null;
$conval8 = isset($ishod['conval8']) ? $ishod['conval8'] : null;
$conval9 = isset($ishod['conval9']) ? $ishod['conval9'] : null;


$toggleZd41 = isset($obmerObject['toggleZd41']) ? $obmerObject['toggleZd41'] : null;
$toggleZd42 = isset($obmerObject['toggleZd42']) ? $obmerObject['toggleZd42'] : null;
$toggleZd43 = isset($obmerObject['toggleZd43']) ? $obmerObject['toggleZd43'] : null;
$toggleZd44 = isset($obmerObject['toggleZd44']) ? $obmerObject['toggleZd44'] : null;
$toggleZd45 = isset($obmerObject['toggleZd45']) ? $obmerObject['toggleZd45'] : null;
$toggleZd46 = isset($obmerObject['toggleZd46']) ? $obmerObject['toggleZd46'] : null;
$toggleZd48 = isset($obmerObject['toggleZd48']) ? $obmerObject['toggleZd48'] : null;
$toggleZd49 = isset($obmerObject['toggleZd49']) ? $obmerObject['toggleZd49'] : null;
$toggleZd449 = isset($obmerObject['toggleZd449']) ? $obmerObject['toggleZd449'] : null;
$choosCunstruct4 = isset($obmerObject['choosCunstruct4']) ? $obmerObject['choosCunstruct4'] : null;
$conval41 = isset($obmerObject['conval41']) ? $obmerObject['conval41'] : null;
$conval42 = isset($obmerObject['conval42']) ? $obmerObject['conval42'] : null;
$conval43 = isset($obmerObject['conval43']) ? $obmerObject['conval43'] : null;
$conval44 = isset($obmerObject['conval44']) ? $obmerObject['conval44'] : null;
$conval45 = isset($obmerObject['conval45']) ? $obmerObject['conval45'] : null;
$conval46 = isset($obmerObject['conval46']) ? $obmerObject['conval46'] : null;
$conval48 = isset($obmerObject['conval48']) ? $obmerObject['conval48'] : null;
$conval49 = isset($obmerObject['conval49']) ? $obmerObject['conval49'] : null;
$conval449 = isset($obmerObject['conval449']) ? $obmerObject['conval449'] : null;
$obmerobs = isset($obmerObject['obmerobs']) ? $obmerObject['obmerobs'] : null;

$toggleZd51 = isset($obsledObject['toggleZd51']) ? $obsledObject['toggleZd51'] : null;
$toggleZd52 = isset($obsledObject['toggleZd52']) ? $obsledObject['toggleZd52'] : null;
$toggleZd53 = isset($obsledObject['toggleZd53']) ? $obsledObject['toggleZd53'] : null;
$toggleZd54 = isset($obsledObject['toggleZd54']) ? $obsledObject['toggleZd54'] : null;
$toggleZd55 = isset($obsledObject['toggleZd55']) ? $obsledObject['toggleZd55'] : null;
$toggleZd56 = isset($obsledObject['toggleZd56']) ? $obsledObject['toggleZd56'] : null;
$toggleZd57 = isset($obsledObject['toggleZd57']) ? $obsledObject['toggleZd57'] : null;
$toggleZd58 = isset($obsledObject['toggleZd58']) ? $obsledObject['toggleZd58'] : null;
$toggleZd59 = isset($obsledObject['toggleZd59']) ? $obsledObject['toggleZd59'] : null;
$choosCunstruct5 = isset($obsledObject['choosCunstruct5']) ? $obsledObject['choosCunstruct5'] : null;
$conval51 = isset($obsledObject['conval51']) ? $obsledObject['conval51'] : null;
$conval52 = isset($obsledObject['conval52']) ? $obsledObject['conval52'] : null;
$conval53 = isset($obsledObject['conval53']) ? $obsledObject['conval53'] : null;
$conval54 = isset($obsledObject['conval54']) ? $obsledObject['conval54'] : null;
$conval55 = isset($obsledObject['conval55']) ? $obsledObject['conval55'] : null;
$conval56 = isset($obsledObject['conval56']) ? $obsledObject['conval56'] : null;
$conval57 = isset($obsledObject['conval57']) ? $obsledObject['conval57'] : null;
$conval58 = isset($obsledObject['conval58']) ? $obsledObject['conval58'] : null;
$conval59 = isset($obsledObject['conval59']) ? $obsledObject['conval59'] : null;
$obsledobs = isset($obmerObject['obsledobs']) ? $obmerObject['obsledobs'] : null;



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
    conval9 = '" . $ishod['conval9'] . "',
    choosCunstruct = '" . $ishod['choosCunstruct'] . "'
WHERE id_smeta = '$id'";
    mysqli_query($connectionDB->con, $sql);


    $sql = "UPDATE obmernie_raboty SET
    obmerobs = '$obmerobs',
      toggleZd41 = '" . $toggleZd41 . "',
    toggleZd42 = '" . $toggleZd42 . "',
    toggleZd43 = '" . $toggleZd43 . "',
    toggleZd44 = '" . $toggleZd44 . "',
    toggleZd45 = '" . $toggleZd45 . "',
    toggleZd46 = '" . $toggleZd46 . "',
    toggleZd48 = '" . $toggleZd48 . "',
    toggleZd49 = '" . $toggleZd49 . "',
    toggleZd449 = '" . $toggleZd449 . "',
    conval41 = '" . $conval41 . "',
    conval42 = '" . $conval42 . "',
    conval43 = '" . $conval43 . "',
    conval44 = '" . $conval44 . "',
    conval45 = '" . $conval45 . "',
    conval46 = '" . $conval46 . "',
    conval48 = '" . $conval48 . "',
    conval49 = '" . $conval49 . "',
    conval449 = '" . $conval449 . "',
    choosCunstruct4 = '" . $choosCunstruct4 . "'
WHERE id_smeta = '$id'";

    mysqli_query($connectionDB->con, $sql);

    $sql = "UPDATE obsled_raboty SET
    predvOsmotr = '$obsledobs',
      toggleZd51 = '" . $toggleZd51 . "',
    toggleZd52 = '" . $toggleZd52 . "',
    toggleZd53 = '" . $toggleZd53 . "',
    toggleZd54 = '" . $toggleZd54 . "',
    toggleZd55 = '" . $toggleZd55 . "',
    toggleZd56 = '" . $toggleZd56 . "',
    toggleZd57 = '" . $toggleZd57 . "',
    toggleZd58 = '" . $toggleZd58 . "',
    toggleZd59 = '" . $toggleZd59 . "',
    conval51 = '" . $conval51 . "',
    conval52 = '" . $conval52 . "',
    conval53 = '" . $conval53 . "',
    conval54 = '" . $conval54 . "',
    conval55 = '" . $conval55 . "',
    conval56 = '" . $conval56 . "',
    conval57 = '" . $conval57 . "',
    conval58 = '" . $conval58 . "',
    conval59 = '" . $conval59 . "',
    choosCunstruct5 = '" . $choosCunstruct5 . "'
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
    id_smeta,
    choosCunstruct
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
    '$insertedId',
    '{$ishod['choosCunstruct']}'
)";

        mysqli_query($connectionDB->con, $sql);

        $sql = "INSERT INTO obmernie_raboty (
    obmerobs,
    toggleZd41,
    toggleZd42,
    toggleZd43,
    toggleZd44,
    toggleZd45,
    toggleZd46,
    toggleZd48,
    toggleZd49,
    toggleZd449,
    conval41,
    conval42,
    conval43,
    conval44,
    conval45,
    conval46,
    conval48,
    conval49,
    conval449,
    id_smeta,
    choosCunstruct
) VALUES (
    '{$obmerobs}',
    '{$toggleZd41}',
    '{$toggleZd42}',
    '{$toggleZd43}',
    '{$toggleZd44}',
    '{$toggleZd45}',
    '{$toggleZd46}',
    '{$toggleZd48}',
    '{$toggleZd48}',
    '{$toggleZd449}',
    '{$conval41}',
    '{$conval42}',
    '{$conval43}',
    '{$conval44}',
    '{$conval45}',
    '{$conval46}',
    '{$conval48}',
    '{$conval49}',
    '{$conval449}',
    '$insertedId',
    '{$choosCunstruct4}'
)";

        mysqli_query($connectionDB->con, $sql);

        $sql = "INSERT INTO obsled_raboty (
    predvOsmotr,
    toggleZd51,
    toggleZd52,
    toggleZd53,
    toggleZd54,
    toggleZd55,
    toggleZd56,
    toggleZd57,
    toggleZd58,
    toggleZd59,
    conval51,
    conval52,
    conval53,
    conval54,
    conval55,
    conval56,
    conval57,
    conval58,
    conval59,
    id_smeta,
    choosCunstruct5
) VALUES (
    '{$obsledobs}',
    '{$toggleZd51}',
    '{$toggleZd52}',
    '{$toggleZd53}',
           '{$toggleZd54}',
           '{$toggleZd55}',
           '{$toggleZd56}',
           '{$toggleZd57}',
           '{$toggleZd58}',
           '{$toggleZd59}',
           '{$conval51}',
           '{$conval52}',
           '{$conval53}',
           '{$conval54}',
           '{$conval55}',
           '{$conval56}',
           '{$conval57}',
           '{$conval58}',
           '{$conval59}',
           '$insertedId',
           '{$choosCunstruct5}'
)";

        mysqli_query($connectionDB->con, $sql);
    }
    echo $insertedId;

}
