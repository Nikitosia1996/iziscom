<?php



function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}


function lastAct($connectionDB, $sesId, $token)
{
    $time = getDatetime();
    $page = getPageServer();
    $query = "UPDATE users SET online='$sesId', last_act='$sesId', last_time_online='$time', last_page='$page' WHERE token='$token'";
    $connectionDB->executeQuery($query);
}

function login($usersList,$connectionDB)
{
    ini_set("session.use_trans_sid", true);
    session_start();
    $TOKEN = getTokenCookie();
    $LOGIN = getLoginCookie();
    if (isset($TOKEN)) //если сесcия есть
    {
        $user = $usersList->getUser($TOKEN);

            if ($user != null) {

                $sesId = getPHPSESSIDCookie();
                setcookie("login", $LOGIN, time() + (86400 * 30), "/");
                setcookie("token", $TOKEN, time() + (86400 * 30), "/");

                lastAct($connectionDB, $sesId, $TOKEN);

                return true;
            } else {
                $connectionDB->executeQuery("UPDATE users SET online=0, last_time_session=null WHERE token='$TOKEN'"); //обнуляется поле online, говорящее, что пользователь вышел с сайта (пригодится в будущем)
                unset($_SESSION['PHPSESSID']); //удалятся переменная сессии

                SetCookie("login", "");
                SetCookie("token", "");
                return false;
            }


    }

    return true;
}


login($usersList, $connectionDB);


?>
