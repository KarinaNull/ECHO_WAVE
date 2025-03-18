<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $table = $_POST['table'];
    unset($_POST['table']); 

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $columns = array_keys($_POST);
        $values = array_values($_POST);
        $placeholders = implode(',', array_fill(0, count($values), '?'));

        $sql = "INSERT INTO `$table` (" . implode(',', $columns) . ") VALUES ($placeholders)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($values);

        header("Location: table.php?table=$table");
        exit();
    } catch (PDOException $e) {
        die("Ошибка добавления записи: " . $e->getMessage());
    }
}
