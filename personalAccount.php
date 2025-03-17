<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: signup.php");
    exit();
}

$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
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
            <p class="text-welcome">Make some noise. Make some noise. Make some noise. Make some noise. Make some noise.
            </p>
        </div>

        <?php include 'header.php'; ?>

        <p class="personal-acc-title">Personal account</p>
        <img class="star-personal-acc" src="img/Star 2.png">

        <div class="personal-acc-info">
            <div class="fio">
                <img src="img/ac.png">
                <p class="ac-fio"><?php echo htmlspecialchars($user_name); ?></p>
            </div>

            <div class="fio">
                <img class="fio-img" src="img/email.png">
                <p class="ac-fio--email">Email: <?php echo htmlspecialchars($user_email); ?></p>
            </div>
        </div>

        <img class="req-acc" src="img/image.png">
        <img class="sq-acc" src="img/Mask group (2).png">
        <img class="stars-acc" src="img/Group 26.png">
        <p class="personal-acc-test">Welcome to your Echo Wave account! Thank you for being a part of our community. We wish you continued creative success and many musical triumphs!</p>

        <?php include 'footer.php'; ?>
    </div>
</body>

</html>