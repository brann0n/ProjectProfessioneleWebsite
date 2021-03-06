<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="../image/logo.png">
        <meta charset="UTF-8">
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
                        <h1>Technische Hogeschool 'T Veenhoog</h1>
                    </div>
                </div>
                <div class="mainopleiding">
                    <div class="h2title"><h2>Here stands everything about our courses</h2></div>
                    <div class="box-opleiding">
                        <div class="h2subtitle">
                            <h2>Automotive</h2>
                        </div>
                        <p>
                            The world of cars and technology is in one of its most exciting phases ever.
                            Our future mobility requires solutions that are revolutionary.
                        </p>
                        <p>
                            Just think about the finiteness of fossil fuels and the emission of harmful substances.
                            In that future we learn to deal more creatively with raw materials, we learn to look differently at the safety of every road user and we think of solutions that reduce traffic congestion.
                            The good news is that the automotive world is already experimenting at top speed.
                            With smart applications of ICT, electronics and lightweight construction, but also by the use of electric or hybrid drives.
                        </p>
                        <p>
                            The hero's in this story are the engineers from 'T Veenhoog.
                            It is mainly the problem solvers who look further and understand that every technical solution
                            fits into a complex picture in which mobility must be even smarter, cleaner, cheaper and more efficient.
                            We call that 'complete vehicle thinking'. You learn that in 'T Veenhoog. Stap in en Drive your Future.
                        </p>
                        <a href="inschrijvenAutomotive.php">
                            <div class="inschrijvenButton">	
                                <h3>Apply for Automotive</h3>
                            </div>
                        </a>
                    </div>
                    <div class="box-opleiding">
                        <div class="h2subtitle"><h2>Mechatronica</h2></div>
                        <br>
                        <p>
                            Mechatronics is a multidisciplinary combination of electrical engineering, mechanical engineering and technical informatics.
                            In this course you are a logical thinker and a real doer.
                            You consider how to make devices safer or more user-friendly and you design them.
                            Think of an automated car wash, a smart production robot, or an advanced wheelchair or replacement robotic arm within the healthcare sector.
                            Modern humanity can no longer do without mechatronics and there is a great need for well-trained mechatronics engineers.
                            At 'T Veenhoog, we get to know the theory and practice and we train you to become a specialist in the systematic design of, among other things, control techniques for robot-controlled products and machines.
                        </p>
                        <a href="inschrijvenMechatronica.php">
                            <div class="inschrijvenButton">	
                                <h3>Apply for Mechatronics</h3>
                            </div>
                        </a>    
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
                <a href="../nl/opleidingen.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="opleidingen.php">
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