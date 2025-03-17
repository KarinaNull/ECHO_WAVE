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

        <div class="start-block">
            <img class="star-big" src="img/Star 2.png">
            <img class="polygone" src="img/Polygon.png">
            <img class="guitar-first" src="img/g1.png">
            <img class="guitar-last" src="img/g2.png">
            <img class="star-little" src="img/Star 3.png">

            <div class="parent-block-text">
                <div class="start-block-text">
                    <p class="service-title">Echo Wave</p>
                    <p class="service-text">Welcome to Echo Wave, your one-stop shop for exceptional musical
                        instruments. We
                        offer a meticulously curated selection of guitars, keyboards, drums, and more, from renowned
                        brands
                        to exciting up-and-comers. </p>
                    <a href="./AboutUS.php" class="service-btn">LEARN MORE ABOUT OUR CONPANY</a>
                </div>
            </div>
            <img class="polygone2" src="img/Polygon2.png">
        </div>

        <div class="product-catalog">
            <img class="group1" src="img/group.png">
            <div class="product-title">
                <p class="title-card">Product catalog</p>
                <p class="under-title">Experience the thrill of drumming with our selection of drums, percussion
                    instruments, and essential hardware. From beginner kits to professional setups, we have everything
                    you need.
                </p>
            </div>
            <img class="group2" src="img/group-reverse.png">
        </div>
        <div class="list-group">
            <div class="list-product-card">
                <div class="product-card">
                    <img src="img/witegirar.png">
                    <p class="card-title">Accessories</p>
                    <p class="card-text">Gear Up. Essential accessories for every musician.
                    </p>
                    <a href="./catalog.php" class="card-btn">Explore the product range</a>
                </div>
            </div>
            <div class="list-product-card">
                <div class="product-card">
                    <img src="img/ss.png">
                    <p class="card-title">Electric & Bass Guitars</p>
                    <p class="card-text"> Find Your Perfect Sound. Explore our selection of electric and bass guitars.
                    </p>
                    <a href="./catalog.php" class="card-btn">Explore the product range</a>
                </div>
            </div>
            <div class="list-product-card">
                <div class="product-card">
                    <img src="img/synt.png">
                    <p class="card-title">Synthesizers</p>
                    <p class="card-text">Unleash Your Creativity. Keyboards and synthesizers for every style.
                    </p>
                    <a href="./catalog.php" class="card-btn">Explore the product range</a>
                </div>
            </div>
            <div class="list-product-card">
                <div class="product-card">
                    <img src="img/drum.png">
                    <p class="card-title">Drums & Percussion</p>
                    <p class="card-text">Keep the Beat. Drums, percussion, and everything in between.
                    </p>
                    <a href="./catalog.php" class="card-btn">Explore the product range</a>
                </div>
            </div>
        </div>
        <div class="need-card">
            <img class="group3" src="img/Polygon3.png">
            <img class="star-little-second" src="img/Star 3.png">

            <div class="feedback-card">
                <div class="feedback-card-top">
                    <img class="feedback-card-top-img" src="img/Picture.png">
                    <div class="parent-fb">
                        <p class="title-text-feedback">Jane Doe</p>
                        <p class="text-card-feedback"> playing drums for 5’y</p>
                    </div>
                </div>
                <hr>
                <p class="text-card-feedback-text">Thank you for the high-quality sound and providing tips on
                    choosing instruments. I've been playing for many years now and I always come to this store.</p>
            </div>


            <div class="feedback-card" style="margin-top: 365px;margin-left: unset;margin-left: 60px;">
                <div class="feedback-card-top">
                    <img class="feedback-card-top-img" src="img/Picture.png">
                    <div class="parent-fb">
                        <p class="title-text-feedback">Jane Doe</p>
                        <p class="text-card-feedback"> playing drums for 5’y</p>
                    </div>
                </div>
                <hr>
                <p class="text-card-feedback-text">Thank you for the high-quality sound and providing tips on
                    choosing instruments. I've been playing for many years now and I always come to this store.</p>
            </div>

            <div class="parent-block-text-need">
                <div class="start-block-text-need">
                    <p class="service-title-need">Why do you need us and we need you</p>
                    <p class="service-text-need">What Our Customers Are Saying. Don't just take our word for it. Hear
                        from satisfied musicians who have found their perfect instruments at Echo Wave.</p>
                    <p class="service-undertext-need">
                        BE SURE TO WRITE REVIEWS ABOUT US!</p>
                </div>
            </div>

            <div class="reward-card">
                <img class="rew-star" src="img/Star 8.png">
                <p class="reward-card-title">Your Loyalty, Our Reward</p>
                <p class="reward-text">
                    We appreciate your continued support. As a thank you, we offer exclusive discounts and perks to our
                    loyal customers. Check your account regularly for special offers and promotions designed just for
                    you. Login to view your personalized offers.</p>
                <img class="rew-star-end" src="img/Star 7.png">
            </div>
        </div>

        <?php include 'footer.php'; ?>


</body>

</html>