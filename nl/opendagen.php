<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Opendagen</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" type="text/css" href="../nl/opendagen.css">
        <link rel="icon" href="../image/logo.png">
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
                    <div class="imgschool">
                        <img class="imgafmeting" src="../image/schoolpictvh.png" alt="School">
                    </div>
                    <h1 class="hopendagentwee">Open dagen</h1>
                    <div class="voorwoord">
                        <h2 class="hopendagen">De school leren kennen</h2>
                        <p>Wil je de school leren kennen, of wil je weten hoe de opleidingen zijn? 
                        Kom dan naar onze open dagen. In het schooljaar 2018-2019 hebben we voor jullie een aantal open dagen georganiseerd.</p>
                    </div>
                    <h2 class="hopendagen">Waar en wanneer?</h2>
                    <div class="dataopendagen">
                        <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">zaterdag 17 november</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                        <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">zaterdag 26 januari</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                         <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">woensdag 28 november</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                         <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">woensdag 13 februari</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                         <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">zaterdag 15 december</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                         <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">zaterdag 23 februari</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                         <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">woensdag 16 januari</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                         <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">woensdag 13 maart</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Locatie: Hoogeveen</p>
                        </div>
                        
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
                // control login

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
