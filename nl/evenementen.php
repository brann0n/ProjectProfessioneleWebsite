<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Evenementen</title>
        <link rel="stylesheet" type="text/css" href="evenementen.css">
        <link rel="stylesheet" type="text/css" href="../style.css">
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
                    <div class="h2Title">

                        <h2>Evenementen</h2></div><div class="distance">
                        <p>
                            Er zijn een aantal evenementen georganiseerd waar iedereen aan mee mag doen, hieronder staan een aantal evenementen die in de start periode van het jaar plaats vinden. Je kan hier gewoon opkomen dagen, er hoeft verder geen betaling gedaan te worden en je hoeft je niet op te geven, daarentegen is het eten en drinken niet geregeld(m.u.v. feesten hier kan eten en drinken bij de bar gekocht worden).
                        </p></div>
                    <?php
                    $evenementen = array("Intro-dag 1" => "09.00-14.00", "Intro-dag 2" => "10.30-14.00", "Intro eindfeest" => "20.00-24.00", "Sportdag" => "10.00-17.00", "Uitgebreide presentatie automotive" => "18.00-22.00", "Uitgebreide presentatie mechatronica" => "18.00-22.00");
                    $Dag = 7;
                    $maand = "September";
                    ?>
                    <div class="distance"><table border="1|0" class="borderTable">
                            <tr>
                                <th>
                                    Evenement
                                </th>
                                <th>
                                    Datum
                                </th>
                                <th>
                                    Tijd
                                </th>
                            </tr>
                            <?php
                            foreach ($evenementen as $key2 => $value2) {
                                if ($key2 == 'Sportdag') {
                                    $Dag = 15;
                                } else if ($key2 == 'Uitgebreide presentatie automotive') {
                                    $Dag = 2;
                                    $maand = "Oktober";
                                }
                                echo '<tr><td>' . $key2 . '</td><td>' . $Dag . ' ' . $maand . ' 2019</td><td>' . $value2 . '</td></tr>';
                                $Dag++;
                            }
                            ?>
                        </table></div>
                    <div class="distance">
                        <p>Voor meer informatie kun je via de contact pagina een bericht sturen. </p>
                    </div>
                    <div class="distance">
                        <img src="../image/hoorcollege.jpg" alt="hoorcollege" class="College">
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
                <a href="../nl/evenementen.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/evenementen.php">
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
