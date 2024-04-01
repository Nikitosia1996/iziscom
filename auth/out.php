<?php
function out(){
    if(isset($_GET['logout'])) {

        $id = $_SESSION['id_user'];
        mysqli_query($con, "UPDATE a_users SET online=0, last_time_session=null WHERE id_user='$id'"); //обнуляется поле online, говорящее, что пользователь вышел с сайта (пригодится в будущем)
        unset($_SESSION['id_user']); //удалятся переменная сессии
        unset($_SESSION['login']); //удалятся переменная сессии
        unset($_SESSION['PHPSESSID']); //удалятся переменная сессии

        SetCookie("login", ""); //удаляются cookie с логином

        SetCookie("id_user", ""); //удаляются cookie с логином

        SetCookie("password", ""); //удаляются cookie с паролем
       header('Location: http://'.$_SERVER['HTTP_HOST'].'/login.php'); //перенаправление на главную страницу сайта
    }
}
?>