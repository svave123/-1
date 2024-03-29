<?php

require_once __DIR__ . "/src/setting.php";
checkGuest();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <form action="/src/login.php" method="post" enctype="multipart/form-data">

        <h2>Форма входа</h2>
        
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
        <a href="/register.php">Зарегистрироваться</a>
    </form>

    
</body>
</html>