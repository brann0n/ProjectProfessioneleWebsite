<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <title>Inschrijven</title>
    </head>
    <body>
        <div class="centering">
            <div class="logo">
                <a href="index.php"><img src="../image/logo.png" alt="logo" /></a>
            </div>
            <div class="mainBody">
                <div class="mainHeader">
                    <div class="h1Title">
                        <h1>Inschrijven</h1>
                    </div>
                </div>
                <div class="mainContent">
                    <div id="bgImage">
                        <?php
                        $voornaamErr = $tussenvoegselErr = $achternaamErr = $geslachtErr = $geboortedatumErr = $emailErr = $adresErr = $woonplaatsErr = $opmerkingErr = $policyErr = "";
                        $voornaam = $tussenvoegsel = $achternaam = $geslacht = $geboortedatum = $email = $adres = $woonplaats = $opmerking = $policy = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["naam"])) {
                                $voornaamErr = "Naam is verplicht";
                            } else {
                                $voornaam = test_input($_POST["naam"]);

                                if (!preg_match("/^[a-zA-Z]*$/", $voornaam)) {
                                    $voornaamErr = "Only letters and white space allowed";
                                }
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                            } else {
                                $tussenvoegsel = test_input($_POST["tussenvoegsel"]);

                                if (!preg_match("/^[a-zA-Z]*$/", $tussenvoegsel)) {
                                    $tussenvoegselErr = "Only letters and white space allowed";
                                }
                            }
                            
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["naam"])) {
                                    $voornaamErr = "Naam is verplicht";
                                } else {
                                    $voornaam = test_input($_POST["naam"]);

                                    if (!preg_match("/^[a-zA-Z]*$/", $voornaam)) {
                                        $voornaamErr = "Only letters and white space allowed";
                                    }
                                }
                                ?>
                    </div>
                </div>
                <div class="mainFooter">
                    <div class="navFooterLeft">
                        <ul>
                            <li class="footerTopElement">T' Veenhoog:</li>
                            <li><a href="opleidingen.php">Opleidingen</a></li>
                            <li><a href="inschrijven.php">Inschrijven</a></li>
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
        </div>
    </body>
</html>

