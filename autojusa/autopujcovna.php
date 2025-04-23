<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="autopujcovna.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autopůjčovna AutoJusa</title>
</head>
<body>
    
    <?php 
        include "navigation_else.php";
    ?>

    <section class="hero-section">
        <div class="hero-message">
            <h1>Autopůjčovna AutoJusa - Tachov</h1>
            <h2>Někdo vás naboural, vaše vozidlo se porouchalo nebo je z nějakého jiného důvodu nepojízdné?</h2>
            <h3>To ještě neznamená, že musíte chodit pěšky.</h3>
        </div>
        <div class="hero-price">
            <h1>Již od 500 Kč / den</h1>
            <h2>V případě zájmu volejte:</h2>
            <h3>+420 725 150 967 nebo +420 725 357 771</h3>
        </div>
    </section>

    <section class="cars-section">   
        <div class="cars-header">    
            <h1>Autopůjčovna Tachov</h1>
            <h3>Seznam vozidel k zapůjčení</h3>
        </div>
        <div class="cars-container">
            <div class="car-card">
                <div class="car-image">
                    <img src="opel-zafira.webp" alt="Opel Zafira">
                </div>
                <div class="car-details">
                    <span class="car-name">Opel Zafira</span>
                    <span class="car-price">700,00 Kč / den</span>
                    <a href="https://www.autojusa.cz/p/opel-zafira-od-700-kc-den-bez-dph/" class="car-cta">Mám zájem</a>
                </div>
            </div>
            <div class="car-card">
                <div class="car-image">
                    <img src="citroen-c4.webp" alt="Citroen C4">
                </div>
                <div class="car-details">
                    <span class="car-name">Citroen C4</span>
                    <span class="car-price">600,00 Kč / den</span>
                    <a href="https://www.autojusa.cz/p/citroen-c4-od-600-kc-den-bez-dph/" class="car-cta">Mám zájem</a>
                </div>
            </div>
            <div class="car-card">
                <div class="car-image">
                    <img src="peugeot-308.webp" alt="Peugeot 308">
                </div>
                <div class="car-details">
                    <span class="car-name">Peugeot 308</span>
                    <span class="car-price">600,00 Kč / den</span>
                    <a href="https://www.autojusa.cz/p/peugeot-308/" class="car-cta">Mám zájem</a>
                </div>
            </div>
            <div class="car-card">
                <div class="car-image">
                    <img src="volkswagen-passat.webp" alt="Volkswagen Passat B7">
                </div>
                <div class="car-details">
                    <span class="car-name">Volkswagen Passat B7</span>
                    <span class="car-price">600,00 Kč / den</span>
                    <a href="https://www.autojusa.cz/p/volkswagen-passat-b7-kombi/" class="car-cta">Mám zájem</a>
                </div>
            </div>
            <div class="car-card">
                <div class="car-image">
                    <img src="volkswagen-golf.webp" alt="Volkswagen Golf Rabbit GT">
                </div>
                <div class="car-details">
                    <span class="car-name">Volkswagen Golf Rabbit GT</span>
                    <span class="car-price">500,00 Kč / den</span>
                    <a href="https://www.autojusa.cz/p/volkswagen-golf-rabbit-gt1/" class="car-cta">Mám zájem</a>
                </div>
            </div>
            <span class="price-note"><i class="fa-solid fa-triangle-exclamation"></i>Všechny ceny jsou uvedeny bez DPH</span>
        </div>
    </section>

    <section class="pricing-section">
        <div class="pricing-header">
            <h1>Ceník autopůjčovny</h1>
            <h2>Ceny jsou včetně DPH (21%)</h2>
            <h3>Platby je možné provést hotově</h3>
        </div>
        <div class="pricing-table">
            <table>
                <tr>
                    <th>Vozidlo</th>
                    <th>Krátkodobý pronájem</th>
                    <th>Dlouhodobý pronájem</th>
                </tr>
                <tr>
                    <td>Volkswagen Golf Rabbit GT</td>
                    <td>paušál za den = 500 Kč, nad 100 km - 1 ujetý km = 5,0 Kč</td>
                    <td>cenovou nabídku Vám vystavíme na míru dle Vašich požadavků. Kontaktujte nás! <strong>Vrátná kauce 5.000 Kč</strong></td>
                </tr>
                <tr>
                    <td>Volkswagen Passat B7</td>
                    <td>paušál za den = 600 Kč, nad 100 km - 1 ujetý km = 5,0 Kč</td>
                    <td>cenovou nabídku Vám vystavíme na míru dle Vašich požadavků. Kontaktujte nás! <strong>Vrátná kauce 5.000 Kč</strong></td>
                </tr>
                <tr>
                    <td>Citroen C4</td>
                    <td>paušál za den = 600 Kč, nad 100 km - 1 ujetý km = 5,0 Kč</td>
                    <td>- cenovou nabídku Vám vystavíme na míru dle Vašich požadavků. Kontaktujte nás! <strong>Vrátná kauce 5.000 Kč</strong></td>
                </tr>
                <tr>
                    <td>Peugeot 308</td>
                    <td>paušál za den = 600 Kč, nad 100 km - 1 ujetý km = 5,0 Kč</td>
                    <td>- cenovou nabídku Vám vystavíme na míru dle Vašich požadavků. Kontaktujte nás! <strong>Vrátná kauce 5.000 Kč</strong></td>
                </tr>
                <tr>
                    <td>Opel Zafira</td>
                    <td>paušál za den = 700 Kč, nad 100 km - 1 ujetý km = 5,0 Kč</td>
                    <td>- cenovou nabídku Vám vystavíme na míru dle Vašich požadavků. Kontaktujte nás! <strong>Vrátná kauce 5.000 Kč</strong></td>
                </tr>
            </table>
        </div>
        <div class="terms-container">
            <span class="terms-text">Při dlouhodobém nájmu tzn. ( Cesta do Zahraničí , Cesta nad 100 km/ den ) Platbu u za kauci – vratnou zálohu je nutné složit HOTOVĚ ve výši 5000 Kč! Vratná záloha = 5000 Kč / vozidlo. Není DPH.</span>
            <span class="terms-text">Pro zapůjčení jakéhokoliv vozu musíte mít s sebou:</span>
            <p class="terms-highlight">>> Minimálně dva platné doklady – občanský průkaz nebo cestovní pas a řidičský průkaz</p>
            <span class="terms-text">Při vrácení vozidla se doúčtuje paušál za každý den zapůjčení a počet ujetých kilometrů, případně doplnění paliva do plné nádrže. Vratná kauce bude vrácena v případě nepoškození vozidla</span>
            <span class="terms-text">Čištění znečištěného vozu při vrácení = Až 2000 Kč včetně DPH.</span>
            <span class="terms-important">Spoluúčast při nehodě / poškození / krádeži = 20%, minimálně 20000 Kč bez DPH = 24200 Kč včetně DPH za každé jednotlivé poškození. Například: odření vozidla z levé a i pravé strany, je spoluúčast počítána 2x!</span>
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