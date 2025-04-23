<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="pobocky.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoJusa - Plzeň</title>
</head>
<body>
    
    <?php 
        include "navigation_else.php";
    ?>

        <section id="services">
        <h1 class="section-title">Co nabízíme?</h1>
        <div class="services-container">
            <div class="service-card">
                <div class="service-content" style="background-image: url('autobazar.webp');">
                    <h2>Autobazar</h2>
                </div>
                <div class="service-info">
                    <a href="https://www.autojusa.cz/auta-na-prodej-plzen/">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('dovozvozidel.webp');">
                    <h2>Dovoz vozidel</h2>
                </div>
                <div class="service-info">
                    <a href="dovoz-vozidel.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('reklama.webp');">
                    <h2>Reklama</h2>
                </div>
                <div class="service-info">
                    <a href="reklama.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('odtahovka.webp');">
                    <h2>Odtahová služba</h2>
                </div>
                <div class="service-info">
                    <a href="odtahova-sluzba.php">Více</a>
                </div>
            </div>  
            <div class="service-card">
                <div class="service-content" style="background-image: url('vykupvozidel.webp');">
                    <h2>Výkup vozidel</h2>
                </div>
                <div class="service-info">
                    <a href="#vehicle-purchase">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('doplnkovesluzby.webp');">
                    <h2>Ostatní služby</h2>
                </div>
                <div class="service-info">
                    <a href="#others">Více</a>
                </div>
            </div>
        </div>
        </section>

        <section id="others">
    <h1 class="section-title">Ostatní služby</h1>
    <h3>V případě zájmu nás kontaktujte</h3>
    <div class="services-row">
        <div class="service-box">
            <h1>Plnění klimatizací</h1>
            <div>Od 2.50Kč bez DPH / 1 gram</div>
            <div>(Plné doplnění od 1125Kč do 3500Kč bez DPH)</div>
            <span>+500Kč práce bez DPH</span>
        </div>
        <div class="service-box">
            <h1>Přepis vozidla na dočasnou ochranu</h1>
            <div>Cena: 5000Kč</div>
        </div>
    </div>
    <div class="action-button">
        <a href="#contact-persons">Mám zájem!</a>
    </div>
</section>
<section id="vehicle-purchase">
    <h1>Výkup vozidel</h1>
    <h1>Zprostředkování prodeje</h1>
    <h3>V případě zájmu nás kontaktujte</h3>
    <div class="action-button">
        <a href="#contact-persons">Mám zájem!</a>
    </div>
</section>

        <section id="contact-persons">
    <h1 class="section-title">Kontaktní osoby - Plzeň</h1>
    <div class="contacts-container">
        <div class="contact-card">
            <div class="contact-image">
                <img src="calyj.webp" alt="Jurij Čalyj"  width="300" height="450">
            </div>
            <div class="contact-details">
                <h2>Jurij Čalyj</h2>
                <p class="contact-position">Reklama</p>
                <p class="contact-position">Dovoz vozidel</p>
                <p class="contact-position">Přepis vozidla na dočasnou ochranu</p>
                <p class="contact-position">Odtahová služba</p>
                <div class="contact-info-pobocky">
                    <h3><i class="fa-solid fa-phone"></i>+420 732 689 209</h3>
                    <h3><i class="fa-solid fa-envelope"></i>calyj@autojusa.cz</h3>
                </div>
            </div>
        </div>
        <div class="contact-card">
            <div class="contact-image">
                <img src="cerny.webp" alt="Lukáš Černý"  width="300" height="350">
            </div>
            <div class="contact-details">
                <h2>Lukáš Černý</h2>
                <p class="contact-position">Prodej vozidel</p>
                <p class="contact-position">Plnění klimatizací</p>
                <p class="contact-position">Zprostředkování prodeje</p>
                <div class="contact-info-pobocky">
                    <h3><i class="fa-solid fa-phone"></i>+420 702 096 392</h3>
                    <h3><i class="fa-solid fa-envelope"></i>cerny@autojusa.cz</h3>
                </div>
            </div>
        </div>
</section>
<section id="company-info">
    <h1>Informace - Plzeň</h1>
    <div class="info-container">
        <h3>Odpovědná osoba: Jurij Čalyj</h3>
        <span class="info-item">Zborovská 569, 301 00 Plzeň 3-Doudlevce</span>
        <span class="info-item">Jurij Čalyj & Lukáš Černý</span>
        <span class="info-item">Každý všední den otevřeno od 10:00 - 18:00</span>
        <span class="info-item">Sobota po předchozí domluvě </span>
        <span class="info-item" style="color: red;">Neděle zavřeno</span>
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