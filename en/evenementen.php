<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Opendagen</title>
        <link rel="stylesheet" type="text/css" href="../nl/evenementen.css">
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
                        <p>There are a number of events that everyone can participate in, below are a number of events that take place in the start period of the year. You can just walk in, there is no further payment to be made and you do not have to sign in, on the other hand, the food and drinks are not arranged (exexpt at the party's, drinks and food can be bought at the bar).
                        </p></div>
                    <?php
                    $evenementen = array("Intro-day 1" => "09.00-14.00", "Intro-day 2" => "10.30-14.00", "Intro final party" => "20.00-24.00", "Sports day" => "10.00-17.00", "Comprehensive automotive presentation" => "18.00-22.00", "Comprehensive automotive presentation" => "18.00-22.00");
                    $Dag = 7;
                    $maand = "September";
                    ?>
                    <div class="distance"><table border="1|0" class="borderTable">
                            <tr>
                                <th>
                                    Event
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Time
                                </th>
                            </tr>
                            <?php
                            foreach ($evenementen as $key2 => $value2) {
                                if ($key2 == 'Sports day') {
                                    $Dag = 15;
                                } else if ($key2 == 'Comprehensive automotive presentation') {
                                    $Dag = 2;
                                    $maand = "October";
                                }
                                echo '<tr><td>' . $key2 . '</td><td>' . $Dag . ' ' . $maand . ' 2019</td><td>' . $value2 . '</td></tr>';
                                $Dag++;
                            }
                            ?>
                        </table></div>
                    <div class="distance">
                        <p>For more information, you can send us a message on the contact page. </p>
                    </div>
                    <div class="distance">
                        <img src="../image/hoorcollege.jpg" alt="hoorcollege" class="College">
                    </div>
                </div>
                <div class="mainFooter">
                    <div class="navFooterLeft">
                        <ul>
                            <li class="footerTopElement">T' Veenhoog:</li>
                            <li><a href="opleidingen.php">Cources</a></li>
                            <li><a href="inschrijven.php">enroll</a></li>
                            <li><a href="opendagen.php">Open doors days</a></li>
                            <li><a href="evenementen.php">Events</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="navFooterCenter">
                        <ul>
                            <li class="footerTopElement">our partners:</li>
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
