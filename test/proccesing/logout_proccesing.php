<?php
session_start();
$_SESSION = array();
session_destroy();
// Видалення куки "user_id"
setcookie("user_id", "", time() - 3600); // Встановлення часу дії в минуле

$_SESSION = array();
session_destroy();
// Перенаправлення на сторінку входу або іншу необхідну сторінку
header("Location: ../templates/login.php"); // Замініть "login.php" на URL сторінки, куди ви хочете перейти
exit;


