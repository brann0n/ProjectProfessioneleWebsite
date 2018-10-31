<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="evenementen.css">
        <title>T' Veenhoog</title>
    </head>
    <body>
        <div class="centering">
            <div class="logo">
                <a href="index.php"><img src="image/logo.png" alt="logo" /></a>
            </div>


            <div class="mainBody">

                <div class="mainHeader">
                    <div class="h2Title">
                        <h1>Technische Hogeschool 'T Veenhoog</h1>
                    </div>
                   
                </div>
                <div class="mainContent">
                    <div class="h2Title">
                        <h2>Evenementen</h2>
                        <p>
                        Er zijn een aantal evenementen georganiseerd waar iedereen aan mee mag doen, hieronder staan een aantal evenementen. Je kan hier gewoon opkomen dagen, er hoeft verder geen betaling gedaan te worden en je hoeft je niet op te geven.
                    </p>
                    <?php
                    $muzikanten = array("1e Opendag" => "19.00-23.00", "2e Opendag" => "19.30-23.00", "Presentatie automotive" => "20.00-21.00", "Presentatie mechatronica" => "20.00-21.00", "Vragen tijd" => "18.00-22.00",);
                    $Dag = 7;
                   
                    echo '<table border="1|0" class="borderTable">
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
                        </tr>';
                 
                    foreach ($muzikanten as $key2 => $value2) {
                       echo '<tr><td>' . $key2 . '</td><td>' . $Dag . ' Juni 2019</td><td>' . $value2 . '</td></tr>';
                       $Dag++;
                        }
                        ?>
                    </table>
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
                            <li><a href="">(text)</a></li>
                            <li><a href="">(text)</a></li>
                            <li><a href="">(text)</a></li>
                            <li><a href="">(text)</a></li>
                        </ul>
                    </div>
                    <div class="navFooterRight">
                        <ul>
                            <li class="footerTopElementSocial">Volgs ons:</li>
                            <li><a href="https://www.facebook.com/"><img src="image/facebook.png" alt="Facebook"/></a>
                                <a href="https://twitter.com/"><img src="image/twitter.png" alt="Twitter"/></a>
                                <a href="https://youtube.com/"><img src="image/youtube.png" alt="Youtube"/></a>
                            </li>
                            <li class="socialStyle">
                                <a href="https://www.linkedin.com/"><img src="image/linkedin.png" alt="Linkedin"/></a>
                                <a href="https://instagram.com/"><img src="image/instagram.png" alt="Instagram"/></a>
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
                <a href="login.php">
                    <div class="loginRight">	
                        <h3>Login</h3>
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>
