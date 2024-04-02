<?php

function out($connectionDB)
{
    $TOKEN = CookieSessionHandler::getCookie('token');
    if (isset($_GET['logout'])) {

        $connectionDB->executeQuery("UPDATE users SET online=0 WHERE token='$TOKEN'"); //обнуляется поле online, говорящее, что пользователь вышел с сайта (пригодится в будущем)
        unset($_SESSION['PHPSESSID']); //удалятся переменная сессии

        SetCookie("login", ""); //удаляются cookie с логином
        SetCookie("token", ""); //удаляются cookie с паролем
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/app/pages/login.php'); //перенаправление на главную страницу сайта
    }
}

out($connectionDB);
?>