<?php
require_once 'connect_db.php';
session_start();
class Register
{

    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->output();
    }
    public function output(){
        $username = $this->username;
        $email = $this->email;
        $password = $this->password;
        $password = md5($password);
        $sql = "INSERT INTO users (id, username, email, password) VALUES (:id, :username, :email, :password)";
        $stmt = connect_db::connect()->prepare($sql);

        try {
            $stmt->execute([
                'id' => null,
                'email' => $email,
                'username' => $username,
                'password' => $password
            ]);
            $_SESSION['username'] = $username;
            header('Location: ../templates/login.php');
        } catch (PDOException $exception) {
            echo "Error: {$exception->getMessage()}";
        }

    }
    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

}


