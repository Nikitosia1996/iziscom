<?php
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
require_once 'app/classes/UsersList.php';

class UsersManager implements MessageComponentInterface
{
    protected $clients;
    private $users;
    private $connectionDB;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        $this->connectionDB = new ConnectionDB();
        $this->users = new UsersList();
        $this->users->setListFromDB($this->connectionDB->con);
        $conn->send($this->users->getListUsers());
        echo "vot".$this->users->getListUsers();
        echo "New connection! ({$conn->resourceId})\n";
    }

    function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }

    function onMessage(ConnectionInterface $from, $msg)
    {
        $data = json_decode($msg, true);

        if (isset($data['id']) && isset($data['login'])) {
            $user = $this->users->getUserById($data['id']);
            $this->users->updateUserInDB($this->connectionDB->con, $data['id'], $data['login']);

            foreach ($this->clients as $client) {
                if ($from !== $client) {
//                    $client->send($msg); // Пересылаем сообщение всем клиентам


                    $user->setLogin($data['login']);

                    $client->send($this->users->getListUsers());
                }
            }
        }


    }
}