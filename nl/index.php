<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="icon" href="../image/logo.png">
        <title>T' Veenhoog</title>
    </head>
    <body>
        <div class="centering">
            <div class="logo">
                <a href="index.php"><img src="../image/logo.png" alt="logo" /></a>
            </div>
            <div class="mainBody">
                <div class="mainHeader">
                    <div class="h1Title">
                        <h1>Technische Hogeschool 'T Veenhoog</h1>
                    </div>
                </div>
                <div class="mainContent">
                    <div id="bgImage">
                        <div id="navigate">
                            <ul>
                                <li><a href="opleidingen.php"><div class="navButtons">Opleidingen</div></a></li>
                                <li><a href="opendagen.php"><div class="navButtons">Open dagen</div></a></li>
                                <li><a href="evenementen.php"><div class="navButtons">Evenementen</div></a></li>
                                <li><a href="contact.php"><div class="navButtons">Contact</div></a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="gallerij.php">
                        <div id="galleryButton">
                            <div class="buttonTextStyle">
                                Gallerij
                            </div>
                        </div>
                    </a>
                    <div id="registerEducation">
                        <a href="inschrijvenAutomotive.php">
                            <div class="automotive">
                                Automotive
                            </div>
                        </a>
                        <a href="inschrijvenAutomotive.php">
                            <div class="mechatronica">
                                Mechatronica
                            </div>		
                        </a>

                    </div>
                    <a href="nieuwsbrief.php">
                        <div id="newsLetterButton">
                            <div class="buttonTextStyle">
                                Nieuwsbrief
                            </div>
                        </div>
                    </a>
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
            <div class="rightBlok">
                <a href="index.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/index.php">
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

