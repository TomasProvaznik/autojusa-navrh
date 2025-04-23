<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <link href="tym.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoJusa - Náš tým</title>
</head>
<body class="tym-container">
    <?php 
        include "navigation_else.php";
    ?>
    
    <section id="tym" class="tym-section">
        <div>
            <h1 class="tym-heading">Tým Autojusa</h1>
        </div>

        <div class="tym-grid">
            <div class="tym-member">
                <img src="sipek.webp" alt="Alexandr Šípek" class="tym-member-img">
                <h1 class="tym-member-name">Alexandr Šípek</h1>
                <h2 class="tym-member-position">Zakladatel firmy</h2>
                <h3 class="tym-member-contact">+420 725 150 967</h3>
                <h3 class="tym-member-contact">sipek@autojusa.cz</h3>
                <span class="tym-member-desc">Autoelektrika, repase vstřikovačů, čištění dpf filtrů, chiptuning, výroba autoklíčů</span>
            </div>
            
            <div class="tym-member">
                <img src="calyj.webp" alt="Jurij Čalyj" class="tym-member-img">
                <h1 class="tym-member-name">Jurij Čalyj</h1>
                <h2 class="tym-member-position">Spolumajitel firmy</h2>
                <h3 class="tym-member-contact">+420 732 689 209</h3>
                <h3 class="tym-member-contact">calyj@autojusa.cz</h3>
                <span class="tym-member-desc">Spolupráce, marketing, reklama od autojusa, manažer pobočky v plzni a chebu</span>
            </div>
            
            <div class="tym-member">
                <img src="sipkova.webp" alt="Monika Gabriela Šípková" class="tym-member-img">
                <h1 class="tym-member-name">Monika Gabriela Šípková</h1>
                <h2 class="tym-member-position">Administrativní pracovnice</h2>
                <h3 class="tym-member-contact">+420 725 357 771</h3>
                <h3 class="tym-member-contact">sipkova@autojusa.cz</h3>
                <span class="tym-member-desc">Administrativa, autobazar, kancelář, web, objednávky produktů</span>
            </div>
            
            <div class="tym-member">
                <img src="semenov.webp" alt="Bohdan Šemeňov" class="tym-member-img">
                <h1 class="tym-member-name">Bohdan Šemeňov</h1>
                <h2 class="tym-member-position">Přijímací technik</h2>
                <h3 class="tym-member-contact">+420 725 098 502</h3>
                <h3 class="tym-member-contact">semenov@autojusa.cz</h3>
                <span class="tym-member-desc">Kancelář, autopůjčovna, autobazar, povinné ručení, úvěry</span>
            </div>
            
            <div class="tym-member">
                <img src="cerny.webp" alt="Lukáš Černý" class="tym-member-img">
                <h1 class="tym-member-name">Lukáš Černý</h1>
                <h2 class="tym-member-position">Prodejce</h2>
                <h3 class="tym-member-contact">+420 702 096 392</h3>
                <h3 class="tym-member-contact">cerny@autojusa.cz</h3>
                <span class="tym-member-desc">Prodejce vozidel, autobazar Plzeň, zprostředkování prodeje</span>
            </div>
            
            <div class="tym-member">
                <img src="jsipek.webp" alt="Josef Šípek" class="tym-member-img">
                <h1 class="tym-member-name">Josef Šípek</h1>
                <h2 class="tym-member-position">Hlavní automechanik</h2>
                <h3 class="tym-member-contact">-----</h3>
                <h3 class="tym-member-contact">-----</h3>
                <span class="tym-member-desc">Mechanické práce, kompletní servis</span>
            </div>
            
            <div class="tym-member">
                <img src="chernomorets.webp" alt="Artem Chernomorets" class="tym-member-img">
                <h1 class="tym-member-name">Artem Chernomorets</h1>
                <h2 class="tym-member-position">Automechanik</h2>
                <h3 class="tym-member-contact">-----</h3>
                <h3 class="tym-member-contact">-----</h3>
                <span class="tym-member-desc">Specialista na opravu vozidel značky mercedes</span>
            </div>
            
            <div class="tym-member">
                <img src="hlushenkov.webp" alt="Oleksii Hlusenkov" class="tym-member-img">
                <h1 class="tym-member-name">Oleksii Hlusenkov</h1>
                <h2 class="tym-member-position">Autoelektrikář</h2>
                <h3 class="tym-member-contact">-----</h3>
                <h3 class="tym-member-contact">-----</h3>
                <span class="tym-member-desc">Diagnostika, autoelektrika</span>
            </div>
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