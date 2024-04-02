<?php
include "../../connection/connection.php";

ini_set("session.use_trans_sid", true);
session_start();

if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $hashPassword = md5($password);
    $query = "select * from users where login = '$login' and password = '$hashPassword'";
    $result = $connectionDB->executeQuery($query);
    if ($connectionDB->getNumRows($result) == 1) {
        $row = $connectionDB->getRowResult($result);
        $id_user = $row['id_user'];
        $email = $row['email'];
        $login = $row['login'];
        $username = $row['username'];
        $token = md5($hashPassword . $login);
        $connectionDB->executeQuery("update users set token = '$token' where id_user = '$id_user'");
//        $user = new User();
        setcookie("login", $login, time() + (86400 * 30), "/");
        setcookie("token", md5($hashPassword . $login), time() + (86400 * 30), "/");
        echo true;
    } else echo false;
}

