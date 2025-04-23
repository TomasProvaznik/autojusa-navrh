<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="pobocky.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoJusa - Tachov</title>
</head>
<body>
    
    <?php 
        include "navigation_else.php";
    ?>

        <section id="services">
        <h1 class="section-title">Co nabízíme?</h1>
        <div class="services-container">
            <div class="service-card">
                <div class="service-content" style="background-image: url('autoservis.webp');">
                    <h2>Autoservis</h2>
                </div>
                <div class="service-info">
                    <a href="autoservis.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('upravasoftwaru.webp');">
                    <h2>Úprava softwaru</h2>
                </div>
                <div class="service-info">
                    <a href="uprava-softwaru.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('repasevstrikovacu.webp');">
                    <h2>Repase vstřikovačů</h2>
                </div>
                <div class="service-info">
                    <a href="repase-vstrikovacu.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('cistenidpf.webp');">
                    <h2>Čištění DPF</h2>
                </div>
                <div class="service-info">
                    <a href="cisteni-dpf.php">Více</a>
                </div>
            </div>  
            <div class="service-card">
                <div class="service-content" style="background-image: url('autopujcovna.webp');">
                    <h2>Autopůjčovna</h2>
                </div>
                <div class="service-info">
                    <a href="autopujcovna.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('doplnkovesluzby.webp');">
                    <h2>Výroba autoklíčů</h2>
                </div>
                <div class="service-info">
                    <a href="vyroba-autoklicu.php">Více</a>
                </div>
            </div>
        </div>
        </section>

        <section id="contact-persons">
    <h1 class="section-title">Kontaktní osoby - Tachov</h1>
    <div class="contacts-container">
        <div class="contact-card">
            <div class="contact-image">
                <img src="sipek.webp" alt="Alexandr Šípek"  width="300" height="250">
            </div>
            <div class="contact-details">
                <h2>Alexandr Šípek</h2>
                <p class="contact-position">Vedoucí firmy</p>
                <p class="contact-position">Autoelektrikář</p>
                <div class="contact-info-pobocky">
                    <h3><i class="fa-solid fa-phone"></i>+420 725 150 967</h3>
                    <h3><i class="fa-solid fa-envelope"></i>sipek@autojusa.cz</h3>
                </div>
            </div>
        </div>
        <div class="contact-card">
            <div class="contact-image">
                <img src="sipkova.webp" alt="Monika Gabriela Šípková"  width="300" height="400">
            </div>
            <div class="contact-details">
                <h2>Monika Gabriela Šípková</h2>
                <p class="contact-position">Administrativa</p>
                <p class="contact-position">Autopůjčovna</p>
                <p class="contact-position">Eshop</p>
                <div class="contact-info-pobocky">
                    <h3><i class="fa-solid fa-phone"></i>+420 725 357 771</h3>
                    <h3><i class="fa-solid fa-envelope"></i>sipkova@autojusa.cz</h3>
                </div>
            </div>
        </div>
        <div class="contact-card">
            <div class="contact-image">
                <img src="semenov.webp" alt="Bohdan Šemeňov" width="300" height="400">
            </div>
            <div class="contact-details">
                <h2>Bohdan Šemeňov</h2>
                <p class="contact-position">Příjem zakázek</p>
                <p class="contact-position">Kancelář</p>
                <div class="contact-info-pobocky">
                    <h3><i class="fa-solid fa-phone"></i>+420 725 098 502</h3>
                    <h3><i class="fa-solid fa-envelope"></i>semenov@autojusa.cz</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="company-info">
    <h1>Informace - Tachov</h1>
    <div class="info-container">
        <h3>Odpovědná osoba: Alexandr Šípek</h3>
        <span class="info-item">Malý Rapotín 26 , 347 01 Tachov 1</span>
        <span class="info-item">Alexandr Šipek & Monika Gabriela Šipková & Bohdan Šemeňov</span>
        <span class="info-item">Každý všední den otevřeno od 8:00 - 16:00</span>
        <span class="info-item">Víkendy zavřeno</span>
        <span class="info-item">email: sipkova@autojusa.cz</span>
    </div>
</section>
<section id="footer">
<?php 
    include "footer.php";
?>
</section>

    <script src="navbar.js"></script>
    <script src="animations.js"></script>

</body>
</html>