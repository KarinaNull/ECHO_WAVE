<?php

$host = 'localhost';
$dbname = 'echo_wave';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];


    if ($password !== $repeat_password) {
        die("Пароли не совпадают.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (email, name, password) VALUES (:email, :name, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->execute();


        session_start();
        $_SESSION['registration_success'] = true;
        header("Location: signin.php");
        exit();
    } catch (PDOException $e) {
        die("Ошибка при регистрации: " . $e->getMessage());
    }
}
