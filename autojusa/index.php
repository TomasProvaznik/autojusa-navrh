<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>A u t o J u s a . c z</title>
</head>
<body>
    
    <?php 
        include "navigation.php";
    ?>

<section id="hero" class="hero-section">
    <h1 class="hero-title">AUTOJUSA</h1>
    <h3 class="hero-subtitle">Prodej</h3>
    <h3 class="hero-subtitle">Servis</h3>
    <h3 class="hero-subtitle">Reklama</h3>
    <a href="#branches" class="hero-btn">Kde nás najdete?</a>
</section>

    
    <section id="branches">
        <h1 class="section-title">Vyberte pobočku</h1>
        <div class="branches-container">
            <div class="branch-card">
                <a href="pobocka-tachov.php" class="branch-content" style="background-image: url('tachov-picture.webp');">
                    <h2>Pobočka Tachov</h2>
                </a>
                <div class="branch-overlay">
                    <p>Kompletní autoservis, úpravy vozidel a další služby v Tachově</p>
                    <a href="pobocka-tachov.php">Zobrazit více</a>
                </div>
            </div>
            <div class="branch-card">
                <a href="pobocka-plzen.php" class="branch-content" style="background-image: url('plzen-picture.webp');">
                    <h2>Pobočka Plzeň</h2>
                </a>
                <div class="branch-overlay">
                    <p>Odtahová služba a autobazar v Plzni</p>
                    <a href="pobocka-plzen.php">Zobrazit více</a>
                </div>
            </div>
            <div class="branch-card">
                <a href="pobocka-cheb.php" class="branch-content" style="background-image: url('cheb-picture.webp');">
                    <h2>Pobočka Cheb</h2>
                </a>
                <div class="branch-overlay">
                    <p>Autobazar a prodej vozidel v Chebu</p>
                    <a href="pobocka-cheb.php">Zobrazit více</a>
                </div>
            </div>
        </div>
    </section>       
    
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
                <div class="service-content" style="background-image: url('autobazar.webp');">
                    <h2>Autobazar</h2>
                </div>
                <div class="service-info">
                    <a href="#branches">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('autoelektrika.webp');">
                    <h2>Autoelektrika</h2>
                </div>
                <div class="service-info">
                    <a href="uprava-softwaru.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('pneuservis.webp');">
                    <h2>Pneuservis</h2>
                </div>
                <div class="service-info">
                    <a href="cenik-sluzeb.php">Více</a>
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
                    <h2>Doplňkové služby</h2>
                </div>
                <div class="service-info">
                    <a href="vyroba-autoklicu.php">Více</a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="review">
        <h1>Zde nám můžete zanechat recenzi</h1>
        <img src="QRkod.webp" alt="QRkod-recenze">
    </section>
<section id="footer">
<?php 
    include "footer.php";
?>
</section>
    <script src="navbar.js"></script>
    <script src="scroll.js"></script>
    <script src="animations.js"></script>
</body>
</html>