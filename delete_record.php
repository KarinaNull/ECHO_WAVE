<?php
session_start();
include 'db.php';

$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Удаление записи
    $stmt = $conn->prepare("DELETE FROM `$table` WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: table.php?table=$table");
    exit();
} catch (PDOException $e) {
    die("Ошибка удаления записи: " . $e->getMessage());
}
