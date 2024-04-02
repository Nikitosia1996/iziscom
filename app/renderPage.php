<?php
foreach ($_GET as $key => $value) {
    $value = $key;
    break;
}
if (isset($value)) {

    switch ($value) {
        case 'main':
            include 'pages/main.php';
            break;
        case 'oborud':
            include 'pages/oborudovanie.php';
            break;

    }

} else {
            include 'pages/main.php';
}