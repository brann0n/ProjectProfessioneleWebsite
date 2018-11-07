<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
		<link rel="icon" href="../image/logo.png">
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
                        <h1>Inschrijven Automotive</h1>
                    </div>
                </div>
                <div class="mainContent">
                        <div class="informatieInschrijven">
                            <p>Je wilt je inschrijven voor de opleiding Automotive (voltijd, Bachelor).  We helpen je graag door de procedure. 
                                Met je verzoek tot inschrijving zet je de eerste stap richting jouw vervolgstudie: je geeft aan dat je een opleiding bij Technishe Hogeschool T' Veenhoog wilt volgen.
                                Als je wilt, kun je je inschrijving nog tot de uiterste inschrijfdatum aanpassen.</p>

                            <h2>Eerst checken</h2>
                            <ul>
                                <li class="checken">&#10004; Voldoe je aan alle toelatingseisen? Heb je het benodigde diploma en profiel wanneer je met de opleiding &nbsp&nbsp&nbsp begint? Moet je misschien nog een toelatingsexamen doen? 
                                    Check het voor de zekerheid.</li>
                                <li class="checken">&#10004; Heb je een DigiD? <a id="digid" href="https://digid.nl/aanvragen">Vraag hem anders direct aan!</a></li>                                
                            </ul>
                            <h2>Inschrijven werkt zo</h2>
                            <?php
                            $tellen = 1;
                            $stappen = array("Maak een account aan. Je krijgt een persoonlijke Studielinkpagina.", "Vul hier je opleidingsdetails in. Voor havo- en vwo-scholieren verschijnt hier het subkopje ‘Vakken’. Vul &nbsp&nbsp&nbsp&nbsp hier je vakkenpakket in.",
                                                "Kies voor ‘Mijn opleidingen/ Nieuwe inschrijving’ toevoegen:", "Selecteer de opleiding van jouw keuze. Je vindt de opleiding onder de officiële naam <b>Automotive</b>.", "Bevestig de opleiding.",
                                                "Geef onder het kopje Instroommoment aan wanneer je met de opleiding wilt beginnen. Bevestig dit.", "Bevestig je inschrijving.",
                                                "Voer je betaalgegevens in en bevestig deze. Dit kun je ook later doen, als het maar vóór je inschrijving &nbsp&nbsp&nbsp&nbsp is.", "Volg de status van je inschrijving op je persoonlijke Studielinkpagina.");
                            foreach ($stappen as $stap) {
                                echo '<p>' . $tellen . '. ' . $stap . '</p>';
                                $tellen++;
                            }
                            ?>                            
                            <a href="https://student.sl-cloud.nl/">
                                <div class="inschrijvenStudielink">	
                                    <h3>Inschrijven via Studielink</h3>
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
                <a href="inschrijvenAutomotive.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/inschrijvenAutomotive.php">
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