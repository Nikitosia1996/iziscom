<?php

include '../../connection/connection.php';

$haractObject = json_decode($_POST['haractObject'], true);  // классы
$ishod = json_decode($_POST['ishod'], true);
$obmerObject = json_decode($_POST['obmerObject'], true);
$obsledObject = json_decode($_POST['obsledObject'], true);
$sostTechObject = json_decode($_POST['sostTechObject'], true);

$zdanie = isset($haractObject['zdanie']) ? $haractObject['zdanie'] : null;
$typeZdanie = isset($haractObject['typeZdanie']) ? $haractObject['typeZdanie'] : null;
$stage = $haractObject['stage'] != "" ? $haractObject['stage'] : 0;
$height = $haractObject['height'] != "" ? $haractObject['height'] : 0;
$obem = $haractObject['obem'] != "" ? $haractObject['obem'] : 0;
$height_pol = $haractObject['height_pol'] != "" ? $haractObject['height_pol'] : 0;
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
$hardZdanie = isset($haractObject['hardZdanie']) ? $haractObject['hardZdanie'] : 0;


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
$selectedButrad = isset($ishod['selectedButrad']) ? $ishod['selectedButrad'] : null;


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
$obsledobs = isset($obsledObject['obsledobs']) ? $obsledObject['obsledobs'] : null;

$toggleZd61 = isset($sostTechObject['toggleZd61']) ? $sostTechObject['toggleZd61'] : null;
$toggleZd62 = isset($sostTechObject['toggleZd62']) ? $sostTechObject['toggleZd62'] : null;
$toggleZd63 = isset($sostTechObject['toggleZd63']) ? $sostTechObject['toggleZd63'] : null;
$toggleZd64 = isset($sostTechObject['toggleZd64']) ? $sostTechObject['toggleZd64'] : null;
$toggleZd65 = isset($sostTechObject['toggleZd65']) ? $sostTechObject['toggleZd65'] : null;
$toggleZd66 = isset($sostTechObject['toggleZd66']) ? $sostTechObject['toggleZd66'] : null;
$toggleZd67 = isset($sostTechObject['toggleZd67']) ? $sostTechObject['toggleZd67'] : null;
$toggleZd68 = isset($sostTechObject['toggleZd68']) ? $sostTechObject['toggleZd68'] : null;
$toggleZd69 = isset($sostTechObject['toggleZd69']) ? $sostTechObject['toggleZd69'] : null;
$choosCunstruct6 = isset($sostTechObject['choosCunstruct6']) ? $sostTechObject['choosCunstruct6'] : null;
$conval61 = isset($sostTechObject['conval61']) ? $sostTechObject['conval61'] : null;
$conval62 = isset($sostTechObject['conval62']) ? $sostTechObject['conval62'] : null;
$conval63 = isset($sostTechObject['conval63']) ? $sostTechObject['conval63'] : null;
$conval64 = isset($sostTechObject['conval64']) ? $sostTechObject['conval64'] : null;
$conval65 = isset($sostTechObject['conval65']) ? $sostTechObject['conval65'] : null;
$conval66 = isset($sostTechObject['conval66']) ? $sostTechObject['conval66'] : null;
$conval67 = isset($sostTechObject['conval67']) ? $sostTechObject['conval67'] : null;
$conval68 = isset($sostTechObject['conval68']) ? $sostTechObject['conval68'] : null;
$conval69 = isset($sostTechObject['conval69']) ? $sostTechObject['conval69'] : null;
$zaklSostStr = isset($sostTechObject['selectedSosttech']) ? $sostTechObject['selectedSosttech'] : null;



$id_zakazchik = isset($_POST['id_zakazchik']) ? $_POST['id_zakazchik'] : null;
$id_podryadchik = isset($_POST['id_podryadchik']) ? $_POST['id_podryadchik'] : null;
$textAreaNaimRabot = isset($_POST['textAreaNaimRabot']) ? $_POST['textAreaNaimRabot'] : null;
$textAreaCel = isset($_POST['textAreaCel']) ? $_POST['textAreaCel'] : null;
$textAreaMestoObj = isset($_POST['textAreaMestoObj']) ? $_POST['textAreaMestoObj'] : null;
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
    $sql = "update smets set  `name` = '$smetaName',`id_zakazchik`='$id_zakazchik', `id_podryadchik`='$id_podryadchik', `date_nach_rab`='$dateNachRab', `date_okonch_rab`='$dateOkonchRab', textAreaNaimRabot = '$textAreaNaimRabot', textAreaCel = '$textAreaCel', textAreaMestoObj = '$textAreaMestoObj'  
            where id_smeta = '$id'";
    mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);

    $sql = "UPDATE haract_object SET
                         radio_zdanie = '$hardZdanie',
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

    mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);


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
    choosCunstruct = '" . $ishod['choosCunstruct'] . "',
    pasport_na_zdanie = '$selectedButrad'
