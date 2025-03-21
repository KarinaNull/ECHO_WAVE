<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Authorization is required to continue working.']);
    exit();
}

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'echo_wave';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$question = $_POST['question'];
$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("INSERT INTO user_requests (name, surname, phone, question, user_id) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $name, $surname, $phone, $question, $user_id);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'The application has been successfully submitted!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
