<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="autoklice.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výroba autoklíčů</title>
</head>
<body>

    <?php 
        include "navigation_else.php";
    ?>
    
    <section class="header-section">
        <div>
            <h1 class="header-title">Výroba autoklíčů - Tachov</h1>
        </div>
        <div class="steps-container">
                <div class="step-box"><i class="fa-solid fa-key"></i>Výroba nového klíče</div>
                <div class="step-box"><i class="fa-solid fa-key"></i>Vyříznutí planžety</div>
                <div class="step-box"><i class="fa-solid fa-key"></i>Oprava klíče</div>
                <div class="step-box"><i class="fa-solid fa-key"></i>Diagnostika klíče</div>
            </div>
    </section>
    
    <section class="opening-hours-section">
        <div>
            <h1 class="opening-hours-title">Otevírací doba</h1>
            <span class="opening-hours-text">Po - Pá: 8:00 - 16:00</span>
            <span class="opening-hours-text">Víkendy zavřeno!</span>
            <h3 class="parking-title">Parkování zdarma</h3>
            <span class="opening-hours-text">Parkovat můžete na našem parkovišti v blízkosti pobočky</span>
            <span class="opening-hours-text"><i class="fa-solid fa-phone"></i>+420 725 150 967</span>
            <span class="opening-hours-text"><i class="fa-solid fa-envelope"></i>auto.jusa@seznam.cz</span>
        </div>
    </section>
    
    <section class="info-section">
        <h1 class="info-title">Důležité informace</h1>
        <div class="info-container">
            <div class="info-card">
                <h3 class="info-card-title">Druhy autoklíčů</h3>
                <span class="info-card-text">obyčejný klíč bez čipu = klíč který pouze odemkne auto</span>
                <span class="info-card-text">klíč s čipem – odemkne auto a nastartuje (bez čipu klíč nemá možnost vůz nastartovat)</span>
                <span class="info-card-text">klíč s čipem a dálkovým ovládáním – klíč dálkově odemkne automobil stisknutím tlačítka na klíči a nastartuje ho</span>
            </div>
            <div class="info-card">
                <h3 class="info-card-title">Co je čip v autoklíči? Má ho každý autoklíč? Co je imobilizér?</h3>
                <span class="info-card-text">Imobilizér – elektronický systém zabezpečení vozu. Chrání vozidlo před neoprávněným nastartováním.</span>
                <span class="info-card-text">Skládá se z čipu (transpondéru), kroužku kolem spínací skříňky a řídicí jednotky.</span>
            </div>
            <div class="info-card">
                <h3 class="info-card-title">Jak funguje imobilizér?</h3>
                <span class="info-card-text">Čip vyšle informaci do kroužku kolem spínací skřínky, která informaci přenese do řídící jednotky. Ta zkontroluje správnost informace a umožní nebo neumožní nastartovat vozidlo. Čip funguje pasivním způsobem, tzn. není napájený baterií.</span>
                <span class="info-card-text">Tuto elektronickou ochranu vozu proti krádežím začaly po roce 1994 postupně vyžadovat pojišťovny u všech vozů, protože manuální zabezpečení již nestačilo.</span>
            </div>
        </div>
    </section>
    
    <section class="faq-section">
        <div>
            <h1 class="faq-title">Často kladené dotazy</h1>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <h3 class="faq-question">1. Přiděláte mi náhradní autoklíč (duplikát)?</h3>
                <div class="faq-answer">
                    <span>Ano, duplikát klíče Vám ve většině případů zhotovíme na počkání.</span>
                </div>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">2. Pomůžete mi v případě, že můj autoklíč nefunguje?</h3>
                <div class="faq-answer">
                    <span>Ano, klíč u nás na provozovně podrobíme diagnostice. Na jejím základě zjistíme, zda je problém ve vašem autoklíči, který vám můžeme na místě opravit.</span>    
                </div>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">3. Proč potřebujete k výrobě autoklíče znát značku, model a rok výroby vozu?</h3>
                <div class="faq-answer">
                    <span>Správný čip a vhodnou technologii určuje právě značka, model a rok výroby vozu.</span>    
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>O nás</h3>
                <p>AUTOJUSA je přední poskytovatel autoservisních služeb s pobočkami v Tachově, Plzni a Chebu. Nabízíme kompletní servis pro vaše vozidlo.</p>
                <div class="social-icons">
                    <a href="https://www.tiktok.com/@autojusa"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.facebook.com/groups/354448842951032"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/autojusa442/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@AutoJuSa-v9u"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Naše služby</h3>
                <ul>
                    <li><a href="autoservis.php">Autoservis</a></li>
                    <li><a href="uprava-softwaru.php">Úprava softwaru</a></li>
                    <li><a href="repase-vstrikovacu.php">Repase vstřikovačů</a></li>
                    <li><a href="cisteni-dpf.php">Čištění DPF</a></li>
                    <li><a href="vyroba-autoklicu.php">Výroba autoklíčů</a></li>
                    <li><a href="autopujcovna.php">Autopůjčovna</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Kontakt</h3>
                <p><i class="fa-solid fa-location-dot"></i> Pobočka Tachov: Adresa 123, Tachov</p>
                <p><i class="fa-solid fa-location-dot"></i> Pobočka Plzeň: Adresa 456, Plzeň</p>
                <p><i class="fa-solid fa-location-dot"></i> Pobočka Cheb: Adresa 789, Cheb</p>
                <p><i class="fa-solid fa-phone"></i> +420 725 150 967</p>
                <p><i class="fa-solid fa-envelope"></i> sipkova@autojusa.cz</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 AUTOJUSA - A. Šípek & J. Čalyj. Všechna práva vyhrazena.</p>
        </div>
    </footer>
</section>

    <script src="faq.js"></script>
    <script src="navbar.js"></script>
    <script src="animations.js"></script>
</body>
</html>