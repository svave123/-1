<?php
session_start();

require_once __DIR__ . "/config.php";

function redirect(string $path)
{
    header("Location: $path");
    die();
}

function getPDO(): PDO
{
    try {
        return new \PDO(dsn: "mysql:host=". DB_HOST .";dbname=". DB_NAME, username: DB_USERNAME, password: DB_PASSWORD);
    } catch (\PDOException $e){
        die($e ->getMessage());
    }
}

function corUser(): array|false
{
    $pdo = getPDO();

    if (!isset($_SESSION["user"])) {
        return false;
    }

    $userId = $_SESSION["user"]["id"] ?? null;

    $stmt = $pdo ->prepare("SELECT * FROM users WHERE id = :id");
    $stmt ->execute(["id" => $userId]);
    return $stmt -> fetch(PDO::FETCH_ASSOC);

}

function logout(): void
{
    unset($_SESSION["user"]["id"]);
    redirect("/");
}

function checkAuth()
{
    if(!isset($_SESSION["user"]["id"])) {
        redirect("/");
    }
}

function checkGuest()
{
    if(isset($_SESSION["user"]["id"])) {
        redirect("/home.php");
    }
}
function checkAdmin()
{
    var_dump($_SESSION["user"]);
}