<?php require_once 'connection/connection.php';
include "app/constants/cookie.php";
include 'app/auth/auth.php';
include 'app/auth/out.php'; ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ панель</title>
    <link rel="shortcut icon" type="image/png" href="bootstrap/assets/images/logos/favicon.png"/>
    <link rel="stylesheet" href="bootstrap/assets/css/styles.min.css"/>
    <link rel="stylesheet" href="bootstrap/assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/assets/css/jquery.dataTables.min.css">


</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="index.php" class="text-nowrap logo-img">
                    <img src="" width="180" alt=""/>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="sidebar-item" id="main-page">
                        <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                            <span class="hide-menu">Главная</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="dogovor-page">
                        <a class="sidebar-link" href="index.php?dogovora" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                            <span class="hide-menu">Договора</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="zakaz-page">
                        <a class="sidebar-link" href="index.php?zakaz" aria-expanded="false">
                <span>
                  <i class="ti ti-truck-delivery"></i>
                </span>
                            <span class="hide-menu">Заказы</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php?contacts" aria-expanded="false">
                <span>
                  <i class="ti ti-friends"></i>
                </span>
                            <span class="hide-menu">Клиенты</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php?notes" aria-expanded="false">
                <span>
                  <i class="ti ti-clipboard"></i>
                </span>
                            <span class="hide-menu">Заметки</span>
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>

                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <span style="margin-right: 1rem"><?= isset($LOGIN) ? $LOGIN : 'Гость' ?></span>
                                <?= isset($LOGIN) && $LOGIN === "admin" ? '<img src="bootstrap/assets/images/profile/romaIcon.jpg" alt="" width="35" height="35" class="rounded-circle">' :
                                    '<img src="../bootstrap/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">' ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                 aria-labelledby="drop2">
                                <div class="message-body">
                                    <!--                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">-->
                                    <!--                      <i class="ti ti-user fs-6"></i>-->
                                    <!--                      <p class="mb-0 fs-3"></p>-->
                                    <!--                    </a>-->
                                    <!--                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">-->
                                    <!--                      <i class="ti ti-list-check fs-6"></i>-->
                                    <!--                      <p class="mb-0 fs-3">My Task</p>-->
                                    <!--                    </a>-->
                                    <?= isset($LOGIN) ? '<a href="index.php?logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Выход</a>'
                                        : '<a href="/app/pages/login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Вход</a>' ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <?php
        foreach ($_GET as $key => $value) {
            $value = $key;
            break;
        }
        if (isset($value)) {

            switch ($value) {
                case 'main':
                    break;

            }

        } else {
//            include 'main.php';
        }
        ?>


    </div>
    <!--      <script src="assets/libs/jquery/dist/jquery.min.js"></script>-->
    <script src="bootstrap/assets/js/jquery-3.7.1.js"></script>
    <!-- Ensure Bootstrap JS is loaded -->
    <script src="bootstrap/assets/js/bootstrap.min.js"></script>

    <!-- Подключение DataTables -->
    <script type="text/javascript" src="bootstrap/assets/js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/assets/js/sidebarmenu.js"></script>
    <script src="bootstrap/assets/js/app.min.js"></script>
    <script src="bootstrap/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="bootstrap/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="bootstrap/assets/js/dashboard.js"></script>
    <!-- Подключение jQuery -->

    <script>
        $.ajax({
            url: "app/classes/UsersList.php",
        }).done((data) => {
            let users = JSON.parse(data);
            console.log(users);
        })
    </script>
</body>


</html>