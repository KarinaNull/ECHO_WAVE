<?php
session_start();

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
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Успешная авторизация
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['name'];


                echo json_encode(['status' => 'success', 'message' => 'Авторизация прошла успешно!']);
                exit();
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Неверный email или пароль.']);
                exit();
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Неверный email или пароль.']);
            exit();
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Ошибка при авторизации: ' . $e->getMessage()]);
        exit();
    }
}