WHERE id_smeta = '$id'";
    mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);


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

    mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);

    $sql = "UPDATE obsled_raboty SET
    predvOsmotr = '" . $obsledobs . "',
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

    mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);

    $sql = "UPDATE sost_tech_otchet SET
    zaklSostStr = '$zaklSostStr',
      toggleZd61 = '" . $toggleZd61 . "',
    toggleZd62 = '" . $toggleZd62 . "',
    toggleZd63 = '" . $toggleZd63 . "',
    toggleZd64 = '" . $toggleZd64 . "',
    toggleZd65 = '" . $toggleZd65 . "',
    toggleZd66 = '" . $toggleZd66 . "',
    toggleZd67 = '" . $toggleZd67 . "',
    toggleZd68 = '" . $toggleZd68 . "',
    toggleZd69 = '" . $toggleZd69 . "',
    conval61 = '" . $conval61 . "',
    conval62 = '" . $conval62 . "',
    conval63 = '" . $conval63 . "',
    conval64 = '" . $conval64 . "',
    conval65 = '" . $conval65 . "',
    conval66 = '" . $conval66 . "',
    conval67 = '" . $conval67 . "',
    conval68 = '" . $conval68 . "',
    conval69 = '" . $conval69 . "',
    choosCunstruct6 = '" . $choosCunstruct6 . "'
WHERE id_smeta = '$id'";

    mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);

    echo $id;

} else {
    $sql = "INSERT INTO smets (`name`, `id_zakazchik`, `id_podryadchik`, `date_nach_rab`, `date_okonch_rab`, textAreaNaimRabot, textAreaCel, textAreaMestoObj) VALUES ('$smetaName', '$id_zakazchik', '$id_podryadchik', '$dateNachRab', '$dateOkonchRab' , '$textAreaNaimRabot', '$textAreaCel', '$textAreaMestoObj')";
    if (mysqli_query($connectionDB->con, $sql)) {
        $insertedId = mysqli_insert_id($connectionDB->con);

        $sql = "INSERT INTO haract_object (
                           radio_zdanie ,
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
    '$hardZdanie',
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
        mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);


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
    choosCunstruct,
    pasport_na_zdanie
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
    '{$ishod['choosCunstruct']}',
    '{$selectedButrad}'
)";

        mysqli_query($connectionDB->con, $sql)   or mysqli_error($connectionDB->con);

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
    choosCunstruct4
) VALUES (
    '{$obmerobs}',
    '{$toggleZd41}',
    '{$toggleZd42}',
    '{$toggleZd43}',
    '{$toggleZd44}',
    '{$toggleZd45}',
    '{$toggleZd46}',
    '{$toggleZd48}',
    '{$toggleZd49}',
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

        mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);

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

        mysqli_query($connectionDB->con, $sql)  or mysqli_error($connectionDB->con);

        $sql = "INSERT INTO sost_tech_otchet (
    zaklSostStr,
    toggleZd61,
    toggleZd62,
    toggleZd63,
    toggleZd64,
    toggleZd65,
    toggleZd66,
    toggleZd67,
    toggleZd68,
    toggleZd69,
    conval61,
    conval62,
    conval63,
    conval64,
    conval65,
    conval66,
    conval67,
    conval68,
    conval69,
    id_smeta,
    choosCunstruct6
) VALUES (
    '{$zaklSostStr}',
    '{$toggleZd61}',
    '{$toggleZd62}',
    '{$toggleZd63}',
           '{$toggleZd64}',
           '{$toggleZd65}',
           '{$toggleZd66}',
           '{$toggleZd67}',
           '{$toggleZd68}',
           '{$toggleZd69}',
           '{$conval61}',
           '{$conval62}',
           '{$conval63}',
           '{$conval64}',
           '{$conval65}',
           '{$conval66}',
           '{$conval67}',
           '{$conval68}',
           '{$conval69}',
           '$insertedId',
           '{$choosCunstruct6}'
)";

        mysqli_query($connectionDB->con, $sql) or mysqli_error($connectionDB->con);
    }
    echo $insertedId;

}
