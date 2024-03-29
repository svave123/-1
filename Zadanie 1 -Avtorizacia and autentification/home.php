<?php

require_once __DIR__ . "/src/setting.php";

checkAuth();

$user = corUser();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
    <h2>Имя: <?php echo $user["name"] ?></h2>
    <h2>Почта: <?php echo $user["email"] ?></h2>
    <div>
        <div>
            <h2>Запись 1</h2>
            <p>Запись, которую видят все <b>пользователи.</b></p>
        </div>

        <?php if($user["acces"] == "admin"): ?>
            <div>
                <h2>Запись 2</h2>
                <p>Запись, которую видно только <b>админу.</b></p>
            </div>
        <?php endif; ?>

    </div>
    <form action="src/logout.php" method="post">
        <button role="button">Выход из сессии</button>
    </form>
</body>
</html>