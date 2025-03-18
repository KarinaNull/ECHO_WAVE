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
    echo json_encode(['status' => 'error', 'message' => 'Database connection error: ' . $e->getMessage()]);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Ищем пользователя по email
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Проверяем пароль
            if (password_verify($password, $user['password'])) {
                // Успешная авторизация
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['role'] = $user['role']; // Сохраняем роль пользователя в сессии

                // Возвращаем успешный ответ в формате JSON
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Authorization was successful!',
                    'redirect' => $user['role'] === 'admin' ? 'admin_dashboard.php' : 'personalAccount.php'
                ]);
                exit();
            } else {
                // Возвращаем ошибку в формате JSON
                echo json_encode(['status' => 'error', 'message' => 'Invalid email or password.']);
                exit();
            }
        } else {
            // Возвращаем ошибку в формате JSON
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password.']);
            exit();
        }
    } catch (PDOException $e) {
        // Возвращаем ошибку в формате JSON
        echo json_encode(['status' => 'error', 'message' => 'Error during authorization:' . $e->getMessage()]);
        exit();
    }
}
