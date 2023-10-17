<?php

require_once '../classes/register.php';


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$registration = new Register($username, $email, $password);

