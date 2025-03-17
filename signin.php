<?php
session_start();

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Wave</title>
    <link rel="stylesheet" href="style.css?v=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">

        <div class="welckome-block">
            <p class="text-welcome">Make some noise. Make some noise. Make some noise. Make some noise. Make some noise.
            </p>
        </div>

        <?php include 'header.php'; ?>

        <div class="sign-in" style="height: 470px;">
            <img class="electric-gutar-bg-sign" src="img/image.png">
            <div class="sign-block-left">
                <div class="block-left-text">
                    <p class="name-brand">Echo Wave</p>
                    <p class="slogan">Hear the future</p>
                    <a href="#">Learn More ⟶</a>
                </div>
            </div>
            <img class="star-sign" src="img/Star 2.png">

            <div class="sign-form">
                <div class="login-container">
                    <p class="brand-sign">Echo Wave</p>
                    <p class="sign-title">Sign in</p>

                    <form id="loginForm">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" placeholder="johndoe@email.com" required>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>

                        <label>
                            <input type="checkbox" name="terms"> By selecting Continue, you agree to our Terms of Service and acknowledge our Privacy Policy</a>.
                        </label>

                        <button type="submit">Continue</button>
                        <hr>
                    </form>

                    <div class="sign-up-block">
                        <p>New to ECHO WAVE? <a class="a-sign" href="./signup.php">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
            echo '
            <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Успех!",
                    text: "Регистрация прошла успешно! Теперь вы можете войти.",
                    icon: "success",
                    confirmButtonText: "ОК"
                });
            });
            </script>
            ';
            unset($_SESSION['registration_success']);
        }
        ?>

        <?php include 'footer.php'; ?>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('auth.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                            title: 'Успех!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: 'ОК'
                        }).then(() => {
                            window.location.href = 'personalAccount.php'; // Переадресация на личный кабинет
                        });
                    } else {
                        Swal.fire({
                            title: 'Ошибка!',
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: 'ОК'
                        });
                    }
                })
                .catch(error => {
                    console.error('Ошибка:', error);
                });
        });
    </script>
</body>

</html>