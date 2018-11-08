<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
		<link rel="icon" href="../image/logo.png" head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" type="text/css" href="nieuwsbrief.css">
        <title>T' Veenhoog</title>
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
                        <h1 id="h1Titlestyle">Technische Hogeschool 'T Veenhoog</h1>
                    </div>
                </div>
                <div class="mainContent">
                    <!-- Title -->
                    <div id="mainContentTitle">
                        <h2>Latest news</h2>
                    </div>

                    <!-- news automotive -->
                    <div id="newsAutomotive">
                        <div id="automotiveBox">
                            <h3>Automotive&GT;</h3>
                        </div>

                        <?php
                        $autoRss = new DOMDocument();
                        $autoRss->load('http://feeds.feedburner.com/autonews/BreakingNews');

                        $autoFeed = array();

                        foreach ($autoRss->getElementsByTagName('item') as $node) {
                            $item = array(
                                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                            );
                            array_push($autoFeed, $item);
                        }

                        function autoNewsLoop($autoFeed, $reach) {
                            for ($x = 0; $x < $reach; $x++) {
                                $title = str_replace(' & ', ' &amp: ', $autoFeed[$x]['title']);
                                $link = $autoFeed[$x]['link'];
                                $description = $autoFeed[$x]['desc'];
                                $date = date('1 F d, Y', strtotime($autoFeed[$x]['date']));

                                echo'<p><strong><a href="' . $link . '" title="' . $title . '">' . $title . '</a></strong<br />';
                                echo'<small><em>Posted on ' . $date . '</em></small></p>';
                                echo'<p>' . $description . '</p>';
                            }
                        }

                        if (isset($_POST['allAutoNews'])) {
                            // Print all news!
                            autoNewsLoop($autoFeed, 5);
                        } else {
                            // Print single news item.
                            autoNewsLoop($autoFeed, 1);
                        }

                        if (!isset($_POST['allAutoNews'])) {
                            echo '<form action="" method="POST">
                                    <input class="readMoreButton" name="allAutoNews" type="submit" value="Read more"/>
                                </form>';
                        }
                        ?>
                    </div>

                    <!-- news mechatronica -->
                    <div id="newsMechatronica">
                        <div id="mechatronicaBox">
                            <h3>Mechatronics&GT;</h3>
                        </div>
                        <div id="feedMecha">
                            <?php
                                $mechaRss = new DOMDocument();
                                $mechaRss->load('https://www.utwente.nl/en/news.rss');

                                $mechaFeed = array();

                                foreach ($mechaRss->getElementsByTagName('item') as $node) {
                                    $item = array(
                                        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                                        'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                                        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                                    );
                                    array_push($mechaFeed, $item);
                                }

                                function mechaNewsLoop($mechaFeed, $reach) {
                                    for ($x = 0; $x < $reach; $x++) {
                                        $title = str_replace(' & ', ' &amp: ', $mechaFeed[$x]['title']);
                                        $link = $mechaFeed[$x]['link'];
                                        $description = $mechaFeed[$x]['desc'];

                                        echo'<p><strong><a href="' . $link . '" title="' . $title . '">' . $title . '</a></strong<br />';
                                        echo'<p>' . $description . '</p>';
                                    }
                                }

                                if (isset($_POST['allMechaNews'])) {
                                    // Print all news items!
                                    mechaNewsLoop($mechaFeed, 5);
                                } else {
                                    // Print single news item.
                                    mechaNewsLoop($mechaFeed, 1);
                                }

                                if (!isset($_POST['allMechaNews'])) {
                                    echo '<form action="" method="POST">
                                        <input class="readMoreButton" name="allMechaNews" type="submit" value="Read more"/>
                                    </form>';
                                }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="mainFooter">
                    <div class="navFooterLeft">
                        <ul>
                            <li class="footerTopElement">T' Veenhoog:</li>
                            <li><a href="opleidingen.php">Courses</a></li>
                            <li><a href="inschrijven.php">Enroll course</a></li>
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
                <a href="../nl/nieuwsbrief.php">
                    <div class="languageDutch">	
                        <h3>Nederlands</h3>
                    </div>
                </a>
                <a href="nieuwsbrief.php">
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
        </a>
    </div>
</div>
</body>
</html>