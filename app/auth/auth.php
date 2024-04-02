<?php


function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}


function lastAct($connectionDB, $sesId, $token, $PAGE, $DATETIME)
{

    $query = "UPDATE users SET online='$sesId', last_act='$sesId', last_time_online='$DATETIME', last_page='$PAGE' WHERE token='$token'";
    $connectionDB->executeQuery($query);
}

function login($usersList,$connectionDB, $LOGIN, $PHPSESSID, $TOKEN, $PAGE, $DATETIME)
{


    ini_set("session.use_trans_sid", true);
    session_start();
    if (isset($TOKEN)) //если сесcия есть
    {
        $user = $usersList->getUser($TOKEN);

            if ($user != null) {

                $sesId = $PHPSESSID;
                setcookie("login", $LOGIN, time() + (86400 * 30), "/");
                setcookie("token", $TOKEN, time() + (86400 * 30), "/");

                lastAct($connectionDB, $sesId, $TOKEN, $PAGE, $DATETIME);

                return true;
            } else {
                $connectionDB->executeQuery("UPDATE users SET online=0 WHERE token='$TOKEN'"); //обнуляется поле online, говорящее, что пользователь вышел с сайта (пригодится в будущем)
                unset($_SESSION['PHPSESSID']); //удалятся переменная сессии

                SetCookie("login", "");
                SetCookie("token", "");
                return false;
            }


    }

    return true;
}


login($usersList, $connectionDB, $LOGIN, $PHPSESSID, $TOKEN, $PAGE, $DATETIME);


?>
