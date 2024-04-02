<?php

function getLoginCookie()
{
    if (isset($_COOKIE['login']))
        return $_COOKIE['login'];
}

function getPHPSESSIDCookie()
{
    if (isset($_SESSION['PHPSESSID']))
        return $_SESSION['PHPSESSID'];
    else {
        return $_COOKIE['PHPSESSID'];
    }
}


function getTokenCookie()
{
    if (isset($_COOKIE['token']))
        return $_COOKIE['token'];
}

function getPageServer()
{
    return $_SERVER['REQUEST_URI'];
}

function getDatetime()
{
    return date('Y-m-d H:i:s');
}

$LOGIN = getLoginCookie();
$PHPSESSID = getPHPSESSIDCookie();
$TOKEN = getTokenCookie();
$PAGE = getPageServer();
$DATETIME = getDatetime();