<?php

require_once __DIR__ . "/src/setting.php";
checkGuest();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="/src/register.php" method="post" enctype="multipart/form-data">

        <h2>Форма регистрации</h2>
        
        <input 
            type="text"
            placeholder="Имя"
            name="name"
            required
        >
        <br>
        <br>
        <input 
            type="email"
            placeholder="Почта"
            name="email"
            required
        >
        <br>
        <br>
        <input
            type="password"
            placeholder="Пароль"
            name="password"
            required
        >
        <input 
            type="submit"
        >
        <br>
        <a href="/index.php">Войти</a>

    </form>
</body>
</html>