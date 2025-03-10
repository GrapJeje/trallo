<?php

global $conn, $base_url;
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password))
{
    $msg = "Vul alle velden in";
    header("Location: $base_url/login.php?msg=$msg");
}

require_once 'conn.php';
$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" => $username
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($statement->rowCount() < 1 || !password_verify($password, $user['password']))
{
    $msg = "Gebruikersnaam of wachtwoord is onjuist";
    header("Location: $base_url/login.php?msg=$msg");
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['username'];

header("Location: $base_url/tasks/index.php");
