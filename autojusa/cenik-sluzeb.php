<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="cenik.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoJusa - Ceník služeb</title>
</head>
<body class="cenik-container">
    
    <?php 
        include "navigation_else.php";
    ?>

   <section id="cenik-sluzeb" class="cenik-section">
        <div>
            <h1 class="cenik-heading">Ceník služeb - AutoJusa</h1>
        </div>
        <div>
            <table class="cenik-table">
                <tr>
                    <td class="cenik-service">Práce</td>
                    <td class="cenik-price">700 Kč / 1h</td>
                </tr>
                <tr>
                    <td class="cenik-service">Výměna oleje</td>
                    <td class="cenik-price">od 1500 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Základní diagnostika</td>
                    <td class="cenik-price">od 500 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Kompletní diagnostika</td>
                    <td class="cenik-price">od 1000 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Přehození kol</td>
                    <td class="cenik-price">od 400 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Přezutí pneu</td>
                    <td class="cenik-price">od 1000 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Čištění DPF</td>
                    <td class="cenik-price">od 5000 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Měření vstřikovačů na stolici</td>
                    <td class="cenik-price">500 Kč / 1ks</td>
                </tr>
            </table>
            <span class="price-note"><i class="fa-solid fa-triangle-exclamation"></i>Všechny ceny jsou uvedeny bez DPH</span>
        </div>
    </section>

    <section class="cenik-section">
        <div>
            <h1 class="cenik-heading">Ceník služeb autobazaru</h1>
        </div>

        <div>
            <table class="cenik-table">
                <tr>
                    <td class="cenik-service">STK CZ</td>
                    <td class="cenik-price">5000 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Dovozová STK</td>
                    <td class="cenik-price">6000 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Přihlášení vozidla</td>
                    <td class="cenik-price">2500 Kč</td>
                </tr>
                <tr>
                    <td class="cenik-service">Evidenční kontrola</td>
                    <td class="cenik-price">1500 Kč</td>
                </tr>
            </table>  
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