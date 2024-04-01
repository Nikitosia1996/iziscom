<?php
include "../connection.php";
ini_set("session.use_trans_sid", true);
session_start();
if (isset($_POST["email"]) && isset($_POST["password"])){
    $login = $_POST["email"];
    $password = $_POST["password"];
    $hashPassword = md5($password);
    $query = "select * from a_users where login = '$login' and password = '$hashPassword'";
    $result = mysqli_query($con, $query) or die("ошибка входа" . mysqli_error($con));
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id_user'];
        setcookie("login", $login, time() + (86400 * 30), "/");
        setcookie("id_user", $_SESSION['id_user'], time() + (86400 * 30), "/");
        setcookie("password", md5($hashPassword . $login), time() + (86400 * 30), "/");
        echo "да";
    } else echo "нет";
}
