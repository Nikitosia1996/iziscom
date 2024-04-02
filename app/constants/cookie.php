<?php

class CookieSessionHandler {
    public static function getCookie($cookieName) {
        if (isset($_COOKIE[$cookieName])) {
            return $_COOKIE[$cookieName];
        }
    }

    public static function getSession($sessionName) {
        if (isset($_SESSION[$sessionName])) {
            return $_SESSION[$sessionName];
        } else {
            return self::getCookie($sessionName);
        }
    }
}

class ServerHandler {
    public static function getPage() {
        return $_SERVER['REQUEST_URI'];
    }
}

class DateTimeHandler {
    public static function getCurrentDateTime() {
        return date('Y-m-d H:i:s');
    }
}

$LOGIN = CookieSessionHandler::getCookie('login');
$PHPSESSID = CookieSessionHandler::getSession('PHPSESSID');
$TOKEN = CookieSessionHandler::getCookie('token');
$PAGE = ServerHandler::getPage();
$DATETIME = DateTimeHandler::getCurrentDateTime();
