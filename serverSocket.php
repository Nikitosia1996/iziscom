<?php
require 'vendor/autoload.php';
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
require 'app/managers/UsersManager.php';




$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new UsersManager()
        )
    ),
    8889, '172.19.6.64'
);
echo "Сервер запущен";
$server->run();