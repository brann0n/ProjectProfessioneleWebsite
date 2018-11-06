<?php
session_start();
//init vars
$username = "";
$password = "";
$usersArray = [
    //user    pass   permlvl
    ["admin", "admin1234", "0"],
    ["developer", "@_d897", "1"],
    ["user", "!49_09", "2"]
];
$errorMessage = "Vul hier je gegevens in";

//check if the submit button was pressed and then fill the variables.
if (isset($_POST["submit"])) {
    $password = filter_input(INPUT_POST, 'password');
    $username = filter_input(INPUT_POST, 'username');

    //check if the username is found in the array, do this with a foreach.
    foreach ($usersArray as $user) {
        if ($user[0] == $username) {
            //now check the password.
            if ($user[1] == $password) {
                //user is signed in.
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                $_SESSION["authenticated"] = true;
                $errorMessage = "U bent ingelogd. <a href='index.php'>naar home page</a>";
                header("Location: index.php");
                break;
            } else {
                //password is wrong.
                $_SESSION["authenticated"] = false;
                $errorMessage = "Wrong password";
                break;
            }
        } else {
            //username is not known in the array.
            $errorMessage = "Username does not exist.";
            $_SESSION["authenticated"] = false;
        }
    }
}
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
                    <!--This is the signin form-->
                    <div class="loginPageContent">
                        <?php
                        if (isset($_SESSION["authenticated"])) {
                            if (!$_SESSION["authenticated"]) {
                                echo "<form action=\"login.php\" method=\"POST\">";
                                echo "<label id=\"errorMessage\">$errorMessage</label>";
                                echo "<input type=\"text\" placeholder=\"Uw gebruikersnaam\" id=\"username\" name=\"username\" >";
                                echo "<input type=\"password\" placeholder=\"Uw wachtwoord\" id=\"password\" name=\"password\" >";
                                echo "<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Inloggen\">";
                                echo "</form>";
                            } else {
                                echo "<h2>Je bent al ingelogd.</h2> <a href='index.php'>ga terug naar home</a>";
                                echo "<br> Of klik <a href=\"signout.php\">hier</a> om uit te loggen.";
                            }
                        } else {
                            $_SESSION["authenticated"] = false;
                            if (!$_SESSION["authenticated"]) {
                                echo "<form action=\"login.php\" method=\"POST\">";
                                echo "<label id=\"errorMessage\">$errorMessage</label>";
                                echo "<input type=\"text\" placeholder=\"Uw gebruikersnaam\" id=\"username\" name=\"username\" >";
                                echo "<input type=\"password\" placeholder=\"Uw wachtwoord\" id=\"password\" name=\"password\" >";
                                echo "<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Inloggen\">";
                                echo "</form>";
                            } else {
                                echo "<h2>Je bent al ingelogd.</h2> <a href='index.php'>ga terug naar home</a>";
                                echo "<br> Of klik <a href=\"signout.php\">hier</a> om uit te loggen.";
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
            <div class="rightBlok">
                <a href="login.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/login.php">
                    <div class="languageEnglish">
                        <h3>English</h3>
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>
