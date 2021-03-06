<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <link rel="icon" href="../image/logo.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>T' Veenhoog</title>
</head>
<body>
    <div class="centering">
        <div class="logo">
            <a href="index.php"><img src="../image/logo.png" alt="logo"></a>
        </div>
        <div class="mainBody">
            <div class="mainHeader">
                <div class="h1Title">
                    <h1>Technische Hogeschool 'T Veenhoog</h1>
                </div>
            </div>
            <div class="mainopleiding">
                <div class="h2title"><h2>Hier staat alles over onze opleidingen</h2></div>
                <div class="box-opleiding">
                    <div class="h2subtitle">
                        <h2>Automotive</h2>
                    </div>
                    <p>
                        De wereld van auto’s en techniek zit in een van zijn spannendste fasen ooit.
                        Onze toekomstige mobiliteit vraagt namelijk om oplossingen die revolutionair anders zijn.
                    </p>
                    <p>
                        Denk alleen al aan de eindigheid van fossiele brandstoffen en de uitstoot van schadelijke stoffen.
                        In die toekomst leren we creatiever omgaan met grondstoffen, leren we anders kijken naar de veiligheid van elke weggebruiker en bedenken we oplossingen die de files terugdringen.
                        Het goede nieuws is dat de automotive wereld daar nu al op topsnelheid mee experimenteert.
                        Met slimme toepassingen van ICT, elektronica en lichtgewicht construeren, maar ook door toepassing van elektrische of hybride aandrijvingen.
                    </p>
                    <p>
                        De helden in dat verhaal zijn de automotive engineers van 'T Veenhoog.
                        Het zijn vooral de probleemoplossers die verder kijken en begrijpen dat elke technische oplossing past in een complex plaatje
                        waarin mobiliteit nog slimmer, schoner, goedkoper en efficiënter moet.
                        ‘Compleet voertuig denken’ noemen we dat.
                        Dat leer je in 'T Veenhoog. Stap in en Drive your Future.
                    </p>
                    <a href="inschrijvenAutomotive.php">
                        <div class="inschrijvenButton">	
                            <h3>Inshrijven Automotive</h3>
                        </div>
                    </a>
                </div>
                <div class="box-opleiding">
                    <div class="h2subtitle">
                        <h2>Mechatronica</h2>
                    </div>
                    <p>
                        Mechatronica is een multidisciplinaire combinatie van elektrotechniek, werktuigbouwkunde en technische informatica.
                        In dit vak ben je een logische denker én een echte doener.
                        Je bedenkt hoe je apparaten veiliger of gebruiksvriendelijker maakt én je ontwerpt ze.
                        Denk daarbij aan een geautomatiseerde wasstraat, een slimme productierobot, of binnen de gezondheidszorg een geavanceerde rolstoel of vervangende robotarm.
                        De moderne mensheid kan niet meer zonder mechatronica en er is dan ook grote behoefte aan goedopgeleide mechatronica engineers.
                        Bij 'T Veenhoog leren we je de theorie en de praktijk kennen en we leiden je op tot een specialist in het systematisch ontwerpen van onder meer besturingstechnieken van robotgestuurde producten en machines.
                    </p>                    
                    <a href="inschrijvenMechatronica.php">
                        <div class="inschrijvenButton">	
                            <h3>Inshrijven Mechatronica</h3>
                        </div>
                    </a>                    
                </div>
            </div>
            <div class="mainFooter">
                <div class="navFooterLeft">
                    <ul>
                        <li class="footerTopElement">T' Veenhoog:</li>
                        <li><a href="opleidingen.php">Opleidingen</a></li>
                        <li><a href="opendagen.php">Open dagen</a></li>
                        <li><a href="evenementen.php">Evenementen</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="navFooterCenter">
                    <ul>
                        <li class="footerTopElement">Onze partners:</li>
                        <li><a href="https://www.nhlstenden.com/">NHL Stenden</a></li>
                        <li><a href="https://www.drenthecollege.nl/">Drenthe College</a></li>
                    </ul>
                </div>
                <div class="navFooterRight">
                    <ul>
                        <li class="footerTopElementSocial">Volgs ons:</li>
                        <li><a href="https://www.facebook.com/"><img src="../image/facebook.png" alt="Facebook"/></a>
                            <a href="https://twitter.com/"><img src="../image/twitter.png" alt="Twitter"/></a>
                            <a href="https://youtube.com/"><img src="../image/youtube.png" alt="Youtube"/></a>
                        </li>
                        <li class="socialStyle">
                            <a href="https://www.linkedin.com/"><img src="../image/linkedin.png" alt="Linkedin"/></a>
                            <a href="https://instagram.com/"><img src="../image/instagram.png" alt="Instagram"/></a>
                        </li>
                    </ul>
                </div>
            </div>	
        </div>
        <div class="rightBlok">
            <a href="opleidingen.php">
                <div class="languageDutch">	
                    <h3>Nederlands</h3>
                </div>
            </a>
            <a href="../en/opleidingen.php">
                <div class="languageEnglish">
                    <h3>English</h3>
                </div>
            </a>
            <?php
                if (isset($_SESSION["authenticated"])) {
                    if ($_SESSION["authenticated"]) {
                        echo '<a href="signout.php"><div class="loginRight"><h3>Signout</h3></div></a>';
                    } else {
                        echo '<a href="login.php"><div class="loginRight"><h3>Login</h3></div></a>';
                    }
                } else {
                    $_SESSION["authenticated"] = false;
                    if ($_SESSION["authenticated"]) {
                        echo '<a href="signout.php"><div class="loginRight"><h3>Signout</h3></div></a>';
                    } else {
                        echo '<a href="login.php"><div class="loginRight"><h3>Login</h3></div></a>';
                    }
                }
                ?>
        </div>
    </div>
</body>
</html>