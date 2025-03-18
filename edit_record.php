<?php
session_start();
include 'db.php';

$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $updates = [];
        $values = [];
        foreach ($_POST as $key => $value) {
            if ($key !== 'id') {
                $updates[] = "$key = ?";
                $values[] = $value;
            }
        }

        $values[] = $id;

        $sql = "UPDATE `$table` SET " . implode(', ', $updates) . " WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute($values);

        header("Location: table.php?table=$table");
        exit();
    } catch (PDOException $e) {
        die("Ошибка обновления записи: " . $e->getMessage());
    }
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Получение текущих данных записи
    $stmt = $conn->prepare("SELECT * FROM `$table` WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        die("Запись не найдена.");
    }
} catch (PDOException $e) {
    die("Ошибка получения данных: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Редактирование записи</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <form class="edit" method="POST">
            <h1>Edit record</h1>
            <?php foreach ($row as $key => $value): ?>
                <?php if ($key !== 'id'): ?>
                    <label for="<?php echo $key; ?>"><?php echo htmlspecialchars($key); ?>:</label>
                    <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo htmlspecialchars($value); ?>" required>
                <?php endif; ?>
            <?php endforeach; ?>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <button type="submit">Сохранить</button>
        </form>
        <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>