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

        <div class="contacts-form">
            <div class="contact-text-group">
                <p class="contact-title">Our contacts</p>
                <img class="star-contact" src="img/Star 3.png">
            </div>
            <p class="contact-text">You can contact us directly or, for example, leave a request so that we can contact you and consider your question or place an order.</p>

            <div class="forms">

                <div class="first-gr">
                    <div class="name">
                        <input type="name" id="name" name="name" placeholder="name" required>
                    </div>
                    <div class="surname">
                        <input type="surname" id="surname" name="surname" placeholder="surname" required>
                    </div>
                </div>

                <div class="phone">
                    <input type="phone" id="phone" name="phone" placeholder="Phone" required>
                </div>

                <div class="question">
                    <input type="question" id="question" name="question" placeholder="question" required>
                </div>

                <button type="submit">Send</button>

                <p class="privat">This site is protected by hCaptcha and the hCaptcha Privacy Policy and Terms of Service apply.</p>
            </div>

            <div class="card-info">
                <section class="dummy">
                    <h1>Dummys</h1>
                    <p>ingo@loremispum.com</p>
                </section>

                <section class="email">
                    <h2>Email</h2>
                    <p>info@loremispum.com</p>
                    <p>has@loremispum.com</p>
                </section>

                <section class="phone">
                    <h2>Phone</h2>
                    <p>+123 345 678</p>
                    <p>+123 345 678</p>
                </section>

                <section class="follow-us">
                    <h2>Follow us</h2>
                    <img src="img/Facebook.png">
                    <img src="img/Linkedin.png">
                    <img src="img/Instagram.png">
                    <img src="img/Youtube.png">
                    <img src="img/Pintrest.png">
                </section>
            </div>

            <img class="req-acc--contact" src="img/image.png">
            <img class="sq-acc--contact" src="img/Mask group (2).png">
            <img class="stars-acc--contact" src="img/Group 26.png">
            <p class="personal-acc-test--contact">
                <span class="adress"> Our store addresses: </span><br><br>
                123 Main Street, Anytown, CA 91234, USA<br><br>
                Suite 400, 456 Oak Avenue, Springfield, IL 62704, United States<br><br>
                The Music Emporium, Building B, 789 Pine Lane, Unit 10, New York, NY 10001, USA
            </p>
        </div>

        <?php include 'footer.php'; ?>
</body>

</div>

</body>

</html>