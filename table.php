<?php
session_start();

// Проверяем авторизацию
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

include 'db.php';

// Получаем имя таблицы из GET-параметра
$table = $_GET['table'] ?? '';

if (!$table) {
    die("Таблица не указана.");
}

try {
    // Подключение к базе данных
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Получаем структуру таблицы (столбцы)
    $stmt = $conn->query("DESCRIBE `$table`");
    $columns = $stmt->fetchAll(PDO::FETCH_COLUMN);

    // Получаем все записи из таблицы
    $stmt = $conn->query("SELECT * FROM `$table`");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($table); ?> - Echo Wave</title>
    <link rel="stylesheet" href="style.css?v=1.0">
</head>

<body>
    <div class="container">

        <div class="welckome-block">
            <p class="text-welcome">Make some noise. Make some noise. Make some noise. Make some noise. Make some noise.</p>
        </div>

        <?php include 'header.php'; ?>

        <!-- <h1>Таблица: <?php echo htmlspecialchars($table); ?></h1> -->

        <!-- Таблица с данными -->
        <table border="1" class="data-table">
            <thead>
                <tr>
                    <?php foreach ($columns as $column): ?>
                        <th><?php echo htmlspecialchars($column); ?></th>
                    <?php endforeach; ?>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <?php foreach ($columns as $column): ?>
                            <td><?php echo htmlspecialchars($row[$column]); ?></td>
                        <?php endforeach; ?>
                        <td>
                            <a href="edit_record.php?table=<?php echo $table; ?>&id=<?php echo $row['id']; ?>">Редактировать</a>
                            <a href="delete_record.php?table=<?php echo $table; ?>&id=<?php echo $row['id']; ?>" onclick="return confirm('Вы уверены?')">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Форма для добавления записи -->
        <form method="POST" action="add_record.php" class="add-record-form">
            <input type="hidden" name="table" value="<?php echo htmlspecialchars($table); ?>">
            <?php foreach ($columns as $column): ?>
                <label for="<?php echo $column; ?>"><?php echo htmlspecialchars($column); ?>:</label>
                <input type="text" name="<?php echo $column; ?>" id="<?php echo $column; ?>" required>
            <?php endforeach; ?>
            <button type="submit">Добавить запись</button>
        </form>

        <?php include 'footer.php'; ?>
    </div>
</body>

</html>