<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../nl/mechatronica.css">
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
                        <h1>Registration Mechatronics</h1>
                    </div>
                </div>
                <div class="mainContent">
                    <div>
                        <p>You want to enroll for the <b> Mechatronics (full-time, Bachelor) </b> program. We are happy to help you through the procedure. </p>                        <p>Met je verzoek tot inschrijving zet je de eerste stap richting jouw vervolgstudie: je geeft aan dat je een opleiding bij NHL Stenden Hogeschool wilt volgen. Als je wilt, kun je je inschrijving nog tot de uiterste inschrijfdatum aanpassen. 
                             <p> With your application for enrollment you take the first step towards your follow-up study: you indicate that you want to follow a course at NHL Stenden University. If you wish, you can still change your registration until the registration deadline.
                         </p>
                            <h2>Check first</h2>
                            <ul >
                                <li>
                                    <p>&#10004;Do you meet all admission requirements? Do you have the required diploma and profile when you start the study? Do you still have to take an entrance exam? Check it for security. </p>

                                </li>
                                <li>
                                    <p>&#10004;Do you have a DigiD? <u><a href="https://digid.nl/aanvragen">Make a request right away</a></u></p>
                                </li>
                            </ul>
                    </div>   
                    <div>
                        <h2>Registration works like this</h2>
                        <p>You submit your application for enrollment <u><a href="https://app.studielink.nl/front-office/?brinCode=31FR#52">on Studielink</a></u>, the registration portal of the Ministry of Education. You need DigiD for this. Follow the steps:</p>

                        <ol>
                            <?php
                            $tellen = 1;
                            $stappen = array("Create an account. You will receive a personal Studielink page.", "Enter your course details here. For HAVO and VWO pupils, the sub-heading 'Courses' appears here. Enter your course package here.", "Choose 'Add My Training / New Registration':", "Select the course of your choice. You will find the study under the official name <b>Mechatronics.</b>", "Confirm the study", "Under the Inflow moment heading, indicate when you want to start the study. Confirm this.", "Confirm your registration.", "Enter your payment details and confirm. You can also do this later, if only before your registration.", "Follow the status of your registration on your personal Studielink page.");
                            foreach ($stappen as $stap) {
                                echo '<p>' . $tellen . '. ' . $stap . '</p>';
                                $tellen++;
                            }
                            ?>
                        </ol>
                    </div>
                    <div class="inschrijvenButton">	
                        <a href="https://studielink.nl/"><h3>Registrate on Studielink</h3></a>
                    </div>





                </div>
                <div class="mainFooter">
                    <div class="navFooterLeft">
                        <ul>
                            <li class="footerTopElement">T' Veenhoog:</li>
                            <li><a href="opleidingen.php">Courses</a></li>
                            <li><a href="inschrijven.php">enroll</a></li>
                            <li><a href="opendagen.php">Open doors days</a></li>
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
                <a href="../nl/inschrijvenMechatronica.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/inschrijvenMechatronica.php">
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