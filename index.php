<?php require_once 'connection/connection.php';
require_once 'app/classes/UsersList.php';
include "app/constants/cookie.php";
include 'app/auth/auth.php';
include 'app/auth/out.php';


if (isset($TOKEN)) {
    if ($usersList->getUser($TOKEN))
        $login = $usersList->getUser($TOKEN)->getLogin();
    else {
        $login = "";
    }
} else {
    $login = "";
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ панель</title>

    <?php include "app/elements/links.php";?>

</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">

    <?php include "app/elements/navmenu.php"; ?>

    <div class="body-wrapper">

        <?php include "app/elements/header.php"; ?>
        <?php include "app/pages/main.php"; ?>
    </div>

    <?php include "app/elements/scripts.php";?>

</body>

<script>
    $('a').on('click', function(e) {
        e.preventDefault();
        let url;
        var page = $(this).attr('data-page');
        switch (page) {
            case 'main':
                url = "app/pages/main.php";
                break;
            case 'oborud':
                url = "app/pages/oborudovanie.php";
                break;
            default:
                url = "app/pages/main.php";
                break;
        }
        $.ajax({
            url: url,
        }).done(response => {
            $('.app-header').nextAll().remove().end().after(response);
        });
    });
</script>

</html>