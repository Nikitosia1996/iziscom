<?php
function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

?>

<?php

function lastAct($id, $sesId)
{
    include "connection.php";
    $time = date('Y-m-d H:i:s');

    $page = $_SERVER['REQUEST_URI'];

    mysqli_query($con, "UPDATE a_users SET online='$sesId', last_act='$sesId', last_time_online='$time', last_page='$page' WHERE id_user='$id'");
}

function login()
{
    include "connection.php";

    ini_set("session.use_trans_sid", true);
    session_start();

    if (isset($_COOKIE['id_user'])) //если сесcия есть
    {

        if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) //если cookie есть, обновляется время их жизни и возвращается true
        {
            $id = $_COOKIE['id_user'];

            $rez = mysqli_query($con, "SELECT * FROM a_users WHERE id_user='{$id}'"); //запрашивается строка с искомым id

            if (mysqli_num_rows($rez) == 1) //если получена одна строка
            {
                $row = mysqli_fetch_assoc($rez); //она записывается в ассоциативный массив

                if (md5($row['password'].$row['login']) === $_COOKIE['password']) {

                    if (isset($_COOKIE['PHPSESSID'])) {
                        $sesId = $_COOKIE['PHPSESSID'];
                    } else if (isset($_SESSION['PHPSESSID'])) {
                        $sesId = $_SESSION['PHPSESSID'];
                    } else {
                        $sesId = uniqid();
                        SetCookie("PHPSESSID", $sesId, time() + (86400 * 30), "/");
                    }


                    setcookie("login", $_COOKIE['login'], time() + (86400 * 30), "/");
                    setcookie("password", $_COOKIE['password'], time() + (86400 * 30), "/");

                    lastAct($id, $sesId);

                    return true;
                }else{
                    $id = $_SESSION['id_user'];
                    mysqli_query($con, "UPDATE a_users SET online=0, last_time_session=null WHERE id_user='$id'"); //обнуляется поле online, говорящее, что пользователь вышел с сайта (пригодится в будущем)
                    unset($_SESSION['id_user']); //удалятся переменная сессии
                    unset($_SESSION['login']); //удалятся переменная сессии
                    unset($_SESSION['PHPSESSID']); //удалятся переменная сессии

                    SetCookie("login", ""); //удаляются cookie с логином

                    SetCookie("id_user", ""); //удаляются cookie с логином

                    SetCookie("password", ""); //удаляются cookie с паролем
                }
            }

        } else //иначе добавляются cookie с логином и паролем, чтобы после перезапуска браузера сессия не слетала
        {
            $rez = mysqli_query($con, "SELECT * FROM a_users WHERE id_user='{$_COOKIE['id_user']}'"); //запрашивается строка с искомым id

            if (mysqli_num_rows($rez) == 1) //если получена одна строка
            {
                $row = mysqli_fetch_assoc($rez); //она записывается в ассоциативный массив

                setcookie("login", $row['login'], time() + (86400 * 30), "/");

                setcookie("password", md5($row['login'] . $row['password']), time() + (86400 * 30), "/");

                $id = $_COOKIE['id_user'];
                setcookie("id_user", $id, time() + (86400 * 30), "/");

                $sesId = $_COOKIE['PHPSESSID'];
                if ($row['online'] == "0") {
                    lastAct($id, $sesId);
                } else if ($row['online'] == $sesId) {
                    lastAct($id, $sesId);
                }
                return true;
            } else
                return false;
        }
    }
    return true;
}


?>
