<?php
require_once 'connect_db.php';
session_start();
class login{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->validate();
    }

    public function validate(){
        $email = $this->email;
        $password = $this->password;
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = connect_db::connect()->prepare($sql);
        $stmt->execute([
            'email' => $email
        ]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            die('Error email');
        }else if($user['password'] !== md5($password)){
            die('Error password');
        }
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $user_id = $user['id'];
        $user_email = $user['email'];
        setcookie("user_email", $user_email, time() + 3600, '/');
        header('Location: ../templates/profile.php');
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