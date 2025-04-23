<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="pobocky.css" rel="stylesheet">
    <link href="autoservis.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoservis - AutoJusa</title>
</head>
<body>
    
    <?php 
        include "navigation_else.php";
    ?>
    
    <section id="services">
        <h1 class="section-title">Služby autoservisu?</h1>
        <div class="services-container">
            <div class="service-card">
                <div class="service-content" style="background-image: url('pneuservis.webp');">
                    <h2>Pneuservis</h2>
                </div>
                <div class="service-info">
                    <a href="cenik-sluzeb.php">Více</a>
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
                <div class="service-content" style="background-image: url('doplnkovesluzby.webp');">
                    <h2>Výroba autoklíčů</h2>
                </div>
                <div class="service-info">
                    <a href="vyroba-autoklicu.php">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('oprava-motoru.webp');">
                    <h2>Oprava motorů</h2>
                </div>
                <div class="service-info">
                    <a href="#engine">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('geometry.webp');">
                    <h2>3D geometrie</h2>
                </div>
                <div class="service-info">
                    <a href="#geometry">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('chip-tuning.webp');">
                    <h2>Chip tuning</h2>
                </div>
                <div class="service-info">
                    <a href="#chip-tuning">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('mechanical.webp');">
                    <h2>Mechanické práce</h2>
                </div>
                <div class="service-info">
                    <a href="#mechanical">Více</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-content" style="background-image: url('changeoil.webp');">
                    <h2>Výměna oleje v automatické převodovce</h2>
                </div>
                <div class="service-info">
                    <a href="#change-oil">Více</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="karusel-container">
        <div class="karusel">
            <img src="karusel1.webp" alt="Autoservis obrázek 1" class="karusel-img">
            <img src="karusel2.webp" alt="Autoservis obrázek 2" class="karusel-img">
            <img src="karusel3.webp" alt="Autoservis obrázek 3" class="karusel-img">
            <img src="karusel4.webp" alt="Autoservis obrázek 4" class="karusel-img">
            <img src="karusel5.webp" alt="Autoservis obrázek 5" class="karusel-img">
            <img src="karusel6.webp" alt="Autoservis obrázek 6" class="karusel-img">
        </div>
    </section>

    <div class="modal" id="imageModal">
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>
    
    <section id="engine" class="info-section">
        <h1 class="info-title">Oprava motorů</h1>
        <span class="info-text">Motor je srdcem každého vozu – a my víme, jak o něj správně pečovat. Provádíme kompletní opravy motorů všech typů, od drobných zásahů až po generální opravy. Diagnostika, výměna těsnění, rozvodů, turbodmychadel i další specializované práce jsou u nás v rukou zkušených mechaniků. Váš motor dostane přesně to, co potřebuje.</span>
        <a href="#contact-persons" class="info-button">Mám zájem</a>
    </section>
    
    <section id="geometry" class="info-section">
        <h1 class="info-title">3D geometrie</h1>
        <span class="info-text">Správná geometrie náprav je klíčová pro bezpečnou jízdu a rovnoměrné opotřebení pneumatik. Pomocí špičkové 3D technologie nastavíme geometrii vašeho vozu s maximální přesností. Výsledkem je lepší ovladatelnost, komfortní jízda a delší životnost podvozkových komponentů.</span>
        <a href="#contact-persons" class="info-button">Mám zájem</a>
    </section>
    
    <section id="chip-tuning" class="info-section">
        <h1 class="info-title">Chip tuning</h1>
        <span class="info-text">Chcete z vozu dostat víc? Díky profesionálnímu chip tuningu zlepšíme výkon, točivý moment i celkovou dynamiku vašeho motoru – a to vše s důrazem na bezpečnost a životnost. Pracujeme s ověřeným softwarem a individuálním přístupem pro každý vůz. Výkon, který ucítíte.</span>
        <a href="#contact-persons" class="info-button">Mám zájem</a>
    </section>
    
    <section id="mechanical" class="info-section">
        <h1 class="info-title">Mechanické práce</h1>
        <span class="info-text">Od výměny brzdových destiček po složité opravy podvozku – nabízíme kompletní spektrum mechanických prací. Naši zkušení technici používají moderní vybavení a kvalitní náhradní díly. U nás se můžete spolehnout na poctivou práci bez kompromisů.</span>
        <a href="#contact-persons" class="info-button">Mám zájem</a>
    </section>
    
    <section id="change-oil" class="info-section">
        <h1 class="info-title">Výměna oleje v automatické převodovce</h1>
        <span class="info-text">Pravidelná výměna oleje v automatické převodovce je zásadní pro její bezproblémový chod. Používáme přesné metody plnění, kvalitní oleje a dodržujeme doporučené intervaly i specifikace výrobce. Zajistíme, aby vaše převodovka řadila hladce a bez zbytečného opotřebení.</span>
        <a href="#contact-persons" class="info-button">Mám zájem</a>
    </section>

    <section id="contact-persons">
    <h1 class="section-title">Kontaktní osoba autoservisu</h1>
    <div class="contact-card">
            <div class="contact-image">
                <img src="semenov.webp" alt="Bohdan Šemeňov"  width="300" height="400">
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
    <h1 class="section-title">Náš tým autoservisu - Tachov</h1>
    <div class="contacts-container">
        <div class="contact-card">
            <div class="contact-image">
                <img src="jsipek.webp" alt="Josef Šípek"  width="300" height="250">
            </div>
            <div class="contact-details">
                <h2>Josef Šípek</h2>
                <p class="contact-position">Hlavní automechanik</p>
            </div>
        </div>
        <div class="contact-card">
            <div class="contact-image">
                <img src="chernomorets.webp" alt="Artem Chernomorets"  width="300" height="400">
            </div>
            <div class="contact-details">
                <h2>Artem Chernomorets</h2>
                <p class="contact-position">Automechanik</p>
                <p class="contact-position">Specialista na vozidla mercedes</p>
            </div>
        </div>
        <div class="contact-card">
            <div class="contact-image">
                <img src="hlushenkov.webp" alt="Oleksii Hlushenkov" width="300" height="400">
            </div>
            <div class="contact-details">
                <h2>Oleksii Hlushenkov</h2>
                <p class="contact-position">Autoelektrikář</p>
            </div>
        </div>
    </div>

</section>

<section id="footer">
<?php 
    include "footer.php";
?>
</section>

    <script src="autoservis.js"></script>
    <script src="navbar.js"></script>
    <script src="animations.js"></script>
</body>
</html>