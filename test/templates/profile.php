<?php
session_start();

if (!isset($_COOKIE['user_email'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профіль</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .profile {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .profile h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .profile-info {
            text-align: left;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
            display: inline-block;
            width: 200px;
        }

        .info-value {
            display: inline-block;
            font-weight: normal;
            width: 300px;
        }

    </style>
</head>
<body>
<div class="profile">
    <h1>Ваш профіль</h1>
    <div class="profile-info">
        <div class="info-item">
            <span class="info-label">Електронна пошта:</span>
            <span class="info-value" id="username"><?php echo isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : 'Невідомий користувач'; ?><!--</span>-->
            <form action="../proccesing/logout_proccesing.php" method="post">
                <input type="submit" value="Вийти">
            </form>
        </div>
    </div>
</div>
</body>
</html>
