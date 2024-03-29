<?php

require_once __DIR__ . "/setting.php";



$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$acces = $_POST['acces'] ?? null;


$pdo = getPDO();

$query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
$params = [
    ":name" => $name,
    ":email" => $email,
    ":password" => password_hash($password, PASSWORD_DEFAULT)
];
$stmt = $pdo -> prepare($query);
$stmt ->execute($params);

redirect("/index.php");