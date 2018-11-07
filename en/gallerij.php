<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
                    <div class='galleryContent'>
                        <h2>Gallerij</h2>
                        <p>On this page you can find digital content of our school</p>
                        <div class='imageContainer'>
                            <?php
                            $dirname = "../uploads/";
                            $images = glob($dirname . "*.*");

                            foreach ($images as $image) {
                                $path = $image;
                                $type = pathinfo($path, PATHINFO_EXTENSION);
                                $data = file_get_contents($path);
                                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                                echo '<a class="imageClickableLink" href="' . $base64 . '"><img class="imageClickable" src="' . $base64 . '" /></a>';
                            }
                            ?>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div class='uploadImageSection'>
                        <?php
                        if (isset($_SESSION["authenticated"])) {
                            if ($_SESSION["authenticated"]) {
                                echo '<form action="upload_image_gallery.php" method="post" enctype="multipart/form-data">'
                                . '         <p>Select image to upload:'
                                . '             <input type="file" name="fileToUpload" id="fileToUpload">'
                                . '             <input type="submit" value="Upload Image" name="submit">'
                                . '         </p>'
                                . '   </form>';
                            } else {
                                echo 'You have to be signed in to upload images <a id="signinBtn" href="login.php">Sign In</a>';
                            }
                        } else {
                            $_SESSION["authenticated"] = false;
                            if ($_SESSION["authenticated"]) {
                                echo '<form action="upload_image_gallery.php" method="post" enctype="multipart/form-data">'
                                . '         <p>Select image to upload:'
                                . '             <input type="file" name="fileToUpload" id="fileToUpload">'
                                . '             <input type="submit" value="Upload Image" name="submit">'
                                . '         </p>'
                                . '   </form>';
                            } else {
                                echo 'You have to be signed in to upload images <a id="signinBtn" href="login.php">Sign In</a>';
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
                            <li><a href="opendagen.php">Open dagen</a></li>
                            <li><a href="evenementen.php">Evenementen</a></li>
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
                <a href="../nl/gallerij.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="../en/gallerij.php">
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