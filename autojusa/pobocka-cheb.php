<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="pobocky.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoJusa - Cheb</title>
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
                    <a href="https://www.autojusa.cz/auta-na-prodej-cheb/">Více</a>
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
        </div>
    </section>

    <section id="others">
    <h1 class="section-title">Ostatní služby</h1>
    <h3>V případě zájmu nás kontaktujte</h3>
    <div class="services-row">
        <div class="service-box">
            <h1>MOŽNOST DOVOZU VSTŘIKŮ A DPF NA POBOČKU CHEB</h1>
            <div>tzn. Přivezete vstřiky na repas nebo DPF na čištění a my ho odvezeme na pobočku Tachov do autoservisu.</div>
        
        </div>
    </div>
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
                <div class="contact-info-pobocky">
                    <h3><i class="fa-solid fa-phone"></i>+420 732 689 209</h3>
                    <h3><i class="fa-solid fa-envelope"></i>calyj@autojusa.cz</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="company-info">
    <h1>Informace - Cheb</h1>
    <div class="info-container">
        <h3>Odpovědná osoba: Jurij Čalyj</h3>
        <span class="info-item">U Hilarie 2462/1 350 02 Cheb</span>
        <span class="info-item">Jurij Čalyj</span>
        <span class="info-item">Každý všední den otevřeno od 10:00 - 18:00</span>
        <span class="info-item" style="color: red;">Sobota - Neděle zavřeno</span>
    </div>
</section>
<section id="footer"><?php 
    include "footer.php";
?></section>


    <script src="navbar.js"></script>
    <script src="animations.js"></script>

</body>

</html>