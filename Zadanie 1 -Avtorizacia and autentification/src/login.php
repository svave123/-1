<?php

require_once __DIR__ . "/setting.php";

$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;

$pdo = getPDO();

$stmt = $pdo ->prepare("SELECT * FROM users WHERE `email` = :email");
$stmt ->execute(["email" => $email]);
$user = $stmt -> fetch(PDO::FETCH_ASSOC);

if(!$user){
    redirect("/index.php");
}

if(!password_verify($password, $user["password"])){
    redirect("/index.php");
}

$_SESSION['user']['id'] = $user['id'];

redirect('/home.php');