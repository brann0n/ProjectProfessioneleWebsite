<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
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
                    <h1 class="hopendagentwee">Open day</h1>
                    <div class="voorwoord">
                        <h2 class="hopendagen">Get to know the school better</h2>
                        <p>Do you want to know the school better, or do you want get to know the educations better? 
                        Just come to our open houses. This school year, 2018-2019, we organized a few open days for you.</p>
                    </div>
                    <h2 class="hopendagen">Where and when?</h2>
                    <div class="dataopendagen">
                        <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Saturday 17 November</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                        <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Saturday 26 January</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                         <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Wednesday 28 November</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                         <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Wednesday 13 February</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                         <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Saturday 15 December</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                         <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Saturday 23 February</p>
                            <p class="textdatum">10:00-17:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                         <div class="datumsleft">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Wednesday 16 January</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                         <div class="datumsright">
                            <img class="imgcalander" src="../image/calendartwee.png" alt="calendar">
                            <p class="textdatum">Wednesday 13 March</p>
                            <p class="textdatum">14:00-21:00</p>
                            <p class="textdatumtwee">Location: Hoogeveen</p>
                        </div>
                        
                    </div>
                </div>
                <div class="mainFooter">
                    <div class="navFooterLeft">
                        <ul>
                            <li class="footerTopElement">T' Veenhoog:</li>
                            <li><a href="opleidingen.php">Courses</a></li>
                            <li><a href="opendagen.php">Open days</a></li>
                            <li><a href="evenementen.php">Events</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="navFooterCenter">
                        <ul>
                            <li class="footerTopElement">Our partners:</li>
                            <li><a href="https://www.nhlstenden.com/">NHL Stenden</a></li>
                            <li><a href="https://www.drenthecollege.nl/">Drenthe College</a></li>
                        </ul>
                    </div>
                    <div class="navFooterRight">
                        <ul>
                            <li class="footerTopElementSocial">Follow us:</li>
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
                <a href="../nl/opendagen.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/opendagen.php">
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
