<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="dovoz-vozidel.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <title>Dovoz vozidel</title>
</head>
<body>
    
    <?php 
        include "navigation_else.php";
    ?>
<main>
        <div class="header-section">
            <div class="title-container">
                <h1>DOVOZ VOZIDEL NA ZAKÁZKU</h1>
                <h3>Jak to funguje?</h3>
            </div>
            <div class="steps-container">
                <div class="step-box"><i class="fa-solid fa-magnifying-glass"></i>1. Výběr auta</div>
                <div class="step-box"><i class="fa-solid fa-calculator"></i>2. Kontrola a kalkulace</div>
                <div class="step-box"><i class="fa-solid fa-location-dot"></i>3. Dovoz vozidla</div>
                <div class="step-box"><i class="fa-solid fa-file-pen"></i>4. Přihlášení a STK</div>
            </div>
        </div>
        <hr>
        <div class="options-section">
            <h3>Možnosti hledání vozidla:</h3>
            <span>Můžete nám zaslat až 5–10 inzerátů vozidel, která si sami vyberete (např. na mobile.de). My zdarma obvoláme prodejce, zjistíme stav vozidla, cenu a dostupnost.</span>
            <span>Pokud chcete, abychom vozidlo aktivně hledali za vás, vyžadujeme zálohu 2 000 Kč jako potvrzení vážného zájmu. Tato částka není poplatek navíc – odečítá se z celkové ceny dopravy (např. pokud doprava stojí 20 000 Kč, po záloze doplatíte jen 18 000 Kč).</span>
            <span>Vyjednaná sleva na vozidle se dělí 50 % pro vás, 50 % pro nás</span>
        </div>
        <hr>
        <div class="process-section">
            <h3>Jak postupovat:</h3>
            <div class="process-step"><i class="fa-solid fa-dice-one"></i><span>Pošlete nám odkaz na vybraná vozidla (max. 10) přes WhatsApp</span></div>
            <div class="process-step"><i class="fa-solid fa-dice-two"></i><span>Provedeme obvolání prodejců a zjistíme informace o vozidle</span></div>
            <div class="process-step"><i class="fa-solid fa-dice-three"></i><span>Po odsouhlasení podmínek je nutné uhradit zálohu 2 000 Kč, pokud auto hledáme my</span></div>
            <div class="process-step"><i class="fa-solid fa-dice-four"></i><span>Kontrola vozidla: Na místě provedeme diagnostiku, test lakoměrem a Cebia prověření (1 Cebia je v ceně, za každé další +500 Kč)</span></div>
            <div class="process-step"><i class="fa-solid fa-dice-five"></i><span>Převoz a přihlášení: Auto přivezeme na jakoukoliv naši pobočku nebo přímo k vám</span></div>
        </div>
        <div class="pricing-section">
            <h3>Ceník služeb (všechny ceny bez DPH):</h3>
            <table class="pricing-table">
                <tr>
                    <td>Dovozová - technická kontrola</td>
                    <td>6000 Kč</td>
                </tr>
                <tr>
                    <td>Evidenční kontrola</td>
                    <td>1500 Kč</td>
                </tr>
                <tr>
                    <td>Přihlášení vozidla</td>
                    <td>2000 Kč</td>
                </tr>
                <tr>
                    <td>Další CBI prověření</td>
                    <td>500 Kč za kus</td>
                </tr>
            </table>
            <div class="important-notes">
                <div class="note"><i class="fa-solid fa-triangle-exclamation"></i><span>Vozidla nad 3,5 tuny nebo s převozem nad 1 000 km – cena individuální</span></div>
                <div class="note"><i class="fa-solid fa-triangle-exclamation"></i><span>Doprava na jakoukoliv naši pobočku v ceně</span></div>
            </div>
        </div>
    </main>
    <help>
    <?php 
        include "footer.php";
    ?>
    </help>    
    <script src="navbar.js"></script>
 
</body>
</html>