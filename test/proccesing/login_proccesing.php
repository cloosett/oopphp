<?php

require_once '../classes/login.php';



$email = $_POST['email'];
$password = $_POST['password'];

$login = new login($email, $password);

