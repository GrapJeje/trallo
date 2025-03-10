<?php

global $conn, $base_url;
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password))
{
    $msg = "Vul alle velden in";
    header("Location: $base_url/login.php?msg=$msg");
}

require_once 'conn.php';
$query = "SELECT * FROM user WHERE email = :email";
$statement = $conn->prepare($query);
$statement->execute([
    ":email" => $email
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($statement->rowCount() < 1 || !password_verify($password, $user['password']))
{
    $msg = "Gebruikersnaam of wachtwoord is onjuist";
    header("Location: $base_url/login.php?msg=$msg");
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_email'] = $user['email'];

header("Location: $base_url/tasks/index.php");
