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
                <div class="login-container--signup">
                    <p class="brand-sign">Echo Wave</p>
                    <p class="sign-title">Sign up</p>
                    <form action="register.php" method="POST">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" placeholder="johndoe@email.com" required>

                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" required>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>

                        <label for="repeat_password">Repeat Password</label>
                        <input type="password" id="repeat_password" name="repeat_password" placeholder="Repeat the password" required>

                        <label>
                            <input type="checkbox" name="terms" required> By selecting Continue, you agree to our Terms of Service and acknowledge our Privacy Policy.
                        </label>

                        <button type="submit">Continue</button>
                    </form>
                    <div class="sign-up-block">
                        <p>You have account ECHO WAVE? <a class="a-sign" href="./signin.php">Sign in</a></p>
                    </div>

                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>


</body>

</html>