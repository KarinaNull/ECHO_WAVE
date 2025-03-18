<?php
include 'db.php';

function getProductsByCategory($pdo, $category)
{
    $sql = "SELECT * FROM products WHERE category = :category";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['category' => $category]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$electricGuitars = getProductsByCategory($pdo, 'Electric Guitars');
$drums = getProductsByCategory($pdo, 'Drums');
$synthesizers = getProductsByCategory($pdo, 'Synthesizers');
$accessories = getProductsByCategory($pdo, 'Accessories');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.0">
    <title>Echo Wave</title>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="welckome-block">
            <p class="text-welcome">Make some noise. Make some noise. Make some noise. Make some noise. Make some noise.</p>
        </div>
        <?php include 'header.php'; ?>

        <!-- Electric Guitars Section -->
        <div class="ElectricGuitar-content">
            <div class="content-end">
                <p class="Theame-guitar-title">Electric & Bass Guitars</p>
                <img class="electric-gutar-bg" src="img/Star 10.png">
            </div>
            <img class="electric-gutar-bg" src="img/image.png">
            <img class="electric-gutar" src="img/catalogGitar.png">
            <p class="ElectricGuitar-content-text">
                Uncompromising Quality. Exceptional Value. Discover the perfect balance of craftsmanship and affordability.
            </p>
            <img class="group-img-star" src="img/Star 3.png">
            <img class="group-img" src="img/gg4.png">
        </div>
        <div class="list-group-catalog">
            <?php foreach ($electricGuitars as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Повторяем карточки -->
            <?php foreach ($electricGuitars as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Drums Section -->
        <div class="ElectricGuitar-content">
            <div class="content-end">
                <p class="Theame-guitar-title">Drums & Percussion</p>
                <img class="electric-gutar-bg" src="img/Star 10.png">
            </div>
            <img class="electric-gutar-bg" src="img/image.png">
            <img class="drum-acustic" src="img/drum.png">
            <img class="group-img-star" src="img/Star 3.png">
            <p class="ElectricGuitar-content-text">
                Experience rich, resonant tones and unparalleled playability. Our drums offer the power and precision to create unforgettable beats, all at remarkably affordable prices.
            </p>
            <img class="group-img" src="img/gg4.png">
        </div>
        <div class="list-group-catalog">
            <?php foreach ($drums as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Повторяем карточки -->
            <?php foreach ($drums as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Synthesizers Section -->
        <div class="ElectricGuitar-content">
            <div class="content-end--synt">
                <p class="Theame-guitar-title--synt">Synthesizers</p>
                <img class="electric-gutar-bg" src="img/Star 10.png">
            </div>
            <img class="electric-gutar-bg--synt" src="img/image.png">
            <img class="drum-acustic--synt" src="img/synt.png">
            <img class="group-img-star--synt" src="img/Star 3.png">
            <p class="ElectricGuitar-content-text--synt">
                Experience rich, resonant tones and unparalleled playability. Our synthesizers offer the power and precision to create unforgettable sounds, all at remarkably affordable prices.
            </p>
            <img class="group-img--synt" src="img/gg4.png">
        </div>
        <div class="list-group-catalog">
            <?php foreach ($synthesizers as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Повторяем карточки -->
            <?php foreach ($synthesizers as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Accessories Section -->
        <div class="ElectricGuitar-content">
            <div class="content-end--synt">
                <p class="Theame-guitar-title--synt">Accessories</p>
                <img class="electric-gutar-bg" src="img/Star 10.png">
            </div>
            <img class="electric-gutar-bg--synt" src="img/image.png">
            <img class="drum-acustic--synt" src="img/ss.png">
            <img class="group-img-star--synt" src="img/Star 3.png">
            <p class="ElectricGuitar-content-text--synt">
                Elevate your sound. Premium music accessories at unbeatable prices. Make your next hit.
            </p>
            <img class="group-img--synt" src="img/gg4.png">
        </div>
        <div class="list-group-catalog">
            <?php foreach ($accessories as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Повторяем карточки -->
            <?php foreach ($accessories as $product): ?>
                <div class="list-product-card">
                    <div class="product-card">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                        <p class="card-title"><?= htmlspecialchars($product['title']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <p class="card-price"><?= htmlspecialchars($product['price']) ?> $</p>
                        <a href="./Contacts.php" class="card-btn">SUBMIT YOUR APPLICATION</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Rewards Section -->
        <div class="reward-card--catalog">
            <img class="rew-star" src="img/Star 8.png">
            <p class="reward-card-title">Your Loyalty, Our Reward</p>
            <p class="reward-text">
                We appreciate your continued support. As a thank you, we offer exclusive discounts and perks to our
                loyal customers. Check your account regularly for special offers and promotions designed just for
                you. Login to view your personalized offers.
            </p>
            <img class="rew-star-end" src="img/Star 7.png">
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>