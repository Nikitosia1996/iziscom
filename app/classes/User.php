<?php

class User
{
    private $id;
    private $login;
    private $username;
    private $email;
    private $role;
    private $token;


    public function __construct($id, $login, $username, $email, $role, $token)
    {
        $this->id = $id;
        $this->login = $login;
        $this->username = $username;
        $this->email = $email;
        $this->role = $role;
        $this->token = $token;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login): void
    {
        $this->login = $login;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username): void
    {
        $this->username = $username;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getRole()
    {
        return $this->role;
    }


    public function setRole($role): void
    {
        $this->role = $role;
    }


    public function getToken()
    {
        return $this->token;
    }


    public function setToken($token): void
    {
        $this->token = $token;
    }

    public function toJson() {
        return json_encode([
            'id' => $this->id,
            'login' => $this->login,
            'username' => $this->username,
            'email' => $this->email,
            'role' => $this->role,
            'token' => $this->token
        ]);
    }

}
